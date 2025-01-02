<footer class="footer-area secondary-bg overflow-hidden">
    <div class="footer__main-wrp">
        <div class="footer__shape-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="footer__shape__animation" src="assets/images/shape/footer-shape-left.png" alt="shape">
        </div>
        <div class="footer__shape-right wow slideInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
            <img class="footer__shape__animation-right" src="assets/images/shape/footer-shape-right.png"
                alt="shape">
        </div>
        <div class="container">
            <div class="footer__wrp pt-120 pb-120">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="footer__item">
                            <a href="{{ route("welcome") }}" class="logo mb-40">
                                <img src="{{ asset("images/settings/$setting->website_logo_light") }}" alt="{{ $setting->meta_title }}">
                            </a>
                            <p class="text-white">
                                {{ $setting->who_we_are }}
                            </p>
                            <div class="btn-one mt-40">
                                <span class="btn-circle">
                                </span>
                                <a href="{{ route("donatenow") }}" class="btn-inner">
                                    <span class="btn-text">
                                        DONATE NOW
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="footer__item">
                            <h3 class="title mb-40 text-white">Quick Links</h3>
                            <ul class="link">
                                <li class="mb-3">
                                    <a href="{{ route("aboutus") }}"><i class="fa-light fa-angles-right me-2"></i> About Us</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ route("contactus") }}"><i class="fa-light fa-angles-right me-2"></i> Contact Us
                                        
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ route("welcome") }}"><i class="fa-light fa-angles-right me-2"></i> Upcoming
                                        Event</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ route("welcome") }}"><i class="fa-light fa-angles-right me-2"></i> Latest
                                        Blog</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="footer__item">
                            <h3 class="title mb-40 text-white">Contact Info</h3>
                            <ul class="link info">
                                <li class="mb-3">
                                    <a href="tel:{{ $setting->phone }}"><i
                                            class="fa-solid fa-phone me-1 primary-color"></i>{{ $setting->phone }}</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{ $setting->email }}"><i class="fa-sharp fa-solid fa-envelope me-1 primary-color"></i>{{ $setting->email }}</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fa-solid fa-location-dot me-1 primary-color"></i> 
                                    {{ $setting->address }}
                                    </a>
                                </li>
                            </ul>
                            <div class="social-icon mt-30">
                                <a href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a class="active" href="{{ $setting->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                                <a href="{{ $setting->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copytext">
        <p class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">&copy; All Copyright {{ Date("Y") }} by <a
                href="{{ route("welcome") }}" class="text-white primary-hover">Ohaechesi Foundation</a></p>
    </div>
</footer>