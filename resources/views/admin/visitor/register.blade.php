@extends('admin.master')
@section('content')
    <div class="container my-5">
        <div class="text-right text-danger mt-1">
            <h3>ثبت نام زائر</h3>
        </div>
        <livewire:admin.visitor-create />
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('visitor-register', (event) => {
                iziToast.success({
                    title: 'موفق',
                    message: 'زائر با موفقیت ثبت شد.',
                    position: 'center'
                });
            });
        });
    </script>
@endpush
