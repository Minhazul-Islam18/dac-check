@if (env('APP_DEBUG') == 'true')
    @extends('errors::minimal')

    @section('title', __('Too Many Requests'))
    @section('code', '429')
    @section('message', __('Too Many Requests'))
@else
    @extends('errors::minimal')

    @section('title', __('Too Many Requests'))
    @section('err_image')
        <img src="{{ asset('assets/backend/img/429.jpeg') }}" height="500px" alt="">
    @endsection
@endif
