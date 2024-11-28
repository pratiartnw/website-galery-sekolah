<header class="topbar" data-navbarbg="skin6" style="background-color: #0d47a1;">
    <nav class="navbar top-navbar navbar-expand-lg" style="background-color: #0d47a1;">
        <div class="navbar-header" data-logobg="skin6">
            <!-- Sidebar toggle visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)">
                <i class="ti-menu ti-close" style="color: #ffffff;"></i>
            </a>
            <!-- Logo -->
            <div class="navbar-brand" style="background-color: #0d47a1; padding: 10px;">
                <!-- Logo icon (use an image for your logo) -->
                <a href="/">
                    <!-- Logo SMKN 4 Bogor -->
                    <img src="{{ asset('images/lg4.png') }}" alt="Logo SMKN 4 Bogor" style="height: 70px; margin-left: 10px;">
                    <!-- Text logo with bold styling -->
                    <h3 style="color: #ffffff; display: inline-block; margin-left: 10px; font-weight: bold;">
                        Dashboard Admin
                    </h3>
                </a>
            </div>
            <!-- Mobile Toggle -->
            <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="color: #ffffff;">
                <i class="ti-more"></i>
            </a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-end ms-auto">
                <!-- User profile and search -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">
                        <i class="fas fa-user" style="color: #ffffff;"></i>
                        <span class="ms-2 d-none d-lg-inline-block">
                            <span>Hello,</span>
                            <span class="text-white">{{ Auth::user()->name }}</span>
                            <i data-feather="chevron-down" class="svg-icon" style="color: #ffffff;"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item logout-item" href="/logout">
                            <i data-feather="power" class="svg-icon me-2 ms-1"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <!-- User profile and search -->
            </ul>
        </div>
    </nav>
</header>

<!-- Tambahkan CSS -->
<style>
    /* Hapus garis border */
    .navbar {
        border-bottom: none;
    }

    .navbar-header {
        border-right: none;
    }

    /* Logo styling */
    .navbar-brand img {
        height: 40px; /* Tetapkan tinggi logo */
        width: auto;
    }

    /* Warna dan hover pada link navbar */
    .nav-link {
        color: #ffffff !important;
    }

    .nav-link:hover {
        color: #bbdefb !important;
    }

    /* Ikon profil user */
    .nav-link .fas.fa-user {
        color: #ffffff;
    }

    /* Chevron icon */
    .svg-icon {
        color: #ffffff !important;
    }

    /* Dropdown menu */
    .dropdown-menu {
        background-color: #ffffff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Logout ikon dan hover */
    .dropdown-item i {
        color: #0d47a1;
    }

    .dropdown-item:hover {
        background-color: #0d47a1;
        color: #ffffff;
    }

    /* Text styling untuk "Dashboard Admin" */
    .navbar-brand h3 {
        font-weight: 700; /* Tebal */
        font-size: 24px; /* Ukuran lebih besar */
        color: #ffffff; /* Warna teks */
    }

    /* Warna hover pada elemen navbar */
    .navbar-nav .nav-item:hover .nav-link {
        color: #bbdefb !important;
    }
</style>
