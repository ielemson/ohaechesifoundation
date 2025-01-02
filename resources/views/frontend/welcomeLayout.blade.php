@php
    $setting = \App\Models\Setting::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="{{ $setting->meta_description }}">
    <link rel="canonical" href="{{ route("welcome") }}">
    <meta property="og:url" content="{{ route("welcome") }}">
    <meta property="og:title" content="{{ $setting->meta_title }}">
    <meta property="og:description"
        content="{{ $setting->meta_description }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ohaechesi Foundation">
    <meta property="og:image"
        content="{{ asset("images/settings/$setting->website_logo_dark") }}"">
    <meta name="bingbot" content="nocache">
    <link rel="shortcut icon" href="{{ asset("images/settings/$setting->website_favicon") }}" type="image/x-icon">
    <link rel="icon" href="{{ asset("images/settings/$setting->website_favicon") }}" type="image/x-icon">
    <link rel="icon" type="image/png" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <link rel="icon" type="image/ico" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <!-- #title -->
    <title>{{ $setting->website_title }} | @yield('title', '')</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{{ asset("images/settings/$setting->website_favicon") }}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- All min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .parsley-required {
            font-size: 0.9rem;
            color: rgb(205, 23, 23);
            font-weight: 800;
        }
    </style>
</head>

<body>

    <!-- Preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="loading-logo" src="{{ asset("images/settings/$setting->website_favicon") }}"
                        alt="Ohaechesi Foundation">

                </div>
            </div>
        </div>
    </div>
    <!-- Preloader area end -->
    @yield('content')
    <!-- Footer area start here -->
    @include('frontend.include.footer')
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>

    <!-- Bootstrap min Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Mean menu Js -->
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <!-- Swiper bundle min Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counterup min Js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow min Js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Magnific popup min Js -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice select min Js -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <!-- Isotope pkgd min Js -->
    {{-- <script src="{{ asset("assets/js/isotope.pkgd.min.html") }}"></script> --}}
    <!-- Waypoints Js -->
    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
    <!-- Script Js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @stack('js_script')
</body>

</html>
