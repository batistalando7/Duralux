<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remons Rentals</title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>

    <!-- Offcanvas Area Start -->
    <div class="offcanvas-menu">
        <!-- Offcanvas content remains as previously provided -->
    </div>

    <!-- Header Section Start -->
    <header class="header-section header-3">
        <!-- Header content remains as previously provided -->
    </header>

    @yield('content')

    <!-- Footer Section Start -->
    <footer class="footer-section fix">
        <div class="container">
            <div class="footer-widgets-wrapper">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget shape-map">
                            <div class="widget-head">
                                <h4>Contact</h4>
                            </div>
                            <div class="footer-content">
                                <p>
                                    66 Road Broklyn Golden Street, 600
                                    New York, USA
                                </p>
                                <ul class="contact-info">
                                    <li>
                                        <i class="fa-regular fa-envelope"></i>
                                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone-volume"></i>
                                        <a href="tel:926668880000">+92 (666) 888 0000</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4>Contact</h4>
                            </div>
                            <ul class="list-items">
                                <li>
                                    <a href="{{ url('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('car-details') }}">New Cars</a>
                                </li>
                                <li>
                                    <a href="{{ url('news-details') }}">Latest News</a>
                                </li>
                                <li>
                                    <a href="{{ url('gallery') }}">Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4>Gallery</h4>
                            </div>
                            <div class="footer-gallery">
                                <div class="gallery-wrap">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a href="{{ asset('assets/img/footer/gallery-1.jpg') }}" class="img-popup">
                                                <img src="{{ asset('assets/img/footer/gallery-1.jpg') }}" alt="gallery-img">
                                                <div class="icon">
                                                    <i class="far fa-plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="{{ asset('assets/img/footer/gallery-2.jpg') }}" class="img-popup">
                                                <img src="{{ asset('assets/img/footer/gallery-2.jpg') }}" alt="gallery-img">
                                                <div class="icon">
                                                    <i class="far fa-plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="{{ asset('assets/img/footer/gallery-3.jpg') }}" class="img-popup">
                                                <img src="{{ asset('assets/img/footer/gallery-3.jpg') }}" alt="gallery-img">
                                                <div class="icon">
                                                    <i class="far fa-plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a href="{{ asset('assets/img/footer/gallery-4.jpg') }}" class="img-popup">
                                                <img src="{{ asset('assets/img/footer/gallery-4.jpg') }}" alt="gallery-img">
                                                <div class="icon">
                                                    <i class="far fa-plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="{{ asset('assets/img/footer/gallery-5.jpg') }}" class="img-popup">
                                                <img src="{{ asset('assets/img/footer/gallery-5.jpg') }}" alt="gallery-img">
                                                <div class="icon">
                                                    <i class="far fa-plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="{{ asset('assets/img/footer/gallery-6.jpg') }}" class="img-popup">
                                                <img src="{{ asset('assets/img/footer/gallery-6.jpg') }}" alt="gallery-img">
                                                <div class="icon">
                                                    <i class="far fa-plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h4>Newsletter</h4>
                            </div>
                            <div class="footer-content">
                                <p>Subscribe our newsletter to get our latest update & news</p>
                                <form action="{{ url('subscribe') }}" method="POST">
                                    @csrf
                                    <div class="footer-input">
                                        <input type="email" id="email2" name="email" placeholder="Email address" required>
                                        <button class="newsletter-btn" type="submit">
                                            <i class="fa-regular fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-wrapper">
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            © Copyright 2024 by <a href="{{ url('/') }}">Remons.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JavaScript Files -->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/animation.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>