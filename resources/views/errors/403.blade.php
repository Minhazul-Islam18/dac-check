@if (env('APP_DEBUG') == 'true')
    @extends('errors::minimal')

    @section('title', __('Forbidden'))
    @section('code', '403')
    @section('message', __($exception->getMessage() ?: 'Forbidden'))
@else
    @extends('errors::minimal')

    @section('title', __('Forbidden'))
    @section('err_image')
        <img src="{{ asset('assets/backend/img/7906226_3805046.jpeg') }}" height="500px" alt="">
    @endsection
@endif
