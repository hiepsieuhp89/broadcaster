@extends('broadcaster.templates.master')
@section('content')

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-xl-8">
          <div class="card">
              <div class="card-header py-3 bg-primary text-white">
                  <div class="card-widgets">
                      <a data-toggle="collapse" href="#tempCollapse" role="button" aria-expanded="false" aria-controls="tempCollapse"><i class="mdi mdi-minus"></i></a>
                  </div>
                  <h5 class="header-title mb-0 text-white">  Nhiệt độ (°C)</h5>
              </div>
              <div id="tempCollapse" class="collapse show">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div id="flotRealTime" style="height: 180px;" class="flot-chart"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end card-->
        </div>
        <div class="col-xl-4">
          <div class="card">
              <div class="card-header py-3 bg-primary text-white">
                  <div class="card-widgets">
                      <a data-toggle="collapse" href="#humidCollapse" role="button" aria-expanded="false" aria-controls="humidCollapse"><i class="mdi mdi-minus"></i></a>
                  </div>
                  <h5 class="header-title mb-0 text-white">  Độ ẩm (%) </h5>
              </div>
              <div id="humidCollapse" class="collapse show">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div id="flotRealTime2" style="height: 180px;" class="flot-chart"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end card-->
        </div>
      <!-- end col -->
      <!-- End row -->
      </div>
    <!-- end container-fluid -->
  </div>
  <!-- end content -->
</div>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
@endsection
@section('script')

<!-- Toastr js -->
<script src="assets\libs\toastr\toastr.min.js"></script>

<!-- Vendor js -->
<script src="assets\js\vendor.min.js"></script>

<!-- flot chart -->
<script src="assets\libs\flot-charts\jquery.flot.js"></script>
<script src="assets\libs\flot-charts\jquery.flot.time.js"></script>
<script src="assets\libs\flot-charts\jquery.flot.tooltip.min.js"></script>
<script src="assets\libs\flot-charts\jquery.flot.resize.js"></script>
<script src="assets\libs\flot-charts\jquery.flot.pie.js"></script>
<script src="assets\libs\flot-charts\jquery.flot.selection.js"></script>
<script src="assets\libs\flot-charts\jquery.flot.stack.js"></script>
<script src="assets\libs\flot-charts\jquery.flot.crosshair.js"></script>

<!-- init js -->
<script src="assets\js\pages\flot.init.js"></script>

<!-- App js -->
<script src="assets\js\app.min.js"></script>

@endsection
