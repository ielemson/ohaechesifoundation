@extends("ohaechesi.layout.Applayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("title")
Our Team Details
@endsection

@section("main")
@include("ohaechesi.partials.bread_crumb",['title_1'=>"Our Team",'title_2'=>'Our Team Details'])
    

  <!-- volunteer details area S t a r t-->
      <section class="volunteer-details top-bottom-padding2">
        <div class="container">
          <div class="row gy-24">
            <div class="col-xl-4 col-md-5 col-lg-5">
              <div class="volunteer-img">
                <img src="{{ asset('assets/images/team/' .$teamprofile->picture) }}" alt="image">
              </div>
            </div>
            <div class="col-xl-8 col-md-7 col-lg-7">
              <div class="volunteer-info-card">
                <div class="volunteer-info">
                  <div class="naming-section">
                    <h3 class="title">{{ $teamprofile->name }}</h3>
                    <span class="subtitle mr-20">{{ $teamprofile->position }}</span> 
                  </div>
                  <div class="social-icon">
                    <i class="ri-share-fill"></i>
                  </div>
                </div>
                <div class="divider"></div>
                {{-- <p class="pera">   </p> --}}
                <h4 class="title">Background</h4>
                <p class="pera">{!! $teamprofile->about !!}</p>
                <h4 class="title">Contact Me</h4>
                <div class="contact-list">
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-facebook-fill"></i>
                    </div>
                    <a class="title" href="{{ $teamprofile->facebook }}">Facebook</a>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-twitter-fill"></i>
                    </div>
                    <a class="title" href="{{ $teamprofile->twitter }}">Twitter</a>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-instagram-line"></i>
                    </div>
                    <a class="title" href="{{ $teamprofile->facebook }}">Instagram</a>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </section>
      <!-- End-of volunteer details-->
  
@endsection