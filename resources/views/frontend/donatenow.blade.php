@extends("frontend.welcomeLayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("content")
@include("frontend.include.header")
@include("frontend.include.side_bar")

    <main>
        <!-- Page banner area start here -->
       @include("frontend.include.page_banner",["bannerImg"=>"banner_inner_page.jpg","header_1"=>"Donate","header_2"=>"Donate Now"])
        <!-- Page banner area end here -->

          <!-- Blog single area start here -->
          <section class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 order-2 order-lg-1">
                        <h4 class="mt-20 mb-20 fs-30">Rebecca's
                            New
                            Album
                            Aid
                            for the Needy</h4>
                        <div class="blog-single__review shadow p-4 mt-60">
                            <div class="donation-amount-area">
                                <div class="input-box pb-30 bor-bottom mb-30">
                                    <span>$</span>
                                    <input class="addAmount-value" type="text" value="$250">
                                </div>
                                <div class="amount-group mb-40">
                                    <button class="amount-btn">$99</button>
                                    <button class="amount-btn">$125</button>
                                    <button class="active amount-btn">$250</button>
                                    <button class="amount-btn">$350</button>
                                    <button class="amount-btn custom-amount">Custom Amount</button>
                                </div>
                                <h3 class="mb-30">Select payment Method</h3>
                                <div class="payment-btns">
                                    <button class="payment-btn">Test Donation</button>
                                    <button class="payment-btn">Offline Donation</button>
                                    <button class="payment-btn">Credit Cart</button>
                                </div>
                            </div>
                            <div class="contact__form">
                                <h3 class="fw-700 mb-30 mt-40">Personal Information</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="name">Fast Name*</label>
                                            <input id="name" class="bg-transparent bor" type="text"
                                                placeholder="Fast Name">
                                        </div>
                                        <div class="col-6">
                                            <label for="last-name">Last Name*</label>
                                            <input class="bg-transparent bor" id="last-name" type="text"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="name">Email Address*</label>
                                            <input id="email" class="bg-transparent bor" type="email"
                                                placeholder="Email Address">
                                        </div>
                                        <div class="col-6">
                                            <label for="amount">Donation Total*</label>
                                            <input class="bg-transparent addAmount-value bor" id="amount" value="$250"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="btn-two">
                                        <span class="btn-circle">
                                        </span>
                                        <a href="#" class="btn-inner">
                                            <span class="btn-text">
                                                Donate Now
                                            </span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
        <!-- Blog single area end here -->
    </main>

@endsection