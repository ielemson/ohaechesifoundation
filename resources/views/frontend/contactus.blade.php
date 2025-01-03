@extends("frontend.welcomeLayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section('title', 'Contact Us')  
@section("content")
@include("frontend.include.header")
@include("frontend.include.side_bar")

    <main>
        <!-- Page banner area start here -->
       @include("frontend.include.page_banner",["bannerImg"=>"banner_inner_page.jpg","header_1"=>"Contact Us","header_2"=>"Contact Us"])
        <!-- Page banner area end here -->

    <!-- Contact area start here -->
    <section class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="contact__item">
                        <div class="contact__icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 13.3333C28 22.6667 16 30.6667 16 30.6667C16 30.6667 4 22.6667 4 13.3333C4 10.1507 5.26428 7.0985 7.51472 4.84806C9.76516 2.59763 12.8174 1.33334 16 1.33334C19.1826 1.33334 22.2348 2.59763 24.4853 4.84806C26.7357 7.0985 28 10.1507 28 13.3333Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16 17.3333C18.2091 17.3333 20 15.5425 20 13.3333C20 11.1242 18.2091 9.33334 16 9.33334C13.7909 9.33334 12 11.1242 12 13.3333C12 15.5425 13.7909 17.3333 16 17.3333Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h5 class="fs-16 mt-20"><a href="#0">
                        {{ $setting->address }}    
                        </a></h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__item">
                        <div class="contact__icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.33464 5.33334H26.668C28.1346 5.33334 29.3346 6.53334 29.3346 8.00001V24C29.3346 25.4667 28.1346 26.6667 26.668 26.6667H5.33464C3.86797 26.6667 2.66797 25.4667 2.66797 24V8.00001C2.66797 6.53334 3.86797 5.33334 5.33464 5.33334Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M29.3346 8L16.0013 17.3333L2.66797 8" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h5 class="fs-16 mt-20"><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></h5>
                        {{-- <h5 class="fs-16"><a href="#0">contact@example.com</a></h5> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__item">
                        <div class="contact__icon">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="80" height="80" rx="40" fill="#F74F22" />
                                <path
                                    d="M32.6559 27C32.1329 27 31.6169 27.188 31.1869 27.531L31.1249 27.562L31.0939 27.594L27.9689 30.813L27.9999 30.843C27.5413 31.2594 27.2164 31.8022 27.0662 32.4031C26.916 33.004 26.9472 33.6359 27.1559 34.219C27.1599 34.227 27.1519 34.242 27.1559 34.25C28.0039 36.676 30.1719 41.36 34.4059 45.594C38.6559 49.844 43.4019 51.926 45.7499 52.844H45.7809C46.3693 53.0385 46.998 53.0774 47.6059 52.9568C48.2139 52.8362 48.7802 52.5604 49.2499 52.156L52.4059 49C53.2339 48.172 53.2339 46.734 52.4059 45.906L48.3439 41.844L48.3119 41.781C47.4839 40.953 46.0159 40.953 45.1869 41.781L43.1869 43.781C41.6859 43.0599 40.3053 42.1114 39.0939 40.969C37.4569 39.406 36.6209 37.609 36.3129 36.906L38.3129 34.906C39.1529 34.066 39.1679 32.668 38.2809 31.844L38.3119 31.812L38.2189 31.719L34.2189 27.594L34.1879 27.563L34.1249 27.531C33.7098 27.1921 33.1917 27.0048 32.6559 27ZM32.6559 29C32.7376 29.0047 32.8151 29.038 32.8749 29.094L36.8749 33.187L36.9689 33.281C36.9609 33.273 37.0269 33.379 36.9059 33.5L34.4059 36L33.9369 36.438L34.1569 37.062C34.1569 37.062 35.3049 40.137 37.7189 42.438L37.9379 42.625C40.2609 44.746 42.9999 45.906 42.9999 45.906L43.6249 46.188L46.5939 43.218C46.7659 43.047 46.7339 43.047 46.9059 43.218L50.9999 47.314C51.1719 47.485 51.1719 47.423 50.9999 47.594L47.9369 50.657C47.4769 51.052 46.9879 51.134 46.4069 50.939C44.1409 50.048 39.7379 48.114 35.8119 44.189C31.8549 40.231 29.7889 35.743 29.0319 33.564C28.8789 33.157 28.9879 32.556 29.3439 32.251L29.4059 32.188L32.4379 29.095C32.4969 29.0391 32.5737 29.0055 32.6549 29H32.6559Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h5 class="fs-16 mt-20"><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></h5>
                        {{-- <h5 class="fs-16"><a href="tel:+380961381877">+380961381877</a></h5> --}}
                    </div>
                </div>
            </div>
            <div class="row g-5 mt-20">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31772.0694651407!2d7.039164839902315!3d5.49119876648342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s1%20Ihechiuwa%20Street%2C%20Ikenegbu%2C%20Owerri%2C%20Imo%20State!5e0!3m2!1sen!2sng!4v1735799172383!5m2!1sen!2sng"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 order-1  order-lg-2">
                    <div class="contact__form">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-regular fa-angles-left pe-1"></i> Contact <i
                                    class="fa-regular fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                Get in Touch
                            </h2>
                        </div>
                        {{-- <form id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label for="name">Your Name*</label>
                                    <input id="name" type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="col-6">
                                    <label for="email">Your Email*</label>
                                    <input id="email" type="email" name="email" placeholder="Your Email">
                                </div>
                            </div>
                            <label for="subject">Subject*</label>
                            <input id="subject" type="text" name="subject" placeholder="Subject">
                            <div class="text-area">
                                <label for="massage">Your Review*</label>
                                <textarea id="massage" name="message" placeholder="Write Message"></textarea>
                            </div>
                            <div class="btn-two">
                                <span class="btn-circle">
                                </span>
                                <button type="submit" class="btn-inner">
                                    <span class="btn-text">
                                        Submit
                                    </span>
                                </button>
                            </div>
                        </form> --}}
                        <form id="contactForm" data-parsley-validate>
                            @csrf
                            <div class="row">
                                <div class="col-6"><div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" placeholder="Your name" id="name" name="name" class="form-control" 
                                           required 
                                           data-parsley-required-message="Name is required" 
                                           data-parsley-maxlength="255" 
                                           data-parsley-maxlength-message="Name cannot exceed 255 characters">
                                </div></div>
                                <div class="col-6">  <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" placeholder="Your email" id="email" name="email" class="form-control" 
                                           required 
                                           data-parsley-type="email" 
                                           data-parsley-type-message="Enter a valid email address" 
                                           data-parsley-maxlength="255" 
                                           data-parsley-maxlength-message="Email cannot exceed 255 characters">
                                </div></div>
                            </div>
                          
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" placeholder="Your subject" id="subject" name="subject" class="form-control" 
                                       required 
                                       data-parsley-required-message="Subject is required" 
                                       data-parsley-maxlength="255" 
                                       data-parsley-maxlength-message="Subject cannot exceed 255 characters">
                            </div>
                          <div class="row">
                          <div class="col-6">
                            <div class="mb-3">
                                <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                        &#x21bb;
                                    </button>
                                </div>
                            </div>
                          </div>
                            
                      <div class="col-6">
                        <div class="mb-3">
                           
                            
                                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" required data-error="Captcha cannot be empty" name="captcha" required>
                                <div class="help-block with-errors"></div>
                          
                            
                        </div>
                      </div>
                          </div>


                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" placeholder="Your message" name="message" class="form-control" rows="5" 
                                          required 
                                          data-parsley-required-message="Message is required"></textarea>
                            </div>
                            <div class="btn-two">
                                <span class="btn-circle">
                                </span>
                                <button type="submit" class="btn-inner">
                                    <span class="btn-text">
                                        Submit
                                    </span>
                                </button>
                            </div>
                        </form>
                        <div id="formResponse" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact area end here -->
</main>

@push("js_script")

<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#contactForm').parsley();
    
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();
            if ($(this).parsley().isValid()) {
                $.ajax({
                    url: "{{ route('contact.send') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        $('#formResponse').html('<div class="alert alert-success">Your message has been sent successfully!</div>');
                        $('#contactForm')[0].reset();
                        $('#contactForm').parsley().reset();
                    },
                    error: function (xhr) {
                        $('#formResponse').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                    }
                });
            }
        });
    });
</script>
@endpush
@endsection