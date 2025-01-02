@extends("frontend.welcomeLayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("content")
@include("frontend.include.header")
@include("frontend.include.side_bar")

    <main>
        <!-- Page banner area start here -->
       @include("frontend.include.page_banner",["bannerImg"=>"banner_inner_page.jpg","header_1"=>"Our Team","header_2"=>"Our Team Details"])
        <!-- Page banner area end here -->

        <!-- Team single area start here -->
        <section class="team-single pt-120 pb-120">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-single__image">
                            <img src="assets/images/team/team-image1.jpg" alt="image">
                            <div class="team-info">
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#0" class="active"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team-single__content">
                            <div class="title pb-20 mb-20 bor-bottom">
                                <h3>Karniz Fatema</h3>
                                <span class="primary-color mt-1">Project Manager</span>
                            </div>
                            <div class="team-single__info">
                                <h4 class="pb-2">About Me</h4>
                                <p class="mb-20">This good man possesses qualities that inspire us all. He is selfless,
                                    always putting
                                    the needs of others before his
                                    own. Whether it's helping a neighbor in distress, volunteering at local charities,
                                    or simply lending a listening ear to
                                    those who need it, he consistently demonstrates the true meaning of altruism.
                                </p>
                                <p>This good man is a source of unwavering support and
                                    encouragement to those around
                                    him. He is a pillar of strength in
                                    times of adversity and a wellspring of joy in times of celebration.
                                </p>
                                <div class="skills mt-40">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="experience-progress-wrapper">
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                                        <h5 class="experience-title pb-2">Quick Fundraise</h5>
                                                        <span class="exp" style="left:90%">90%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft"
                                                            data-wow-duration=".8s" role="progressbar"
                                                            style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex justify-content-between align-items-center">
                                                        <h5 class="experience-title pb-2">Donation</h5>
                                                        <span style="left:85%">85%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft"
                                                            data-wow-duration=".9s" role="progressbar"
                                                            style="width: 85%;" aria-valuenow="95" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="experience-progress-wrapper">
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex align-items-center justify-content-between">
                                                        <h5 class="experience-title pb-2">Consultant</h5>
                                                        <span class="exp" style="left:95%">95%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft"
                                                            data-wow-duration=".8s" role="progressbar"
                                                            style="width: 95%;" aria-valuenow="95" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="experience-progress pb-4">
                                                    <div
                                                        class="experience-title-wrapper d-flex justify-content-between align-items-center">
                                                        <h5 class="experience-title pb-2">Charity</h5>
                                                        <span style="left:98%">98%</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLeft"
                                                            data-wow-duration=".9s" role="progressbar"
                                                            style="width: 98%;" aria-valuenow="98" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-single-history mt-60">
                <div class="container">
                    <div class="title pb-30 mb-30 bor-bottom">
                        <h3>Education Background</h3>
                    </div>
                    <h4><span class="primary-color text-capitalize mb-3">Bachelor's degree</span>, 2010</h4>
                    <p>Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat,
                        ornare
                        eget tristique
                        vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus
                        sem
                        id massa semper
                        ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet,
                        leo
                        auctor volutpat
                        ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>
                    <h4><span class="primary-color text-capitalize mb-3 mt-5">Master's degree in design</span>, 2015
                    </h4>
                    <p>Proin ultricies ultricies est vitae cursus. Nulla sit amet suscipit tortor. Maecenas dui erat,
                        ornare
                        eget tristique
                        vitae, rutrum pretium justo. Phasellus vitae consequat nisi, quis luctus nisl. Praesent faucibus
                        sem
                        id massa semper
                        ornare. Nam eu magna at mi pellentesque mattis. Morbi at condimentum velit. Phasellus aliquet,
                        leo
                        auctor volutpat
                        ultrices, metus dolor dictum enim, sed convallis lacus urna nec erat.</p>
                </div>
            </div>
        </section>
        <!-- Team single area end here -->
    </main>

@endsection