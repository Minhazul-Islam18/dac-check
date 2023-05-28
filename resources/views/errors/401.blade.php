    @extends('errors::minimal')
    @if (env('APP_DEBUG') === 'true')
        @section('title', __('Unauthorized'))
        @section('code', '500')
        @section('message', __('Unauthorized Request'))
    @else
        @section('title', __('Unauthorized'))

        @section('err_image')
            <img src="{{ asset('assets/backend/img/7906232_3805004.jpeg') }}" height="500px" alt="">
        @endsection
    @endif
