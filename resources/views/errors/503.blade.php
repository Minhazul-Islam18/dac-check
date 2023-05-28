@if (env('APP_DEBUG') == 'true')
    @extends('errors::minimal')

    @section('title', __('Service Unavailable'))
    @section('code', '503')
    @section('message', __('Service Unavailable'))
@else
    @extends('errors::minimal')

    @section('title', __('Service Unavailable'))
    @section('title', __('Server Error'))
    <img src="{{ asset('assets/backend/img/503.jpeg') }}" height="500px" alt="">
@endsection
@endif
