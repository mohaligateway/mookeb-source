@extends('admin.master')
@section('content')
    <div class="container my-5">
        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-right">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="text-right text-danger mt-1">
            <h3>ثبت نام خادم موکب</h3>
        </div>
        <form method="POST" action="{{ route('admin.register.servant.submit') }}">
            <div class="row">
                @csrf
                <div class="col-md-6 col-12">
                    <div class="form-group text-right">
                        <label for="firstname">نام<span class="required text-danger">*</span></label>
                        <input value="{{old('firstname')}}" type="text" class="form-control" name="firstname" id="firstname">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group text-right">
                        <label for="lastname">نام خانوادگی<span class="required text-danger">*</span></label>
                        <input value="{{old('lastname')}}" type="text" class="form-control" name="lastname" id="lastname">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group text-right">
                        <label for="email">ایمیل</label>
                        <input value="{{old('email')}}" type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group text-right">
                        <label for="mobile">موبایل<span class="required text-danger">*</span></label>
                        <input value="{{old('mobile')}}" type="number" class="form-control" name="mobile" id="mobile">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group text-right">
                        <label for="national_code">کد ملی<span class="required text-danger">*</span></label>
                        <input value="{{old('national_code')}}" type="number" class="form-control" name="national_code" id="national_code">
                    </div>
                </div>
                <div class="col-12 text-left">
                    <button type="submit" class="btn btn-primary">ورود اطلاعات</button>
                </div>
            </div>
        </form>
    </div>
@endsection
