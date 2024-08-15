<div class="container-fluid">

    <div class="modal fade modal-danger text-left" id="visitor_modal" tabindex="-1" aria-labelledby="delete" aria-hidden="true" wire:ignore>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel120">{{ __('locale.delete') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if(!is_null($visitorId))
                        <div>
                            @foreach(json_decode(App\Models\Visitor::find($visitorId)->exited_at) as $key => $item)
                                <div>
                                    <span>{{ jdate($item) }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
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

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>کد ملی</th>
                            <th>موبایل</th>
                            <th>اسکان</th>
                            <th>استراحتگاه</th>
                            <th>تاریخ خروج</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($objects as $key => $item)
                            @php
                                if(is_null($item->leaved_at)) {
                                    $totalAccommodation = trim(Carbon\Carbon::createFromDate($item->created_at)->ago(), ' پیش');
                                } else {
                                    $totalAccommodation = trim(Carbon\Carbon::parse($item->created_at)->diffForHumans($item->leaved_at), ' پیش از');
                                }
                            @endphp
                            <tr>
                                <td>{{ $item->firstname }}</td>
                                <td>{{ $item->lastname }}</td>
                                <td style="font-family: vazir-fd">{{ $item->national_code }}</td>
                                <td style="font-family: vazir-fd">{{ $item->mobile }}</td>
                                <td style="font-family: vazir-fd">{{ $totalAccommodation }}</td>
                                <td style="font-family: vazir-fd">{{ $item->tent_no }}</td>
                                <td style="font-family: vazir-fd; direction: ltr">{{ (!is_null($item->leaved_at)) ? jdate($item->leaved_at) : '------' }}</td>
                                <td>
                                    @if(is_null($item->leaved_at))
                                        <button class="btn btn-sm btn-danger" wire:click="leavedAt({{ $item->id }})">خروج</button>
                                    @endif
                                    <button class="btn btn-sm btn-success" wire:click="exitedAt({{ $item->id }})">تردد</button>
                                    @if(!is_null($item->exited_at))
                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#visitor_modal" wire:click="showModal({{ $item->id }})">مشاهده</button>
                                    @endif
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
                            <th>اسکان</th>
                            <th>استراحتگاه</th>
                            <th>تاریخ خروج</th>
                            <th>عملیات</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

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