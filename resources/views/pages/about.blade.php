@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp



    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About Us</h2>
                    <ol>
                        <li><a href="https://hamadan.worldwidesvc.com">Home</a></li>
                        <li>About Us</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ asset('fontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        {{--                        {!! $about->description !!}--}}

                        <!-- <h3 class="pt-0 pt-lg-5">Send & Receive money to your loved ones in minutes with great rates and low fees.</h3> -->


                        <!-- Tabs -->

                        <!-- <ul class="nav nav-pills mb-3">--}}
                                                  <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a></li>
                                                  <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li>
                                                  <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li>
                                                </ul> -->
                        <!-- End Tabs -->


                        <!-- Tab Content -->
                        <div class="tab-content">
                            <h3 style="color: #485664">
                                send a receive money to your loved ones in minutes with great rates and low fees.</h3>
                            <div class="tab-pane fade show active" id="tab1">

                                <p class="fst-italic">Why choose us?</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4 style="color: #485664">Easy to use</h4>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4 style="color: #485664">Faster Payments</h4>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4 style="color: #485664">Lower Fees</h4>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4 style="color: #485664">100% secure</h4>
                                </div>

                            </div>
                            {{--                        <!-- End Tab 1 Content -->--}}


                        </div>

                    </div>

                </div>

            </div>
        </section>


    </main><!-- End #main -->

@endsection
