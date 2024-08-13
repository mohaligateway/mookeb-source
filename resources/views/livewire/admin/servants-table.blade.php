<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="text-right text-danger">
                <h3>لیست خادمین</h3>
                <hr/>
            </div>

            <div class="w-100 my-2">
                <div class="col-md-3">
        
                    <form>
                        <input type="text" id="search" wire:model.debounce.500ms="filters.search" class="form-control" placeholder="جستجو ...">
                    </form>
    
                </div>
            </div>

            <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>کد ملی</th>
                        <th>موبایل</th>
                        <th>جنسیت</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($objects as $key => $item)
                        <tr>
                            <td>{{ $item->firstname }}</td>
                            <td>{{ $item->lastname }}</td>
                            <td style="font-family: vazir-fd">{{ $item->national_code }}</td>
                            <td style="font-family: vazir-fd">{{ $item->mobile }}</td>
                            <td>{{ $item->gender }}</td>
                            <td></td>
                        </tr>
                    @empty
    
                        empty
    
                    @endforelse
                
                </tbody>
                <tfoot>
                    <tr>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>کد ملی</th>
                        <th>موبایل</th>
                        <th>جنسیت</th>
                        <th>عملیات</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>