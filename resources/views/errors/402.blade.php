  @extends('errors::minimal')
  @if (env('APP_DEBUG') === 'true')
      @section('title', __('Payment Required'))
      @section('code', '402')
      @section('message', __('Payment Required'))
  @else
      @section('title', __('Payment Required'))
      @section('err_image')
          <div class="four_zero_four_bg_402">
              <h1 class="text-center ">402</h1>

          </div>
      @endsection
  @endif
