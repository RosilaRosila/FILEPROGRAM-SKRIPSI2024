<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ADMIN | HALAMAN LOGIN</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Link Icon -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/img/logokp.png" />
</head>

<body class="hold-transition login-page" style="background-color: cadetblue;">
    <div class="login-box">
        <!-- <div class="login-logo">
            <a href=""><b>Admin</b></a>
        </div> -->
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">


                <div class="text-center">
                    <img src="{{ asset('/') }}assets/img/logokp.png" height="60" alt="" style="margin-bottom: 20px;">
                    <h4 class="login-box-msg">Login</h4>
                </div>
                <br>
                <form action="{{ route('login-proses') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Masukan Email" required="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <small>{{ $message }}</small>
                    @enderror
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Masukan Password" required="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <small>{{ $message }}</small>
                    @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember" required="">
                                <label for="remember">
                                    Ingatkan Saya
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <!-- <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div> -->
                        <!-- /.col -->
                    </div>
                    <div class="social-auth-links text-center mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>


                <!-- /.social-auth-links -->

                <br>
                <div class="mb-0 text-center">
                    <a href="forgot-password.html">Lupa Password ?</a>
                </div>
                <div class="mb-0 text-center">
                    <p>Belum Punya Akun ? <a href="{{ route('register') }}">Buat Akun</a></p>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

</body>

</html>