<section class="banner-area pt-160 pb-160">
   <div class="banner__left-shape wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"><img
           class="shape-hand__animation" src="assets/images/shape/hero-shape2.png" alt="shape"></div>
   {{-- <div class="banner__right-shape"><img src="assets/images/shape/hero-shape.png" alt="shape"></div> --}}
   <div class="banner__hero"><img src="assets/images/banner/hero.jpg" alt="image"></div>
   <div class="container">
       <div class="banner__content">
           <h3 class="mb-15 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">We Are
           </h3>
           <h1 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            {{-- Empowering Communities, Changing Lives --}}
            {{ __("Doing Good") }} <br> {{ __("Leading a Legacy") }}
           </h1>
           <div class="btn-one mt-45 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
               <span class="btn-circle">
               </span>
               <a href="{{ route("aboutus") }}" class="btn-inner">
                   <span class="btn-text">
                       EXPLORE MORE
                   </span>
               </a>
           </div>
       </div>
   </div>
</section>