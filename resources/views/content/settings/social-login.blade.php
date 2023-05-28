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
        <div class="col-md-4">
            <div class="card py-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="mb-0">Facebook Login</h6>
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
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                  <label for="" class="form-label">App ID</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">App Secret</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">App ID & App Secret are required for facebook login.</small>
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
        <div class="col-md-4">
            <div class="card py-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="mb-0">Google Login</h6>
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
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                  <label for="" class="form-label">Client ID</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">Client Secret</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">Client ID & Client Secret are required for Google login.</small>
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
        <div class="col-md-4">
            <div class="card py-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="mb-0">Twitter Login</h6>
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
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                  <label for="" class="form-label">Client ID</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">Client Secret</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">Client ID & Client Secret are required for Twitter login.</small>
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
    </div>

@endsection
