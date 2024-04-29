<div class="side-nav vertical-menu nav-menu-light scrollable">
    <div class="nav-logo">

        {{-- <div class="w-100 logo">
            <img class="img-fluid" src="{{ asset('admin_assets') }}/assets/images/logo/logo.png" style="max-height: 70px;" alt="logo">
        </div> --}}

        <h4>Outpost Admin Panel</h4>


        <div class="mobile-close">
            <i class="icon-arrow-left feather"></i>
        </div>
    </div>
    <ul class="nav-menu">
        <li class="nav-menu-item {{ request()->segment(1) == 'dashboard' ? 'router-link-active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i class="icon-grid feather"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-group-title">APPS</li>

        <li class="nav-submenu {{ request()->segment(2) == 'country' ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="la-globe la"></i>
                <span>Country</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse" style="{{ request()->segment(2) == 'country' ? 'display:block;' : '' }}">

                <li class="nav-menu-item {{ request()->segment(2) == 'country' && request()->segment(3) == null ? 'router-link-active' : '' }}">
                    <a href="/admin/country">List Data Country</a>
                </li>

                <li class="nav-menu-item {{ request()->segment(2) == 'country' && request()->segment(3) == 'create' ? 'router-link-active' : '' }}">
                    <a href="/admin/country/create">Add Data Country</a>
                </li>
            </ul>
        </li>

        <li class="nav-submenu {{ request()->segment(2) == 'location' ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="la-home la"></i>
                <span>Location</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse" style="{{ request()->segment(2) == 'location' ? 'display:block;' : '' }}">

                <li class="nav-menu-item {{ request()->segment(2) == 'location' && request()->segment(3) == null ? 'router-link-active' : '' }}">
                    <a href="/admin/location">List Data Location</a>
                </li>

                <li class="nav-menu-item {{ request()->segment(2) == 'location' && request()->segment(3) == 'create' ? 'router-link-active' : '' }}">
                    <a href="/admin/location/create">Add Data Location</a>
                </li>
            </ul>
        </li>

        <li class="nav-submenu {{ request()->segment(2) == 'service' ? 'open' : '' }}">
            <a class="nav-submenu-title">
                <i class="la-boxes la"></i>
                <span>Service</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse" style="{{ request()->segment(2) == 'service' ? 'display:block;' : '' }}">

                <li class="nav-menu-item {{ request()->segment(2) == 'service' && request()->segment(3) == null ? 'router-link-active' : '' }}">
                    <a href="/admin/service">List Data Service</a>
                </li>

                <li class="nav-menu-item {{ request()->segment(2) == 'service' && request()->segment(3) == 'create' ? 'router-link-active' : '' }}">
                    <a href="/admin/service/create">Add Data Service</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
