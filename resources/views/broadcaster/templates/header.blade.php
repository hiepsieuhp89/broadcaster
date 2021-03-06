<!-- Topbar Start -->
<div class="navbar-custom">
  <ul class="list-unstyled topnav-menu float-right mb-0">
    <li class="dropdown notification-list">
        <button class="btn btn-primary" data-toggle="notify" data-type="notification" content="Chú ý backup dữ liệu định kì">
            Trigger thông báo
        </button>
    </li>
      <li class="dropdown notification-list">
          <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="mdi mdi-bell-outline noti-icon"></i>
              <span class="badge badge-pink rounded-circle noti-icon-badge">4</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-lg">

              <!-- item-->
              <div class="dropdown-item noti-title">
                  <h5 class="font-16 m-0">
                      Thông báo
                  </h5>
              </div>

              <div class="slimscroll noti-scroll">

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                      <div class="notify-icon">
                          <i class="mdi mdi-comment-account-outline text-info"></i>
                      </div>
                      <p class="notify-details">Tin nhắn 1
                          <small class="noti-time">1 min ago</small>
                      </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                      <div class="notify-icon text-danger">
                          <i class=" ion ion-md-notifications text-primary"></i>
                      </div>
                      <p class="notify-details">Thông báo 1
                          <small class="noti-time">3 days ago</small>
                      </p>
                  </a>

                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                      <div class="notify-icon text-purple">
                          <i class="ion ion-md-warning text-warning"></i>
                      </div>
                      <p class="notify-details">Cảnh báo 1
                          <small class="noti-time">7 days ago</small>
                      </p>
                  </a>
              </div>

              <!-- All-->

          </div>
      </li>

      <li class="dropdown notification-list">
          <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              {{-- <img src="" alt="user-image" class="rounded-circle"> --}}
              <span class="pro-user-name ml-1">
                  {{ Auth::User()->name }}<i class="mdi mdi-chevron-down"></i>
              </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
              <a href="{{ route('auth.logout') }}" class="dropdown-item notify-item">
                  <i class="mdi mdi-logout-variant"></i>
                  <span>Đăng xuất</span>
              </a>
          </div>
      </li>

      <li class="dropdown notification-list">
          <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
              <i class="mdi mdi-settings-outline noti-icon"></i>
          </a>
      </li>


  </ul>

  <!-- LOGO -->
  <div class="logo-box">
      <a href="index.html" class="logo text-center logo-dark">
          <span class="logo-lg">
              <img src="assets\images\logo-dark.png" alt="" height="18">
              <!-- <span class="logo-lg-text-dark">Velonic</span> -->
          </span>
          <span class="logo-sm">
              <!-- <span class="logo-lg-text-dark">V</span> -->
              <img src="assets\images\logo-sm.png" alt="" height="22">
          </span>
      </a>

      <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            {{-- <img src="images\smart-home.png" alt="" height="18"> --}}
            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
            <span class="text-white text-uppercase logo-lg-text-dark">Home Repeater</span>
        </span>
          <span class="logo-sm">
              <!-- <span class="logo-lg-text-dark">V</span> -->
              <img src="images\smart-home.png" alt="" height="30">
          </span>
      </a>
  </div>

  <!-- LOGO -->


  <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
      <li>
          <button class="button-menu-mobile waves-effect">
              <i class="mdi mdi-menu"></i>
          </button>
      </li>

      <li class="d-none d-lg-block">
          <form class="app-search">
              <div class="app-search-box">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Tìm kiếm">
                      <div class="input-group-append">
                          <button class="btn" type="submit">
                              <i class="fas fa-search"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </form>
      </li>
  </ul>
</div>
<!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

<div class="slimscroll-menu">

<!--- Sidemenu -->
<div id="sidebar-menu">
<ul class="metismenu" id="side-menu">

  <li class="menu-title">Hệ thống</li>

  <li>
      <a href="{{ route('index.navigation.status') }}" class="waves-effect @if($navigation == 'status' || $navigation == '') active @endif">
          <i class="ion-md-speedometer"></i>
          <span> Tổng quan </span>
          <span class="badge badge-danger badge-pill float-right"> 3 </span>
      </a>
  </li>
  <li>
    <a href="{{ route('index.navigation.analyze') }}" class="waves-effect @if($navigation == 'analyze') active @endif">
        <i class="ion ion-md-analytics"></i>
        <span> Giám sát </span>
    </a>
  </li>
  <li>
    <a href="{{ route('index.navigation.devices') }}" class="waves-effect">
          <i class="mdi mdi-remote-tv"></i>
          <span> Quản lý thiết bị </span>
      </a>
  </li>
</ul>

</div>
<!-- End Sidebar -->

<div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
