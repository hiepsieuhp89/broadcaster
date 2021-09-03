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
        <div class="col-xl-12">
          <div class="card" style="height: calc(100% - 25px);">
            <div class="card-header bg-primary py-3 text-white">
              <div class="card-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                <a data-toggle="collapse" href="#cardDevices" role="button" aria-expanded="false"
                  aria-controls="cardDevices"><i class="mdi mdi-minus"></i></a>
              </div>
              <h5 class="header-title mb-0 text-white">Danh sách thiết bị</h5>
            </div>
            <div id="cardDevices" class="collapse show">
              <div class="card-body h-100">
                <div class="row h-100">
                  <div class="col-md-3 col-sm-6">
                    <div class="card">
                      <div class="card-header py-3">
                        <h5 class="header-title mb-0">Cảm biến nhiệt (Bật)</h5>
                      </div>
                      <div id="card" class="collapse show h-100">
                        <div class="card-body h-100 d-flex">
                          <div class="outborder active">
                            <div class="inborder">
                              <img src="images/devices/ts.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="card">
                      <div class="card-header py-3">
                        <h5 class="header-title mb-0">Điều hòa (Tắt)</h5>
                      </div>
                      <div id="card" class="collapse show h-100">
                        <div class="card-body h-100 d-flex">
                          <div class="outborder inactive">
                            <div class="inborder">
                              <img src="images/devices/ac.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="card">
                      <div class="card-header py-3">
                        <h5 class="header-title mb-0">Cửa chính (Mất kết nối)</h5>
                      </div>
                      <div id="card" class="collapse show h-100">
                        <div class="card-body h-100 d-flex">
                          <div class="outborder noconnect">
                            <div class="inborder">
                              <img src="images/devices/md.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="card">
                      <div class="card-header py-3">
                        <h5 class="header-title mb-0">Camera chính (Bật)</h5>
                      </div>
                      <div id="card" class="collapse show h-100">
                        <div class="card-body h-100 d-flex">
                          <div class="outborder active">
                            <div class="inborder">
                              <img src="images/devices/mc.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end card-->
      </div>
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

@include('broadcaster.templates.script')

@endsection
