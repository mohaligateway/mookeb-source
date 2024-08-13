@extends('general.master')
@section('content')

    <main role="main" class="inner cover">
        <h1 class="cover-heading">ثبت نام زائرین اربعین ۱۴۰۳</h1>
        <p class="lead">جهت ورود به سامانه ثبت نام زائرین اربعین حسینی موکب هیئت کربلا بر روی دکمه زیر کلیک کنید.</p>
        <p class="lead">
          @auth
            <a href="/dashboard" class="btn btn-lg btn-secondary">پانل مدیریت</a>
          @endauth
          @guest
            <a href="/login" class="btn btn-lg btn-secondary">ورود به سامانه</a>
          @endguest
        </p>
  </main>

@endsection
