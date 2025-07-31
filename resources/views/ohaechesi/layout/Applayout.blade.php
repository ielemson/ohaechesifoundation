@php
    $setting = \App\Models\Setting::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $setting->website_title }} :: @yield('title', '')</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="{{ asset("images/settings/$setting->meta_description") }}">
    <meta name="keywords"
        content="{{ asset("images/settings/$setting->meta_tag") }}">
    <meta name="author" content="initTheme">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ asset("images/settings/$setting->website_title") }}">
    <meta property="og:site_name" content="{{ __("Ohaechesi Charitable Foundation") }}">
    <meta property="og:url" content="https://www.ohaechesifoundation.com/">
    <meta property="og:image" content="{{ asset("images/settings/$setting->website_logo_dark") }}">
    <meta property="og:description"
        content="{{ asset("images/settings/$setting->meta_description") }}">
    <meta name="twitter:title" content="{{ asset("images/settings/$setting->website_title") }}">
    <meta name="twitter:description"
        content="{{ asset("images/settings/$setting->meta_description") }}">
 
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{ asset("images/settings/$setting->website_favicon") }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap-5.3.0.min.css")}}">
    <!-- fonts & icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/remixicon.css")}}">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/plugin.css")}}">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/main-style.css")}}">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/rtl.css"> -->
     <style>
        .parsley-required {
            font-size: 0.9rem;
            color: rgb(205, 23, 23);
            font-weight: 800;
        }
    </style>
</head>

<body>

     <div class="loading-page" id="preloader-active">
        <div class="counter">
            <p class="text text-capitalize">loading</p>
            <span class="number">0%</span>
            <span class="line"></span>
        </div>
    </div>
   @include("ohaechesi.partials.header")
    <main>
    @yield("main")
    </main>
    <!-- Footer S t a r t -->
   @include("ohaechesi.partials.footer")
    <!-- End-of Footer -->
    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

   <!-- Add an overlay element -->
    <div class="overlay"></div>
    <!-- jquery-->
    {{-- <script src="{{asset("assets/js/jquery-3.7.0.min.js")}}"></script> --}}
    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>
    <script src="{{asset("assets/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap-5.3.0.min.js")}}"></script>
    <!-- Plugin -->
    <script src="{{asset("assets/js/plugin.js")}}"></script>
    <!-- Main js-->
    <script src="{{asset("assets/js/main.js")}}"></script>

@stack('js_script')
</body>

</html>
