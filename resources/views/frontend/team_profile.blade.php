@extends("frontend.welcomeLayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section('title', 'Our Team')  
@section("content")
@include("frontend.include.header")
@include("frontend.include.side_bar")

    <main>
        <!-- Page banner area start here -->
       @include("frontend.include.page_banner",["bannerImg"=>"banner_inner_page.jpg","header_1"=>"Our Team","header_2"=>"Our Team Details"])
        <!-- Page banner area end here -->

        <!-- Team single area start here -->
        <section class="team-single pt-120 pb-120">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-single__image">
                            <img src="{{ asset('assets/images/team/' .$teamprofile->picture) }}" alt="{{ $teamprofile->name }}">
                            <div class="team-info">
                                <a href="{{ $teamprofile->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{ $teamprofile->instagram }}" class=""><i class="fa-brands fa-instagram"></i></a>
                                {{-- <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a> --}}
                                {{-- <a href="#0"><i class="fa-brands fa-pinterest-p"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team-single__content">
                            <div class="title pb-20 mb-20 bor-bottom">
                                <h3>{{ $teamprofile->name }}</h3>
                                <span class="primary-color mt-1">{{ $teamprofile->position }}</span>
                            </div>
                            <div class="team-single__info">
                                <h4 class="pb-2">Background</h4>
                                <p class="mb-20" style="text-align: justify">
                                    {!! $teamprofile->about !!}
                                </p>
                                  
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
        <!-- Team single area end here -->
    </main>

@endsection