<div class="navbar-area">
    <nav class="navbar bg-white navbar-area-1 navbar-area navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#edumint_main_menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="#"><img src="{{ url('assets/img/logo.png') }}" alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="log-bar" href="jelajah.html"><i class="fa fa-sign-out"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="edumint_main_menu">
                <ul class="navbar-nav menu-open">
                    <li class="menu-item ">
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('kelas') }}">Ruang Kelas</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('jelajah') }}">Jelajahi</a>
                    </li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                <a class="text" href="#">mak nama</a>
                <a class="log-bar" href="#"><i class="fa fa-sign-out"></i></a>
            </div>
        </div>
    </nav>
</div>
