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
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="https://hamadan.worldwidesvc.com">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                </div>

            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d620.3276831349223!2d0.6926579358230567!3d51.54420092870562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8d9bb33eed235%3A0x6bc0fbdcf15ad2ca!2s41%20West%20Rd%2C%20Westcliff-on-Sea%2C%20Southend-on-Sea%2C%20Westcliff-on-Sea%20SS0%209AU!5e0!3m2!1sen!2suk!4v1652193624964!5m2!1sen!2suk"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                <!-- <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                  frameborder="0" allowfullscreen></iframe> -->
            </div><!-- End Google Maps -->

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>Get in touch</h3>

                            <!-- <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p> -->

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>{{ $contact->address }}</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p><a href="mailto:{{ $contact->email_one }}" style="color: #8f9fae;">{{
                                        $contact->email_one }}</a></p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p><a href="tel:{{ $contact->phone_one }}" style="color: #8f9fae;">{{
                                        $contact->phone_one }}</a></p>
                                </div>
                            </div><!-- End Info Item -->


                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                             <textarea class="form-control" name="message" placeholder="Message"
                                       required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
