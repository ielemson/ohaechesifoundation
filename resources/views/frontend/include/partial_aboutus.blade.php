<section class="about-two-area pt-120 pb-120 overflow-hidden">
    <div class="about-two__wrp">
        <div class="about-two__shape bobble__animation">
            <img src="assets/images/shape/about-dot2.png" alt="image">
        </div>
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
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            Ohaechesi Charitable Foundation</h2>
                        <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="text-align: justify">
                          {!! $setting->about !!}
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
                    
                        <div class="d-flex align-content-center flex-wrap gap-4 mt-40 wow fadeInDown"
                            data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="btn-two">
                                <span class="btn-circle">
                                </span>
                                <a href="{{ route("aboutus") }}" class="btn-inner">
                                    <span class="btn-text">
                                        READ MORE
                                    </span>
                                </a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>