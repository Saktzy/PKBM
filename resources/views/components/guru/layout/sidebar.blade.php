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
                <li class="menu-title">Kelas</li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-television-guide"></i><span>
                            Kelas </span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-tune"></i> <span>
                            Detail Kelas </span> <span class="float-right"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <x-guru.layout.sidebar.menu-item label="Tugas" url="Modul" />
                        <x-guru.layout.sidebar.menu-item label="Modul" url="Modul" />
                        <x-guru.layout.sidebar.menu-item label="Kuis" url="Modul" />
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span>
                            Ujian </span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-exit-to-app"></i><span>
                            Log out </span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
