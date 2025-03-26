<header>
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                <a href="{{ route('welcome') }}" class="logo">
                    <img src="assets/images/logo.png" alt="IMG-LOGO">
                </a>
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="{{ request()->routeIs('welcome') ? 'current-list-item active-menu' : '' }}">
                            <a href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="{{ request()->routeIs('service') ? 'current-list-item active-menu' : '' }}"><a
                                href="{{ route('service') }}">Service</a></li>
                        </li>
                        <li class="{{ request()->routeIs('about') ? 'current-list-item active-menu' : '' }}"><a
                                href="{{ route('about') }}">About</a></li>
                        <li class="{{ request()->routeIs('contact') ? 'current-list-item active-menu' : '' }}"><a
                                href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="wrap-icon-header flex-w flex-r-m">
                    <a href="{{ route('login') }}"
                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                        Login Admin
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <div class="wrap-header-mobile">
        <div class="logo-mobile">
            <a href="{{ route('welcome') }} "><img src="assets/images/logo.png" alt="IMG-LOGO"></a>
        </div>
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <div class="menu-mobile">

        <ul class="main-menu-m">
            <ul class="main-menu">
                <li class="{{ request()->routeIs('welcome') ? 'current-list-item active-menu' : '' }}">
                    <a href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('service') ? 'current-list-item active-menu' : '' }}"><a
                        href="{{ route('service') }}">Service</a></li>
                </li>
                <li class="{{ request()->routeIs('about') ? 'current-list-item active-menu' : '' }}"><a
                        href="{{ route('about') }}">About</a></li>
                <li class="{{ request()->routeIs('contact') ? 'current-list-item active-menu' : '' }}"><a
                        href="{{ route('contact') }}">Contact</a></li>
                <a href="{{ route('login') }}"
                    class="flex-c-m stext-80 cl0 size-90 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                    Login Admin
                </a>
            </ul>
        </ul>
    </div>
    </div>
</header>
