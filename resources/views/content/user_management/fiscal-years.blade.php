@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
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
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bloodhound/bloodhound.js') }}"></script>
    @endsection

@section('page-script')
    <script src="{{ asset('assets/js/admin_management.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>
    <script src="{{ asset('assets/js/forms-typeahead.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>

    <div class="row mb-md-3 mb-sm-3 mb-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-3">Paid to Consult CTD Number</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="">2023</label>
                            <span>120000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100">25%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="">2024</label>
                            <span>500000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100">65%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-3">Paid to Postulate CTD Number</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="">2023</label>
                            <span>120000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100">25%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="">2024</label>
                            <span>500000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100">65%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-3">Turnover on Paid to Consult (F CFA)</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="">2023</label>
                            <span>120000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100">25%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="">2024</label>
                            <span>500000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100">65%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-3">Turnover on Paid to Postulate (F CFA)</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="">2023</label>
                            <span>120000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100">25%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <label for="">2024</label>
                            <span>500000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100">65%</div>
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
                            <option value="" selected>Status</option>
                            <option value="OPP">Active</option>
                            <option value="OPC">Inactive</option>
                            <option value="OPC">Suspended</option>
                        </select>
                    </div>
                </div>
            </div>

            <table id="FiscalYearsList" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Fiscal years</th>
                        <th scope="col">Paid to Consult CTD Number</th>
                        <th scope="col">Paid to Postulate CTD Number</th>
                        <th scope="col">Turnover on Paid to Consult</th>
                        <th scope="col">Turnover on Paid to Postulate</th>
                        <th scope="col">Account Status</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">Fiscal years</th>
                        <th scope="col">Paid to Consult CTD Number</th>
                        <th scope="col">Paid to Postulate CTD Number</th>
                        <th scope="col">Turnover on Paid to Consult</th>
                        <th scope="col">Turnover on Paid to Postulate</th>
                        <th scope="col">Account Status</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <span>2023</span>
                        </td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>
                            <span class="badge bg-label-success">Active</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                        class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice">
                                    <i class="fa-solid fa-eye fa-fade mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#adminPrev" class="dropdown-item">View</a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#suspendAdmin" class="dropdown-item">Suspend</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-danger delete-record">Deactive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>2024</span>
                        </td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>
                            <span class="badge bg-label-success">Active</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                        class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice">
                                    <i class="fa-solid fa-eye fa-fade mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#adminPrev" class="dropdown-item">View</a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#suspendAdmin" class="dropdown-item">Suspend</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-danger delete-record">Deactive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>2025</span>
                        </td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>
                            <span class="badge bg-label-success">Active</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                        class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice">
                                    <i class="fa-solid fa-eye fa-fade mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#adminPrev" class="dropdown-item">View</a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#suspendAdmin" class="dropdown-item">Suspend</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-danger delete-record">Deactive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>2026</span>
                        </td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>xxxxxxxxxx</td>
                        <td>
                            <span class="badge bg-label-success">Active</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Send Mail" data-bs-original-title="Send Mail"><i
                                        class="bx bxs-edit mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice">
                                    <i class="fa-solid fa-eye fa-fade mx-1"></i>
                                </a>
                                <div class="d-inline-block"><a href="javascript:;"
                                        class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#adminPrev" class="dropdown-item">View</a></li>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#suspendAdmin" class="dropdown-item">Suspend</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#deactiveAdmin"
                                                class="dropdown-item text-danger delete-record">Deactive</a>
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

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addData" aria-labelledby="addDataLabel">
        <div class="offcanvas-header border-bottom">
            <h6 id="addDataLabel" class="offcanvas-title">Add Fiscal Year</h6>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 pt-0 flex-grow-0">
            <form class="add-new-pack pt-0" id="">
                <div class="my-3">
                    <label for="selectpickerSelectDeselect" class="form-label">Fiscal Years</label>
                    <select id="selectpickerSelectDeselect" class="selectpicker w-100" data-style="btn-default" multiple
                        data-actions-box="true">
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option value="Business">Published</option>
                        <option value="Enterprise">Unpublished</option>
                    </select>
                    <label for="floatingSelect">Status *</label>
                </div>
                <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </form>
        </div>
    </div>
@endsection
