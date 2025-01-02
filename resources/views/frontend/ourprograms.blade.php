@extends("frontend.welcomeLayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section('title', 'Our Programs')  
@section("content")
@include("frontend.include.header")
@include("frontend.include.side_bar")

    <main>
        <!-- Page banner area start here -->
       @include("frontend.include.page_banner",["bannerImg"=>"banner_inner_page.jpg","header_1"=>"Our Programs","header_2"=>"Our Programs"])
        <!-- Page banner area end here -->
 
        <section class="service-area pt-100 pb-100 sub-bg">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="service__item">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service1.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Yearly skill acquisition for youths</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="service__item">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service2.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Education financing for underprivileged children/youths.</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="service__item active">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service3.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Quarterly food support for widows.</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="service__item active">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service3.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Yearly start-up loan program for widows and youths.</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="service__item active">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service3.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Seasonal free medical programs.</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="service__item active">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service3.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Payment of hospital bills.</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="service__item active">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service3.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Seasonal provision of movement facilities for disabled and other support.</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="service__item active">
                            {{-- <div class="service__icon"><img src="assets/images/icon/service3.png" alt="icon"></div> --}}
                            <div class="service__content">
                                <h3 class="text-white">Encouraging community development efforts through financial support, provision of amenities, and organizing discussion forums.</h3>
                                {{-- <p class="text-white">Every is to be welcomed in certain circumstances</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection