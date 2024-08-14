@extends('admin.master')
@section('content')
    <livewire:admin.visitors-table />
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('visitor-exited', (event) => {
                iziToast.success({
                    title: 'موفق',
                    message: 'خروج زائر با موفقیت ثبت شد.',
                    position: 'center'
                });
            });

            Livewire.on('visitor-leaved', (event) => {
                iziToast.success({
                    title: 'موفق',
                    message: 'ثبت تردد با موفقیت ثبت شد.',
                    position: 'center'
                });
            });
        });
    </script>
@endpush