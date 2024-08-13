<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>ورود به سامانه - هیئت موکب کربلا</title>

    <link href="/css/general/bootstrap.min.css" rel="stylesheet">
    <link href="/css/general/auth.css" rel="stylesheet">

    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    @if (count($errors) > 0)
        <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('general.login.submit') }}" method="POST">
        @csrf
        <h1>هیئت موکب کربلا</h1>
        <label for="national_code" class="sr-only">کد ملی</label>
        <input type="number" value="{{old('national_code')}}" id="national_code" name="national_code" class="form-control" placeholder="کد ملی">
        <label for="password" class="sr-only">رمز عبور</label>
        <input type="password" id="password" class="form-control" name="password" placeholder="رمز عبور">
        <button class="btn btn-lg btn-primary btn-block" type="submit">ورود به سامانه</button>
    </form>
</body>

</html>
