<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $title }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->username }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="/dashboard" class="nav-link {{ $title == 'Dashboard' ? 'active' : null }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="/calon-penerima" class="nav-link {{ $title == 'Calon Penerima' ? 'active' : null }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Calon Penerima
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="/kriteria" class="nav-link {{ $title == 'Kriteria' ? 'active' : null }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Kriiteria
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="/penilaian" class="nav-link {{ $title == 'Penilaian' ? 'active' : null }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Penilaian
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>