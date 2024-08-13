@extends('admin.master')
@section('content')

        <main role="main" class="container">

        <div class="starter-template">
            <h1>لیست خدمات پانل مدیریتی</h1>
            <div class="row">
                <div class="col-12 my-2">
                    <a href="{{ route('admin.register.servant') }}" class="btn btn-success">ثبت نام خادم موکب</a>
                </div>
                <div class="col-12 my-2">
                    <a href="{{ route('admin.register.visitor') }}" class="btn btn-success">ثبت نام زائر</a>
                </div>
                <div class="col-12 my-2">
                    <a href="{{ route('admin.visitor.list') }}" class="btn btn-success">لیست زائر</a>
                </div>
                <div class="col-12 my-2">
                    <a href="{{ route('admin.servant.list') }}" class="btn btn-success">لیست خادمین</a>
                </div>
            </div>
        </div>

        </main><!-- /.container -->


@endsection