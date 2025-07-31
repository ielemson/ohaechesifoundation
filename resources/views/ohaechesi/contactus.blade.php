@extends("ohaechesi.layout.Applayout")
@php
$setting = \App\Models\Setting::find(1);
@endphp
@section("main")
@include("ohaechesi.partials.bread_crumb",['title_1'=>"Contact",'title_2'=>'Contact Us'])
     

   <!-- Contact area S t a r t-->
      <div class="volunteer-details top-bottom-padding2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="contact-section">
                <div class="contact-list">
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-phone-fill"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Phone</p>
                      <a class="title" href="javascript:void(0)"> {{ $setting->phone }} </a>
                    </div>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-mail-fill"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Email</p>
                      <a class="title" href="javascript:void(0)"> {{ $setting->email }} </a>
                    </div>
                  </div>
                  <div class="contact-icon-list">
                    <div class="single-icon">
                      <i class="ri-map-pin-line"></i>
                    </div>
                    <div class="divider-ver"></div>
                    <div class="contact-content">
                      <p class="subtitle">Location</p>
                      <a class="title" href="javascript:void(0)"> {{ $setting->address }} </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="top-padding4">
            <div class="row gy-24">
              <div class="col-xl-6">
                <div class="send-box">
                  {{-- <form action="https://charitfix.vercel.app/theme/contact-us.html" class="custom-form"> --}}
                      <form id="contactForm" data-parsley-validate class="custom-form">
                            @csrf
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput1">Full Name</label>
                          {{-- <input type="text" class="form-control custom-input" id="exampleFormControlInput1" placeholder="Alex Jordan"> --}}
                          <input type="text" placeholder="Your name" id="name" name="name" class="form-control custom-input" 
                                           required 
                                           data-parsley-required-message="Name is required" 
                                           data-parsley-maxlength="255" 
                                           data-parsley-maxlength-message="Name cannot exceed 255 characters">
                        </div>
                      </div>
                      {{-- <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput5">Phone</label>
                          <input type="text" class="form-control custom-input" id="exampleFormControlInput5" placeholder="Phone">
                        </div>
                      </div> --}}
                      <div class="col-xl-12">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput2">Email address</label>
                          {{-- <input type="email" class="form-control custom-input" id="exampleFormControlInput2" placeholder="name@example.com"> --}}
                           <input type="email" placeholder="Your email" id="email" name="email" class="form-control custom-input" 
                                           required 
                                           data-parsley-type="email" 
                                           data-parsley-type-message="Enter a valid email address" 
                                           data-parsley-maxlength="255" 
                                           data-parsley-maxlength-message="Email cannot exceed 255 characters">
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput2">Security</label>
                         <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" class="reload" id="reload">
                                        &#x21bb;
                                    </button>
                                </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="form-group">
                          <label class="custom-label" for="exampleFormControlInput2">Enter Captcha Code</label>
                          <input type="email" class="form-control custom-input" id="captcha" placeholder="Enter Captcha" required data-error="Captcha cannot be empty" name="captcha" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="form-group">
                        <label class="custom-label" for="exampleFormControlTextarea1">Message</label>
                       <input type="text" placeholder="Your subject" id="subject" name="subject" class="form-control custom-input" 
                                       required 
                                       data-parsley-required-message="Subject is required" 
                                       data-parsley-maxlength="255" 
                                       data-parsley-maxlength-message="Subject cannot exceed 255 characters">
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="form-group">
                        <label class="custom-label" for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control custom-textarea" id="exampleFormControlTextarea1" placeholder="Type You message here"></textarea>
                      </div>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                  </form>
                </div>
              </div>
              <div class="col-xl-6">
                <iframe class="map-frame"  src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31772.0694651407!2d7.039164839902315!3d5.49119876648342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s1%20Ihechiuwa%20Street%2C%20Ikenegbu%2C%20Owerri%2C%20Imo%20State!5e0!3m2!1sen!2sng!4v1735799172383!5m2!1sen!2sng" width="600" height="450" style="border: 15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End-of contact-->
@endsection

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