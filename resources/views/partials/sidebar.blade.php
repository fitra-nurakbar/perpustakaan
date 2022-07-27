<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Udacoding</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-header">PERPUSTAKAAN</li>
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengunjung" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pengunjung
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/buku" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Buku
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/petugas" class="nav-link">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>
                            Petugas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/peminjam" class="nav-link">
                        <i class="nav-icon fas fa-hand-holding"></i>
                        <p>
                            Peminjam
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Tambah
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/add-pengunjung" class="nav-link">
                                <i class="far fa-circle nav-icon text-info"></i>
                                <p>Daftar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/add-buku" class="nav-link">
                                <i class="far fa-circle nav-icon text-danger"></i>
                                <p>Tambah buku</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/add-petugas" class="nav-link">
                                <i class="far fa-circle nav-icon text-info"></i>
                                <p>Tambah petugas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/add-peminjam" class="nav-link">
                                <i class="far fa-circle nav-icon text-danger"></i>
                                <p>Pinjam buku</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
