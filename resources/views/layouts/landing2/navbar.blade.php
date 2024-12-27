<body>
    <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
            <img src="{{ asset('/') }}landing2/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
        </a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap" style="position: absolute">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                        data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="{{ url('/') }}"><img
                                            src="{{ asset('/') }}landing2/images/logo-default-296x52.png"
                                            alt="" width="148" height="26" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item {{ request()->is('/') ? 'active' : '' }}"><a
                                                class="rd-nav-link" href="{{ url('/') }}">Beranda</a>
                                        </li>
                                        <li class="rd-nav-item {{ request()->is('layanan-kami') ? 'active' : '' }}"><a
                                                class="rd-nav-link" href="{{ url('layanan-kami') }}">Layanan
                                                Kami</a>
                                        </li>
                                        <li class="rd-nav-item {{ request()->is('rilis-terbaru') ? 'active' : '' }}"><a
                                                class="rd-nav-link" href="{{ url('rilis-terbaru') }}">Rilis
                                                Terbaru</a>
                                        </li>
                                        <li class="rd-nav-item {{ request()->is('artikel') ? 'active' : '' }}"><a
                                                class="rd-nav-link" href="{{ url('artikel') }}">Artikel</a>
                                        </li>
                                        <li class="rd-nav-item {{ request()->is('paket-harga') ? 'active' : '' }}"><a
                                                class="rd-nav-link" href="{{ url('paket-harga') }}">Paket
                                                Harga</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rd-navbar-collapse">
                                <ul class="socialite-list">
                                    <li class="rd-nav-item {{ request()->is('login') ? 'active' : '' }}"><a
                                            class="rd-nav-link" href="{{ url('login') }}">Login</a>
                                    </li>

                                    {{-- <li><a class="icon novi-icon socialite fa-facebook" href="#"></a></li>
                                    <li><a class="icon novi-icon socialite fa-twitter" href="#"></a></li> --}}
                                    {{-- <li><a class="icon novi-icon socialite fa-whatsapp"
                                            href="https://api.whatsapp.com/send?phone=6281577411111&text=Hai%20DJ%20Fox%2C%20saya%20ingin%20bertanya%20tentang%20jasa%20desain%20grafi"></a>
                                    </li>
                                    <li><a class="icon novi-icon socialite fa-instagram"
                                            href="https://www.instagram.com/djfox.id/"></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
