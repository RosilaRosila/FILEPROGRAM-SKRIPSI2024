<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">KelolaAdmin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                @can('view_dashboard')
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/dashboard" class="nav-link {{ ($title === "DASHBOARD") ? 'active' : '' }} ">
                        <i class=" nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">DATABASE TEMPAT WISATA</li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/admin/data-wisata" class="nav-link {{ ($title === "DATA WISATA") ? 'active' : '' }} ">
                        <i class="nav-icon fa fa-database"></i>
                        <p>
                            Data Wisata
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link  ">
                        <i class="nav-icon  fa fa-list-alt"></i>
                        <p>
                            Fasilitas
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Detail Wisata
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>1. Pantai Pangandaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>2. Pantai Karapyak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>3. Pantai Batuhiu</p>
                            </a>
                        </li>
                    </ul>
                </li> -->


                <li class="nav-header">KELOLA LAPORAN</li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.0" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex"> </div>
                <li class="nav-item ">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fa-solid fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                @endcan

                @can('view_home')
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/cek-tiket" class="nav-link active">
                        <i class="nav-icon fa fa-database"></i>
                        <p>
                            Cek Tiket
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fa-solid fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                @endcan
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>