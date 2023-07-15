<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-2 sidebar-sticky">
        <h4 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Dashboard</span>
        </h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} " aria-current="page" href="/dashboard">
                    <span data-feather="user" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/mywisatas*') ? 'active' : '' }} " aria-current="page" href="/dashboard/mywisatas">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    My Wisata
                </a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pengunjungs*') ? 'active' : '' }} " aria-current="page" href="/dashboard/pengunjungs">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Data Pengunjung
                </a>
            </li>
        </ul>
        @can('isAdmin')
            <h4 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h4>
            <ul class="nav flex-clumn">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
                        <span data-feather="list" class="align-text-bottom"></span>
                        Data User
                    </a>
                </li>
            </ul>
            <ul class="nav flex-clumn">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/wisatas*') ? 'active' : '' }}" href="/dashboard/wisatas">
                        <span data-feather="list" class="align-text-bottom"></span>
                        Data Wisata
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                        <span data-feather="list" class="align-text-bottom"></span>
                        Data Kategori
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/kecamatans*') ? 'active' : '' }}" href="/dashboard/kecamatans">
                        <span data-feather="list" class="align-text-bottom"></span>
                        Data Kecamatan
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/wisatawans*') ? 'active' : '' }}" href="/dashboard/wisatawans">
                        <span data-feather="list" class="align-text-bottom"></span>
                        Data Wisatawan
                    </a>
                </li>
            </ul>
        @endcan
        </div>
</nav>

<!-- Page Wrapper -->
{{-- <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">WEBGIS <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        @can('isAdmin')
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        @endcan

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Wisataku
        </div>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/mywisatas*') ? 'active' : '' }}" href="dashboard/mywisatas">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Tempat Wisata</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard/pengunjungs">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Pengunjung</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        @can('isAdmin')
        <!-- Heading -->
        <div class="sidebar-heading">
            Administrator
        </div>

        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Data User</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="dashboard/wisatas">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Wisata</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        @endcan
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
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                            <img class="img-profile rounded-circle"
                                src="img/undraw_profile.svg">
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
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar --> --}}