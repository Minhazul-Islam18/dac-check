@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/pickr/pickr-themes.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jszip/jszip.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pdfmake/pdfmake.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.print.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="https://cdn.jsdelivr.net/g/mark.js(jquery.mark.min.js),datatables.mark.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.9/js/bootstrap-select.min.js"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script>
@endsection

@section('page-script')
{{-- <script src="{{asset('assets/js/forms-pickers.js')}}"></script> --}}
<script src="{{asset('assets/js/packSubscribers.js')}}"></script>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style2 mb-0">
        <li class="breadcrumb-item">
            <a href="/admin">Home</a>
        </li>
        <li class="breadcrumb-item">Packages</li>
        <li class="breadcrumb-item active">Subscribers</li>
        </ol>
    </nav>
    </div>
  </div>
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total earn on packages.</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,45900 F CFA</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>DAC-Rapide</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total earn on monthly packages.</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">4,5679200 F CFA</h4>
              <small class="text-success">(-18%)</small>
            </div>
            <small>DAC-Rapide</small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total earn on yearly packages.</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,45900 F CFA</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>DAC-Rapide</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total packages subscribers.</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">89 300</h4>
              <small class="text-success">(-18%)</small>
            </div>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Users List Table -->
<div class="card py-4">
    <!-- Begin Content		-->
    <div class="container">
        <h4>Filter:</h4>
        <div class="filterable">
          <div class="dropFilterE d-flex">
            <div class="pe-2">
            <select id="packageFilter" name="packageFilter" class="form-select">
              <option value="" selected>Type of package</option>
              <option value="Basic">Basic</option>
              <option value="Enterprise">Enterprise</option>
            </select>
            </div>
            <div class="px-2">
            <select id="typeFilter" name="typeFilter" class="form-control">                
                <option value="" selected>Subscription type</option>
                <option value="Monthly">Monthly</option>
                <option value="Yearly">Yearly</option>
            </select>
            </div>
            <div class="px-2">
                <select name="statusType" id="statusFilter" class="form-select">
                    <optgroup>
                        <option value="" selected>Subscription status</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                    </optgroup>
                </select>
            </div>
        </div>
        </div>
        
        
        <table class="table table-striped table-hover dt-responsive" id="dataTable">
            <caption class="sr-only">Licensing Bodies</caption>
            <thead class="bg-primary">
                <tr>
                    <th scope="col">Subscribers (Users)</th>
                    <th scope="col">Plan (Packages)</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price(F CFA)</th>
                    <th scope="col">Billing</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tfoot class="hidden">
                <tr>
                    <th scope="col">Subscribers (Users)</th>
                    <th scope="col">Plan (Packages)</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price(F CFA)</th>
                    <th scope="col">Billing</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4 p-0">
                                <div class="icn">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="auto" height="auto" viewBox="0 0 97.18 97.18" style="enable-background:new 0 0 97.18 97.18;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M97.159,41.761c-0.035-1.688-1.117-2.847-2.696-2.979c-1.529-0.128-2.712,0.867-3.033,2.528    c-0.101,0.503-0.084,1.017-0.072,1.524c0.005,0.224,0.003,0.659,0.003,0.659s-0.348-0.065-0.617-0.101    c-1.417-0.183-2.738,0.128-3.932,0.957c-0.589,0.407-1.051,0.94-1.614,1.61c0-0.792,0.014-1.375-0.004-1.956    c-0.028-1.015,0.104-2.037-0.155-3.044c-0.34-1.319-1.387-2.166-2.734-2.179c-1.378-0.014-2.444,0.842-2.805,2.184    c-0.261,0.975-0.032,1.973-0.186,3.014c-0.968-0.5-1.942-0.741-2.959-0.336c-0.388,0.154-0.726,0.148-1.113,0.011    c-1.166-0.412-2.249-0.22-3.206,0.561c-0.177,0.144-0.342,0.296-0.428,0.464c-1.462-1.484-3.496-2.404-5.743-2.404    c-1.333,0-2.588,0.324-3.695,0.896c0.022-0.618-0.021-1.258-0.339-1.849c-0.535-0.999-1.637-1.579-2.796-1.475    c-1.354,0.121-2.296,0.854-2.631,2.143c-0.27,1.044-0.455,2.11-0.707,3.308c-0.337-1.115-0.645-2.083-0.917-3.06    c-0.432-1.516-1.57-2.419-3.065-2.394c-1.445,0.022-2.536,0.938-2.956,2.443c-0.255,0.917-0.549,1.824-0.822,2.735    c-0.337-0.993-0.523-1.964-0.761-2.923c-0.414-1.68-1.868-2.529-3.63-2.154c-1.515,0.324-2.362,1.719-2.086,3.381    c0.096,0.587,0.355,1.148,0.33,1.86c-1.771-1.557-3.723-2.174-5.98-1.675c-2.28,0.504-3.717,2.007-4.71,4.102    c-1.018-2.15-2.497-3.577-4.756-4.097c-2.246-0.519-4.191,0.132-6.073,1.729c0.151-0.65,0.233-1.073,0.351-1.488    c0.231-0.824,0.239-1.631-0.164-2.404c-0.551-1.053-1.664-1.632-2.85-1.504c-1.371,0.147-2.326,0.936-2.638,2.239    c-0.237,0.992-0.423,1.997-0.645,3.062c-0.075-0.118-0.11-0.154-0.123-0.198c-0.295-0.975-0.586-1.95-0.874-2.926    c-0.449-1.521-1.947-2.415-3.511-2.117c-1.452,0.276-2.179,1.228-2.527,2.585c-0.217,0.845-0.492,1.674-0.742,2.509    c-0.351-1.034-0.518-2.042-0.793-3.019c-0.477-1.688-2.014-2.475-3.791-2.006c-1.413,0.373-2.244,1.876-1.876,3.466    c0.855,3.708,1.721,7.415,2.598,11.117c0.398,1.678,1.566,2.62,3.263,2.688c1.604,0.063,2.959-0.895,3.459-2.467    c0.32-0.996,0.618-1.999,0.978-3.172c0.344,1.125,0.653,2.067,0.922,3.021c0.458,1.631,1.796,2.646,3.497,2.618    c1.643-0.026,2.869-1.025,3.278-2.672c0.148-0.594,0.298-1.187,0.487-1.945c1.313,3.396,3.732,4.97,7.123,4.715    c2.395-0.18,4.717-0.817,5.698-3.494c0.462,0.647,0.864,1.371,1.519,1.898c2.379,1.915,4.997,2.03,7.751,1.01    c1.385-0.515,2.572-1.264,2.974-2.832c0,0,0.074-0.344,0.105-0.477l0.325,1.115c0.422,1.647,1.604,2.62,3.278,2.68    c1.615,0.058,2.951-0.892,3.456-2.472c0.32-0.995,0.618-1.997,0.978-3.157c0.392,1.256,0.701,2.35,1.076,3.421    c0.501,1.428,1.625,2.068,3.058,2.198c1.397,0.128,2.705-0.622,3.299-1.833c0.051-0.104,0.104-0.212,0.125-0.326    c1.469,2.02,3.847,3.332,6.532,3.332c2.259,0,4.3-0.93,5.765-2.426c0.02,0.025,0.035,0.05,0.056,0.077    c0.743,0.964,1.714,1.33,2.885,1.116c1.493-0.271,2.322-1.346,2.358-3.042c0.028-1.312,0.011-2.623,0.007-3.934    c-0.005-0.334,0.025-0.626,0.389-0.778c0.658-0.276,1.312-0.567,2.041-0.884c0,1.958-0.019,3.802,0.006,5.646    c0.019,1.193,0.46,2.223,1.576,2.754c1.076,0.513,2.169,0.427,3.153-0.325c0.604-0.461,0.912-1.32,1.04-2.163    c0.072,0.104,0.129,0.281,0.315,0.553c1.382,1.974,4.277,3.048,6.81,1.938c0.096-0.042,0.288-0.117,0.288-0.117    s0.206,0.081,0.332,0.124c2.537,0.859,4.284-0.406,4.286-3.096c0.003-2.331,0.001-4.662,0-6.993    C97.17,45.16,97.196,43.461,97.159,41.761z M19.272,43.372c-0.817,3.544-1.644,7.088-2.479,10.627    c-0.299,1.265-0.964,1.826-2.094,1.825c-1.01,0-1.74-0.561-2.061-1.619c-0.689-2.272-1.367-4.549-2.052-6.823    c-0.048-0.16-0.107-0.315-0.217-0.63c-0.629,2.074-1.213,4.004-1.795,5.934c-0.17,0.557-0.312,1.123-0.498,1.673    c-0.323,0.954-1.119,1.494-2.108,1.467C5,55.8,4.277,55.263,4.037,54.256c-0.888-3.703-1.748-7.411-2.6-11.122    c-0.203-0.886,0.249-1.65,1.006-1.843c0.94-0.239,1.759,0.196,2,1.194c0.353,1.458,0.612,2.937,0.91,4.407    c0.263,1.292,0.786,3.878,0.786,3.878l0.068,0.336l0.082-0.321c0.315-1.052,0.631-2.104,0.946-3.156    c0.478-1.603,0.948-3.207,1.432-4.808c0.351-1.154,0.814-1.568,1.715-1.565c0.896,0.003,1.387,0.454,1.718,1.566    c0.792,2.669,1.578,5.337,2.501,8.014c0.306-1.511,0.623-3.021,0.928-4.532c0.247-1.233,0.473-2.471,0.75-3.698    c0.233-1.037,0.941-1.516,1.916-1.333c0.667,0.125,1.077,0.546,1.145,1.233C19.366,42.792,19.338,43.093,19.272,43.372z     M30.127,50.243c-0.05,0.65-0.377,1.059-1.043,1.076l-5.747,0.008c-0.516-0.012-0.572,0.212-0.396,0.646    c0.453,1.104,1.998,1.691,3.367,1.263c0.583-0.183,1.095-0.51,1.639-0.777c0.78-0.388,1.365-0.26,1.773,0.366    c0.375,0.578,0.249,1.174-0.367,1.738c-1.513,1.389-4.592,1.831-6.523,0.938c-2.044-0.947-3.197-2.916-3.114-5.307    c0.1-2.753,1.83-4.901,4.336-5.381C27.164,44.218,30.375,47.09,30.127,50.243z M35.309,52.071c0.509,1.052,2.067,1.607,3.36,1.142    c0.544-0.196,1.053-0.488,1.573-0.749c0.763-0.384,1.305-0.3,1.733,0.283c0.438,0.597,0.338,1.19-0.301,1.792    c-1.949,1.826-5.75,1.927-7.743,0.201c-2.188-1.895-2.554-5.316-0.831-7.799c1.284-1.853,3.507-2.633,5.635-1.977    c2.038,0.629,3.719,2.836,3.734,4.903c0.006,1.047-0.361,1.449-1.418,1.48l-5.313-0.01C35.06,51.304,35.079,51.595,35.309,52.071z     M72.3,46.857c0.125,0.226,0.232,0.46,0.334,0.699c-0.217,0.039-0.509,0.142-0.918,0.287c-0.058,0.02-0.124,0.007-0.255,0.014    C71.8,47.522,71.942,47.09,72.3,46.857z M60.939,45.159c-0.043,0.196-0.225,0.234-0.409,0.172    c0.107-0.115,0.221-0.226,0.334-0.334C60.923,45.01,60.963,45.046,60.939,45.159z M58.093,54.381    c-0.298,0.891-0.977,1.415-1.887,1.444c-0.96,0.032-1.717-0.441-2.061-1.308c-0.116-0.292-0.192-0.599-0.285-0.9    c-0.671-2.225-1.341-4.449-2.074-6.881c-0.168,0.496-0.275,0.792-0.366,1.092c-0.633,2.114-1.263,4.229-1.894,6.342    c-0.275,0.918-0.843,1.531-1.823,1.646c-1.185,0.142-2.017-0.484-2.313-1.726c-0.501-2.1-0.982-4.204-1.474-6.305    c-0.358-1.535-0.735-3.066-1.07-4.605c-0.269-1.232,0.529-2.098,1.739-1.915c0.786,0.118,1.156,0.664,1.304,1.383    c0.343,1.661,1.727,8.44,1.727,8.44s1.755-6.001,2.502-8.485c0.279-0.927,0.83-1.357,1.662-1.349    c0.839,0.008,1.379,0.444,1.653,1.363c0.493,1.648,0.976,3.3,1.467,4.95c0.327,1.096,0.662,2.189,0.992,3.284    c0.654-2.694,1.193-5.357,1.726-8.021c0.066-0.339,0.166-0.659,0.359-0.944c0.386-0.568,1.115-0.81,1.809-0.563    c0.639,0.228,0.959,0.691,0.951,1.39c-0.003,0.495-0.178,0.95-0.261,1.425c-0.014,0.077-0.035,0.16-0.054,0.243    c-1.618,1.476-2.63,3.599-2.63,5.959c0,1.084,0.215,2.117,0.604,3.062L58.093,54.381z M66.197,57.653    c0.613-0.678,0.784-1.684,1.622-2.206c0.131-0.083,0.138-0.398,0.162-0.611c0.027-0.24,0.012-0.478,0.156-0.695    c0.341-0.512,0.104-0.733-0.423-0.832c-0.473-0.089-1.086-0.033-1.369-0.393c-0.619-0.788-1.479-0.725-2.272-0.902    c-0.485-0.117-1.069-0.047-1.111,0.396c-0.048,0.522-0.332,0.982-0.281,1.52c0.05,0.5,0.392,0.861,0.717,1.045    c1.088,0.613,0.819,1.566,0.771,2.484v0.001c-3.117-0.742-5.47-3.479-5.62-6.783c0.326-0.053,0.421,0.402,0.636,0.537    c0.207,0.13,0.359,0.416,0.63,0.437c0.923,0.07,1.787,0.309,2.503,0.854c-0.194-0.588-0.764-0.871-1.069-1.391    c-0.238,0.17-0.423,0.545-0.793,0.303c-0.313-0.208-0.374-0.554-0.337-0.907c0.04-0.402,0.342-0.475,0.673-0.531    c0.317-0.056,0.629-0.149,0.997-0.241c-0.652-0.738-1.051-1.523-0.91-2.482c0.052-0.359-0.142-0.458-0.43-0.53    c-0.206-0.051-0.451-0.113-0.472-0.383c-0.019-0.256,0.175-0.437,0.381-0.477c0.774-0.149,0.995-1.206,1.944-1.042    c-0.016-0.063-0.03-0.125-0.049-0.187c-0.325,0-0.646,0-0.974,0c0.506-0.408,1.066-0.75,1.672-1.012    c-0.104,0.085-0.205,0.17-0.362,0.301c1.085-0.23,1.859,0.029,2.621,0.56c0.474,0.332,1.036,0.896,1.702,0.194    c0.313-0.329,0.78-0.364,1.197-0.478c0.333-0.091,0.441-0.362,0.56-0.622c0.896,0.373,1.7,0.917,2.375,1.593    c-0.085,0.018-0.227,0.126-0.177,0.16c0.301,0.202,0.209,0.795,0.736,0.752c0.036-0.073,0.058-0.138,0.064-0.196    c0.039,0.048,0.073,0.097,0.109,0.146c-0.056,0.025-0.117,0.048-0.184,0.067l0.021-0.019c-0.005,0.001-0.009,0-0.014,0    c-0.002,0.005-0.004,0.012-0.008,0.017c-0.071,0.064-0.188,0.146-0.179,0.173c0.201,0.469,0.051,0.652-0.451,0.713    c-0.277,0.034-0.249,0.443-0.152,0.545c0.567,0.61,0.01,1.004-0.264,1.41c-0.349,0.52-0.512,1.567-0.225,2.019    c0.398,0.624,1.071,0.835,1.893,0.592c0.289-0.087,0.574-0.166,0.876-0.064C72.56,54.875,69.694,57.496,66.197,57.653z     M78.208,47.486c-0.583,0.239-1.158,0.499-1.72,0.782c-0.636,0.32-0.983,0.82-0.95,1.576c0.037,0.848,0.031,1.7,0.014,2.548    c-0.019,0.775,0.079,1.558-0.107,2.322c-0.153,0.626-0.559,1.021-1.204,1.103c-0.668,0.084-1.182-0.173-1.515-0.775    c-0.048-0.09-0.067-0.194-0.105-0.292c0.83-1.269,1.313-2.781,1.313-4.408c0-1.608-0.474-3.104-1.282-4.362    c0.123-0.633,0.446-0.96,1.024-1.079c0.894-0.183,1.472,0.085,1.925,0.921c0.565-0.62,1.208-1.058,2.096-0.94    c0.68,0.091,1.106,0.455,1.243,1.132C79.074,46.688,78.893,47.202,78.208,47.486z M83.746,54.139    c-0.004,1.073-0.586,1.699-1.489,1.686c-0.909-0.013-1.444-0.635-1.448-1.713c-0.006-2.038-0.002-4.076-0.002-6.113    c-0.002,0-0.004,0-0.004,0c-0.001-2.015-0.005-4.029,0-6.042c0.001-1.158,0.503-1.741,1.48-1.737    c0.927,0.004,1.467,0.598,1.469,1.692C83.759,45.986,83.759,50.062,83.746,54.139z M95.738,54.106    c0.003,0.746-0.224,1.339-0.956,1.635c-0.651,0.265-1.232,0.059-1.818-0.65c-0.067-0.083-0.172-0.226-0.172-0.226    s-0.111,0.069-0.211,0.131c-2.684,1.658-5.54,0.667-6.69-2.106c-0.965-2.325-0.653-4.587,0.892-6.583    c1.286-1.659,3.546-2.044,5.386-1.043c0.165,0.09,0.326,0.189,0.604,0.35c0-1.325-0.014-2.514,0.002-3.703    c0.014-0.981,0.498-1.612,1.258-1.692c1.043-0.111,1.692,0.496,1.702,1.579c0.018,1.917,0.006,3.835,0.006,5.753    C95.737,49.737,95.73,51.922,95.738,54.106z"/>
                                                <path d="M38.999,49.367c0.348,0.009,0.487-0.104,0.406-0.47c-0.225-1.006-1.08-1.662-2.188-1.649    c-1.021,0.01-1.923,0.724-2.121,1.66c-0.063,0.303,0.004,0.464,0.347,0.458L38.999,49.367z"/>
                                                <path d="M24.817,47.248c-0.968,0.032-1.767,0.705-2.042,1.664c-0.114,0.397,0.041,0.462,0.375,0.456l3.408,0.003    c0.659,0.031,0.592-0.292,0.451-0.687C26.668,47.731,25.882,47.212,24.817,47.248z"/>
                                                <path d="M90.693,47.512c-0.931-0.044-1.513,0.421-1.926,1.167c-0.274,0.493-0.406,1.036-0.388,1.534    c-0.023,0.793,0.129,1.472,0.529,2.075c0.881,1.318,2.633,1.262,3.397-0.131c0.593-1.08,0.661-2.229,0.157-3.356    C92.136,48.06,91.591,47.554,90.693,47.512z M90.562,51.831c-0.467,0-0.843-0.654-0.843-1.461c0-0.808,0.376-1.463,0.843-1.463    c0.466,0,0.845,0.655,0.845,1.463C91.406,51.177,91.027,51.831,90.562,51.831z"/>
                                            </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                </div>     
                            </div>
                            <div class="col-8 p-0">
                                <div class="shrt-frm">COGEA Int.</div>
                                <div class="full-frm">cogea@user.com</div>
                            </div>
                        </div>
                    </td>
                        <td>Enterprise</td>
                        <td>Monthly</td>
                        <td>40000 F CFA</td>
                        <td>Manual - PayPal</td>
                        <td><div class="badge text-bg-danger">Deactive</div></td>
                        <td>
                            <i class="fas fa-eye    "></i>
                        </td>
                    
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4 p-0">
                                <div class="icn justify-content-center align-items-center">
                                    <img class="w-100" src="{{asset('assets/img/avatars/dahua.png')}}" alt="">
                                 </div>
                            </div>
                            <div class="col-8 p-0">
                                <div class="shrt-frm">Dahua Corp.</div>
                                <div class="full-frm">dahua@user.com</div>
                            </div>
                        </div>
                    </td>
                        <td>Basic</td>
                        <td>Yearly</td>
                        <td>70000 F CFA</td>
                        <td>Auto Debit</td>
                        <td><div class="badge text-bg-success">Active</div></td>
                        <td>
                            <i class="fas fa-eye    "></i>
                        </td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
