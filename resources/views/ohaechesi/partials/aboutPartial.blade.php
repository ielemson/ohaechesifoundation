   <!-- About us Area S t a r t -->
@php
$setting = \App\Models\Setting::find(1);
@endphp   
   <section class="about-area section-padding">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-6 my-auto">
              <!-- Section Tittle -->
              <div class="section-tittle mb-35">
                <span class="sub-tittle text-capitalize font-600">About us</span>
                <h2 class="title font-700 pb-15">Ohaechesi Charitable Foundation</h2>
                <p class="pera-subtitle mb-15">   {!! $setting->about !!}</p>
               
              </div>
              <div class="about-info">
                <div class="row">
                  <div class="col-lg-10 mb-20">
                    <div class="d-flex gap-20">
                      <div class="info-icon">
                        <i class="ri-hand-heart-line"></i>
                      </div>
                      <div class="info-content">
                        <h4 class="title">Our Committment</h4>
                        <p class="pera"> Our Charitable Foundation is committed to leaving a legacy of hope, empowerment, and sustainable development in communities around the world.</p>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-lg-10 mb-20">
                    <div class="d-flex gap-20">
                      <div class="info-icon">
                        <i class="ri-user-line"></i>
                      </div>

                      <div class="info-content">
                        <h4 class="title">Volunteer</h4>
                        <p class="pera">Fund programs that help children escape poverty providing vocational training.</p>
                      </div>
                    </div>
                  </div> --}}
                  <div class="col-lg-10 mt-10">
                    <a href="{{route("aboutus")}}" class="btn btn-primary-fill">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
                  <img class="w-100 d-none d-lg-block" src="{{asset("assets/images/hero/ohaechesi-foundations.jpg")}}" alt="image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of About us Area -->