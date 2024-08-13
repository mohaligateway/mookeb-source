
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>موکب هیئت کربلا</title>

    <link href="/css/general/bootstrap.min.css" rel="stylesheet">
    <link href="/css/general/cover.css" rel="stylesheet">
    @livewireStyles

  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand"> موکب هیئت کربلا</h3>
          <nav class="nav nav-masthead justify-content-center">

            @auth
                <a class="nav-link" href="/dashboard">پانل مدیریت</a>
            @endauth

            @guest
                <a class="nav-link" href="/login">ورود</a>
            @endguest

            <a class="nav-link active" href="/">خانه</a>
          </nav>
        </div>
      </header>
