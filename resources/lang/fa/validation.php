<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"         => ":attribute باید پذیرفته شده باشد.",
    "active_url"       => "آدرس :attribute معتبر نیست",
    "after"            => ":attribute باید تاریخی بعد از :date باشد.",
    "alpha"            => ":attribute باید شامل حروف الفبا باشد.",
    "alpha_dash"       => ":attribute باید شامل حروف الفبا و عدد و خظ تیره(-) باشد.",
    "alpha_num"        => ":attribute باید شامل حروف الفبا و عدد باشد.",
    "array"            => ":attribute باید شامل آرایه باشد.",
    "before"           => ":attribute باید تاریخی قبل از :date باشد.",
    "between"          => array(
        "numeric" => ":attribute باید بین :min و :max باشد.",
        "file"    => ":attribute باید بین :min و :max کیلوبایت باشد.",
        "string"  => ":attribute باید بین :min و :max کاراکتر باشد.",
        "array"   => ":attribute باید بین :min و :max آیتم باشد.",
    ),
    "boolean"          => "The :attribute field must be true or false",
    'dimensions' => 'ابعاد :attribute با شرایط سامانه سازگار نیست.',

    "confirmed"        => ":attribute با تاییدیه مطابقت ندارد.",
    "date"             => ":attribute یک تاریخ معتبر نیست.",
    "date_format"      => ":attribute با الگوی :format مطاقبت ندارد.",
    "different"        => ":attribute و :other باید متفاوت باشند.",
    "digits"           => ":attribute باید :digits رقم باشد.",
    "digits_between"   => ":attribute باید بین :min و :max رقم باشد.",
    "email"            => "قسمت :attribute معتبر نیست.",
    "exists"           => ":attribute انتخاب شده، معتبر نیست.",
    "image"            => ":attribute باید تصویر باشد.",
    "in"               => ":attribute انتخاب شده، معتبر نیست.",
    "integer"          => ":attribute باید نوع داده ای عددی (integer) باشد.",
    "ip"               => ":attribute باید IP آدرس معتبر باشد.",
    "max"              => array(
        "numeric" => ":attribute نباید بزرگتر از :max باشد.",
        "file"    => ":attribute نباید بزرگتر از :max کیلوبایت باشد.",
        "string"  => ":attribute نباید بیشتر از :max کاراکتر باشد.",
        "array"   => ":attribute نباید بیشتر از :max آیتم باشد.",
    ),
    "mimes"            => ":attribute باید یکی از قسمت های :values باشد.",
    "min"              => array(
        "numeric" => ":attribute نباید کوچکتر از :min باشد.",
        "file"    => ":attribute نباید کوچکتر از :min کیلوبایت باشد.",
        "string"  => ":attribute نباید کمتر از :min کاراکتر باشد.",
        "array"   => ":attribute نباید کمتر از :min آیتم باشد.",
    ),
    "not_in"           => ":attribute انتخاب شده، معتبر نیست.",
    "numeric"          => ":attribute باید شامل عدد باشد.",
    "regex"            => ":attribute یک قالب معتبر نیست",
    "required"         => "قسمت :attribute الزامی است",
    "required_if"      => "قسمت :attribute هنگامی که :other برابر با :value است، الزامیست.",
    "required_with"    => ":attribute الزامی است زمانی که :values موجود است.",
    "required_with_all"=> ":attribute الزامی است زمانی که :values موجود است.",
    "required_without" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "required_without_all" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "same"             => ":attribute و :other باید مانند هم باشند.",
    "size"             => array(
        "numeric" => ":attribute باید برابر با :size باشد.",
        "file"    => ":attribute باید برابر با :size کیلوبایت باشد.",
        "string"  => ":attribute باید برابر با :size کاراکتر باشد.",
        "array"   => ":attribute باسد شامل :size آیتم باشد.",
    ),
    "timezone"         => "The :attribute must be a valid zone.",
    "unique"           => "این :attribute قبلا در سامانه ثبت  شده است.",
    "url"              => "قسمت آدرس :attribute اشتباه است.",
    'captcha' => ':attribute مطابقت ندارد',
    "body" => ':attribute عنوان',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => array(
        "firstname" => "نام",
        "lastname" => "نام خانوادگی",
        "username" => "نام کاربری",
        "email" => "پست الکترونیکی",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "password" => "رمز عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "city" => "شهرستان",
        "country" => "کشور",
        "address" => "نشانی",
        "phone" => "تلفن",
        "mobile" => "تلفن همراه",
        "age" => "سن",
        "sex" => "جنسیت",
        "gender" => "جنسیت",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "سرتیتر",
        "text" => "متن",
        "content" => "محتوا",
        "description" => "توضیحات",
        "passport_no" => "شماره پاسپورت",
        "birth_location" => "محل تولد",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "available" => "موجود",
        "size" => "اندازه",
        "login" => "ورود",
        "body" => "متن",
        "description" => "خلاصه مقاله",
        "category" => "دسته بندی",
        "imagesUrl" => "تصویر مقاله",
        "name" => "نام",
        "label" => "برچسب",
        "g-recaptcha-response" => "قسمت امنیتی",
        "slug" => "نامک",
        "study_duration" => "مدت زمان مطالعه",
        "images" => "عکس",
        "captcha" => "کد امنیتی",
        "seo_description" => "متن سئو",
        "invoice.0.tags" => "برچسب",
        "invoice.0.FAQ-question" => "سوال متداول",
        "invoice.0.FAQ-answer" => "جواب متداول",
        "invoice.0.seo_keywords" => "کلمات کلیدی",
        "price" => "هزینه",
        "target" => "اهداف",
        "semi_description" => "خلاصه متن",
        "website" => "وب سایت",
        "state" => "استان",
        "emailMobile" => "ایمیل یا تلفن همراه",
        'recaptcha' => "ریکپچا",
        "header" => "عنوان",
        "description" => "خلاصه",
        "tags" => "برچسب",
        "seo_keywords" => "کلمات کلیدی",
        "alt" => "مشخصه عکس",
        "photo" => "عکس",
        'categories' => "دسته بندی",
        'main_title' => "سرتیتر",
        "main_description" => "خلاصه متن",
        "canonical" => "لینک کانونی",
        "role" => "نقش",
        "is_active" => "فعالسازی",
        "is_staff" => "نقش کارمند",
        "profile_img" => "عکس پرسنلی",
        "signature" => "تصویر امضا",
        "father_name" => "نام پدر",
        "national_code" => "کد ملی",
        "post_code" => "کد پستی",
        "profile_image" => "عکس پرسنلی",
        "province_id" => "انتخاب شهرستان",
        "state_id" => "انتخاب استان",
        "old_password" => 'رمز عبور فعلی',
        'level' => 'حیطه فعالیت تشکل',
        'level_training' => 'حیطه فعالیت دوره',
        'degree_level' => 'مدرک تحصیلی',
        "duration" => "ساعت دوره",
        'field_id' => 'عرصه',
        'branch_id' => 'شاخه',
        'message' => 'متن درخواست',
        'section' => 'ارسال به',
        "social_link" => "لینک شبکه اجتماعی", 
        'method_forgot' => 'روش بازیابی',
        'signiture_img' => 'تصویر امضا',
        'history' => 'سابقه فعالیت',
        'timing' => 'برنامه',
        'introducer' => 'معرف',
        'code' => 'کد',
        'national_code_search' => 'ثبت کد ملی',
        'radio_province' => 'نظر شهرستان',
        'radio_state' => 'نظر استان',
        'radio_center' => 'نظر مرکز',
        'deny' => 'رد',
        'body_province' => 'دلیل رد شهرستان',
        'body_state' => 'دلیل رد استان',
        'body_center' => 'دلیل رد مرکز',
        "marital" => "وضعیت تاهل",
        'social_mobile' => "تلفن همراه شبکه های اجتماعی",
        'profileImage' => 'عکس پرسنلی',
        'accept_or_deny_organization' => 'تاییده تشکل',
        'captcha_sms' => 'کد امنیتی',
        'captcha_password' => 'کد امنیتی',
        'mobile_sms' => 'تلفن همراه',
        'mobile_password' => 'تلفن همراه',
        'introduction2' => 'معرفی نامه دوم',
        'introduction1' => 'معرفی نامه اول',
        'noBadBackground' => 'گواهی عدم سوء پیشینه',
        'branchPostalCode' => 'کدپستی شعبه',
        'branchAddress' => 'آدرس شعبه',
        'branchSelectedState' => 'استان',
        'branchSelectedProvince' => 'شهر',
        'grade' => 'مدرک تحصیلی',
        'educationalSectionName' => 'نام واحد آموزشی',
        'educationField' => 'رشته تحصیلی',
        'orientation' => 'گرایش',
        'educationalDocumentFile' => 'فایل مدرک تحصیلی',
        'planType' => 'نوع برنامه',
        'purpose' => 'هدف',
        'action' => 'برنامه',
        'quantity' => 'کمیت',
        'unit' => 'واحد',
        'executionTime' => 'زمان اجرا',
        'postalCode' => 'کدپستی',
        'field' => 'زمینه',
        'subject' => 'موضوع',
        'receiver' => "گیرنده",
        'logo' => "لوگو",
        'headerImage' => "سربرگ",
        'statute' => "اساسنامه",
        'report' => "گزارش",
        'endExecutionTime' => "زمان اجرا(پایان)",
    ),
);
