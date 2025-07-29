@extends("frontend.welcomeLayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section('title', ' Home')  
@section("content")
     
        @include("frontend.include.header")
        @include("frontend.include.side_bar")

    <main>
        <!-- Banner area start here -->
       @include("frontend.include.banner")
        <!-- Banner area end here -->

        <!-- About area start here -->
     @include("frontend.include.partial_aboutus")
        <!-- About area end here -->


        <!-- Mission area start here -->
      @include("frontend.include.mission")
        <!-- Mission area end here -->

        <!-- Mission area start here -->
      @include("frontend.include.mission_vision")
        <!-- Mission area end here -->

@if (count($events)> 0)
       <!-- Profile area start here -->
       @include("frontend.include.events_partial")
        <!-- Profile area end here -->
@endif

@if (count($teams)> 0)
       <!-- Profile area start here -->
       @include("frontend.include.our_team")
        <!-- Profile area end here -->
@endif

        <!-- Project area start here -->
       {{-- @include("frontend.include.projects") --}}
        <!-- Project area end here -->
    </main>
@endsection