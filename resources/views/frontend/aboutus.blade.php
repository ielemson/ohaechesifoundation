@extends("frontend.welcomeLayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section('title', 'About Us')  
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
                       
                        <div class="about-two__content">
                            <div class="item mb-30 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                {{-- <div class="icon">
                                    <img src="assets/images/icon/about-icon1.png" alt="icon">
                                </div> --}}
                                <div class="content">
                                    <h6 class="mb-10">Our Committment</h6>
                                    <p style="text-align: justify">
                                        Our Charitable Foundation is committed to leaving a legacy of hope, empowerment, and sustainable development in communities around the world.
                                    </p>
                                </div>
                            </div>
                        
                        </div>

                    </div>
                    <div class="col-xl-12 pt-60 pb-60">
                        <div class="section-header mb-30">
                            
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                {{-- Our Mission &
                                Goals --}}
                                Core Areas of Focus
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="text-align: justify">
                            {{ $setting->our_mission }}
                            </p>
                        </div>
                        <div class="mission__item">
                            <div class="row g-4">
                                <div class="col-md-6 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="about-two__content">
                                        <div class="item">
                                            <div class="icon border-none primary-bg">
                                                <img src="assets/images/icon/mission-icon1.png" alt="icon">
                                            </div>
                                            <div class="content">
                                                <h6 class="mb-2">Youth Empowerment</h6>
                                                <p style="text-align: justify">
                                                Equipping young people with skills, resources, and opportunities to unlock their potential.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="about-two__content">
                                        <div class="item">
                                            <div class="icon border-none primary-bg">
                                                <img src="{{ asset("assets/images/icon/mission-icon2.png") }}" alt="icon">
                                            </div>
                                            <div class="content">
                                                <h6 class="mb-2">Education Financing</h6>
                                                <p style="text-align: justify">
                                                    Providing financial aid to ensure underprivileged children have access to quality education.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="about-two__content">
                                        <div class="item">
                                            <div class="icon border-none primary-bg">
                                                <img src="assets/images/icon/mission-icon3.png" alt="icon">
                                            </div>
                                            <div class="content">
                                                <h6 class="mb-2">Widows’ Support</h6>
                                                <p style="text-align: justify">
                                                    Offering financial and emotional support to widows to enhance their stability and independence.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="about-two__content">
                                        <div class="item">
                                            <div class="icon border-none primary-bg">
                                                <img src="assets/images/icon/mission-icon4.png" alt="icon">
                                            </div>
                                            <div class="content">
                                                <h6 class="mb-2"> Health Support</h6>
                                                <p style="text-align: justify">
                                                Delivering health assistance to indigent individuals in underserved communities.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="about-two__content">
                                        <div class="item">
                                            <div class="icon border-none primary-bg">
                                                <img src="assets/images/icon/mission-icon4.png" alt="icon">
                                            </div>
                                            <div class="content">
                                                <h6 class="mb-2"> Disability Aid</h6>
                                                <p style="text-align: justify">
                                                Supporting people with disabilities to improve their quality of life and inclusion.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <div class="about-two__content">
                                        <div class="item">
                                            <div class="icon border-none primary-bg">
                                                <img src="assets/images/icon/mission-icon4.png" alt="icon">
                                            </div>
                                            <div class="content">
                                                <h6 class="mb-2">Community Development</h6>
                                                <p style="text-align: justify">
                                                Initiating and supporting development projects and dialogue platforms to address community needs both locally and globally.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        @include("frontend.include.our_team")

       
    </main>

@endsection