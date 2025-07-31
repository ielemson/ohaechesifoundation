   <!-- volunteer details area S t a r t-->
      <section class="team-section top-bottom-padding">
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-50">
                            <span class="sub-tittle text-capitalize font-600">Our Team</span>
                            <h2 class="title font-700">View our Team</h2>
                        </div>
                    </div>
                </div>
          <div class="row gy-24">
          @foreach ($teams as $team)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 view-wrapper">
              <div class="single-team h-calc">
                <div class="team-img">
                  <a href="volunteer-details.html" >
                    <img src="{{ asset('assets/images/team/' .$team->picture) }}" class="img-fluid w-100" alt="img">
                  </a>
                </div>
                <div class="team-info">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="team-info-title mb-8">
                      <div class="d-flex gap-40 align-items-center">
                        <div class="content">
                          <h4 class="title text-capitalize"><a href="volunteer-details.html">{{ $team->name }}</a></h4>
                          <p class="pera">{{ $team->position }}</p>
                        </div>
                        <div class="social">
                          <a class="hover-icon" href="javascript:void(0)"><i class="ri-share-fill"></i></a>
                          <div class="all-social-icon">
                              <a class="social-icon" href="{{ $team->instagram }}"><i class="ri-instagram-fill"></i></a>
                              <a class="social-icon" href="{{ $team->facebook }}"><i class="ri-facebook-fill"></i></a>
                              <a class="social-icon" href="{{ $team->twitter }}"><i class="ri-twitter-fill"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
         
        </div>
      </section>
      <!-- End-of volunteer details-->