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
@endsection

@section('vendor-script')
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
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/ctd.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>DAC-Rapide</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>

                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <svg viewBox="0 0 24 24" width="25px" height="auto" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.8"
                                        d="M12.8992 2.52009L12.8692 2.59009L9.96922 9.32009H7.11922C6.43922 9.32009 5.79922 9.45009 5.19922 9.71009L6.94922 5.53009L6.98922 5.44009L7.04922 5.28009C7.07922 5.21009 7.09922 5.15009 7.12922 5.10009C8.43922 2.07009 9.91922 1.38009 12.8992 2.52009Z"
                                        fill="#0df22f"></path>
                                    <path
                                        d="M18.2907 9.52002C17.8407 9.39002 17.3707 9.32002 16.8807 9.32002H9.9707L12.8707 2.59002L12.9007 2.52002C13.0407 2.57002 13.1907 2.64002 13.3407 2.69002L15.5507 3.62002C16.7807 4.13002 17.6407 4.66002 18.1707 5.30002C18.2607 5.42002 18.3407 5.53002 18.4207 5.66002C18.5107 5.80002 18.5807 5.94002 18.6207 6.09002C18.6607 6.18002 18.6907 6.26002 18.7107 6.35002C18.9707 7.20002 18.8107 8.23002 18.2907 9.52002Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.4"
                                        d="M21.7602 14.1998V16.1498C21.7602 16.3498 21.7502 16.5498 21.7402 16.7398C21.5502 20.2398 19.6002 21.9998 15.9002 21.9998H8.10023C7.85023 21.9998 7.62023 21.9798 7.39023 21.9498C4.21023 21.7398 2.51023 20.0398 2.29023 16.8598C2.26023 16.6198 2.24023 16.3898 2.24023 16.1498V14.1998C2.24023 12.1898 3.46023 10.4598 5.20023 9.70982C5.80023 9.44982 6.44023 9.31982 7.12023 9.31982H16.8802C17.3702 9.31982 17.8402 9.38982 18.2902 9.51982C20.2902 10.1298 21.7602 11.9898 21.7602 14.1998Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.6"
                                        d="M6.95023 5.52979L5.20023 9.70978C3.46023 10.4598 2.24023 12.1898 2.24023 14.1998V11.2698C2.24023 8.42979 4.26023 6.05979 6.95023 5.52979Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.6"
                                        d="M21.7591 11.2698V14.1998C21.7591 11.9898 20.2891 10.1298 18.2891 9.51984C18.8091 8.22984 18.9691 7.19984 18.7091 6.34984C18.6891 6.25984 18.6591 6.17984 18.6191 6.08984C20.4891 7.05984 21.7591 9.02984 21.7591 11.2698Z"
                                        fill="#0df22f"></path>
                                    <path
                                        d="M14.5 14.69H12.75V13C12.75 12.59 12.41 12.25 12 12.25C11.59 12.25 11.25 12.59 11.25 13V14.69H9.5C9.09 14.69 8.75 15.03 8.75 15.44C8.75 15.85 9.09 16.19 9.5 16.19H11.25V18C11.25 18.41 11.59 18.75 12 18.75C12.41 18.75 12.75 18.41 12.75 18V16.19H14.5C14.91 16.19 15.25 15.85 15.25 15.44C15.25 15.03 14.91 14.69 14.5 14.69Z"
                                        fill="#0df22f"></path>
                                </g>
                            </svg>
                        </span>

                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small>Total Amount/Pay to Postulate</small>
                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option>2022</option>
                                <option>2021</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>DAC-Rapide</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>

                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <svg viewBox="0 0 24 24" width="25px" height="auto" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.8"
                                        d="M12.8992 2.52009L12.8692 2.59009L9.96922 9.32009H7.11922C6.43922 9.32009 5.79922 9.45009 5.19922 9.71009L6.94922 5.53009L6.98922 5.44009L7.04922 5.28009C7.07922 5.21009 7.09922 5.15009 7.12922 5.10009C8.43922 2.07009 9.91922 1.38009 12.8992 2.52009Z"
                                        fill="#0df22f"></path>
                                    <path
                                        d="M18.2907 9.52002C17.8407 9.39002 17.3707 9.32002 16.8807 9.32002H9.9707L12.8707 2.59002L12.9007 2.52002C13.0407 2.57002 13.1907 2.64002 13.3407 2.69002L15.5507 3.62002C16.7807 4.13002 17.6407 4.66002 18.1707 5.30002C18.2607 5.42002 18.3407 5.53002 18.4207 5.66002C18.5107 5.80002 18.5807 5.94002 18.6207 6.09002C18.6607 6.18002 18.6907 6.26002 18.7107 6.35002C18.9707 7.20002 18.8107 8.23002 18.2907 9.52002Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.4"
                                        d="M21.7602 14.1998V16.1498C21.7602 16.3498 21.7502 16.5498 21.7402 16.7398C21.5502 20.2398 19.6002 21.9998 15.9002 21.9998H8.10023C7.85023 21.9998 7.62023 21.9798 7.39023 21.9498C4.21023 21.7398 2.51023 20.0398 2.29023 16.8598C2.26023 16.6198 2.24023 16.3898 2.24023 16.1498V14.1998C2.24023 12.1898 3.46023 10.4598 5.20023 9.70982C5.80023 9.44982 6.44023 9.31982 7.12023 9.31982H16.8802C17.3702 9.31982 17.8402 9.38982 18.2902 9.51982C20.2902 10.1298 21.7602 11.9898 21.7602 14.1998Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.6"
                                        d="M6.95023 5.52979L5.20023 9.70978C3.46023 10.4598 2.24023 12.1898 2.24023 14.1998V11.2698C2.24023 8.42979 4.26023 6.05979 6.95023 5.52979Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.6"
                                        d="M21.7591 11.2698V14.1998C21.7591 11.9898 20.2891 10.1298 18.2891 9.51984C18.8091 8.22984 18.9691 7.19984 18.7091 6.34984C18.6891 6.25984 18.6591 6.17984 18.6191 6.08984C20.4891 7.05984 21.7591 9.02984 21.7591 11.2698Z"
                                        fill="#0df22f"></path>
                                    <path
                                        d="M14.5 14.69H12.75V13C12.75 12.59 12.41 12.25 12 12.25C11.59 12.25 11.25 12.59 11.25 13V14.69H9.5C9.09 14.69 8.75 15.03 8.75 15.44C8.75 15.85 9.09 16.19 9.5 16.19H11.25V18C11.25 18.41 11.59 18.75 12 18.75C12.41 18.75 12.75 18.41 12.75 18V16.19H14.5C14.91 16.19 15.25 15.85 15.25 15.44C15.25 15.03 14.91 14.69 14.5 14.69Z"
                                        fill="#0df22f"></path>
                                </g>
                            </svg>
                        </span>

                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small>Total Amount/Pay to Consult</small>
                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option>2022</option>
                                <option>2021</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Public Official</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>

                        </div>
                        <span class="badge bg-label-info rounded p-2">
                            <svg viewBox="0 0 24 24" width="25px" height="auto" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.8"
                                        d="M12.8992 2.52009L12.8692 2.59009L9.96922 9.32009H7.11922C6.43922 9.32009 5.79922 9.45009 5.19922 9.71009L6.94922 5.53009L6.98922 5.44009L7.04922 5.28009C7.07922 5.21009 7.09922 5.15009 7.12922 5.10009C8.43922 2.07009 9.91922 1.38009 12.8992 2.52009Z"
                                        fill="#0df22f"></path>
                                    <path
                                        d="M18.2907 9.52002C17.8407 9.39002 17.3707 9.32002 16.8807 9.32002H9.9707L12.8707 2.59002L12.9007 2.52002C13.0407 2.57002 13.1907 2.64002 13.3407 2.69002L15.5507 3.62002C16.7807 4.13002 17.6407 4.66002 18.1707 5.30002C18.2607 5.42002 18.3407 5.53002 18.4207 5.66002C18.5107 5.80002 18.5807 5.94002 18.6207 6.09002C18.6607 6.18002 18.6907 6.26002 18.7107 6.35002C18.9707 7.20002 18.8107 8.23002 18.2907 9.52002Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.4"
                                        d="M21.7602 14.1998V16.1498C21.7602 16.3498 21.7502 16.5498 21.7402 16.7398C21.5502 20.2398 19.6002 21.9998 15.9002 21.9998H8.10023C7.85023 21.9998 7.62023 21.9798 7.39023 21.9498C4.21023 21.7398 2.51023 20.0398 2.29023 16.8598C2.26023 16.6198 2.24023 16.3898 2.24023 16.1498V14.1998C2.24023 12.1898 3.46023 10.4598 5.20023 9.70982C5.80023 9.44982 6.44023 9.31982 7.12023 9.31982H16.8802C17.3702 9.31982 17.8402 9.38982 18.2902 9.51982C20.2902 10.1298 21.7602 11.9898 21.7602 14.1998Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.6"
                                        d="M6.95023 5.52979L5.20023 9.70978C3.46023 10.4598 2.24023 12.1898 2.24023 14.1998V11.2698C2.24023 8.42979 4.26023 6.05979 6.95023 5.52979Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.6"
                                        d="M21.7591 11.2698V14.1998C21.7591 11.9898 20.2891 10.1298 18.2891 9.51984C18.8091 8.22984 18.9691 7.19984 18.7091 6.34984C18.6891 6.25984 18.6591 6.17984 18.6191 6.08984C20.4891 7.05984 21.7591 9.02984 21.7591 11.2698Z"
                                        fill="#0df22f"></path>
                                    <path
                                        d="M14.5 14.69H12.75V13C12.75 12.59 12.41 12.25 12 12.25C11.59 12.25 11.25 12.59 11.25 13V14.69H9.5C9.09 14.69 8.75 15.03 8.75 15.44C8.75 15.85 9.09 16.19 9.5 16.19H11.25V18C11.25 18.41 11.59 18.75 12 18.75C12.41 18.75 12.75 18.41 12.75 18V16.19H14.5C14.91 16.19 15.25 15.85 15.25 15.44C15.25 15.03 14.91 14.69 14.5 14.69Z"
                                        fill="#0df22f"></path>
                                </g>
                            </svg>
                        </span>

                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small>Total Amount/Pay to Postulate</small>
                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option>2022</option>
                                <option>2021</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Public Official</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>

                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <svg viewBox="0 0 24 24" width="25px" height="auto" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.8"
                                        d="M12.8992 2.52009L12.8692 2.59009L9.96922 9.32009H7.11922C6.43922 9.32009 5.79922 9.45009 5.19922 9.71009L6.94922 5.53009L6.98922 5.44009L7.04922 5.28009C7.07922 5.21009 7.09922 5.15009 7.12922 5.10009C8.43922 2.07009 9.91922 1.38009 12.8992 2.52009Z"
                                        fill="#0df22f"></path>
                                    <path
                                        d="M18.2907 9.52002C17.8407 9.39002 17.3707 9.32002 16.8807 9.32002H9.9707L12.8707 2.59002L12.9007 2.52002C13.0407 2.57002 13.1907 2.64002 13.3407 2.69002L15.5507 3.62002C16.7807 4.13002 17.6407 4.66002 18.1707 5.30002C18.2607 5.42002 18.3407 5.53002 18.4207 5.66002C18.5107 5.80002 18.5807 5.94002 18.6207 6.09002C18.6607 6.18002 18.6907 6.26002 18.7107 6.35002C18.9707 7.20002 18.8107 8.23002 18.2907 9.52002Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.4"
                                        d="M21.7602 14.1998V16.1498C21.7602 16.3498 21.7502 16.5498 21.7402 16.7398C21.5502 20.2398 19.6002 21.9998 15.9002 21.9998H8.10023C7.85023 21.9998 7.62023 21.9798 7.39023 21.9498C4.21023 21.7398 2.51023 20.0398 2.29023 16.8598C2.26023 16.6198 2.24023 16.3898 2.24023 16.1498V14.1998C2.24023 12.1898 3.46023 10.4598 5.20023 9.70982C5.80023 9.44982 6.44023 9.31982 7.12023 9.31982H16.8802C17.3702 9.31982 17.8402 9.38982 18.2902 9.51982C20.2902 10.1298 21.7602 11.9898 21.7602 14.1998Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.6"
                                        d="M6.95023 5.52979L5.20023 9.70978C3.46023 10.4598 2.24023 12.1898 2.24023 14.1998V11.2698C2.24023 8.42979 4.26023 6.05979 6.95023 5.52979Z"
                                        fill="#0df22f"></path>
                                    <path opacity="0.6"
                                        d="M21.7591 11.2698V14.1998C21.7591 11.9898 20.2891 10.1298 18.2891 9.51984C18.8091 8.22984 18.9691 7.19984 18.7091 6.34984C18.6891 6.25984 18.6591 6.17984 18.6191 6.08984C20.4891 7.05984 21.7591 9.02984 21.7591 11.2698Z"
                                        fill="#0df22f"></path>
                                    <path
                                        d="M14.5 14.69H12.75V13C12.75 12.59 12.41 12.25 12 12.25C11.59 12.25 11.25 12.59 11.25 13V14.69H9.5C9.09 14.69 8.75 15.03 8.75 15.44C8.75 15.85 9.09 16.19 9.5 16.19H11.25V18C11.25 18.41 11.59 18.75 12 18.75C12.41 18.75 12.75 18.41 12.75 18V16.19H14.5C14.91 16.19 15.25 15.85 15.25 15.44C15.25 15.03 14.91 14.69 14.5 14.69Z"
                                        fill="#0df22f"></path>
                                </g>
                            </svg>
                        </span>

                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small>Total Amount/Pay to Consult</small>
                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option>2022</option>
                                <option>2021</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice List Table -->
    <div class="card py-3">
        <div class="container">
            <h4>Filter:</h4>
            <div class="filterable">
                <div class="dropFilter invoice-title">
                    <div class="title-filter">
                        <select id="" name="countryFilter" class="countryFilter form-select">
                            <option value="" selected>Select Country</option>
                            @foreach ($countryData as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <option value="" selected>Type of Earnings</option>
                            <option value="OPP">On Pay to Postulate (OPP)</option>
                            <option value="OPC">On Pay to Consult (OPC)</option>
                        </select>
                    </div>
                </div>
            </div>

            <table id="EarningsOnCTD" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Earnings ID</th>
                        <th scope="col">CTD ID</th>
                        <th scope="col">Source of Earnings</th>
                        <th scope="col">Source of Beneficiaries</th>
                        <th scope="col text-truncate">Type of Earnings</th>
                        <th scope="col">Earns of Amount</th>
                        <th scope="col">Current Ballance</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Earnings ID</th>
                        <th scope="col">CTD ID</th>
                        <th scope="col">Source of Earnings</th>
                        <th scope="col">Source of Beneficiaries</th>
                        <th scope="col text-truncate">Type of Earnings</th>
                        <th scope="col">Earns of Amount</th>
                        <th scope="col">Current Ballance</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('earn-ctd-preview', ['earner'=>'administrator'])}}">125EDRBFA</a> <br>
                            <span>20 Jan, 2023</span>
                        </td>
                        <td>
                            <span>xxxxxxxxxx</span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/5.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account')}}"
                                        class="text-body text-truncate"><span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small
                                        class="text-success">zmcclevertye@soundcloud.com</small><span class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/3.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('earn-ctd-preview', ['earner'=>'po'])}}"
                                        class="text-body text-truncate"><span class="fw-semibold">
                                            DAC-Rapide
                                        </span></a><small class="text-success">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td><span>OPC</span></td>
                        <td><span>1000</span></td>
                        <td><span>150 000</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner'=>'administrator'])}}" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice"><i class="bx bx-show mx-1"></i>
                                </a>
                                <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice">
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ route('earn-ctd-preview', ['earner'=> 'po'])}}">125EPOBFA</a> <br>
                            <span>20 Jan, 2023</span>
                        </td>
                        <td>
                            <span>xxxxxxxxxx</span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/3.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('earn-ctd-preview', ['earner'=>'po'])}}"
                                        class="text-body text-truncate"><span class="fw-semibold">
                                            DAC-Rapide
                                        </span></a><small class="text-success">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/1.png')}}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('po-view-account')}}"
                                        class="text-body text-truncate"><span class="fw-semibold">Public officer account</span></a><small
                                        class="text-success">zmcclevertye@soundcloud.com</small><span
                                        class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td><span>OPP</span></td>
                        <td><span>1000</span></td>
                        <td><span>150 000</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner'=>'po'])}}" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice"><i class="bx bx-show mx-1"></i>
                                </a>
                                <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice">
                                    <i class='bx bx-download'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    @include('_partials/_modals/add-invoice')
@endsection
