   <!-- Cause area start here -->
   <section class="cause-area pt-120 pb-100">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-40">
            <div class="section-header">
                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <i class="fa-regular fa-angles-left pe-1"></i>Recent Events<i
                        class="fa-regular fa-angles-right ps-1"></i>
                </h5>
                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    Our Events / Happenings
                </h2>
            </div>
            <div class="arry-btn wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <button class="arry-prev cause__arry-prev"><i class="fa-regular fa-chevron-left"></i></button>
                <button class="arry-next cause__arry-next active ml-10"><i
                        class="fa-regular fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <div class="cause__slider-wrp">
       @foreach ($events as $event)
       <div class="swiper cause__slider">
        <div class="swiper-wrapper py-4">
            <div class="swiper-slide">
                <div class="cause__item">
                    <div class="cause__image image">
                        <img src="{{ asset('assets/images/banner/' .$event->event_banner) }}" alt="image">
                        <span class="cause-tag">{{ Carbon\Carbon::parse($event->created_at)->diffForHumans() }}</span>
                    </div>
                    <div class="cause__content">
                        <h4 class="mb-4 mt-20"><a href="{{ route("events.details",$event->slug) }}" class="primary-hover">
                        {{ $event->title }}
                        </a></h4>
                        <div class="progress-area">
                            
                            <div class="btn-three mt-30">
                                <span class="btn-circle">
                                </span>
                                
                                <a href="{{ route("events.details",$event->slug) }}" class="btn-inner">
                                    <span class="btn-text">
                                        Read More
                                        <i class="fa-solid fa-arrow-right ms-1"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
       @endforeach
    </div>
</section>
<!-- Cause area end here -->