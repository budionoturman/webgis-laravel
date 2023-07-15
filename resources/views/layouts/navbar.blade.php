<nav class="navbar navbar-expand-md fixed-top fs-6 bg-primary py-3" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/home">SIG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('peta') ? 'active' : '' }}" href="/peta">Peta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('wisata') ? 'active' : '' }}" href="/wisata">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('hotel') ? 'active' : '' }}" href="/hotel">Hotel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kecamatans') ? 'active' : '' }}" href="/kecamatans">Kecamatan</a>
                </li>
                <li class="nav-item dropdown" data-bs-theme="light">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pelayanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/layanan/desa-wisata">Penetapan Desa Wisata</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown" data-bs-theme="light">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person"></i> My Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @can('isAdmin')
                                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-house-door"></i> My Dashboard</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endcan
                            @can('isEditor')
                                <li><a class="dropdown-item" href="/dashboard/mywisatas"><i class="bi bi-house-door"></i> My
                                        Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endcan
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item">
                                    <i class="bi bi-box-arrow-right"></i> Logout</a>
                                </button>
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link bg-light text-primary {{ Request::is('auth') ? 'active' : '' }}" href="/login"
                            style="border-radius: 15px; font-weight: 600; border: 0;"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Navbar End -->
