<header class="header-section">
    <div class="header-top-section style-two">
        <div class="container-fluid">
            <div class="header-top-wrapper style-2">
                <ul class="contact-list">
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@example.com" class="link">info@example.com</a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        88 Broklyn Golden Street. New York
                    </li>
                </ul>
                <div class="header-top-right">
                    <ul class="top-list">
                        <li><a href="{{ url('/help') }}">Help</a></li>
                        <li><a href="{{ url('/support') }}">Support</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="header-3">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ url('/') }}" class="header-logo-1">
                                <img src="{{ url('assets/img/logo/white-logo-2.svg') }}" alt="logo-img">
                            </a>
                            <a href="{{ url('/') }}" class="header-logo-2">
                                <img src="{{ url('assets/img/logo/black-logo.svg') }}" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="icon-items">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <p>Call Anytime</p>
                                <h6><a href="tel:+9288009850">+92 (8800) - 9850</a></h6>
                            </div>
                        </div>
                        <a href="#0" class="search-trigger search-icon"><i class="fa-regular fa-magnifying-glass"></i></a>
                        <div class="header-button">
                            <a href="{{ url('/cars/details') }}" class="theme-btn">Find a Car</a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Inclui o menu --}}
                @include('home.nav')
            </div>
        </div>
    </div>
</header>
