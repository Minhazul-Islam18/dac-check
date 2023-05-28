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
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.1/css/select.dataTables.min.css" />
    <link type="text/css"
        href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/css/email-module.css') }}" />
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
    <script src="https://cdn.datatables.net/select/1.6.1/js/dataTables.select.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/35.3.1/ckeditor.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script type="text/javascript"
        src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
    <script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/block-ui/block-ui.js')}}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/js/app-email.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>

    <!-- Invoice List Table -->
    <div class="card py-3">
        <div class="container">
            <table id="newsletter" class="table table-striped table-hover dt-responsive">
                <caption class="sr-only"></caption>
                <thead class="bg-primary">
                    <tr>
                        <th></th>
                        <th scope="col">Newsletter Subscribers</th>
                        <th scope="col">Subscription Date</th>
                        <th scope="col">Last mail sent</th>
                        <th scope="col">Account Owner</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </thead>
                <tfoot class="hidden">
                    <tr>
                        <th></th>
                        <th scope="col">Newsletter Subscribers</th>
                        <th scope="col">Subscription Date</th>
                        <th scope="col">Last mail sent</th>
                        <th scope="col">Account Owner</th>
                        <th scope="col cell-fit">Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate"><span
                                            class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small
                                        class="text-danger">zmcclevertye@soundcloud.com</small><span class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>30 Dec. 2022, 01:45 AM</span>
                        </td>
                        <td>
                            <span>12 Jan. 2023, 20:01 PM</span>
                        </td>
                        <td>
                            <span>No</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar avatar-sm me-3">
                                        <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar"
                                            class="rounded-circle">
                                        <span
                                            class="badge rounded-pill bg-success badge-dot badge-notifications user-luminos"></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ route('user-view-account') }}" class="text-body text-truncate"><span
                                            class="fw-semibold">Zsazsa
                                            McCleverty</span></a><small
                                        class="text-success">zmcclevertye@soundcloud.com</small><span class="d-none">Burkina
                                        Faso</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span>30 Dec. 2022, 01:45 AM</span>
                        </td>
                        <td>
                            <span>12 Jan. 2023, 20:01 PM</span>
                        </td>
                        <td>
                            <span>Yes</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('earn-ctd-preview', ['earner' => 'administrator']) }}"
                                    data-bs-toggle="tooltip" class="text-body" data-bs-placement="top"
                                    aria-label="Preview Invoice" data-bs-original-title="Preview Invoice"><i
                                        class="bx bxs-trash mx-1"></i>
                                </a>
                                <a href="app/invoice/preview" data-bs-toggle="tooltip" class="text-body"
                                    data-bs-placement="top" aria-label="Preview Invoice"
                                    data-bs-original-title="Preview Invoice">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

    <!-- Compose Email -->
    <div class="app-email-compose modal" id="emailComposeSidebar" tabindex="-1"
        aria-labelledby="emailComposeSidebarLabel" aria-hidden="true">
        <div class="modal-dialog m-0 me-md-4 mb-4 modal-lg" style="position: absolute;bottom: 0;right: 0;width: 100%;">
            <div class="modal-content p-0">
                <div class="modal-header py-3">
                    <h5 class="modal-title fs-5">Compose Mail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body flex-grow-1 pb-sm-0 p-4 py-2">
                    <form class="email-compose-form">
                        <div class="email-compose-to d-flex justify-content-between align-items-center">
                            <label class="form-label mb-0" for="emailContacts">To:</label>
                            <div class="select2-primary border-0 shadow-none flex-grow-1 mx-2">
                                <select class="select2 select-email-contacts form-select" id="emailContacts"
                                    name="emailContacts" multiple>
                                    <option data-avatar="1.png" value="Jane Foster">Jane Foster</option>
                                    <option data-avatar="3.png" value="Donna Frank">Donna Frank</option>
                                    <option data-avatar="5.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                    <option data-avatar="7.png" value="Lori Spears">Lori Spears</option>
                                    <option data-avatar="9.png" value="Sandy Vega">Sandy Vega</option>
                                    <option data-avatar="11.png" value="Cheryl May">Cheryl May</option>
                                </select>
                            </div>
                            <div class="email-compose-toggle-wrapper">
                                <a class="email-compose-toggle-cc" href="javascript:void(0);">Cc |</a>
                                <a class="email-compose-toggle-bcc" href="javascript:void(0);">Bcc</a>
                            </div>
                        </div>

                        <div class="email-compose-cc d-none">
                            <hr class="mx-n4 my-2">
                            <div class="d-flex align-items-center">
                                <label for="email-cc" class="form-label mb-0">Cc:</label>
                                <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2"
                                    id="email-cc" placeholder="someone@email.com">
                            </div>
                        </div>
                        <div class="email-compose-bcc d-none">
                            <hr class="mx-n4 my-2">
                            <div class="d-flex align-items-center">
                                <label for="email-bcc" class="form-label mb-0">Bcc:</label>
                                <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2"
                                    id="email-bcc" placeholder="someone@email.com">
                            </div>
                        </div>
                        <hr class="mx-n4 my-2">
                        <div class="email-compose-subject d-flex align-items-center mb-2">
                            <label for="email-subject" class="form-label mb-0">Subject:</label>
                            <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2"
                                id="email-subject" placeholder="Project Details">
                        </div>
                        <div class="email-compose-message mx-n4">
                            <div class="d-flex justify-content-end">
                                <div class="email-editor-toolbar border-bottom-0 w-100">
                                    <span class="ql-formats me-0">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-list" value="ordered"></button>
                                        <button class="ql-list" value="bullet"></button>
                                        <button class="ql-link"></button>
                                        <button class="ql-image"></button>
                                    </span>
                                </div>
                            </div>
                            <div class="email-editor"></div>
                        </div>
                        <hr class="mx-n4 mt-0 mb-2">
                        <div class="email-compose-actions d-flex justify-content-between align-items-center mt-3 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="btn-group">
                                    <button type="reset" class="btn btn-primary" data-bs-dismiss="modal"
                                        aria-label="Close">Send</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Schedule send</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Save draft</a></li>
                                    </ul>
                                </div>
                                <label for="attach-file"><i class="bx bx-paperclip cursor-pointer ms-2"></i></label>
                                <input type="file" name="file-input" class="d-none" id="attach-file">
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="dropdown">
                                    <i class="bx bx-dots-vertical-rounded cursor-pointer" data-bs-toggle="dropdown"
                                        aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMoreActions">
                                        <li><button type="button" class="dropdown-item">Add Label</button></li>
                                        <li><button type="button" class="dropdown-item">Plain text mode</button></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><button type="button" class="dropdown-item">Print</button></li>
                                        <li><button type="button" class="dropdown-item">Check Spelling</button></li>
                                    </ul>
                                </div>
                                <button type="reset" class="btn" data-bs-dismiss="modal" aria-label="Close"><i
                                        class="bx bx-trash"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Compose Email -->

    <!-- Optional: Place to the bottom of scripts -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.ckeditor').ckeditor();

        });
    </script>
@endsection
