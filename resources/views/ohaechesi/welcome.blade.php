@extends("ohaechesi.layout.Applayout")

@section("main")
        <!-- Hero area S t a r t-->
        @include("ohaechesi.partials.hero")
        <!-- End-of Hero-->

        <!-- helpful area S t a r t-->
       @include("ohaechesi.partials.helpful")
        <!-- End-of helpful-->

        <!-- urgent Area S t a r t -->
      @include("ohaechesi.partials.aboutPartial")
        <!-- End-of urgent area -->
        
        {{-- Core Areas --}}
        @include("ohaechesi.partials.coreAreas")
        {{-- Core Areas --}}

        @include("ohaechesi.partials.gallery")
        <!-- Any Question Area S t a r t -->
     @include("ohaechesi.partials.vision_mission")
        <!-- End-of Question Area -->

        @include("ohaechesi.partials.our_team")
        <!-- Our event S t a r t-->
     
@endsection