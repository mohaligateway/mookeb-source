<div class="container-fluid" style="direction: ltr">
    <div class="row">
        @for ($i = 1; $i <= 10; $i++)
            <div class="col-md-4 border rounded mx-2 my-2">
                <div class="text-center mt-1">
                    <h3 style="font-family: vazir-fd">چادر شماره {{ $i }}</h3>
                </div>
                <div class="row pb-2 px-2">
                    @for ($j = 1; $j <= 300; $j++)
                        @php
                            $tentIsEmpty = true;

                            $visitor = App\Models\Visitor::whereTentNo($i . '/' . $j);
                            if($visitor->exists()) {
                                foreach($visitor->get() as $item) {
                                    if(is_null($item->leaved_at)) {
                                        $tentIsEmpty = false;
                                    }
                                }
                            }
                        @endphp
                        <div class="border rounded mx-1 my-1 radius seat col {{ ($tentIsEmpty) ? 'bg-success' : 'bg-danger' }}" data-toggle="tooltip" data-placement="top" title="{{ $i . '/' . $j }}"></div>
                    @endfor
                </div>
            </div>
        @endfor
    </div>
</div>