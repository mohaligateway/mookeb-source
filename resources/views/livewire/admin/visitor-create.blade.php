<form wire:submit.defer="submit">

    @if (count($errors) > 0)
        <div class = "alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-right">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group text-right">
                <label for="firstname">نام</label>
                <input type="text" class="form-control" wire:model="firstname" id="firstname">
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group text-right">
                <label for="lastname">نام خانوادگی</label>
                <input type="text" class="form-control" wire:model="lastname" id="lastname">
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group text-right">
                <label for="mobile">موبایل</label>
                <input type="number" class="form-control" wire:model.live="mobile" id="mobile">
                <small class="text-danger" style="font-family: vazir-FD">این موبایل {{ $mobileCounter }}  بار ثبت شده است</small>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group text-right">
                <label for="national_code">کد ملی</label>
                <input type="number" class="form-control" wire:model.live="national_code" id="national_code">
                <small class="text-danger" style="font-family: vazir-FD">این کد ملی {{ $nationalCodeCounter }}  بار ثبت شده است</small>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group text-right">
                <label for="passport_no">پاسپورت</label>
                <input type="text" class="form-control" wire:model.live="passport_no" id="passport_no">
                <small class="text-danger" style="font-family: vazir-FD">این پاسپورت {{ $passportNoCounter }}  بار ثبت شده است</small>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group text-right">
                <label for="city">شهر</label>
                <input type="text" class="form-control" wire:model="city" id="city">
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group text-right">
                <label for="gender">جنسیت<span class="required text-danger">*</span></label>
                <select class="form-control" wire:model="gender" id="gender">
                    <option value="">جنسیت ...</option>
                    <option value="مرد">مرد</option>
                    <option value="زن">زن</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group text-right">
                <div class="d-flex">
                    <div class="w-50">
                        <label for="tent_no">شماره چادر<span class="required text-danger">*</span></label>
                        <select class="form-control" wire:model="tent_no" id="tent_no">
                            <option value="">شماره چادر ...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="w-50">
                        <label for="row_no">ردیف چادر<span class="required text-danger">*</span></label>
                        <input type="text" class="form-control" wire:model="row_no" id="row_no">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-left">
            <button type="submit" class="btn btn-primary">ورود اطلاعات</button>
        </div>
    </div>
</form>