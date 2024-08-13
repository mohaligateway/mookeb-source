FROM php:8.2-fpm

# Copy composer.lock and composer.json
COPY composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update -o Acquire::Check-Valid-Until=false && apt-get -o Acquire::Check-Valid-Until=false install -y \
    libwebp-dev \
    build-essential \
    libonig-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libpng-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev \
    cron \
    supervisor \
    systemd \
    libxml2-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install soap

# Install extensions
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
        
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install pdo_mysql zip exif pcntl

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
RUN chown -R www:www /var/www

#directory for log file supervisor
RUN mkdir /var/log/supervisor/php-fpm && \
    mkdir /var/log/supervisor/cron && \
    mkdir /var/log/supervisor/laravel

# Copy existing application directory permissions
RUN chown -R www:www /var/log/supervisor

# Copy laravel-cron file to the cron.d directory
COPY ./cron /etc/cron.d/cronjob

# Give execution rights on the cron job
RUN chmod 0644 /etc/cron.d/cronjob/laravel-cron
RUN touch /home/www/test.log

# Apply cron job
RUN crontab /etc/cron.d/cronjob/laravel-cron

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000

CMD ["supervisord", "-c", "/etc/supervisor/conf.d/laravel-worker.conf", "-n"]
