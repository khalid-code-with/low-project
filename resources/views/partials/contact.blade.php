@extends('include.master')

@section('title', 'Contact Us')

@section('body-section')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>

    <body>

        {{-- contacts banner --}}
        <section class="contact-banner">
            <img src="{{ asset('images/contacts-image/contact-banner-img.jpg') }}" alt="Contact Allan"
                class="contact-banner-img">
            <div class="container">
                <div class="contact-banner-content">
                    <h1>Contact Us​</h1>
                </div>
            </div>
        </section>
        {{-- end contacts banner --}}

        {{-- Contact Section --}}
        <section class="Contacts-page-of-layour">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form-section">
                            <h2>Contact Allan Rouben Today</h2>
                            <p class="consultation-text">During a free consultation, Allan Rouben will discuss what steps
                                might be needed to manage your particular case.</p>

                            <form class="contact-form">
                                <div class="form-group">
                                    <label for="name">Name <span class="required-star">(Required)</span></label>
                                    <input type="text" id="name" class="form-control" placeholder="Enter your name">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone Number <span class="required-star">(Required)</span></label>
                                    <input type="tel" id="phone" class="form-control"
                                        placeholder="Enter your number">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email <span class="required-star">(Required)</span></label>
                                    <input type="email" id="email" class="form-control"
                                        placeholder="Enter your email">
                                </div>

                                <div class="form-group">
                                    <label for="message">How can Allan help? <span
                                            class="required-star">(Required)</span></label>
                                    <textarea id="message" class="form-control" rows="4"
                                        placeholder="Please Provide briefly description of your case"></textarea>
                                </div>

                                <button type="submit" class="submit-btn">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Right Column - Contact Info -->
                    <div class="col-lg-6">
                        <div class="contact-info-section">
                            <div class="section-title">
                                <h3>Get In Touch</h3>
                            </div>

                            <div class="section-title">
                                <img src="{{ asset('images/contacts-image/contact-icon.png') }}" alt="Contact Details Icon"
                                    class="section-icon">
                                <h4 class="contact-info-left">Contact Details</h4>
                            </div>

                            <div class="contact-detail mb-4">
                                <p><b class="increse-font-size">Address:</b><br>12, Kalyan Colony, Tonk Phatak, <br>Toronto,
                                    Jaipur - 302015 (Rajasthan)</p>
                            </div>
                            {{-- <div class="contact-detail mb-4">
                                <p><b class="increse-font-size">Office:</b><br>Chamber No. 206, E-Block, Rajasthan <br>High
                                    Court, Jaipur</p>
                            </div> --}}

                            <div class="contact-detail" style="margin-bottom:0px;">
                                <p><b class="increse-font-size">Number:</b>
                                    <a href="tel:+91-9414749404" class="red-link">+91-9414749404</a>
                                </p>
                            </div>

                            <div class="contact-detail" style="margin-bottom:0px;">
                                <p><b class="increse-font-size">Fax:</b> <a href="tel:4163657702" class="red-link">416
                                        365-7702</a></p>
                            </div>


                            <div class="contact-detail" style="margin-bottom:0px;">
                                <p><b class="increse-font-size">Email:</b>
                                    <a href="mailto:poonamjainadv1984@gmail.com"
                                        class="red-link">poonamjainadv1984@gmail.com</a>
                                </p>
                            </div>

                            <div class="social-section">
                                <div class="section-title">
                                    <img src="{{ asset('images/home-img/handshake-icon.png') }}" alt="Follow Allan Icon"
                                        class="section-icon">
                                    <h5 class="moving-leftsmall-devices">Follow Allan</h5>
                                </div>
                                <div class="social-icons">
                                    <a href="#" class="social-icon" style="margin-right: 25px;">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- map  section --}}
        <section class="map-section">
            <div class="container">
                <div class="law-map">


                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.082648114964!2d75.79799076020998!3d26.90087201050338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db58b677fa313%3A0x2bec6527878ad77a!2sRajasthan%20High%20Court%20E-Block%20Building!5e0!3m2!1sen!2sin!4v1747997620428!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
        </section>
    </body>

    </html>

@endsection
