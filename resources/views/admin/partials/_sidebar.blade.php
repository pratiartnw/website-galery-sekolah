<aside class="left-sidebar" data-sidebarbg="skin6" style="background: linear-gradient(to bottom, #0d47a1, #2196f3); border-bottom: 2px solid #1976d2;">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6" style="background: linear-gradient(to bottom, #0d47a1, #2196f3);">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="/admin" aria-expanded="false" style="color: #ffffff;">
                        <i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="/users" aria-expanded="false" style="color: #ffffff;">
                        <i data-feather="users" class="feather-icon"></i><span class="hide-menu">Manajemen Admin</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/categories" aria-expanded="false" style="color: #ffffff;">
                        <i data-feather="layers" class="feather-icon"></i><span class="hide-menu">Kategori</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/posts" aria-expanded="false" style="color: #ffffff;">
                        <i data-feather="list" class="feather-icon"></i><span class="hide-menu">Post</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/galleries" aria-expanded="false" style="color: #ffffff;">
                        <i data-feather="image" class="feather-icon"></i><span class="hide-menu">Galeri</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation-->
    </div>
    <!-- End Sidebar scroll-->
</aside>

<!-- Tambahkan CSS -->
<style>
    /* Sidebar background gradient dengan gradasi biru yang lebih elegan */
    .left-sidebar {
        background: linear-gradient(to bottom, #0d47a1, #2196f3); /* Gradasi biru yang lebih elegan */
        border-bottom: 2px solid #1976d2; /* Biru lebih gelap pada border */
    }

    /* Sidebar item hover effect yang lebih elegan */
    .sidebar-item:hover {
        background-color: rgba(255, 255, 255, 0.2); /* Efek hover lebih lembut */
    }

    /* Sidebar link styling dengan perubahan warna */
    .sidebar-link {
        color: #ffffff;
        font-weight: 500;
        transition: color 0.3s ease; /* Animasi halus untuk warna saat hover */
    }

    .sidebar-link:hover {
        color: #80d6ff !important; /* Biru muda cerah saat hover */
    }

    /* Feather icon color yang lebih lembut */
    .feather-icon {
        color: #ffffff !important;
        transition: color 0.3s ease; /* Animasi halus untuk ikon */
    }

    .sidebar-link:hover .feather-icon {
        color: #80d6ff !important; /* Warna ikon biru muda saat hover */
    }

    /* Divider styling lebih ringan */
    .list-divider {
        border-top: 1px solid rgba(255, 255, 255, 0.3); /* Pembatas yang lebih transparan */
    }

    /* Section title styling */
    .nav-small-cap {
        color: #e3f2fd; /* Biru terang yang elegan */
        font-weight: 600;
        text-transform: uppercase;
    }

    /* Smooth scrolling effect for sidebar */
    .scroll-sidebar {
        overflow-y: auto;
        scroll-behavior: smooth;
    }
</style>
