<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/absensi-rapur') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>Absensi Rapur</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/anggota-dprd') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Anggota DPRD</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/report-absensi') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Report Data Absensi</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
