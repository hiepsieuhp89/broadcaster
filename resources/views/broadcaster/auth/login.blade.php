<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <base href="{{ asset('') }}">
        <title>Đăng nhập </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Đăng nhập vào Home Repeater" name="description">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- App css -->
        @include('broadcaster.templates.style')

    </head>

    <body class="authentication-page" style="
    background:
        linear-gradient(
          rgba(0, 0, 0, 0.2), 
          rgba(0, 0, 0, 0.2)
        ),
        url(images/main-background.png);
        background-size: cover;
        background-position: top;
        
      ">

        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-header p-4 bg-primary">
                                <h4 class="text-white text-center mb-0 mt-0">Home Repeater</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('auth.login.post') }}" method="POST" class="p-2">
                                    {{ csrf_field() }}
                                    <div class="form-group mb-3">
                                        <label for="username">Tài khoản :</label>
                                        <input class="form-control" type="text" name="username" id="username" required placeholder="Tên đăng nhập" value="{{ old('username') }}">
                                        @error('username')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Mật khẩu :</label>
                                        <input class="form-control" type="password" name="password" id="password" required placeholder="Mật khẩu" value="{{ old('password') }}">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}" style="
                                        display: flex;
                                        justify-content: center;"></div>

                                    @error('g-recaptcha-response')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    @error('all')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                        

                                    {{-- <div class="form-group mb-4">
                                        <div class="checkbox checkbox-success">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                            <a href="pages-recoverpw.html" class="text-muted float-right">Forgot your password?</a>
                                        </div>
                                    </div> --}}

                                    <div class="form-group row text-center mt-4 mb-4">
                                        <div class="col-12">
                                            <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Đăng nhập</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>

  @include('broadcaster.templates.script')

  <script>
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