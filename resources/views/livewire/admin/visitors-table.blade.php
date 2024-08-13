<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="text-right text-danger">
                <h3>لیست زائر</h3>
                <hr/>
            </div>

            <div class="row my-2">
                <div class="col-md-3">
        
                    <form>
                        <input type="text" id="search" wire:model.live="search" class="form-control" placeholder="جستجو ...">
                    </form>
    
                </div>

                <div class="col-md-3">
        
                    <form>
                        <input type="text" id="tent_no" wire:model.live="tent_no" class="form-control" placeholder="جستجوی محل استراحت ...">
                    </form>
    
                </div>

                <div class="col-md-3">
    
                    <select wire:model.live="gender" class="form-control">
                        <option value="" disabled>جنسیت ...</option>
                        <option value="زن">زن</option>
                        <option value="مرد">مرد</option>
                    </select>

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
                        <th>استراحتگاه</th>
                        <th>تاریخ خروج</th>
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
                            <td style="font-family: vazir-fd">{{ $item->tent_no }}</td>
                            <td style="font-family: vazir-fd; direction: ltr">{{ (!is_null($item->leaved_at)) ? jdate($item->leaved_at) : '------' }}</td>
                            <td>
                                <button class="btn btn-sm btn-danger @if(!is_null($item->leaved_at)) disabled @endif" @if(is_null($item->leaved_at)) wire:click="leavedAt({{ $item->id }})" @endif">ثبت خروج</button>
                                <button class="btn btn-sm btn-success" wire:click="exitedAt({{ $item->id }})">ثبت تردد</button>
                                <button class="btn btn-sm btn-primary" wire:click="exitedAt({{ $item->id }})">مشاهده ثبت ترددها</button>
                            </td>
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
                        <th>استراحتگاه</th>
                        <th>تاریخ خروج</th>
                        <th>عملیات</th>
                    </tr>
                </tfoot>
            </table>

            @if (isset($objects) && $objects->isNotEmpty())
                <div class="row">
                    <div class="col-xl-4 col-12 counter d-flex align-items-center d-flex justify-content-center justify-content-xl-start mb-2 mb-xl-0" style="font-family: vazir-fd">
                        <span>نمایش:</span>
                        <span>{{ $objects->firstItem() }}</span>
                        <span>تا</span>
                        <span>{{ $objects->lastItem() }}</span>
                        <span>از</span>
                        <span>{{ $objects->total() }}</span>
                    </div>
                </div>
            @endif

            @if ($objects->hasPages())

                {{ $objects->links('vendor.pagination') }}

            @endif

        </div>
    </div>
</div>