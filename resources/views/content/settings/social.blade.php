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
            <div class="card py-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="mb-0">Activate Social Links</h6>
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
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class='bx bxl-facebook'></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="https://facebook.com/"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class='bx bxl-twitter'></i> </span>
                                    <input type="text" class="form-control" placeholder="https://twitter.com/"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class='bx bxl-instagram'></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="https://twitter.com/"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class='bx bxl-linkedin'></i>
                                    </span>
                                        <input type="text" class="form-control" placeholder="https://linkedin.com/"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class='bx bxl-whatsapp'></i>
                                    </span>
                                        <input type="text" class="form-control" placeholder="https://whatsapp.com/"
                                            aria-label="Username" aria-describedby="basic-addon1">
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

@endsection
