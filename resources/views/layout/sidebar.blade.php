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
                    <a href="http://127.0.0.1:8000/admin/dashboard" class="nav-link {{ ($title === "DASHBOARD") ? 'active' : '' }} ">
                        <i class=" nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/admin/data-wisata" class="nav-link {{ ($title === "DATA WISATA") ? 'active' : '' }} ">
                        <i class="nav-icon fa fa-database"></i>
                        <p>
                            Data Wisata
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/admin/data-fasilitas " class="nav-link {{ ($title === "FASILITAS") ? 'active' : '' }} ">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Fasilitas
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/admin/data-tiket" class="nav-link {{ ($title === "DATA TIKET") ? 'active' : '' }} ">
                        <i class="nav-icon  fas fa-wallet"></i>
                        <p>
                            Harga Tiket
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Data Pengunjung
                        </p>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Laporan
                        </p>
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