@extends("frontend.welcomeLayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("content")
@include("frontend.include.header")
@include("frontend.include.side_bar")

    <main>
        <!-- Page banner area start here -->
       @include("frontend.include.page_banner",["bannerImg"=>"banner_inner_page.jpg","header_1"=>"About Us","header_2"=>"About Us"])
        <!-- Page banner area end here -->

        <!-- About area start here -->
        <section class="about-area pt-120 pb-120">
            <div class="container">
                <div class="row g-2 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about__image">
                            <div class="dots about-dot__animation">
                                <img src="assets/images/shape/about-dot.png" alt="dots">
                            </div>
                            <div class="sm-image">
                                <img src="assets/images/about/about-image2.png" alt="image">
                            </div>
                            <div class="image">
                                <img src="assets/images/about/about-image1.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header mb-20">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-regular fa-angles-left pe-1"></i> ABOUT US <i
                                    class="fa-regular fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                Ohaechesi Foundation
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="text-align: justify">
                                {!! $setting->about !!}
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->

        <!-- Service area start here -->
        {{-- <section class="service-area pt-100 pb-100 sub-bg">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="service__item">
                            <div class="service__icon"><img src="assets/images/icon/service1.png" alt="icon"></div>
                            <div class="service__content">
                                <h3 class="text-white">Kids Education</h3>
                                <p class="text-white">Every is to be welcomed in certain circumstances</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="service__item active">
                            <div class="service__icon"><img src="assets/images/icon/service2.png" alt="icon"></div>
                            <div class="service__content">
                                <h3 class="text-white">Healthy Food</h3>
                                <p class="text-white">Every is to be welcomed in certain circumstances</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="service__item">
                            <div class="service__icon"><img src="assets/images/icon/service3.png" alt="icon"></div>
                            <div class="service__content">
                                <h3 class="text-white">Medical Help</h3>
                                <p class="text-white">Every is to be welcomed in certain circumstances</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Service area end here -->

        <!-- About area start here -->
        {{-- <section class="about-two-area pt-120 pb-120 overflow-hidden">
            <div class="about-two__wrp">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="about-two__image image pr-60">
                                <img src="assets/images/about/about-two-image1.jpg" alt="image">
                                <div class="line-shape sway_Y__animation">
                                    <img src="assets/images/shape/about-line.png" alt="shape">
                                </div>
                                <div class="dot-shape sway__animation">
                                    <img src="assets/images/shape/about-dot3.png" alt="shape">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-header mb-20">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <i class="fa-regular fa-angles-left pe-1"></i> ABOUT US <i
                                        class="fa-regular fa-angles-right ps-1"></i>
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Explore
                                    Information About Charitable Organizations</h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">It is a long
                                    established fact that a reader will be distracted the readable content
                                    of a
                                    page when looking at layout the
                                    point of using lorem Ipsum <br>
                                    less normal distribution of letters.</p>
                            </div>
                            <div class="about-two__content">
                                <div class="item mb-30 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-icon1.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Quick Fundraise</h6>
                                        <p>Embarrassing hidden in the middle of All the Lorem Ipsum generators on the
                                            Internet to repeat predefined chunks</p>
                                    </div>
                                </div>
                                <div class="item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <img src="assets/images/icon/about-icon2.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Long -Time Support</h6>
                                        <p>Embarrassing hidden in the middle of All the Lorem Ipsum generators on the
                                            Internet to repeat predefined chunks</p>
                                    </div>
                                </div>
                                <div class="d-flex align-content-center flex-wrap gap-4 mt-40 wow fadeInDown"
                                    data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="btn-two">
                                        <span class="btn-circle">
                                        </span>
                                        <a href="about.html" class="btn-inner">
                                            <span class="btn-text">
                                                ABOUT MORE
                                            </span>
                                        </a>
                                    </div>
                                    <div class="info-video">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=ElG5-nXD0B8"><i
                                                class="fa-solid fa-play"></i></a>
                                        <h6>Intro Video</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- About area end here -->

       
    </main>

@endsection