<section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
data-background="{{ asset("assets/images/banner/$bannerImg") }}">
<div class="container">
    <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{{ $header_2 ?? "" }}</h2>
    <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
        <a href="{{ route("welcome") }}">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>
        {{ $header_2 ?? " " }}
        </span>
    </div>
</div>
</section>