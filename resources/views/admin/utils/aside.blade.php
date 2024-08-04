<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/logo hkbp.png') }}">
    <title>HKBP Perumnas Batu Onom</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav ml">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars fa-lg"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto pe-4">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/dashboard" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akun
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Beranda</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-3">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link text-decoration-none fs-6">
                <img src="{{ asset('img/logo hkbp.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class=" brand-text text-primary fw-bold">HKBP Perumnas</span> <br>
                <span class=" brand-text text-primary fw-bold">Batu Onom</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar mt-3">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item fw-medium">
                            <a href="/dashboard" class="nav-link">
                                {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header fw-bold">HOME</li>
                        <li class="nav-item">
<<<<<<< HEAD
                            <a href="/schedule" class="nav-link">
=======
                            <a href="/jadwal" class="nav-link">
>>>>>>> fudo
                                {{-- <i class="nav-icon fas fa-th"></i> --}}
                                <p>
                                    Jadwal Ibadah
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/news" class="nav-link">
                                {{-- <i class="nav-icon fas fa-copy"></i> --}}
                                <p>
                                    Berita Gereja
                                    {{-- <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/wartas" class="nav-link">
                                {{-- <i class="nav-icon fas fa-chart-pie"></i> --}}
                                <p>
                                    Warta Ibadah
                                    {{-- <i class="right fas fa-angle-left"></i> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/images" class="nav-link">
                                {{-- <i class="nav-icon fas fa-tree"></i> --}}
                                <p>
                                    Galleri Gereja
                                    {{-- <i class="fas fa-angle-left right"></i> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-edit"></i> --}}
                                <p>
                                    Layanan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item ms-4">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Jemaat Baru</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Jemaat Pindah</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Jemaat Lahir</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Jemaat Baptis</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Jemaat Sidi/Malua</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Pernikahan</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Jemaat Sakit</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a href="pages/forms/general.html" class="nav-link">
                                        {{-- <i class="far fa-circle nav-icon"></i> --}}
                                        <p>Jemaat Meninggal</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-table"></i> --}}
                                <p>
                                    Kontak Keluhan
                                    {{-- <i class="fas fa-angle-left right"></i> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-header fw-bold">DATA JEMAAT INTERNAL</li>
                        <li class="nav-item">
                            <a href="/jemaat" class="nav-link">
                                {{-- <i class="nav-icon far fa-calendar-alt"></i> --}}
                                <p>
                                    Data Jemaat
                                    {{-- <span class="badge badge-info right">2</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/keuangan" class="nav-link">
                                {{-- <i class="nav-icon far fa-image"></i> --}}
                                <p>
                                    Warta Keuangan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/kanban.html" class="nav-link">
                                {{-- <i class="nav-icon fas fa-columns"></i> --}}
                                <p>
                                    Rincian Ibadah Mingguan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/birthday" class="nav-link">
                                {{-- <i class="nav-icon far fa-envelope"></i> --}}
                                <p>
                                    Jemaat Ulang Tahun
                                    {{-- <i class="fas fa-angle-left right"></i> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon far fa-envelope"></i> --}}
                                <p>
                                    Jemaat Sakit
                                    {{-- <i class="fas fa-angle-left right"></i> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon far fa-envelope"></i> --}}
                                <p>
                                    Jemaat Menikah
                                    {{-- <i class="fas fa-angle-left right"></i> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon far fa-envelope"></i> --}}
                                <p>
                                    Jemaat Meninggal
                                    {{-- <i class="fas fa-angle-left right"></i> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Informational</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 fw-bold text-primary">
                                HKBP Perumnas Batu Onom</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <hr class="border border-primary border-3 opacity-75">
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

</body>

</html>
