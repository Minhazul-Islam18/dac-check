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
    <script src="{{ asset('assets/js/BackendSettings.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Invoice /</span> List
    </h4>

    <!-- Invoice List Table -->
    <div class="card py-3">
        <div class="card-header">
            <div class="row">
                <div class="col-3">
                    <h5>General Settings</h5>
                </div>
                <div class="col-6"></div>
                <div class="col-3 text-end">
                    <a class="btn btn-success btn-md " href=" " role="button" type="submit">Update</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="my-3">
                            <label for="filepond">Site Logo</label>
                            <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                                data-max-files="3" />
                            <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                                allowed.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="my-3">
                            <label for="filepond">Favicon</label>
                            <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                                data-max-files="3" />
                            <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                                allowed.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="my-3">
                            <label for="filepond" class=" mb-2">Breadcrumd Image</label>
                            <input type="file" class="filepond" name="filepond" multiple data-max-file-size="3MB"
                                data-max-files="3" />
                            <span class="d-flex" style="color: #d95a00;font-weight: 600;">* JPG, PNG, JPEG, SVG types are
                                allowed.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="formId1" id="formId1" placeholder="">
                            <label for="formId1">Site Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="formId1" id="formId1" placeholder="">
                            <label for="formId1">Site Motto</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="formId1" id="formId1" placeholder="">
                            <label for="formId1">Base Currency Symbol</label>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="formId1" id="formId1" placeholder="">
                            <label for="formId1">Timezone</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Select Currency Symbol position</option>
                                <option value="1">Start</option>
                                <option value="2">End</option>
                            </select>
                            <label for="floatingSelect">Base Currency Symbol position</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="formId1" id="formId1" placeholder="">
                            <label for="formId1">Base Currency Text</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Select Currency Text position</option>
                                <option value="1">Start</option>
                                <option value="2">End</option>
                            </select>
                            <label for="floatingSelect">Base Currency Text position</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="" style="margin-top: -5px;display: block;margin-bottom: 2px;">Currency
                            Equivalent to
                            Currency</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">1 USD</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">Francs CFA</span>
                        </div>
                    </div>
                    <div class="col-md-6 settingsPickr py-3">
                        <label for="">Primary Color</label>
                        <div class="color-picker-nano"></div>
                    </div>
                    <div class="col-md-6 settingsPickr py-3">
                        <label for="">Secondary Color</label>
                        <div class="color-picker-nano"></div>
                    </div>
                    <div class="col-md-6 settingsPickr py-3">
                        <label for="">Hero area overlay Color</label>
                        <div class="color-picker-nano"></div>
                    </div>
                    <div class="col-md-6 settingsPickr py-3">
                        <label for="">Breadcrumb area overlay Color</label>
                        <div class="color-picker-nano"></div>
                    </div>
                    <div class="col-md-6 settingsPickr py-3">
                        <label for="">Header Banner background Color</label>
                        <div class="color-picker-nano"></div>
                    </div>
                    <div class="col-md-6 settingsPickr py-3">
                        <label for="">Footer Banner background Color</label>
                        <div class="color-picker-nano"></div>
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
    <div class="card py-3 mt-3">
        <div class="card-header border-bottom py-2 mb-4">
            <div class="row">
                <div class="col-6">
                    <h6 class="mb-0">Cookie Alert</h6>
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
                    <div class="col-md-4">
                        <label for="">
                            Cookie Alert Text
                        </label>
                    </div>
                    <div class="col-md-8">
                        <textarea class="ckeditor form-control" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, debitis.</textarea>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
    <script>
        let editor = document.querySelector('.ckeditor');

        function CustomizationPlugin(editor) {}
        ClassicEditor
            .create(editor, {
                extraPlugins: [CustomizationPlugin]
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    @endsection
