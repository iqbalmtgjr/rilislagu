<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('') }}rilislagu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">RilisLagu.id</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->avatar == null)
                    <img src="{{ asset('') }}admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2 lozad"
                        alt="User Image">
                @else
                    @if (Auth::user()->google_id != null || Auth::user()->facebook_id != null)
                        @if (file_exists('gambar/' . auth()->user()->avatar))
                            <img class="img-circle elevation-2 lozad"
                                src="{{ asset('') . 'gambar/' . auth()->user()->avatar }}" alt="user" />
                        @else
                            <img class="img-circle elevation-2 lozad" src="{{ Auth::user()->avatar }}" alt="user" />
                        @endif
                    @else
                        <img class="img-circle elevation-2 lozad"
                            src="{{ asset('') . 'gambar/' . auth()->user()->avatar }}" alt="user" />
                    @endif
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a href="{{ url('kelola-pengguna') }}"
                            class="nav-link {{ request()->is('kelola-pengguna') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Pengguna
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('kelola-paket') }}"
                            class="nav-link {{ request()->is('kelola-paket') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Paket
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('kelola-berita') }}"
                            class="nav-link {{ request()->is('kelola-berita*') ? 'active' : '' }}">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>
                                Artikel
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('rilis-lagu') }}"
                            class="nav-link {{ request()->is('rilis-lagu*') ? 'active' : '' }}">
                            <i class="nav-icon far fa-file-audio"></i>
                            <p>
                                Rilis Lagu
                            </p>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->role == 'user')
                    <li class="nav-item">
                        <a href="{{ url('lihat-paket') }}"
                            class="nav-link {{ request()->is('lihat-paket') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-music"></i>
                            <p>
                                Lihat Paket Harga
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('submit') }}" class="nav-link {{ request()->is('submit') ? 'active' : '' }}">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Submit Lagu
                            </p>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
