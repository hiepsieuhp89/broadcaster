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
        <div class="col-xl-7">
          <div class="card" style="height: calc(100% - 25px);">
            <div class="card-header bg-primary py-3 text-white">
              <h5 class="header-title mb-0 text-white">Camera chính</h5>
            </div>
            <div id="cardCamera" class="collapse show h-100">
              <div class="card-body h-100">
                <div class="row h-100">
                  <div class="col-md-12">
                    <video
                      style="min-height: 320px;max-height:400px;"
                      class="video-js h-100 w-100"
                      controls
                      preload="auto"
                      poster="MY_VIDEO_POSTER.jpg"
                      data-setup="{}"
                    >
                      <source src="https://streaming1.vov.vn:8443/audio/vovvn1_vov1.stream_aac/playlist.m3u8" type="application/x-mpegURL" />
                      <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                          >supports HTML5 video</a
                        >
                      </p>
                    </video>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end card-->
        </div>
        <!-- end col -->
        <div class="col-xl-5">
            <div class="row">
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-header bg-primary py-3 text-white">
                      <h5 class="header-title mb-0 text-white">Giám sát</h5>
                    </div>
                    <div id="cardStatus" class="collapse show">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                                <div class="col-xl-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <div class="text-center">
                                                <i class="wi wi-night-sprinkle display-3"></i>
                                                <p>Nhiều mây</p>
                                                </div>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <h2 class="mt-0"><b>23°</b></h2>
                                                        <span class="compositeline"></span>
                                                        <p class=" mb-0">15km/h - 37%</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End row -->
                                </div>
                                <div class="col-xl-6  col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tile-stats">
                                                <div class="status">
                                                    <h3>37%</h3>
                                                    <p>Độ ẩm</p>
                                                </div>
                                                <span class="compositeline"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tile-stats">
                                                <div class="status">
                                                    <h3 class="text-no-wrap">Không</h3>
                                                    <p>Khói</p>
                                                </div>
                                                <span class="compositeline"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tile-stats">
                                                <div class="status">
                                                    <h3 class="text-no-wrap">Không</h3>
                                                    <p>Chìm nước</p>
                                                </div>
                                                <span class="compositeline"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tile-stats">
                                                <div class="status">
                                                    <h3 class="text-no-wrap">Không</h3>
                                                    <p>Động đất</p>
                                                </div>
                                                <span class="compositeline"></span>
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
                <!-- end col -->
              </div>
        </div>

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