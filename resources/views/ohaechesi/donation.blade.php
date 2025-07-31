@extends('ohaechesi.layout.Applayout')
@php
    $setting = \App\Models\Setting::find(1);
@endphp
@section('main')
    @include('ohaechesi.partials.bread_crumb', ['title_1' => 'Donation', 'title_2' => 'Donate to Us'])


    <!-- donate S t a r t -->
    <!-- Terms Condition Area S t a r t-->
    <div class="terms-condition area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Single -->
                    <div class="single-terms mb-30">
                        <h5 class="title font-600">Support Our Mission</h5>
                        <p class="pera">
                            At Ohaechesi Charitable Foundation, we believe that sustainable impact begins with collective action. Your generous contributions help us empower youth, support widows, finance education for underprivileged children, provide healthcare assistance, and foster community development.
                        </p>
                      <p class="pera">
                            Whether you're an individual, corporate donor, or partner organization, your support enables us to continue touching lives and building stronger communities.
                        </p>
                    </div>
                </div>
                <div class="col-xl-12">
                    <!-- Single -->
                    <div class="single-terms mb-30">
                        <h5 class="title font-600">How to Donate</h5>
                        <p class="pera">
                           For all donations, partnerships, or sponsorship inquiries, kindly contact our Financial Manager:

Mrs. Ngozi Ohaechesi
📞 Phone: +234 810 510 0923
📧 Email: ohaechesifoundation@gmail.com

She will guide you through the available giving options and ensure that your contributions are directed to the appropriate initiatives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End-of donate -->
@endsection
