 <!-- Team area start here -->
 <section class="team-area pt-120 pb-120 sub-bg">
    <div class="container">
        <div class="section-header mb-60 text-center">
            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <i class="fa-regular fa-angles-left pe-1"></i> Our Team <i
                    class="fa-regular fa-angles-right ps-1"></i>
            </h5>
            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">View our Team</h2>
        </div>
        <div class="row g-4">
         @foreach ($teams as $team)
         <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="team__item image">
                <img src="{{ asset('assets/images/team/' .$team->picture) }}" alt="{{ $team->name }}">
                <div class="team__content">
                    <div class="social-icon mb-30">
                        <a href="{{ $team->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                        <a class="active" href="{{ $team->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="content">
                        <h4><a href="{{ route("team.single",$team->slug) }}" class="primary-hover">{{ $team->name }}</a></h4>
                        <span>{{ $team->position }}</span>
                    </div>
                </div>
            </div>
        </div>
         @endforeach
           
           
        </div>
    </div>
</section>
<!-- Team area end here -->