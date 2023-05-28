@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="https://ghinda.net/css-toggle-switch/dist/toggle-switch.css" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/BackendSettings.js') }}"></script>
@endsection

@section('content')
    <div class="row mb-4">
        <div class="col-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 mb-0">
                    <li class="breadcrumb-item">
                        <a href="/admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/admin/packages"></a>
                        Homepage
                    </li>
                    <li class="breadcrumb-item active">Section Customization</li>
                </ol>
            </nav>
        </div>
        <div class="col-3">
            <div class="lang-filter">
                <select name="lang" id="lang" class="form-select">
                    <optgroup>
                        <option value="" selected>Language</option>
                        <option value="en">English</option>
                        <option value="ar">Arabic</option>
                        <option value="fr">French</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>

    <!-- Users List Table -->
    <div class="card py-4">
        <!-- Begin Content		-->
        <div class="container">
            <form class="d-flex flex-column align-items-center" action="" method="post">
                <div class="settings">
                    <div class="py-3 border-bottom">
                        <div class="mb-2">Features Section</div>
                        <div class="switch-block">
                            <label class="switch-light switch-candy">
                                <input type="checkbox" name="" id="" />
                                <span>
                                    <span>Active</span>
                                    <span>Deactive</span>
                                    <a></a>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Intro Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Statistics Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Overlay Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">How it's work Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">CTD Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Client Testimonials Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Partners Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Pricing Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Call to Action Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Overlay Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Team Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Our Services Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Gallery Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Blog Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">FAQ's Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                    <div class="row border-bottom py-3">
                        <div class="col-md-6 border-end">
                            <div class="">
                                <div class="mb-2">Footer Section</div>
                                <div class="switch-block">
                                    <label class="switch-light switch-candy">
                                        <input type="checkbox" name="" id="" />
                                        <span>
                                            <span>Active</span>
                                            <span>Deactive</span>
                                            <a></a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 settingsPickr">
                            <label for="" class="mb-2">Background Color</label>
                            <div class="color-picker-nano"></div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Update" class="btn btn-info mt-4">
            </form>

        </div>
    </div>
@endsection
