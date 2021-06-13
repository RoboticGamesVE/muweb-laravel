<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="active">
                            <a href="{{ route('dashboard.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Default</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @php
                    $path = glob(resource_path('views/admin/partials/items') . '/*.blade.php');
                @endphp
                @foreach ($path as $nombre_fichero)
                    @include('admin.partials.items.' . basename($nombre_fichero, ".blade.php"))
                @endforeach
            </ul>
        </div>
    </div>
</nav>