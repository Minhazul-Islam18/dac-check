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
    <script src="{{ asset('assets/js/admin_management.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>
    <!-- Invoice List Table -->
    <div class="card py-3">
        <div class="container">
            <h4>Filter:</h4>
            <div class="filterable">
                <div class="dropFilter invoice-title">
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <option value="" selected>Select Type</option>
                            <option value="OPP">Type 1</option>
                            <option value="OPC">Type 2</option>
                            <option value="OPC">Type 3</option>
                        </select>
                    </div>
                </div>
            </div>

            <table id="walletTypeList" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Amount (F CFA)</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Amount (F CFA)</th>
                        <th scope="col">Status</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <span class="text-danger">Conversion</span>
                        </td>
                        <td>
                            <span>50000</span>
                        </td>
                        <td>
                            <span>Active</span>
                        </td>
                        <td>1</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#popupTypeEdit"
                                    class="text-body"><i class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Delete" data-bs-original-title="Delete"><i class="bx bxs-trash mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-success delete-record">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="text-info">Insured</span>
                        </td>
                        <td>
                            <span>250000</span>
                        </td>
                        <td>
                            <span>Active</span>
                        </td>
                        <td>5</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#popupTypeEdit"
                                    class="text-body"><i class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Delete" data-bs-original-title="Delete"><i class="bx bxs-trash mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-success delete-record">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="text-success">Most Popular</span>
                        </td>
                        <td>
                            <span>150000</span>
                        </td>
                        <td>
                            <span>Active</span>
                        </td>
                        <td>3</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#popupTypeEdit"
                                    class="text-body"><i class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Delete" data-bs-original-title="Delete"><i class="bx bxs-trash mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-success delete-record">Active</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    
    <div class="offcanvas offcanvas-end announcement-popup" tabindex="-1" id="addData"
        aria-labelledby="popupType7Label">
        <div class="offcanvas-header border-bottom">
            <h6 id="popupType7Label" class="offcanvas-title">Add Type of Wallet Deposit</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <div class="my-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option value="en" selected>English</option>
                            <option value="ar">Arabic</option>
                            <option value="fr">French</option>
                        </select>
                        <label for="floatingSelect">Language</label>
                    </div>
                </div>

                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Wallet deposit Title">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Wallet deposit title size">
                    <label for="floatingInput">Title size</label>
                </div>
                <div class="mb-3">
                    <div class="nano">
                        <p @class(['mb-2'])>Title color</p>
                        <div class="color-picker-nano"></div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="formId1" id="formId1"
                        placeholder="Enter Button text">
                    <label for="formId1">Amount</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control" placeholder="Enter Serial Number">
                    <label for="floatingInput">Serial Number</label>
                    <ul style="padding-left: 1rem">
                        <li style="color: #d95a00;font-weight: 600;">The higher the serial number, the later the popup will
                            be visible in the website.</li>
                    </ul>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="Business">Published</option>
                        <option value="Enterprise">Unpublished</option>
                    </select>
                    <label for="floatingSelect">Status *</label>
                </div>

                <div class="mt-3 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>

            </form>
        </div>
    </div>
@endsection
