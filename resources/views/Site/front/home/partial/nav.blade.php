<div class="mean__menu-wrapper">
    <div class="main-menu">
        <nav id="mobile-menu">
            <ul>
                <li class="has-dropdown active menu-thumb">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li class="has-dropdown">
                    <a href="#">Pages <i class="fas fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/faq') }}">Faq's</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Cars <i class="fas fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="{{ url('/cars/grid') }}">Car Grid</a></li>
                        <li><a href="{{ url('/cars/list') }}">Car List</a></li>
                        <li><a href="{{ url('/cars/sidebar') }}">Car Sidebar</a></li>
                        <li><a href="{{ url('/cars/details') }}">Car Details</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Blog <i class="fas fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/blog/details') }}">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
