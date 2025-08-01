 <footer>
        <div class="footer-wrapper footer-bg-one">
            <div class="container">
                <div class="footer-menu">
                    <div class="col-lg-12">
                        <div class="menu-wrapper d-flex align-items-center justify-content-between">
                            <div class="header-left d-flex align-items-center justify-content-between">
                                <!-- Logo-->
                                <div class="logo">
                                    <a href="{{url("/")}}"><img src="{{ asset("images/settings/$setting->website_logo_light") }}" alt="logo"></a>
                                </div>
                            </div>
                            <!-- Footer-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="listing" id="navigation2">
                                        <li class="single-list"><a href="{{url("/")}}" class="single">Home</a></li>
                                        <li class="single-list"><a href="donation.html" class="single">Donation</a></li>
                                        <li class="single-list"><a href="javascript:;" class="single">Events</a></li>
                                        <li class="single-list"><a href="{{route("aboutus")}}" class="single">About Us</a></li>
                                        <li class="single-list"><a href="{{route("contactus")}}" class="single">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Right button -->
                            <ul class="cart">
                                <li class="cart-list"><a href="javascript:;" class="donate-btn">Donate</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="footer-line">
                <div class="footer-imp-link row g-4 justify-content-between">
                    <div class="col-xl-4 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Explore Links</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <a class="single" href="{{route("aboutus")}}">About Company</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Latest Projects</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Latest Blog</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Our Testimonials</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Our Mission</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Get Support</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <a class="single" href="{{route("aboutus")}}">About</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">How it Works</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Knowledge Hub</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="javascript:void(0)">Success Stories</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="{{route("contactus")}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="footer-link">
                            <h4 class="title">Get Support</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-mail-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">  {{ $setting->email }}</a>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-phone-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">  {{ $setting->phone }}</a>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-10 mb-20">
                                        <div class="imp-icon">
                                            <i class="ri-map-pin-2-fill"></i>
                                        </div>
                                        <a class="single" href="javascript:void(0)">  {{ $setting->address }}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-xl-4 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Projects</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <div class="d-flex gap-20 mb-20 align-items-center">
                                        <div class="project-img">
                                            <a href="donation-details.html">
                                                <img src="assets/images/gallery/project-1.png" alt="image">
                                            </a>
                                        </div>

                                        <div class="project-info">
                                            <p class="project-date">12.Oct.2023</p>
                                            <h4 class="project-title"><a href="donation-details.html">18 Best Charity
                                                    Marketing Champions</a></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex gap-20">
                                        <div class="project-img">
                                            <a href="donation-details.html">
                                                <img src="assets/images/gallery/project-2.png" alt="image">
                                            </a>
                                        </div>
                                        <div class="project-info">
                                            <p class="project-date">20.Oct.2023</p>
                                            <h4 class="project-title"><a href="donation-details.html">Charity starts
                                                    from home. You Can't Even Help,</a></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
                <hr class="footer-line">
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer-copy-right text-center">
                                    <p class="pera">Copyright © {{Date("Y")}} Ohaechesi Foundation . All rights reserved.</p>
                                    <div class="footer-social-link">
                                        <ul class="listing">
                                            <li class="single-list">
                                                <a class="single" href="{{ $setting->facebook }}"><i class="ri-facebook-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a class="single" href="{{ $setting->twitter }}"><i class="ri-twitter-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a class="single" href="{{ $setting->instagram }}"><i class="ri-instagram-line"></i></a>
                                            </li>
                                            {{-- <li class="single-list">
                                                <a class="single" href="#"><i class="ri-linkedin-fill"></i></a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>