<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar"></div>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">

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
                        <li class="{{ request()->routeIs('service') ? 'active-menu' : '' }}">
                            <a href="{{ route('service') }}">Layanan</a>
                        </li>
                        <li class="{{ request()->routeIs('about') ? 'active-menu' : '' }}">
                            <a href="{{ route('about') }}">Tentang Kami</a>
                        </li>
                        <li class="{{ request()->routeIs('contact') ? 'active-menu' : '' }}">
                            <a href="{{ route('contact') }}">Kontak</a>
                        </li>
                    </ul>
                </div>

                @if (Auth::user())
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="user-dropdown-container position-relative">
                            <a href="#"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 user-dropdown-toggle">
                                Hai, {{ Auth::user()->name }}
                            </a>
                            <div class="user-dropdown-menu">
                                <a href="{{ route('profil.show', Auth::user()) }}" class="user-dropdown-item">
                                    Akun Anda
                                </a>
                                <div class="user-dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST" class="user-dropdown-item">
                                    @csrf
                                    <button type="submit" class="user-dropdown-logout">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
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

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <div class="logo-mobile">
            <a href="{{ route('welcome') }}"><img src="assets/images/logo.png" alt="IMG-LOGO"></a>
        </div>
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            @if (Auth::user())
                <div class="user-dropdown-container-mobile position-relative">
                    <a href="#"
                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 user-dropdown-toggle-mobile">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="user-dropdown-menu-mobile">
                        <a href="{{ route('profil.show', Auth::user()) }}" class="user-dropdown-item-mobile">
                            Akun Anda
                        </a>
                        <div class="user-dropdown-divider-mobile"></div>
                        <form action="{{ route('logout') }}" method="POST" class="user-dropdown-item-mobile">
                            @csrf
                            <button type="submit" class="user-dropdown-logout-mobile">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                    Login
                </a>
            @endif
        </div>
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li class="{{ request()->routeIs('welcome') ? 'active-menu' : '' }}">
                <a href="{{ route('welcome') }}">Beranda</a>
            </li>
            <li class="{{ request()->routeIs('service') ? 'active-menu' : '' }}">
                <a href="{{ route('service') }}">Layanan</a>
            </li>
            <li class="{{ request()->routeIs('about') ? 'active-menu' : '' }}">
                <a href="{{ route('about') }}">Tentang Kami</a>
            </li>
            <li class="{{ request()->routeIs('contact') ? 'active-menu' : '' }}">
                <a href="{{ route('contact') }}">Kontak</a>
            </li>
        </ul>
    </div>
</header>

<!-- CSS for dropdown menu -->
<style>
    /* User dropdown styling */
    .user-dropdown-container {
        position: relative;
        display: inline-block;
    }

    .user-dropdown-menu {
        display: none;
        position: absolute;
        right: 0;
        min-width: 180px;
        background-color: #fff;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        border-radius: 3px;
        margin-top: 5px;
    }

    .user-dropdown-container:hover .user-dropdown-menu {
        display: block;
    }

    .user-dropdown-item {
        display: block;
        padding: 12px 16px;
        text-decoration: none;
        color: #333;
        transition: all 0.3s;
    }

    .user-dropdown-item:hover {
        background-color: #f1f1f1;
    }

    .user-dropdown-divider {
        height: 1px;
        background-color: #e0e0e0;
        margin: 0;
    }

    .user-dropdown-logout {
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        padding: 0;
        color: #e53935;
        cursor: pointer;
        font-size: 14px;
    }

    /* Mobile dropdown styling */
    .user-dropdown-container-mobile {
        position: relative;
        display: inline-block;
    }

    .user-dropdown-menu-mobile {
        display: none;
        position: absolute;
        right: 0;
        min-width: 180px;
        background-color: #fff;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        border-radius: 3px;
        margin-top: 5px;
    }

    .user-dropdown-container-mobile:hover .user-dropdown-menu-mobile {
        display: block;
    }

    .user-dropdown-item-mobile {
        display: block;
        padding: 12px 16px;
        text-decoration: none;
        color: #333;
        transition: all 0.3s;
    }

    .user-dropdown-item-mobile:hover {
        background-color: #f1f1f1;
    }

    .user-dropdown-divider-mobile {
        height: 1px;
        background-color: #e0e0e0;
        margin: 0;
    }

    .user-dropdown-logout-mobile {
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        padding: 0;
        color: #e53935;
        cursor: pointer;
        font-size: 14px;
    }
</style>

<!-- Optional JavaScript for toggling dropdown -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Optional: you can add JavaScript to toggle the dropdown on click
        // instead of using CSS hover (which might be better for mobile)

        const dropdownToggle = document.querySelector('.user-dropdown-toggle');
        const dropdownMenu = document.querySelector('.user-dropdown-menu');

        if (dropdownToggle && dropdownMenu) {
            dropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });

            // Close the dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.style.display = 'none';
                }
            });
        }

        // Mobile dropdown
        const dropdownToggleMobile = document.querySelector('.user-dropdown-toggle-mobile');
        const dropdownMenuMobile = document.querySelector('.user-dropdown-menu-mobile');

        if (dropdownToggleMobile && dropdownMenuMobile) {
            dropdownToggleMobile.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownMenuMobile.style.display = dropdownMenuMobile.style.display === 'block' ?
                    'none' : 'block';
            });

            // Close the dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!dropdownToggleMobile.contains(e.target) && !dropdownMenuMobile.contains(e
                        .target)) {
                    dropdownMenuMobile.style.display = 'none';
                }
            });
        }
    });
</script>
