@extends('include.master')

@section('title', 'Home Page')

@section('body-section')


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    </head>

    <body>
        {{-- home banner start here --}}
        <section class="layour-home-banner">
            <div class="container">
                <h1>Experience. Compassion. Integrity.</h1>
                <h2>Allan Rouben – Toronto Lawyer</h2>
                <p>Skilled in Appeals and Litigation including Employment Law, Personal Injury, Professional Negligence
                    &
                    Insurance Cases</p>
                <button class="btn btn-consultation">BOOK A FREE CONSULTATION</button>

                <div class="contact-section">
                    <hr>
                    <div class="contact-content">
                        <div class="contact-left leftside-content-apply">
                            <p class="change-banner-color"><i class="fas fa-map-marker-alt"></i> Our Location</p>
                            <p>Toronto, Canada</p>
                        </div>
                        <div class="contact-right">
                            <p><a class="change-banner-color moving-left-book" href="#"><i class="fas fa-phone"></i>
                                    Book A Free
                                    Consultation</a></p>
                            <p><a href="tel:1-416-360-5444" class="moving-left-side">1-416-360-5444</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end home bannere here --}}

        <style>
            .law-section {
                padding: 60px 0;
            }

            .law-content h1 {
                font-size: 2.5rem;
                font-weight: 400;
            }

            .law-content p {
                font-size: 1rem;
                margin-top: 20px;
                color: #333;
            }

            .law-icons {
                margin-top: 40px;
            }

            .law-icon-img {
                width: 40px;
                height: 40px;
                object-fit: contain;
                margin-bottom: 10px;
            }

            .law-icon-text h5 {
                font-size: 1.25rem;
                font-weight: 500;
            }

            .law-icon-text p {
                font-size: 0.95rem;
                color: #555;
            }

            @media (max-width: 991.98px) {
                .law-image {
                    margin-top: 30px;
                }
            }
        </style>


        <section class="law-section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-7 law-content">
                        <h1>Welcome to the law offices of Allan Rouben.</h1>
                        <p>
                            I have been practicing law in Toronto for over 35 years and I handle all kinds of litigation
                            matters, including appeals, employment and labour disputes, personal injury and insurance cases,
                            long-term disability claims, professional negligence cases, shareholder and partnership
                            disputes, and some criminal cases.
                        </p>

                        <div class="row law-icons">
                            <div class="col-md-6 text-center text-md-start mb-4">
                                <img src="{{ asset('images/flag.png') }}" alt="Experience Icon" class="law-icon-img" />
                                <div class="law-icon-text">
                                    <h5>35 Years Of Experience</h5>
                                    <p>Extensive knowledge and expertise in legal matters.</p>
                                </div>
                            </div>
                            <div class="col-md-6 text-center text-md-start mb-4">
                                <img src="{{ asset('images/flag.png') }}" alt="Success Icon" class="law-icon-img" />
                                <div class="law-icon-text">
                                    <h5>Defining Success</h5>
                                    <p>Vigorously and persistently advocating for your legal rights in Toronto courts.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-5 text-center law-image">
                        <img src="{{ asset('images/layour-img.jpg') }}" alt="Lawyer Image" class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>



    </body>

    </html>
@endsection
