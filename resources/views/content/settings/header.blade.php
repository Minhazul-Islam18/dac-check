@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
@endsection

@section('page-script')
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card py-3 mt-3">
                <div class="card-header border-bottom py-2 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mb-0">Header</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-12">
                                <input type="file" name="" id="">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                  <label for="" class="form-label">Helpline Number <small>(s)</small></label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Helpline number">
                                </div>
                                <hr>
                                <label for="" class="form-label">Header Auto scrolling message 
                                    <label class="switch" style="left: 20px;">
                                        <input type="checkbox" class="switch-input is-valid" checked />
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                    </label>
                                </label>
                                <div class="row targetDiv">
                                    <div class="col-md-12">
                                        <div id="group1" class="fvrduplicate">
                                            <div class="row my-3 entry">
                                                <div class="col-xs-10 col-md-5">
                                                    <label for="" class="form-label">Header left quick message</label>
                                                    <input type="text" class="form-control" name="[]"
                                                        id="" aria-describedby="helpId" placeholder="All Members">
                                                </div>
                                                <div class="col-xs-10 col-md-5">
                                                    <label for="" class="form-label">Url</label>
                                                    <input type="text" class="form-control" name="[]"
                                                        id="" aria-describedby="helpId" placeholder="{{URL::current()}}">
                                                </div>
                                                <div
                                                    class="col-xs-2 col-md-2 d-flex align-items-center justify-content-end">
                                                    <div class="form-group" style="top: 10px;position: relative;">
                                                        <button type="button" class="btn btn-success btn-sm btn-add">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center py-2">
                    <a class="btn btn-success btn-md " href="#" role="button">
                        Update
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();
                var controlForm = $(this).closest('.fvrduplicate'),
                    currentEntry = $(this).parents('.entry'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);
                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="fa fa-minus" aria-hidden="true"></i>');
            }).on('click', '.btn-remove', function(e) {
                $(this).closest('.entry').remove();
                return false;
            });
        });
    </script>
@endsection
