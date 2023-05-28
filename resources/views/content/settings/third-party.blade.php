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
        <div class="col-md-6">
            <div class="card py-3">
                <div class="card-header border-bottom py-2">
                    <div class="row">
                        <div class="col-9">
                            <h6 class="mb-0">
                                Google reCAPTCHA Setting
                            </h6>
                        </div>
                        <div class="col-3 text-end">
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
                                    <label for="" class="form-label">Site Key</label>
                                    <input type="text" class="form-control" name="" id=""
                                        aria-describedby="helpId" placeholder="">
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
        <div class="col-md-6">
            <div class="card py-3">
                <div class="card-header border-bottom py-2">
                    <div class="row">
                        <div class="col-9">
                            <h6 class="mb-0">
                                Google Analytics Settings
                            </h6>
                        </div>
                        <div class="col-3 text-end">
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
                                    <label for="" class="form-label">Tracking ID</label>
                                    <input type="text" class="form-control" name="" id=""
                                        aria-describedby="helpId" placeholder="">
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
        <div class="col-md-12 mt-md-3 d-flex justify-content-center">
            <div class="row card w-100">
                <div class="col-md-12 card-header border-bottom py-4 mb-2">
                    <h6 class="m-0">Facebook Chat</h6>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 card-body">
                            <div class="card py-3">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-9">
                                            <h6 class="mb-0">Facebook Chat Setting
                                            </h6>
                                        </div>
                                        <div class="col-3 text-end">
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
                                                    <label for="" class="form-label">Facebook Page ID</label>
                                                    <input type="text" class="form-control" name="" id=""
                                                        aria-describedby="helpId" placeholder="">
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
                        <div class="col-md-6 card-body">
                            <div class="card py-3">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="mb-0">Please be carefull when you are configuring Facebook chat. For
                                                incorrect configuration you will not get messenger icon on your user-end site.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container p-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ol class="list-group list-group-numbered">
                                                    <li class="list-group-item small">Login into your facebook page</li>
                                                    <li class="list-group-item small">Find the About option of your facebook page.</li>
                                                    <li class="list-group-item small">At the very bottom, you can find the \“Facebook Page ID\”.</li>
                                                    <li class="list-group-item small">Go to Settings of your page and find the option of \"Advance Messaging\".</li>
                                                    <li class="list-group-item small">Scroll down that page and you will get \"white listed domain\".</li>
                                                    <li class="list-group-item small">Set your website domain name.</li>
                                                </ol>
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
        <div class="col-md-12 mt-md-3 d-flex justify-content-center">
            <div class="row card w-100">
                <div class="col-md-12 card-header border-bottom py-4 mb-2">
                    <h6 class="m-0">Facebook Pixel</h6>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 card-body">
                            <div class="card py-3">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-9">
                                            <h6 class="mb-0">Facebook Pixel Setting
                                            </h6>
                                        </div>
                                        <div class="col-3 text-end">
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
                                                    <label for="" class="form-label">Facebook Pixel ID</label>
                                                    <input type="text" class="form-control" name="" id=""
                                                        aria-describedby="helpId" placeholder="">
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
                        <div class="col-md-6 card-body">
                            <div class="card py-3">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="mb-0">Please be carefull when you are configuring Facebook Pixel.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container p-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ol class="list-group list-group-numbered">
                                                    <li class="list-group-item small">Log in to Facebook and go to your Ads Manager account.</li>
                                                    <li class="list-group-item small">Open the Navigation Bar and select Events Manager.</li>
                                                    <li class="list-group-item small">Copy your Pixel ID from underneath your Site Name and paste the number into Facebook Pixel ID field.</li>
                                                </ol>
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
        <div class="col-md-12 mt-md-3 d-flex justify-content-center">
            <div class="row card w-100">
                <div class="col-md-12 card-header border-bottom py-4 mb-2">
                    <h6 class="m-0">Facebook Comment</h6>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 card-body">
                            <div class="card py-3">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-9">
                                            <h6 class="mb-0">Facebook Comment Setting
                                            </h6>
                                        </div>
                                        <div class="col-3 text-end">
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
                                                    <label for="" class="form-label">Facebook App ID</label>
                                                    <input type="text" class="form-control" name="" id=""
                                                        aria-describedby="helpId" placeholder="">
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
                        <div class="col-md-6 card-body">
                            <div class="card py-3">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="mb-0">Please be carefull when you are configuring Facebook Comment. For incorrect configuration you will not get comment section on your user-end site.
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container p-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ol class="list-group list-group-numbered">
                                                    <li class="list-group-item small">Login into your facebook page.</li>
                                                    <li class="list-group-item small">After then go to this URL https://developers.facebook.com/apps/.</li>
                                                    <li class="list-group-item small">Create Your App. </li>
                                                    <li class="list-group-item small">In Dashboard page you will get your App ID.</li>
                                                </ol>
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
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between border-bottom mb-2">
                    <h6 class="m-0">
                        Tawk.to
                    </h6>
                    <label class="switch" style="left: -20px;">
                        <input type="checkbox" class="switch-input is-valid" checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                    </label>
                </div>
                <div class="card-body pb-1">
                    <small class="text-muted border-bottom d-block py-2">If you enable Tawk.to, then WhatsApp must be disabled.</small>
                    <div class="mb-3">
                    <label for="" class="form-label">Tawk.to Script</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </div>
                <div class="card-footer text-center pt-2 pb-3">
                    <a class="btn btn-success btn-md " href="#" role="button">
                        Update
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between border-bottom mb-2">
                    <h6 class="m-0">
                        Disqus
                    </h6>
                    <label class="switch" style="left: -20px;">
                        <input type="checkbox" class="switch-input is-valid" checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                    </label>
                </div>
                <div class="card-body pb-1">
                    <div class="mb-3">
                    <label for="" class="form-label">Disqus Script</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </div>
                <div class="card-footer text-center pt-2 pb-3">
                    <a class="btn btn-success btn-md " href="#" role="button">
                        Update
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between border-bottom mb-2">
                    <h6 class="m-0">
                        Appzi Feedback Status 
                    </h6>
                    <label class="switch" style="left: -20px;">
                        <input type="checkbox" class="switch-input is-valid" checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                    </label>
                </div>
                <div class="card-body pb-1">
                    <div class="mb-3">
                    <label for="" class="form-label"> Appzi Feedback Script</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </div>
                <div class="card-footer text-center pt-2 pb-3">
                    <a class="btn btn-success btn-md " href="#" role="button">
                        Update
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between border-bottom mb-2">
                    <h6 class="m-0">
                        AddThis Status 
                    </h6>
                    <label class="switch" style="left: -20px;">
                        <input type="checkbox" class="switch-input is-valid" checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                    </label>
                </div>
                <div class="card-body pb-1">
                    <div class="mb-3">
                    <label for="" class="form-label">  AddThis Script</label>
                    <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>
                </div>
                <div class="card-footer text-center pt-2 pb-3">
                    <a class="btn btn-success btn-md " href="#" role="button">
                        Update
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
