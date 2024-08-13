<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>ناحیه مدیریتی</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <link href="/css/admin/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin/starter.css" rel="stylesheet">
    @livewireStyles

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">صفحه اصلی</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if(url()->full() === route('admin.dashboard')) active @endif">
                <a class="nav-link" href="/dashboard">پیشخوان<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @if(url()->full() === route('admin.register.servant')) active @endif">
                <a class="nav-link" href="{{ route('admin.register.servant') }}">ثبت نام خادم موکب</a>
            </li>
            <li class="nav-item @if(url()->full() === route('admin.register.visitor')) active @endif">
                <a class="nav-link" href="{{ route('admin.register.visitor') }}">ثبت نام زائر</a>
            </li>
            <li class="nav-item @if(url()->full() === route('admin.visitor.list')) active @endif">
                <a class="nav-link" href="{{ route('admin.visitor.list') }}">لیست زائر</a>
            </li>
            <li class="nav-item @if(url()->full() === route('admin.servant.list')) active @endif">
                <a class="nav-link" href="{{ route('admin.servant.list') }}">لیست خادمین</a>
            </li>
        </ul>
        <form action="">
            @csrf
            <button type="submit"></button>
        </form>
    </div>
    </nav>