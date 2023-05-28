@if (env('APP_DEBUG') == 'true')
    @extends('errors::minimal')

    @section('title', __('Server Error'))
    @section('code', '500')
    @section('message', __('Server Error'))
@else
    @section('err_image')
        @extends('errors::minimal')

    @section('title', __('Server Error'))
    <img src="{{ asset('assets/backend/img/500.jpeg') }}" height="500px" alt="">
@endsection
@endif
