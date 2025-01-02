   <!-- Banner area start here -->
   <section class="banner-two-area">
    <div class="swiper banner-two__slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-bg" data-background="{{ asset("assets/images/banner/hero.jpg") }}"></div>
                <div class="container">
                    <div class="banner-two__content">
                        {{-- <h4 data-animation="fadeInUp" data-delay=".3s">Our Motto:</h4> --}}
                        <h1 data-animation="fadeInUp" data-delay=".5s">
                            {{ __("Doing Good") }} <br> {{ __("Leading a Legacy") }}
                        </h1>
                        <div class="btn-one mt-50" data-animation="fadeInUp" data-delay="1s">
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
            </div>
          
        </div>
    </div>
    <div class="banner-two__arry-btn">
        <button class="arry-prev mb-15 banner-two__arry-prev active"><i
                class="fa-light fa-chevron-left"></i></button>
        <button class="arry-next banner-two__arry-next"><i class="fa-light fa-chevron-right"></i></button>
    </div>
    <ul class="banner-two__social">
        <li>
            <a href="{{ $setting->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li>
            <a href="{{ $setting->twitter }}" class="active"><i class="fa-brands fa-twitter"></i></a>
        </li>
        <li>
            <a href="{{ $setting->instagram }}"><i class="fa-brands fa-instagram"></i></a>
        </li>
    </ul>
    <div class="banner-two__shape wow slideInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
        <img class="banner__line__animation" src="{{ asset("assets/images/shape/banner-line.png") }}" alt="shape">
    </div>
</section>
<!-- Banner area end here -->


        <!-- Service area start here -->
        <section class="service-area pt-50 pb-50 sub-bg">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-2 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="service__item">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service1.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Youths</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="service__item">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service1.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Widows</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="service__item active">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service2.png" alt="icon"></div> --}}
                            <div class="service__content" style="text-align: center">
                                <h3 class="text-white">Disabled Persons</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="service__item">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service3.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Community Development</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service area end here -->