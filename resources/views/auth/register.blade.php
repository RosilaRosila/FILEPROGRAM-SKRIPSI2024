<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ADMIN | HALAMAN REGISTER</title>

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

<body class="hold-transition register-page" style="background-color: cadetblue;">
    <div class="register-box">
        <!-- <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div> -->

        <div class="card">
            <div class="card-body register-card-body ">
                <div class="text-center">
                    <img src="{{ asset('/') }}assets/img/logokp.png" height="60" alt="" style="margin-bottom: 20px;">
                    <h4 class="login-box-msg">Registrasi Akun</h4>
                </div>
                <br>
                <form action="{{ route('register-proses') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Nama Lengkap" required="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name')
                        <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Masukan Email" required="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Masukan Password" required="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input name="password_confirmation" type="confirm-password" class="form-control" placeholder="Ulangi Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password_confirmation')
                        <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree" required="">
                            <label for="agreeTerms">
                                <p href="#" style="font-size: 10px;">Saya setuju dengan persyaratannya</p>
                            </label>
                        </div>
                    </div>
                    <div class="social-auth-links text-center">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>
                <div class="mb-1 text-center">
                    <p> Sudah Punya Akun ? <a href="{{ route('login') }}">Login</a></p>
                </div>

            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>

</html>