@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" /> --}}
@endsection

@section('vendor-script')
    {{-- <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script> --}}
@endsection

@section('page-script')
    {{-- <script src="{{ asset('assets/js/BackendSettings.js') }}"></script> --}}
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>

    <!-- Invoice List Table -->
    <div class="card py-3">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h5>Maintenance Mode Settings</h5>
                </div>
                <div class="col-6 text-end">
                    <label class="switch" style="left: -20px;">
                        <input type="checkbox" class="switch-input is-valid" checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                    </label>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="my-3">
                            <label for="filepond" class=" mb-2">Image</label>
                            <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                                data-max-files="3" />
                            <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                                allowed.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Text</label>
                            <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="formId1" id="formId1"
                                aria-describedby="helpId" placeholder="">
                            <label for="formId1">Secret Path</label>
                            <small id="helpId" class="form-text text-muted">After activating Maintenance mode, You can
                                access site via <a href="{{ url('/') . '/...' }}">{{ url('/') . '/...' }}</a> </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <a class="btn btn-success btn-md " href="#" role="button">
                Update
            </a>
        </div>
    </div>
@endsection
