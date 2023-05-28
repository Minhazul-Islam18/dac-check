@if (env('APP_DEBUG') == 'true')
    @extends('errors::minimal')

    @section('title', __('Page Expired'))
    @section('code', '419')
    @section('message', __('Page Expired'))
@else
    @extends('errors::minimal')

    @section('title', __('Page Expired'))
    @section('err_image')
        <img src="{{ asset('assets/backend/img/5928294_3009287.jpeg') }}" height="500px" alt="">
    @endsection
@endif
