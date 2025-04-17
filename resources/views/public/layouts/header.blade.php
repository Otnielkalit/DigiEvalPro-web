<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar"></div>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Help & FAQs
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        My Account
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <a href="{{ route('welcome') }}" class="logo">
                    <img src="assets/images/logo.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="{{ request()->routeIs('welcome') ? 'active-menu' : '' }}">
                            <a href="{{ route('welcome') }}">Beranda</a>
                        </li>
                        <li class="{{ request()->routeIs('service') ? 'active-menu' : '' }}"><a
                                href="{{ route('service') }}">Jasa</a></li>
                        </li>
                        <li class="{{ request()->routeIs('about') ? 'active-menu' : '' }}"><a
                                href="{{ route('about') }}">Tentang</a></li>
                        <li class="{{ request()->routeIs('contact') ? 'active-menu' : '' }}"><a
                                href="{{ route('contact') }}">Kontak</a></li>
                    </ul>
                </div>
                @if (Auth::user())
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <a href="{{ route('profil.show', Auth::user()) }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                            Akun anda
                        </a>
                    </div>
                @else
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <a href="{{ route('login') }}"
                            class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                            Login
                        </a>
                    </div>
                @endif

            </nav>
        </div>
    </div>
    <div class="wrap-header-mobile">
        <div class="logo-mobile">
            <a href="{{ route('welcome') }}"><img src="assets/images/logo.png" alt="IMG-LOGO"></a>
        </div>
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <a href="{{ route('login') }}"
                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                    Login
                </a>
            </div>
        </div>
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li class="{{ request()->routeIs('welcome') ? 'active-menu' : '' }}">
                <a href="{{ route('welcome') }}">Beranda</a>
            </li>
            <li class="{{ request()->routeIs('service') ? 'active-menu' : '' }}"><a
                    href="{{ route('service') }}">Jasa</a></li>
            </li>
            <li class="{{ request()->routeIs('about') ? 'active-menu' : '' }}"><a
                    href="{{ route('about') }}">Tentang</a></li>
            <li class="{{ request()->routeIs('contact') ? 'active-menu' : '' }}"><a
                    href="{{ route('contact') }}">Kontak</a></li>
        </ul>
    </div>
</header>
