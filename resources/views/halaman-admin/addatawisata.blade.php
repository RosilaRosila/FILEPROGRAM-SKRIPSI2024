<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DASHBOARD | HALAMAN ADMIN</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.cs') }}s">

    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Link Icon -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/img/logokp.png" />

    <!-- Style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/halaman_ptiket.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <!-- Navbar -->
        <nav class="main-header navbar fixed-top navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
        </nav>

        <!-- /.navbar -->
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layout.sidebar')
        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <!-- Content Wrapper. Contains page content -->
        <br>
        <br>
        <div class="content-wrapper">
            <div class="content-header">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <br>
                        <h5 class="m-0 text-dark" style="font-weight: bold;">Tambah Data Wisata</h5>
                        <br>
                        <br>
                        <form>
                            <div class="mb-3">
                                <p class="form-label">Masukan Nama Tempat Wisata</p>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mt-5">
                                <p class="form-label">Tambahkan Gambar Profil Tempat Wisata</p>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mt-5">
                                <p class="form-label">Masukan Deskripsi Tempat Wisata</p>
                                <textarea type="text" class="form-control" id="exampleInputPassword1" style="height: 120px;"></textarea>
                            </div>
                            <div class="mt-5">
                                <p class="form-label">Masukan Deskripsi Tempat Wisata (Read More)</p>
                                <textarea type="text" class="form-control" id="exampleInputPassword1" style="height: 120px;"></textarea>
                            </div>
                            <div class="mt-5">
                                <p class="form-label">Tambahkan Gambar Header Tempat Wisata</p>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mt-5">
                                <p class="form-label">Masukan Alamat Tempat Wisata</p>
                                <textarea type="text" class="form-control" id="exampleInputPassword1" style="height: 60px;"></textarea>
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </form>




                        </section>
                    </div>
                </div><!-- /.container-fluid -->

            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <br>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <br>
    </div>
    <br>
    <!-- /.content-wrapper -->
    <footer class="main-footer text-center ">
        <p>&copy 2000018193 - Rosila - Informatika - Universitas Ahmad Dahlan - Skripsi 2024</p>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('adminlte/plugins/moment/moment.min.js ') }}"></script>
    <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>