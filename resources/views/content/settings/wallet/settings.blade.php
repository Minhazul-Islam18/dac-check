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
        <div class="col-md-12">
            <h5 class="m-0">Users Wallet</h5>
            <div class="card py-3 mt-3">
                <div class="card-header border-bottom py-2 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mb-0">Custom & Ceiling Deposit.</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                  <label for="" class="form-label">Minimum Deposit (F CFA)</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Min Deposit">
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">Maximum Deposit (F CFA)</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Max Deposit">
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">Ceiling Deposit (F CFA)</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Ceiling Deposit">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Minimum Deposit: This is the minimum amount that user can deposit in his <strong>e-Wallet</strong> during custom deposit</li>
                                    <li class="list-group-item">Maximum Deposit: This is the maximum amount that user can deposit in his <strong>e-Wallet</strong> during custom deposit</li>
                                    <li class="list-group-item">Ceiling Deposit: This is the authorized in the user's <strong>e-Wallet</strong></li>
                                  </ol>
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
                <div class="card-header border-bottom py-2 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="mb-0">Custom & Ceiling Deposit.</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                  <label for="" class="form-label">Transfarable Deposit (%)</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Transfarable Deposit">
                                </div>
                                <div class="mb-3">
                                  <label for="" class="form-label">DAC-Rapide's earn on transfar Deposit</label>
                                  <input type="text"
                                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Ceiling Deposit">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Transfarable Deposit: This is the maximam transfar amount authorized from user's <strong>e-Wallet</strong>. It is expressed as percentage (%).</li>
                                    <li class="list-group-item">DAC-Rapide's earn on transfar Deposit: This is the DAC-Rapide's earn expressed in terms of percentage on each deposit transfer!</li>
                                  </ol>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
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
