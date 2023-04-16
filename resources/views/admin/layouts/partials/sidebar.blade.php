<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src={{ asset('dist/img/AdminLTELogo.png') }} alt="Perpus Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href={{ route('admin.dashboard') }} class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Books
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@push('js')
    <script>
        $(document).ready(function () {
            // Add active state to sidbar nav links
            var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
            $(".sidebar .nav-sidebar a.nav-link").each(function () {
                if (this.href === path) {
                    $(this).addClass("active");
                }
            });
        })
    </script>
@endpush
