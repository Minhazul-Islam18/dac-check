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
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>User's Credit.</span>
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
                        <small>Total Amount</small>
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
                            <span>User's Debit.</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>

                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <svg viewBox="0 0 24 24" width="25px" height="auto" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path opacity="0.8"
                                        d="M12.8992 2.52009L12.8692 2.59009L9.96922 9.32009H7.11922C6.43922 9.32009 5.79922 9.45009 5.19922 9.71009L6.94922 5.53009L6.98922 5.44009L7.04922 5.28009C7.07922 5.21009 7.09922 5.15009 7.12922 5.10009C8.43922 2.07009 9.91922 1.38009 12.8992 2.52009Z"
                                        fill="#ff0000"></path>
                                    <path
                                        d="M18.2907 9.52002C17.8407 9.39002 17.3707 9.32002 16.8807 9.32002H9.9707L12.8707 2.59002L12.9007 2.52002C13.0407 2.57002 13.1907 2.64002 13.3407 2.69002L15.5507 3.62002C16.7807 4.13002 17.6407 4.66002 18.1707 5.30002C18.2607 5.42002 18.3407 5.53002 18.4207 5.66002C18.5107 5.80002 18.5807 5.94002 18.6207 6.09002C18.6607 6.18002 18.6907 6.26002 18.7107 6.35002C18.9707 7.20002 18.8107 8.23002 18.2907 9.52002Z"
                                        fill="#ff0000"></path>
                                    <path opacity="0.4"
                                        d="M21.7602 14.1998V16.1498C21.7602 16.3498 21.7502 16.5498 21.7402 16.7398C21.5502 20.2398 19.6002 21.9998 15.9002 21.9998H8.10023C7.85023 21.9998 7.62023 21.9798 7.39023 21.9498C4.21023 21.7398 2.51023 20.0398 2.29023 16.8598C2.26023 16.6198 2.24023 16.3898 2.24023 16.1498V14.1998C2.24023 12.1898 3.46023 10.4598 5.20023 9.70982C5.80023 9.44982 6.44023 9.31982 7.12023 9.31982H16.8802C17.3702 9.31982 17.8402 9.38982 18.2902 9.51982C20.2902 10.1298 21.7602 11.9898 21.7602 14.1998Z"
                                        fill="#ff0000"></path>
                                    <path opacity="0.6"
                                        d="M6.95023 5.52979L5.20023 9.70978C3.46023 10.4598 2.24023 12.1898 2.24023 14.1998V11.2698C2.24023 8.42979 4.26023 6.05979 6.95023 5.52979Z"
                                        fill="#ff0000"></path>
                                    <path opacity="0.6"
                                        d="M21.7591 11.2698V14.1998C21.7591 11.9898 20.2891 10.1298 18.2891 9.51984C18.8091 8.22984 18.9691 7.19984 18.7091 6.34984C18.6891 6.25984 18.6591 6.17984 18.6191 6.08984C20.4891 7.05984 21.7591 9.02984 21.7591 11.2698Z"
                                        fill="#ff0000"></path>
                                    <path
                                        d="M14.5 16.75H9.5C9.09 16.75 8.75 16.41 8.75 16C8.75 15.59 9.09 15.25 9.5 15.25H14.5C14.91 15.25 15.25 15.59 15.25 16C15.25 16.41 14.91 16.75 14.5 16.75Z"
                                        fill="#ff0000"></path>
                                </g>
                            </svg>
                        </span>

                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small>Total Amount</small>
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
                            <span>User's Current Balance.</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>

                        </div>
                        <span class="badge bg-label-info rounded p-2">
                            <i class="fa-solid fa-sack-dollar fa-fade" style="font-size: 20px"></i>
                        </span>

                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small>Total Amount</small>
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
                            <span>DAC-Rapide's earns on Transfer send.</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>

                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="fa-solid fa-sack-dollar fa-fade" style="font-size: 20px"></i>
                        </span>

                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small>Total Amount</small>
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
                    <div class="status">
                        <select name="statusFilter" id="statusFilter" class="form-select statusFilter">
                            <option value="" selected>Type of Movements</option>
                            <option value="OPP">Deposit</option>
                            <option value="OPC">Purchase</option>
                            <option value="OPC">Transfer send</option>
                            <option value="OPC">Transfer received</option>
                        </select>
                    </div>
                </div>
            </div>

            <table id="walletTypeList" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Users</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Credit</th>
                        <th scope="col">DAC-Rapide's earns on Transfer</th>
                        <th scope="col">Type of Movement</th>
                        <th scope="col">Current Balance</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Users</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Credit</th>
                        <th scope="col">DAC-Rapide's earns on Transfer</th>
                        <th scope="col">Type of Movement</th>
                        <th scope="col">Current Balance</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>
                            <span class="">
                                <a href="{{ route('invoice.create') }}">#5089WD</a>
                                </br>20 Mar, 2022
                            </span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-success">200000</span>
                        </td>
                        <td> - </td>
                        <td> - </td>
                        <td>
                            <span data-bs-toggle="modal" data-bs-target="#WalletDeposit" class="cursor-pointer badge bg-success">Deposit</span>
                        </td>
                        <td>250000</td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class="bx bxs-send"></i>
                                </a>

                                <a href="{{ route('wallet-movements.details') }}" class="text-body"
                                    aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download" data-bs-original-title="Download">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="">
                                <a href="{{ route('invoice.create') }}">#5089WTS</a>
                                </br>20 Mar, 2022
                            </span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-danger badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td> - </td>
                        <td>
                            <span class="text-danger">350000</span>
                        </td>

                        <td> <span class="text-danger">3500</span> </td>
                        <td>
                            <span data-bs-toggle="modal" data-bs-target="#TransferSend" class="cursor-pointer badge bg-success">Transfer Send</a>
                        </td>
                        <td>480000</td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class="bx bxs-send"></i>
                                </a>

                                <a href="{{ route('wallet-movements.details') }}" class="text-body"
                                    aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download" data-bs-original-title="Download">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="">
                                <a href="{{ route('invoice.create') }}">#5089WTR</a>
                                </br>20 Mar, 2022
                            </span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-warning badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-success">190000</span>
                        </td>
                        <td> - </td>
                        <td> - </td>
                        <td>
                            <span data-bs-toggle="modal" data-bs-target="#TransferReceived" class="cursor-pointer badge bg-success">Transfer Received</span>
                        </td>
                        <td>250000</td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class="bx bxs-send"></i>
                                </a>

                                <a href="{{ route('wallet-movements.details') }}" class="text-body"
                                    aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download" data-bs-original-title="Download">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="">
                                <a href="{{ route('invoice.create') }}">#5089PC-BFA</a>
                                </br>20 Mar, 2022
                            </span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-danger badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#userPOmailConfirmed">zmcclevertye@soundcloud.com</small>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td> - </td>
                        <td>
                            <span class="text-danger">300000</span>
                        </td>

                        <td> - </td>
                        <td>
                            <span class="badge bg-success cursor-pointer" data-bs-toggle="modal" data-bs-target="#PurchasedCTD">Purchase</span>
                        </td>
                        <td>300000</td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class="bx bxs-send"></i>
                                </a>

                                <a href="{{ route('wallet-movements.details') }}" class="text-body"
                                    aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download" data-bs-original-title="Download">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="">
                                <a href="{{ route('invoice.create') }}">#5089PP-BFA</a>
                                </br>20 Mar, 2022
                            </span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-danger badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small style="cursor: pointer;" class="text-success"
                                        >zmcclevertye@soundcloud.com</small>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td> - </td>
                        <td>
                            <span class="text-danger">300000</span>
                        </td>

                        <td> - </td>
                        <td>
                            <span data-bs-toggle="modal"
                                        data-bs-target="#PostulateCTD" class="cursor-pointer badge bg-success">Purchase</span>
                        </td>
                        <td>300000</td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class="bx bxs-send"></i>
                                </a>

                                <a href="{{ route('wallet-movements.details') }}" class="text-body"
                                    aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download" data-bs-original-title="Download">
                                    <i class="bx bx-download"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="">
                                <a href="{{ route('invoice.create') }}">#5089PS</a>
                                </br>20 Mar, 2022
                            </span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-danger badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate">
                                        <span class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small class="text-success"
                                        >zmcclevertye@soundcloud.com</small>
                                    <span class="d-none">Bangladesh</span>
                                </div>
                            </div>
                        </td>
                        <td> - </td>
                        <td>
                            <span class="text-danger">300000</span>
                        </td>

                        <td> - </td>
                        <td>
                            <span data-bs-toggle="modal" data-bs-target="#PurchasedPackage"
                                class="cursor-pointer badge bg-success">Purchase</span>
                        </td>
                        <td>300000</td>
                        <td>
                            <div class="d-flex align-items-center" style="gap: 8px;">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Send Mail" data-bs-original-title="Send Mail">
                                    <i class="bx bxs-send"></i>
                                </a>

                                <a href="{{ route('wallet-movements.details') }}" class="text-body"
                                    aria-label="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Download" data-bs-original-title="Download">
                                    <i class="bx bx-download"></i>
                                </a>
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
                    <input type="text" id="floatingInput" class="form-control"
                        placeholder="Enter Wallet deposit Title">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" id="floatingInput" class="form-control"
                        placeholder="Enter Wallet deposit title size">
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

    <div class="modal fade" id="PurchasedPackage" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card">
                        <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        <div class="card-header pt-3 pb-2 py-2 border-bottom">
                            <h5 class="m-0 text-center">Purchasing From Wallet</h5>
                            <a href="#" class="text-center d-block mt-2">#5089PP</a>
                        </div>
                        <div class="card-body px-3 py-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-start text-uppercase">Starter</h5>

                                    <div class="text-center position-relative mb-4 pb-1">
                                        <div class="mb-2 d-flex">
                                            <h1 class="price-toggle text-primary price-yearly mb-0">$49</h1>
                                            <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$99</h1>
                                            <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                                        </div>
                                        <small
                                            class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$
                                            588 / year</small>
                                    </div>

                                    <p>All the basics for business that are just getting started</p>

                                    <hr>

                                    <ul class="list-unstyled pt-2 pb-1">
                                        <li class="mb-2">
                                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                                <i class="bx bx-check bx-xs"></i>
                                            </span>
                                            Up to 10 users
                                        </li>
                                        <li class="mb-2">
                                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                                <i class="bx bx-check bx-xs"></i>
                                            </span>
                                            150+ components
                                        </li>
                                        <li class="mb-2">
                                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                                <i class="bx bx-check bx-xs"></i>
                                            </span>
                                            Basic support on Github
                                        </li>
                                        <li class="mb-2">
                                            <span
                                                class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                                <i class="bx bx-x fs-5 lh-1"></i>
                                            </span>
                                            Monthly updates
                                        </li>
                                        <li class="mb-2">
                                            <span
                                                class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                                <i class="bx bx-x fs-5 lh-1"></i>
                                            </span>
                                            Integrations
                                        </li>
                                        <li class="mb-2">
                                            <span
                                                class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                                <i class="bx bx-x fs-5 lh-1"></i>
                                            </span>
                                            Full Support
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="PurchasedCTD" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0"> <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal"
                        aria-label="Close" style="display: grid;place-items: end;"></button>

                    <div class="card">
                        <div class="card-header pt-3 pb-2 py-2 border-bottom">
                            <h5 class="m-0 text-center">Purchasing from Wallet</h5>
                            <a href="#" class="text-center d-block mt-2">#5089PC-BFA</a>
                        </div>
                        <div class="card-body px-3 py-3">
                            <ul class="m-0 p-0">
                                <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                    <span>Balance (F CFA)</span>
                                    <span>15 00 000</span>
                                </li>
                                <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                    <span>Amount Paid(F CFA)</span>
                                    <span>5 00 000</span>
                                </li>
                                <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                    <span>Payment date</span>
                                    <span>12/09/2023, 12:50PM</span>
                                </li>
                                <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                    <span>Payment Purpose</span>
                                    <span>Pay to Consult</span>
                                </li>
                                <li class="py-2 px-0 d-flex flex-column">
                                    <div class="d-flex">
                                        <i class="fa-solid fa-circle-check me-2 text-success"></i>CTD Title (3 Lots)
                                    </div>
                                    <div class="border px-2 py-1 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit.
                                        Nulla molestias voluptatem blanditiis praesentium?</div>
                                    <ul class="p-0 ms-3">
                                        <li class="d-flex flex-column py-2">
                                            <span class="d-flex justify-content-between">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Lot-1:
                                                </span>
                                                <span>
                                                    40000 F CFA
                                                </span>
                                            </span>
                                            <span class="mt-2 border px-3 py-2">Lorem ipsum dolor sit amet consectetur
                                                adipisicing
                                                elit. Quos, accusamus.</span>
                                        </li>
                                        <li class="d-flex flex-column py-2">
                                            <span class="d-flex justify-content-between">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Lot-2:
                                                </span>
                                                <span>
                                                    40000 F CFA
                                                </span>
                                            </span>
                                            <span class="mt-2 border px-3 py-2">Lorem ipsum dolor sit amet consectetur
                                                adipisicing
                                                elit. Quos, accusamus.</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="PostulateCTD" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0"> <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal"
                        aria-label="Close" style="display: grid;place-items: end;"></button>
                        <div class="card">
                            <div class="card-header pt-3 pb-2 py-2 border-bottom">
                                <h5 class="m-0 text-center">Wallet Deposit</h5>
                                <a href="#" class="text-center d-block mt-2">#5089PP-BFA</a>
                            </div>
                            <div class="card-body px-3 py-3">
                                <ul class="m-0 p-0">
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Balance (F CFA)</span>
                                        <span>15 00 000</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Amount Paid(F CFA)</span>
                                        <span>5 00 000</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Payment date</span>
                                        <span>12/09/2023, 12:50PM</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Payment Purpose</span>
                                        <span>Pay to Postulate</span>
                                    </li>
                                    <li class="py-2 px-0 d-flex flex-column">
                                        <div class="d-flex">
                                            <i class="fa-solid fa-circle-check me-2 text-success"></i>CTD Title (3 Lots)
                                        </div>
                                        <div class="border px-2 py-1 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Nulla molestias voluptatem blanditiis praesentium?</div>
                                        <ul class="p-0 ms-3">
                                            <li class="d-flex flex-column py-2">
                                                <span class="d-flex justify-content-between">
                                                    <span>
                                                        <i class="fa-solid fa-circle-check me-2 text-success"></i>Lot-1:
                                                    </span>
                                                    <span>
                                                        40000 F CFA
                                                    </span>
                                                </span>
                                                <span class="mt-2 border px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Quos, accusamus.</span>
                                            </li>
                                            <li class="d-flex flex-column py-2">
                                                <span class="d-flex justify-content-between">
                                                    <span>
                                                        <i class="fa-solid fa-circle-check me-2 text-success"></i>Lot-2:
                                                    </span>
                                                    <span>
                                                        40000 F CFA
                                                    </span>
                                                </span>
                                                <span class="mt-2 border px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Quos, accusamus.</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="TransferSend" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0"> <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal"
                        aria-label="Close" style="display: grid;place-items: end;"></button>
                        <div class="card">
                            <div class="card-header pt-3 pb-2 py-2 border-bottom">
                                <h5 class="m-0 text-center">Wallet Transfer Send</h5>
                                <a href="#" class="text-center d-block mt-2">#5089WTS</a>
                            </div>
                            <div class="card-body px-3 py-3">
                                <ul class="m-0 p-0">
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Balance (F CFA)</span>
                                        <span>15 00 000</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Amount Send(F CFA)</span>
                                        <span>5 00 000</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Sending date</span>
                                        <span>12/09/2023, 12:50PM</span>
                                    </li>
                                    <li class="py-2 px-0 d-flex flex-column">
                                        <div class="d-flex justify-content-between mb-1 pt-2 pb-2">
                                            <span class="fw-bold">Receiver Information</span>
                                            <span><a href="#">IER.Inc</a></span>
                                        </div>
                                        <ul class="p-0">
                                            <li class="d-flex justify-content-between py-2">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Email ID:
                                                </span>
                                                <span>xxxxxxxxxxxxx</span>
                                            </li>
                                            <li class="d-flex justify-content-between py-2">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Contact:
                                                </span>
                                                <span>xxxxxxxxxxxxx</span>
                                            </li>
                                            <li class="d-flex flex-column py-2">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Company Address:
                                                </span>
                                                <span class="mt-2 border px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Quos, accusamus.</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="TransferReceived" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0"> <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal"
                        aria-label="Close" style="display: grid;place-items: end;"></button>
                        <div class="card">
                            <div class="card-header pt-3 pb-2 py-2 border-bottom">
                                <h5 class="m-0 text-center">Wallet Transfer Received</h5>
                                <a href="#" class="text-center d-block mt-2">#5089WTR</a>
                            </div>
                            <div class="card-body px-3 py-3">
                                <ul class="m-0 p-0">
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Balance (F CFA)</span>
                                        <span>15 00 000</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Amount Recevied(F CFA)</span>
                                        <span>5 00 000</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Receiving date</span>
                                        <span>12/09/2023, 12:50PM</span>
                                    </li>
                                    <li class="py-2 px-0 d-flex flex-column">
                                        <div class="d-flex justify-content-between mb-1 pt-2 pb-2">
                                            <span class="fw-bold">Sender Information</span>
                                            <span><a href="#">IER.Inc</a></span>
                                        </div>
                                        <ul class="p-0">
                                            <li class="d-flex justify-content-between py-2">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Email ID:
                                                </span>
                                                <span>xxxxxxxxxxxxx</span>
                                            </li>
                                            <li class="d-flex justify-content-between py-2">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Contact:
                                                </span>
                                                <span>xxxxxxxxxxxxx</span>
                                            </li>
                                            <li class="d-flex flex-column py-2">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>Company Address:
                                                </span>
                                                <span class="mt-2 border px-3 py-2">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Quos, accusamus.</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="WalletDeposit" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0"> <button type="button" class="btn-close mt-2 me-2" data-bs-dismiss="modal"
                        aria-label="Close" style="display: grid;place-items: end;"></button>
                        <div class="card">
                            <div class="card-header pt-3 pb-2 py-2 border-bottom">
                                <h5 class="m-0 text-center">Wallet Deposit</h5>
                                <a href="#" class="text-center d-block mt-2">#5089WD</a>
                            </div>
                            <div class="card-body px-3 py-3">
                                <ul class="m-0 p-0">
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Balance (F CFA)</span>
                                        <span>15 00 000</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Amount Deposited(F CFA)</span>
                                        <span>5 00 000</span>
                                    </li>
                                    <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                                        <span>Deposit date</span>
                                        <span>12/09/2023, 12:50PM</span>
                                    </li>
                                    <li class="py-2 px-0 d-flex flex-column">
                                        <div class="d-flex justify-content-between mb-1 pt-2 pb-2">
                                            <span class="fw-bold">Payment method used</span>
                                            <span><i class="fab fa-paypal fa-2x fa-fade"></i></span>
                                        </div>
                                        <ul class="p-0">
                                            <li class="d-flex justify-content-between py-2">
                                                <span>
                                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>PayPal ID:
                                                </span>
                                                <span>xxxxxxxxxxxxx</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
