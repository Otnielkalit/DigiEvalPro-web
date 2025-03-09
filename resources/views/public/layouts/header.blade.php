<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <div class="site-logo">
                        <a href="{{ route('welcome') }}">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <nav class="main-menu">
                        <ul>
                            <li class="{{ request()->routeIs('welcome') ? 'current-list-item' : '' }}">
                                <a href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'current-list-item' : '' }}"><a
                                    href="{{ route('about') }}">About</a></li>
                            <li class="{{ request()->routeIs('contact') ? 'current-list-item' : '' }}"><a
                                    href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="shop.html">Shop</a>
                            </li>
                            <li>
                                <div class="header-icons">
                                    <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                    <a class="login-btn" href="login.html"
                                        style="margin-left: 15px; font-weight: bold;">Login</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>
