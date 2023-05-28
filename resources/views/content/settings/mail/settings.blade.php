@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
@endsection

@section('vendor-script')
    {{-- <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jszip/jszip.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/buttons.html5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-buttons/buttons.print.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.3.1/ckeditor.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/BackendSettings.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>

    <!-- Invoice List Table -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card py-3">
                    <div class="card-header">
                        <h5 class="mb-3">SMTP Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="container p-0">
                            <div class="alert alert-solid-info" role="alert">
                                This mail address will be used to send mails from this Website.
                              </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <span>SMTP Status</span>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input is-valid" checked />
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4">
                                            <label for="">Mail Host</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="" id=""
                                                    aria-describedby="helpId" placeholder="Mail Host">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4">
                                            <label for="">Mail Port</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="" id=""
                                                    aria-describedby="helpId" placeholder="Mail Port">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4">
                                            <label for="">Mail Username</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="" id=""
                                                    aria-describedby="helpId" placeholder="Mail Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4">
                                            <label for="">Mail Password</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="" id=""
                                                    aria-describedby="helpId" placeholder="Mail Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4">
                                            <label for="">Mail Encryption</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="" id=""
                                                    aria-describedby="helpId" placeholder="Mail Encryption">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row py-2">
                                        <div class="col-md-4">
                                            <label for="">Mail From Address</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="" id=""
                                                    aria-describedby="helpId" placeholder="Mail From Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-4">
                                            <label for="">Mail From Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="" id=""
                                                    aria-describedby="helpId" placeholder="Mail From Name">
                                            </div>
                                        </div>
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
            </div>
            <div class="col-md-6">
                <div class="card py-3">
                    <div class="card-header">
                        <h5 class="mb-3">Receive E-Mail </h5>
                    </div>
                    <div class="card-body">
                        <div class="container p-0">
                            <div class="alert alert-solid-info" role="alert">
                                This mail address will be used to Receive mails from PO./User/Inquirier.
                              </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row py-3">
                                        <div class="col-md-4">
                                            <label for="">Mail Address</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                              <input type="text"
                                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                            </div>
                                        </div>
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
            </div>
        </div>
    </div>

@endsection
