<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{ asset('') }}">
  <meta charset="utf-8">
  <title>Home Repeater</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Quản lý nhà trạm từ xa" name="description">
  <meta content="Haedap" name="author">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- App favicon -->
  <link rel="shortcut icon" href="images/smart-home.png">
  @include('broadcaster.templates.style')

</head>
<body>
  <!-- Begin page -->
  <div id="wrapper">
    @include('broadcaster.templates.header')

    @yield('content')

    @include('broadcaster.templates.footer')
  </div>
  <!-- END wrapper -->
  <!-- Right Sidebar -->
  <div class="right-bar">
    <div class="rightbar-title">
      <a href="javascript:void(0);" class="right-bar-toggle float-right">
        <i class="mdi mdi-close"></i>
      </a>
      <h4 class="font-17 m-0 text-white">Cài đặt</h4>
    </div>
    <div class="slimscroll-menu">

      <div class="p-4">
        <div class="alert alert-warning" role="alert">
          <strong>Chỉnh tông màu </strong>
        </div>
        <div class="custom-control custom-switch mb-3">
          <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
          <label class="custom-control-label" for="light-mode-switch">Sáng</label>
        </div>
        <div class="custom-control custom-switch mb-3">
          <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
            data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
          <label class="custom-control-label" for="dark-mode-switch">Tối</label>
        </div>

      </div>
    </div> <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->
  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>
    @yield('script')

  <script>
    
    var notification_count = 0;

    $(document).on('notify',function(e,type,content){

      notification_count += 1;

      $('[data-type="'+type+'"]').html();

      $('head title').html('('+notification_count+') | Home Repeater');
      

      const audio = new Audio('sounds/'+type+'.mp3');
      audio.play();

    })

    $('button[data-toggle="notify"]').on('click',function(){

      $type = $(this).attr('data-type');
      $content = $(this).attr('data-content');
      $(document).trigger('notify',[$type,$content]);

    })
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-bottom-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    @if(session('success'))
      toastr["success"]("{{ session('success') }}");
    @endif
    @if(session('warning'))
      toastr["warning"]("{{ session('warning') }}");
    @endif
    
  </script>
</body>
</html>
