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
            <div class="accordion my-3" id="accordionExample">
                <div class="card accordion-item active">
                    <h2 class="accordion-header" id="headingOne">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                            About Widget
                        </button>
                    </h2>
                </div>
                <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0 pb-2">
                        <div class="card py-3 mt-3">
                            <div class="card-header border-bottom py-2 mb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="mb-0">About Widget</h6>
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
                                        <div class="col-12">
                                            <input type="file" name="" id="">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">
                                                Description
                                            </label>
                                            <textarea class="ckeditor form-control" id="editor2" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, debitis.</textarea>
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
                </div>

                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                            Contact Widget
                        </button>
                    </h2>
                </div>
                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0 pb-2">
                        <div class="card py-3 mt-3">
                            <div class="card-header border-bottom py-2 mb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="mb-0">Contact Widget</h6>
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
                                    <div class="mb-3">
                                        <label for="" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Website</label>
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="">
                                    </div>
                                    <label for="" class="form-label">Phone</label>
                                    <div class="row targetDiv">
                                        <div class="col-md-12">
                                            <div id="group1" class="fvrduplicate">
                                                <div class="row mb-3 entry">
                                                    <div class="col-xs-10 col-md-10">
                                                        <input type="text" class="form-control" name="[]"
                                                            id="" aria-describedby="helpId" placeholder="">
                                                    </div>
                                                    <div
                                                        class="col-xs-2 col-md-2 d-flex align-items-center justify-content-end">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success btn-sm btn-add">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
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
                </div>

                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                            Link widget 1
                        </button>
                    </h2>
                </div>
                <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0 pb-2">
                        <div class="card py-3 mt-3">
                            <div class="card-header border-bottom py-2 mb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="mb-0">Link Widget 1</h6>
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
                                    <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="Main Menu">
                                    </div>

                                    <label for="" class="form-label">Links</label>
                                    <div class="row targetDiv">
                                        <div class="col-md-12">
                                            <div id="group1" class="fvrduplicate">
                                                <div class="row mb-3 entry">
                                                    <div class="col-xs-10 col-md-5">
                                                        <input type="text" class="form-control" name="[]"
                                                            id="" aria-describedby="helpId" placeholder="Home">
                                                    </div>
                                                    <div class="col-xs-10 col-md-5">
                                                        <input type="text" class="form-control" name="[]"
                                                            id="" aria-describedby="helpId" placeholder="{{URL::current()}}">
                                                    </div>
                                                    <div
                                                        class="col-xs-2 col-md-2 d-flex align-items-center justify-content-end">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success btn-sm btn-add">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
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
                </div>

                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                            Link widget 2
                        </button>
                    </h2>
                </div>
                <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0 pb-2">
                        <div class="card py-3 mt-3">
                            <div class="card-header border-bottom py-2 mb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="mb-0">Link Widget 2</h6>
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
                                    <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="Quick Search">
                                    </div>

                                    <label for="" class="form-label">Links</label>
                                    <div class="row targetDiv">
                                        <div class="col-md-12">
                                            <div id="group1" class="fvrduplicate">
                                                <div class="row mb-3 entry">
                                                    <div class="col-xs-10 col-md-5">
                                                        <input type="text" class="form-control" name="[]"
                                                            id="" aria-describedby="helpId" placeholder="All Members">
                                                    </div>
                                                    <div class="col-xs-10 col-md-5">
                                                        <input type="text" class="form-control" name="[]"
                                                            id="" aria-describedby="helpId" placeholder="{{URL::current()}}">
                                                    </div>
                                                    <div
                                                        class="col-xs-2 col-md-2 d-flex align-items-center justify-content-end">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success btn-sm btn-add">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
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
                </div>

                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#LinkWidget3" aria-expanded="false" aria-controls="LinkWidget3">
                            Link widget 3
                        </button>
                    </h2>
                </div>
                <div id="LinkWidget3" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0 pb-2">
                        <div class="card py-3 mt-3">
                            <div class="card-header border-bottom py-2 mb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="mb-0">Link Widget 3</h6>
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
                                    <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="Useful Links">
                                    </div>

                                    <label for="" class="form-label">Links</label>
                                    <div class="row targetDiv">
                                        <div class="col-md-12">
                                            <div id="group1" class="fvrduplicate">
                                                <div class="row mb-3 entry">
                                                    <div class="col-xs-10 col-md-5">
                                                        <input type="text" class="form-control" name="[]"
                                                            id="" aria-describedby="helpId" placeholder="FAQ's">
                                                    </div>
                                                    <div class="col-xs-10 col-md-5">
                                                        <input type="text" class="form-control" name="[]"
                                                            id="" aria-describedby="helpId" placeholder="{{URL::current()}}">
                                                    </div>
                                                    <div
                                                        class="col-xs-2 col-md-2 d-flex align-items-center justify-content-end">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success btn-sm btn-add">
                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
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
                </div>

                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#MobileAppWidget" aria-expanded="false" aria-controls="MobileAppWidget">
                            Mobile App Widget
                        </button>
                    </h2>
                </div>
                <div id="MobileAppWidget" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0 pb-2">
                        <div class="card py-3 mt-3">
                            <div class="card-header border-bottom py-2 mb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="mb-0">Mobile App Widget</h6>
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
                                    <div class="mb-3">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="" id=""
                                            aria-describedby="helpId" placeholder="Mobile Apps">
                                    </div>
                                    <div class="row">
                                        <small>Play Store</small>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="file" name="" id="">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <label for="">Link</label>
                                              <input type="text"
                                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="#">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <small>App Store</small>
                                        <div class="col-md-6 col-xs-12">
                                            <input type="file" name="" id="">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <label for="">Link</label>
                                              <input type="text"
                                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="#">
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
                </div>
            </div>
            <div class="card py-3 mt-3">
                <div class="card-header border-bottom py-2 mb-4">
                    <div class="row">
                        <div class="col-112">
                            <h6 class="mb-0">Footer Bottom</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="h6">
                                    Copyright Text
                                </label>
                                <textarea class="ckeditor form-control" id="editor" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, debitis.</textarea>
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
            <div class="card py-3 mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="mb-0">
                                Social Link Widget
                            </h6>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        let editor = document.querySelectorAll('.ckeditor');
        editor.forEach(editor => {
            CKEDITOR.replace(editor, {
                skin: 'moono',
                enterMode: CKEDITOR.ENTER_BR,
                shiftEnterMode: CKEDITOR.ENTER_P,
                toolbar: [{
                        name: 'basicstyles',
                        groups: ['basicstyles'],
                        items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor']
                    },
                    {
                        name: 'styles',
                        items: ['Format', 'Font', 'FontSize']
                    },
                    {
                        name: 'scripts',
                        items: ['Subscript', 'Superscript']
                    }, {
                        name: 'document',
                        items: ['Source']
                    },
                    {
                        name: 'justify',
                        groups: ['blocks', 'align'],
                        items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                    },
                    {
                        name: 'paragraph',
                        groups: ['list', 'indent'],
                        items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                    },
                    {
                        name: 'links',
                        items: ['Link', 'Unlink']
                    },
                    {
                        name: 'insert',
                        items: ['Image']
                    },
                    {
                        name: 'spell',
                        items: ['jQuerySpellChecker']
                    },
                    {
                        name: 'table',
                        items: ['Table']
                    }
                ],
            });
        });


        $(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();
                var controlForm = $(this).closest('.fvrduplicate'),
                    currentEntry = $(this).parents('.entry'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);
                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="fa fa-minus" aria-hidden="true"></i>');
            }).on('click', '.btn-remove', function(e) {
                $(this).closest('.entry').remove();
                return false;
            });
        });
    </script>
@endsection
