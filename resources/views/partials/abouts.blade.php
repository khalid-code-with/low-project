@extends('include.master')

@section('title', 'Abouts')

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

        {{-- abouts bannere  --}}
        <section class="abouts-banner">
            <img src="{{ asset('images/abouts-img/abouts-banner.png') }}" alt="About Allan" class="abouts-banner-img">
            <div class="container">
                <div class="abouts-banner-content">
                    <h1>About Allan Rouben</h1>
                </div>
            </div>
        </section>
        {{-- end abouts bannere --}}


        {{-- abouts defining section start --}}
        <section class="criminal-layour-section">
            <div class="container">
                <div class="row g-2">
                    {{-- box 1 --}}
                    <div class="col-md-4 col-12">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <img src="{{ asset('images/home-img/define-success-img.jpg') }}" alt="Defining Success Icon"
                                    style="width: 60px" height="180px">
                            </div>
                            <h3>Defining Success</h3>
                            <p>Allan will vigorously and persistently advocate for your <a href="#"
                                    class="red-link">legal rights</a> as your trusted <a href="#"
                                    class="red-link">legal counsel</a>.</p>
                        </div>
                    </div>

                    {{-- box 2 --}}
                    <div class="col-md-4 col-12">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <img src="{{ asset('images/abouts-img/membership-icon.png') }}" alt="Experience Icon">
                            </div>
                            <h3>35 Years Of Experience</h3>
                            <p>Extensive knowledge and expertise in legal matters such as <a href="#"
                                    class="red-link">appeals</a>, <a href="#" class="red-link">civil litigation</a>,
                                <a href="#" class="red-link">personal injury</a> and <a href="#"
                                    class="red-link">insurance law</a>, and <a href="#" class="red-link">employment
                                    law</a>.
                            </p>
                        </div>
                    </div>
                    {{-- box 3 --}}

                    <div class="col-md-4 col-12">
                        <div class="feature-box">
                            <div class="feature-icon">
                                <img src="{{ asset('images/abouts-img/membership-icon.png') }}" alt="Memberships Icon">
                            </div>
                            <h3>Memberships</h3>
                            <p>Allan is a member of the <a href="#" class="red-link">Advocates' Society</a>, the <a
                                    href="#" class="red-link">Ontario Trial Lawyers Association</a>, the <a
                                    href="#" class="red-link">Criminal Lawyers Association</a>, the <a href="#"
                                    class="red-link">American Bar Association</a>, and the <a href="#"
                                    class="red-link">Osgoode Society</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end section --}}



        {{-- abouts layour briefly --}}
        <section class="abouts-the-layour-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2><a href="{{ url('/') }}" class="section-title-link">Professional And Experienced
                                    Toronto Lawyer</a>
                            </h2>
                            <h3>About Allan Rouben</h3>
                            <p>I graduated from McGill University in Montreal with a B.A. in 1982 and obtained my law degree
                                from Osgoode Hall Law School at York University in 1986. After articles and attending the
                                Bar Admission Course, I was called to the Bar in the Province of Ontario in 1988. I started
                                my own practice shortly thereafter.</p>

                            <p>I adore practicing law and I especially enjoy the challenges associated with appearing in
                                Court in difficult and complicated matters. The most rewarding aspect of my legal practice,
                                though, has been the personal relationships I have made with the clients I have had over the
                                years. I believe strongly in providing personal service and in giving my personal attention
                                to my clients' cases.</p>

                            <p>I represent my clients in a caring and compassionate manner while at the same time
                                aggressively pursuing their legal rights. I also believe strongly in our system of justice
                                and in giving back to the profession to which I am.</p>

                            <p>In 1923, British Judge Edward Abbott Parry wrote about the qualities that he felt went into
                                the making of a great advocate, qualities which in turn were based on centuries of tradition
                                of the English bar. He called his book "The Seven Lamps of Advocacy", those being the lamps
                                of honesty, courage, industry, wit, eloquence, judgment and fellowship. I believe these
                                ancient traditions still hold true and, of these, it is the lamp of honesty that remains the
                                most important quality of the successful advocate. The bonds of trust and confidence lie at
                                the heart of the solicitor and client relationship and I believe it is essential that the
                                relationship be based upon the unshakeable belief that the interests of the client will
                                always be placed ahead of the interests of the lawyer. These are the ideals for which the
                                legal profession must continuously strive. These are the ideals which I bring to the
                                practice of law and the relationship I have with my clients.</p>

                            <hr class="content-divider">

                            <blockquote>"I believe that the privilege of practicing law carries with it an obligation to
                                serve the profession and community."</blockquote>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-0 order-first">
                        <div class="about-image">
                            <img src="{{ asset('images/abouts-img/layour-img.jpg') }}" alt="Allan Rouben" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end abouts layour section --}}


        {{-- Committed to Helping Client Success Section --}}
        <section class="Committed-To-Helping">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="helping-content">
                            <h2>Committed To Helping Clients Succeed</h2>

                            <h3>History & Expertise</h3>

                            <div class="education-item">
                                <div class="icon-title">
                                    <img src="{{ asset('images/abouts-img/abouts-icons2.png') }}" alt="Law School Icon"
                                        class="item-icon">
                                    <h4>Law School</h4>
                                </div>
                                <p class="text-left">BA, 1982, McGill University</p>
                                <p class="text-left">J.D., 1986, Osgoode Law School at York University</p>
                                <hr class="content-divider small-divesfixed" style="margin-left: 45px;">
                            </div>

                            <div class="admission-item">
                                <div class="icon-title">
                                    <img src="{{ asset('images/abouts-img/abouts-icon1.png') }}" alt="Bar Admission Icon"
                                        class="item-icon">
                                    <h4 class="moving-left-sedes">Bar Admissions</h4>
                                </div>
                                <p class="text-left moving-left-sedes">1988 – The Province of Ontario</p>
                                <hr class="title-divider movin-divider-at-bottom small-divesfixed mb-4"
                                    style="margin-left: 45px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end commited to helping  client success section --}}

        {{-- end defining section  --}}
        <section class="contacts-layout-section">
            <div class="container">
                <div class="contacts-layout-content">
                    <h2 class="contacts-layout-title">Contact Allan Rouben Today</h2>
                    <a href="{{ route('contact') }}" class="consultation-btn">BOOK A FREE CONSULTATION</a>
                </div>
            </div>
        </section>
        {{-- end contact section --}}
    </body>

@endsection
