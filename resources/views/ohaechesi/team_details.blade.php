@extends("ohaechesi.layout.Applayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("main")
@include("ohaechesi.partials.bread_crumb")
        <!-- About us Area S t a r t -->
      <section class="about-area pt-5">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-6 my-auto">
              <!-- Section Tittle -->
              <div class="section-tittle mb-35">
                <span class="sub-tittle text-capitalize font-600">About us</span>
                <h2 class="title font-700 pb-15">We Are Best Treatment For Our Hospita</h2>
                <p class="pera-subtitle mb-15">When deciding which charity to donate to, it's important to do your e search and find one that aligns with your values and interests. Look for charities that are transparent preventable diseases,</p>
                <p class="pera-subtitle">When deciding which charity to donate to, it's important to do your e search and find one that aligns with your values and interests. Look for charities that are transparent preventable diseases,</p>
              </div>
              <div class="about-info">
                <div class="row">
                  <div class="col-lg-10 mb-20">
                    <div class="d-flex gap-20">
                      <div class="info-icon">
                        <i class="ri-hand-heart-line"></i>
                      </div>
                      <div class="info-content">
                        <h4 class="title">Donation</h4>
                        <p class="pera">Fund programs that help children escape poverty providing vocational training.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-10 mb-20">
                    <div class="d-flex gap-20">
                      <div class="info-icon">
                        <i class="ri-user-line"></i>
                      </div>

                      <div class="info-content">
                        <h4 class="title">Volunteer</h4>
                        <p class="pera">Fund programs that help children escape poverty providing vocational training.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-10 mt-10">
                    <a href="about.html" class="btn btn-primary-fill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="position-relative h-100">
                <div class="play-button">
                  <a id="play-video-two" class="video-play-button-two d-none d-lg-block d-none d-lg-block" href="javascript:void(0)">
                    <span></span>
                  </a>

                  <div id="video-overlay" class="video-overlay">
                    <a class="video-overlay-close">&times;</a>
                  </div>
                </div>
                <div >
                  <img class="w-100 d-none d-lg-block" src="assets/images/gallery/about-3.png" alt="image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of About us Area -->
      @include("ohaechesi.partials.our_team")
@endsection