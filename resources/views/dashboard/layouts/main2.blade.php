<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb-admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb-admin') }}/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('sb-admin') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    {{-- font-awesome --}}
    <script src="https://kit.fontawesome.com/9f4b96fd6b.js" crossorigin="anonymous"></script>

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    {{-- leafletJs --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WebGIS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            @can('isAdmin')
                <!-- Nav Item - Dashboard -->
                <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
            @endcan

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Wisata
            </div>

            <li class="nav-item {{ Request::is('dashboard/mywisatas') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/mywisatas">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Wisataku</span></a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/pengunjungs') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/pengunjungs">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengunjung</span></a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/jaraks') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/jaraks">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Jarak</span></a>
            </li>

            @can('isAdmin')
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Administrator
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Data Master</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Data Master:</h6>
                            <a class="collapse-item" href="/dashboard/users">Data User</a>
                            <a class="collapse-item" href="/dashboard/categories">Data Kategori</a>
                            <a class="collapse-item" href="/dashboard/kecamatans">Data Kecamatan</a>
                        </div>
                    </div>
                </li>

                {{-- <li class="nav-item {{ Request::is('dashboard/users') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard/users">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Data User</span></a>
                </li>

                <li class="nav-item {{ Request::is('dashboard/categories') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard/categories">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Data Kategori</span></a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/kecamatans') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard/kecamatans">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Data kecamatan</span></a>
                </li> --}}
                <li class="nav-item {{ Request::is('dashboard/wisatas') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard/wisatas">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Data Wisata</span></a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/hotels') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard/hotels">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Data Hotel</span></a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/wisatawans') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard/wisatawans">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Data Wisatawan</span></a>
                </li>
                <li class="nav-item {{ Request::is('dashboard/pendaftarans') ? 'active' : '' }}">
                    <a class="nav-link" href="/dashboard/pendaftarans">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Data pendaftaran</span></a>
                </li>
            @endcan

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('container')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn"><i class="btn btn-primary">Logout</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb-admin') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('sb-admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb-admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb-admin') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb-admin') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb-admin') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('sb-admin') }}/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb-admin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('sb-admin') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb-admin') }}/js/demo/datatables-demo.js"></script>

</body>

</html>
