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
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
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
            <h5>Email Templates</h5>
        </div>
        <div class="card-body">
            <div class="container px-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-align-left">
                            <ul class="nav nav-pills border-end pe-3" role="tablist">
                              <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-left-home" aria-controls="navs-pills-left-home" aria-selected="true">Email Verification</button>
                              </li>
                              <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-left-profile" aria-controls="navs-pills-left-profile" aria-selected="false">Package Subscription</button>
                              </li>
                            </ul>
                            <div class="tab-content shadow-none">
                              <div class="tab-pane fade show active" id="navs-pills-left-home" role="tabpanel">
                                <div class="row py-3">
                                    <div class="col-md-4">
                                        Activation
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Subject</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                          <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <textarea class="ckeditor form-control" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, debitis.</textarea>
                              </div>
                              <div class="tab-pane fade" id="navs-pills-left-profile" role="tabpanel">
                                <div class="row py-3">
                                    <div class="col-md-4">
                                        Activation
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Subject</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                          <input type="text"
                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <textarea class="ckeditor form-control" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, debitis.</textarea>
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
	<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
<script>
    let editor = document.querySelectorAll( '.ckeditor' );
    editor.forEach(editor => {
        function CustomizationPlugin( editor ) {

        }

        ClassicEditor
            .create( editor, {
            extraPlugins: [ CustomizationPlugin ]
        } )
            .catch( error => {
            console.error( error );
        } );        
    });

</script>
@endsection
