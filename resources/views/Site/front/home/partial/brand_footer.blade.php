<!-- Brand Section -->
<div class="brand-wrapper style-2 pt-0 pb-80">
    <div class="array-button">
        <button class="array-prev-2"><i class="far fa-chevron-left"></i></button>
        <button class="array-next-2"><i class="far fa-chevron-right"></i></button>
    </div>
    <div class="container">
        <div class="swiper brand-slider">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="{{ asset('assets/img/brand/0'.$i.'.png') }}" alt="img">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer-section fix">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row justify-content-between">
                <!-- Contact -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget shape-map">
                        <div class="widget-head"><h4>Contact</h4></div>
                        <div class="footer-content">
                            <p>66 Road Broklyn Golden Street, 600 New York, USA</p>
                            <ul class="contact-info">
                                <li><i class="fa-regular fa-envelope"></i><a href="mailto:needhelp@company.com">needhelp@company.com</a></li>
                                <li><i class="fa-solid fa-phone-volume"></i><a href="tel:926668880000">+92 (666) 888 0000</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Links -->
                <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head"><h4>Links</h4></div>
                        <ul class="list-items">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">New Cars</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Gallery -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head"><h4>Gallery</h4></div>
                        <div class="footer-gallery">
                            <div class="gallery-wrap">
                                @for ($i = 1; $i <= 6; $i++)
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a href="{{ asset('assets/img/footer/gallery-'.$i.'.jpg') }}" class="img-popup">
                                                <img src="{{ asset('assets/img/footer/gallery-'.$i.'.jpg') }}" alt="gallery-img">
                                                <div class="icon"><i class="far fa-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head"><h4>Newsletter</h4></div>
                        <div class="footer-content">
                            <p>Subscribe to get our latest updates</p>
                            <div class="footer-input">
                                <input type="email" id="email2" placeholder="Email address">
                                <button class="newsletter-btn" type="submit"><i class="fa-regular fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-wrapper">
                <p class="wow fadeInUp" data-wow-delay=".4s">© 2024 <a href="{{ url('/') }}">Remons.com</a></p>
            </div>
        </div>
    </div>
</footer>
