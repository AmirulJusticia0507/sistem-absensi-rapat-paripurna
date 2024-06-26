<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('absensi_rapur') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>Absensi Rapur</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('anggota_dprd') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Anggota DPRD</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('report_data_absensi') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Report Data Absensi</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
