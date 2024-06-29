<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/favicon.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ url('admin') }}" class="d-block">Hai, {{ Auth::user()->name }}</a>
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
                <li class="nav-header">MENU UTAMA</li>

                @if (Auth::user()->level == 'admin')
                    <li class="nav-item">
                        <a href="{{ url('admin') }}"
                            class="nav-link {{ request()->segment(1) == 'admin' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li
                        class="nav-item {{ in_array(request()->segment(1), ['karyawan', 'dokter', 'pasien']) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th-large"></i>
                            <p>
                                Master Data
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ url('karyawan') }}"
                                    class="nav-link {{ request()->segment(1) == 'karyawan' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Karyawan</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('dokter') }}"
                                    class="nav-link {{ request()->segment(1) == 'dokter' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Dokter</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('pasien') }}"
                                    class="nav-link {{ request()->segment(1) == 'pasien' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Pasien</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-header">MENU TAMBAHAN</li>

                    <li class="nav-item {{ in_array(request()->segment(1), ['gender', 'unit']) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-th-large"></i>
                            <p>
                                Opsi Karyawan
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ url('gender') }}"
                                    class="nav-link {{ request()->segment(1) == 'gender' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jenis Kelamin</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('unit') }}"
                                    class="nav-link {{ request()->segment(1) == 'unit' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Unit</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li
                        class="nav-item {{ in_array(request()->segment(1), ['spesialis', 'praktek']) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-hospital-symbol"></i>
                            <p>
                                Opsi Dokter
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ url('spesialis') }}"
                                    class="nav-link {{ request()->segment(1) == 'spesialis' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Spesialis</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('praktek') }}"
                                    class="nav-link {{ request()->segment(1) == 'praktek' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jadwal Praktek</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li
                        class="nav-item {{ in_array(request()->segment(1), ['marital', 'gender']) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-biohazard"></i>
                            <p>
                                Opsi Pasien
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ url('marital') }}"
                                    class="nav-link {{ request()->segment(1) == 'marital' ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Status Perkawinan</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
