@extends("frontend.welcomeLayout")

@section("content")
<main>

    <!-- Error area start here -->
    <section class="error-area pt-120 pb-120">
        <div class="container">
            <div class="error__item">
                <div class="image mb-60">
                    <img src="{{ asset("assets/images/error/404.png") }}" alt="image">
                </div>
                <h2>Whoops! This Page got Lost
                    in converstion</h2>
                <div class="btn-two mt-50">
                    <span class="btn-circle">
                    </span>
                    <a href="{{ route("welcome") }}" class="btn-inner">
                        <span class="btn-text">
                            GO BACK HOME
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Error area end here -->
</main>
@endsection