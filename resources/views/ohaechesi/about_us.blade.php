@extends("ohaechesi.layout.Applayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("main")
@include("ohaechesi.partials.bread_crumb",['title_1'=>"About",'title_2'=>'About Us'])
        <!-- About us Area S t a r t -->
      <section class="about-area pt-5 pb-5">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-6 my-auto">
              <!-- Section Tittle -->
              <div class="section-tittle mb-35">
                <span class="sub-tittle text-capitalize font-600">About us</span>
                <h2 class="title font-700 pb-15">Ohaechesi Foundation</h2>
                                
                <p class="pera-subtitle mb-15">{!! $setting->about !!}</p>
               
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

                {{-- Core Areas --}}
        @include("ohaechesi.partials.coreAreas")
        {{-- Core Areas --}}    
     

        <!-- Any Question Area S t a r t -->
     @include("ohaechesi.partials.vision_mission")
        <!-- End-of Question Area -->
    
      <!-- End-of About us Area -->
      @include("ohaechesi.partials.our_team")
@endsection