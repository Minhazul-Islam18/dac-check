@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-user-view.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
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
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-edit-user.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/app-user-view.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/app-user-view-account.js') }}"></script> --}}
    <script src="{{ asset('assets/js/user-view.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">User / View /</span> Account
    </h4>
    <div class="row gy-4">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class=" d-flex align-items-center flex-column">
                            <img class="img-fluid rounded my-4" src="{{ asset('assets/img/avatars/9.png') }}"
                                height="110" width="110" alt="User avatar" />
                            <div class="user-info text-center">
                                <h5 class="mb-2">Violet Mendoza</h5>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                    <span class="badge bg-label-info">Computer</span>
                                    <span class="badge bg-white text-secondary badge-notifications">12</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column py-3 border-bottom">
                        <div class="d-flex justify-content-between">
                            <small>Profile Completion</small> <small class="mb-1">78%</small>
                        </div>
                        <div class="progress w-100 me-3" style="height: 6px;">
                            <div class="progress-bar bg-success" style="width: 78%" aria-valuenow="78%" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between flex-wrap my-1 py-3 gap-2">
                        <div class="d-flex align-items-start mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-task bx-sm"></i></span>
                            <div>
                                <h5 class="mb-0">1.23k</h5>
                                <span>CTD Paid to Postulate</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-task bx-sm"></i></span>
                            <div>
                                <h5 class="mb-0">568</h5>
                                <span>CTD Paid to Consult</span>
                            </div>
                        </div>
                    </div>
                    <h5 class="pb-2 border-bottom mb-4">Details</h5>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Username:</span>
                                <span>violet.dev</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Email:</span>
                                <span>vafgot@vultukir.org</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Type of Company:</span>
                                <span>SARL</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">IFU Number or equivalent:</span>
                                <span>xxxxxxxxxxxx</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">RCCM Number or equivalent:</span>
                                <span>xxxxxxxxxxxx</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Contact:</span>
                                <span>xxxxxxxxxxxx</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Company website:</span>
                                <span>www.xyz.com</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Company address:</span>
                                <span class="d-block border rounded py-2 px-3 mt-2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Aliquam, laboriosam.</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Company short bio:</span>
                                <span class="d-block border rounded py-2 px-3 mt-2">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Aliquam, laboriosam.</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Languages:</span>
                                <span>French</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Country:</span>
                                <span>Burkina Faso</span>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="fw-bold me-2">Status:</span>
                                <span class="badge bg-label-success">Active</span>
                            </li>
                            {{-- <li class="mb-3">
                                <span class="fw-bold me-2">Role:</span>
                                <span>Author</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Tax id:</span>
                                <span>Tax-8965</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Contact:</span>
                                <span>(123) 456-7890</span>
                            </li> --}}
                        </ul>
                        <div class="d-flex justify-content-center pt-3">
                            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                data-bs-toggle="modal">Edit</a>
                            <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspend</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /User Card -->
            <!-- Plan Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <span class="badge bg-label-primary">Standard</span>
                        <div class="d-flex justify-content-center">
                            <sup class="h5 pricing-currency mt-3 mt-sm-4 mb-0 me-1 text-primary">$</sup>
                            <h1 class="display-3 fw-normal mb-0 text-primary">99</h1>
                            <sub class="fs-6 pricing-duration mt-auto mb-4">/month</sub>
                        </div>
                    </div>
                    <ul class="ps-3 g-2 mb-3">
                        <li class="mb-2">10 Users</li>
                        <li class="mb-2">Up to 10 GB storage</li>
                        <li>Basic Support</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <h6 class="mb-0">Days</h6>
                        <h6 class="mb-0">65% Completed</h6>
                    </div>
                    <div class="progress mb-1" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>4 days remaining</span>
                    <div class="d-grid w-100 mt-3 pt-2">
                        <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade
                            Plan</button>
                    </div>
                </div>
            </div>
            <!-- /Plan Card -->
        </div>
        <!--/ User Sidebar -->

        <!-- User Content -->
        <div class="col-xl-5 col-lg-5 col-md-5">
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
            <div class="card mt-3">
                <div class="card-header pt-3 pb-2 py-2 border-bottom">
                    <h5 class="m-0 text-center">Wallet Transfar Send</h5>
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
            <div class="card mt-3">
                <div class="card-header pt-3 pb-2 py-2 border-bottom">
                    <h5 class="m-0 text-center">Wallet Deposit</h5>
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
            <div class="card mt-3">
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
            <div class="card mt-3">
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
            <div class="card mt-3">
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
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                        <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                                    Monthly updates
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                        <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                                    Integrations
                                </li>
                                <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                        <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                                    Full Support
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header pt-3 pb-2 py-2 border-bottom">
                    <h5 class="m-0 text-center">Others Wallet Movement</h5>
                </div>
                <div class="card-body px-3 py-3">
                    <ul class="m-0 p-0">
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089WTR</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089WTS</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                        <li class="border-bottom py-2 px-0 d-flex justify-content-between">
                            <span>
                                <a href="#">#5089BFA</a>
                            </span>
                            <span>15 00 at 12/05/2023</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ User Content -->
        <div class="col-xl-3 col-lg-3 col-md-3">
            <div class="card">
                <div class="card-header pt-3 pb-2 py-2 border-bottom">
                    <h5 class="m-0 text-center">Actions</h5>
                </div>
                <div class="card-body px-3 py-3">
                    <a href="{{ route('invoice.create') }}">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                            data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fas fa-eye me-2"></i></i>Preview
                            </span>
                        </button>
                    </a>
                    <a href="http://127.0.0.1:8000/admin/ctd/preview">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                            data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fas fa-print me-2  "></i> Print Invoice
                            </span>
                        </button>
                    </a>
                    <a href="http://127.0.0.1:8000/admin/ctd/edit">
                        <button class="btn btn-label-secondary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                            data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fas fa-download  me-2  "></i> Download
                            </span>
                        </button>
                    </a>
                    <a href="http://127.0.0.1:8000/admin/ctd/preview">
                        <button class="btn btn-primary d-grid w-100 mb-3" data-bs-toggle="offcanvas"
                            data-bs-target="#sendInvoiceOffcanvas">
                            <span class="d-flex align-items-center justify-content-center text-nowrap">
                                <i class="fas fa-paper-plane me-2   "></i> Send Mail
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('_partials/_modals/modal-edit-user')
    @include('_partials/_modals/modal-upgrade-plan')
    <!-- /Modal -->
@endsection
