<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/small/avatar/dos:5372aa993199fff20b40210ed465542c20220601151114.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Maulana Arif Wijaya</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="/" class="nav-link {{ $title == 'beranda'? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link {{ $title == 'profile'? 'active' : '' }}"">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/college" class="nav-link {{ $title == 'college'? 'active' : '' }}"">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Pengalaman Kuliah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/articles" class="nav-link {{ $title == 'article'? 'active' : '' }}"">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Articles
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/hobi" class="nav-link {{ $title == 'hobi'? 'active' : '' }}"">
                        <i class="nav-icon fas fa-brush"></i>
                        <p>
                            Hobi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/keluarga" class="nav-link {{ $title == 'keluarga'? 'active' : '' }}"">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Keluarga
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/mata_kuliah" class="nav-link {{ $title == 'matkul'? 'active' : '' }}"">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Mata Kuliah
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/mahasiswa') }}" class="nav-link {{ $title == 'mahasiswa'? 'active' : '' }}"">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Mahasiswa
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
