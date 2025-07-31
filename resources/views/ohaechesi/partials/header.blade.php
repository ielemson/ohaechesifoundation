 <header>
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper d-flex align-items-center justify-content-between">
                                <div class="header-left d-flex align-items-center justify-content-between">
                                    <!-- Logo-->
                                    <div class="logo logo-large light-logo">
                                        <a href="{{url("/")}}"><img src="{{ asset("images/settings/$setting->website_logo_dark") }}"
                                                alt="logo"></a>
                                    </div>
                                    <!-- Logo Mobile-->
                                    <div class="logo logo-mobile light-logo">
                                        <a href="{{url("/")}}"><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="img"></a>
                                    </div>
                                </div>

                                <div class="search-container">
                                    <input type="text" id="searchField" class="search-field" placeholder="Search...">
                                    <button id="closeSearch" class="close-search-btn"><i
                                            class="ri-close-line"></i></button>
                                </div>

                                <!-- Main-menu for desktop -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul class="listing" id="navigation">
                                            <li class="single-list">
                                                <a href="{{url("/")}}" class="single">Home </a>
                                            </li>
                                            <li class="single-list"><a href="{{route("aboutus")}}" class="single">About Us</a></li>
                                            <li class="single-list"><a href="{{route("donatenow")}}" class="single">Donation</a>
                                            </li>
                                            <li class="single-list"><a href="javascirpt:;" class="single">Our Program</a></li>
                                          
                                            <li class="single-list"><a href="{{route("contactus")}}" class="single">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-right">
                                    <div class="cart">
                                        <!-- search button -->
                                        {{-- <a href="javascript:void(0)" class="rounded-btn search-bar"><i
                                                class="ri-search-line"></i></a> --}}
                                        <a href="login.html" class="btn-primary-fill pill-btn">Log in</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="div">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>