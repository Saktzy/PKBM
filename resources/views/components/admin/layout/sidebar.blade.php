<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><img src="{{ url('public/guru/assets/images/logo.png') }}" height="24"
                    alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Beranda</li>
                <li>
                    <a href="{{ url('admin/beranda') }}" class="waves-effect"><i class="dripicons-broadcast"></i><span>
                            Pengumuman </span></a>
                </li>

                <li>
                    <a href="{{ url('admin/jelajah') }}" class="waves-effect"><i class="dripicons-browser"></i><span>
                            Telusuri </span></a>
                </li>
                <li class="menu-title">Pengguna</li>
                <li>
                    <a href="{{ url('admin/admin') }}" class="waves-effect"><i class="mdi mdi-account"></i><span>
                            Admin </span></a>
                </li>
                <li>
                    <a href="{{ url('admin/guru') }}" class="waves-effect"><i class="mdi mdi-account-plus"></i><span>
                            Guru </span></a>
                </li>
                <li>
                    <a href="{{ url('admin/murid') }}" class="waves-effect"><i
                            class="mdi mdi-account-multiple-plus"></i><span>
                            Murid </span></a>
                </li>
                <li class="menu-title">Sistem</li>
                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-exit-to-app"></i><span>
                            Log-Out </span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
