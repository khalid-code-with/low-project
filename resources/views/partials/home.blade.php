@extends('include.master')

@section('title', 'Home')

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
            <div class="banner-background">
                <img src="/images/home-img/home-banner-img.png" alt="Banner Background" class="banner-img">
            </div>
            <div class="container">
                <h1>Experience. Compassion. Integrity.</h1>
                <h2>Allan Rouben – Toronto Lawyer</h2>
                <p>Skilled in Appeals and Litigation including Employment Law, Personal Injury, Professional Negligence
                    &
                    Insurance Cases</p>

                <button class="btn btn-consultation"><a href="{{ route('contact') }}">BOOK A FREE CONSULTATION </a></button>

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


        {{-- welcome low section start --}}
        <section class="law-section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-6 law-content">
                        <h1>Welcome to the law offices of Allan Rouben.</h1>
                        <p>
                            I have been practicing law in Toronto for over 35 years and I handle all kinds of litigation
                            matters, including appeals, employment and labour disputes, personal injury and insurance cases,
                            long-term disability claims, professional negligence cases, shareholder and partnership
                            disputes, and some criminal cases.
                        </p>
                        <hr class="hr-colorchange" />

                        <div class="row law-icons">
                            <div class="col-md-6 text-center text-md-start mb-4">
                                <img src="{{ asset('images/home-img/home-icons-exprinet.png') }}" alt="Experience Icon"
                                    class="law-icon-img" />
                                <div class="law-icon-text">
                                    <h5>35 Years Of Experience</h5>
                                    <p>Extensive knowledge and expertise in legal matters.</p>
                                </div>
                            </div>
                            <div class="col-md-6 text-center text-md-start mb-4">
                                <img src="{{ asset('images/home-img/success-icon.png') }}" alt="Success Icon"
                                    class="law-icon-img" />
                                <div class="law-icon-text">
                                    <h5>Defining Success</h5>
                                    <p>Vigorously and persistently advocating for your legal rights in Toronto courts.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-6 text-center law-image">
                        <img src="{{ asset('/images/home-img/layour-img.jpg') }}" alt="Lawyer Image" class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>
        {{-- end welcome to the low section --}}



        {{-- start book free consultation section --}}
        <section class="Book-Free-consulation">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Book a Free Consultation</h2>
                    </div>
                    <div class="col-md-4">
                        <p>Allan is available for a no-cost consultation to better understand your legal needs, and to
                            provide guidance on the best next steps.</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <a href="{{ route('contact') }}" class="btn btn-consultation">BOOK A FREE CONSULTATION</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- end consultation --}}


        {{-- Member of Reputable Legal Societies --}}
        <section class="Legal-Societies">
            <div class="container">
                <h2 class="Legal-Societies-title">Member of Reputable Legal Societies</h2>
                <div class="Legal-Societies-logos">
                    <div class="Legal-Societies-logo-container">
                        <img src="{{ asset('images/home-img/logo5.png') }}" alt="THE ADVOCATE" class="Legal-Societies-logo">
                    </div>
                    <div class="Legal-Societies-logo-container">
                        <img src="{{ asset('images/home-img/logo4.jpg') }}" alt="Law Society of Ontario"
                            class="Legal-Societies-logo">
                    </div>
                    <div class="Legal-Societies-logo-container">
                        <img src="{{ asset('images/home-img/logo3.jpg') }}" alt="OTLA" class="Legal-Societies-logo">
                    </div>
                    <div class="Legal-Societies-logo-container">
                        <img src="{{ asset('images/home-img/logo2.png') }}" alt="ASSOCIATION" class="Legal-Societies-logo">
                    </div>
                    <div class="Legal-Societies-logo-container fifth-logo">
                        <img src="{{ asset('images/home-img/logo1.png ') }}" alt="CRIMINAL" class="Legal-Societies-logo">
                    </div>
                </div>
            </div>
        </section>
        {{-- end Member of Reputable Legal Societies --}}

        {{-- practice area section  --}}
        <section class="practice-areas-section">
            <div class="container">
                <h2 class="section-title">Practice Areas</h2>
                <div class="practice-areas-grid">
                    <!-- box1 -->
                    <div class="practice-area-box">
                        <div class="practice-area-card">
                            <div class="practice-area-icon">
                                <img src="{{ asset('images/home-img/handshake-icon.png') }}" alt="Appeal Icon">
                            </div>
                            <h3 class="practice-area-title">Appeals</h3>
                            <p class="practice-area-description">
                                Hiring a lawyer specialized in appeals ensures a thorough examination of the case,
                                maximizing the chances of overturning an unfavorable decision.
                            </p>
                        </div>
                    </div>

                    <!-- box2 -->
                    <div class="practice-area-box">
                        <div class="practice-area-card">
                            <div class="practice-area-icon">
                                <img src="{{ asset('images/home-img/handshake-icon.png') }}" alt="Litigation Icon">
                            </div>
                            <h3 class="practice-area-title">Litigation</h3>
                            <p class="practice-area-description">
                                A skilled litigation lawyer can navigate complex legal procedures, advocate for your rights,
                                and strive for a favorable outcome in court.
                            </p>
                        </div>
                    </div>

                    <!-- box3 -->
                    <div class="practice-area-box">
                        <div class="practice-area-card">
                            <div class="practice-area-icon">
                                <img src="{{ asset('images/home-img/handshake-icon.png') }}" alt="Employment Law Icon">
                            </div>
                            <h3 class="practice-area-title">Employment Law</h3>
                            <p class="practice-area-description">
                                Engaging an employment lawyer offers expertise in navigating the intricacies of labor
                                regulations, protecting your rights, and advocating for fair treatment in the workplace.
                            </p>
                        </div>
                    </div>

                    <!-- box4 -->
                    <div class="practice-area-box">
                        <div class="practice-area-card">
                            <div class="practice-area-icon">
                                <img src="{{ asset('images/home-img/handshake-icon.png') }}" alt="Personal Injury Icon">
                            </div>
                            <h3 class="practice-area-title">Personal Injury</h3>
                            <p class="practice-area-description">
                                Hiring a personal injury attorney guarantees strong representation, enabling you to pursue
                                fair compensation for injuries caused by someone else's negligence.
                            </p>
                        </div>
                    </div>

                    <!-- box5 -->
                    <div class="practice-area-box">
                        <div class="practice-area-card">
                            <div class="practice-area-icon">
                                <img src="{{ asset('images/home-img/handshake-icon.png') }}"
                                    alt="Professional Negligence Icon">
                            </div>
                            <h3 class="practice-area-title">Professional Negligence</h3>
                            <p class="practice-area-description">
                                A lawyer experienced in professional negligence can help you build a solid case, holding
                                professionals accountable for their actions and seeking appropriate remedies.
                            </p>
                        </div>
                    </div>

                    <!-- box 6-->
                    <div class="practice-area-box">
                        <div class="practice-area-card">
                            <div class="practice-area-icon">
                                <img src="{{ asset('images/home-img/handshake-icon.png') }}" alt="Insurance Cases Icon">
                            </div>
                            <h3 class="practice-area-title">Insurance Cases</h3>
                            <p class="practice-area-description">
                                With an attorney specialized in insurance cases, you can confidently navigate the complex
                                claims process, ensuring fair treatment and maximizing your chances of receiving the
                                coverage you deserve.
                            </p>
                        </div>
                    </div>

                    <!-- box7 -->
                    <div class="practice-area-box">
                        <div class="practice-area-card">
                            <div class="practice-area-icon">
                                <img src="{{ asset('images/home-img/handshake-icon.png') }}"
                                    alt="Long Term Disability Icon">
                            </div>
                            <h3 class="practice-area-title">Long Term Disability</h3>
                            <p class="practice-area-description">
                                Engaging a long-term disability lawyer ensures knowledgeable guidance, helping you navigate
                                the complex legal requirements and maximize your chances of obtaining the benefits you are
                                entitled to.
                            </p>
                        </div>
                    </div>
                    <!-- box8 -->

                    <div class="practice-area-box">
                        <div class="practice-area-card">
                            <div class="practice-area-icon">
                                <img src="{{ asset('images/home-img/handshake-icon.png') }}" alt="Criminal Defence Icon">
                            </div>
                            <h3 class="practice-area-title">Criminal Defence</h3>
                            <p class="practice-area-description">
                                Hiring a criminal defense attorney provides essential legal expertise, protection of your
                                rights, and skilled representation to mount a strong defense in the face of criminal
                                charges.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end practice section --}}

        {{-- Professional And Experienced section --}}
        <section class="experience-section-layout">
            <div class="experience-section-background"></div>
            <div class="container">
                <div class="experience-section-content">
                    <div class="experience-section-left">
                        <h1>Professional And Experienced Toronto Lawyer</h1>
                        <h2>Why Allan Rouben</h2>

                        <div class="experience-points">
                            <div class="experience-point">
                                <h3><span class="point-number">01</span> Experience.</h3>
                                <p>I have been practicing law for over 35 years in Ontario.</p>
                            </div>
                            <div class="experience-point">
                                <h3><span class="point-number">02</span> Compassion.</h3>
                                <p>I believe strongly in providing personal service and in giving my personal attention to
                                    my clients' cases.</p>
                            </div>
                            <div class="experience-point">
                                <h3><span class="point-number">03</span> Integrity.</h3>
                                <p>I believe that the privilege of practicing law carries with it an obligation to serve the
                                    profession and community.</p>
                            </div>
                        </div>
                    </div>

                    <div class="experience-section-right">
                        <div class="stats-grid">
                            <div class="stat-box">
                                <div class="stat-number">100s</div>
                                <div class="stat-label">of Client Consultations</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">100s</div>
                                <div class="stat-label">Successful Cases</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">Dozens</div>
                                <div class="stat-label">of Articles & Publications</div>
                            </div>
                            <div class="stat-box">
                                <div class="stat-number">35</div>
                                <div class="stat-label">Years of Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--  end Professional And Experienced  --}}


        {{-- start book free consultation section --}}
        <section class="Book-Free-consulation">
            <div class="container removetopbottomborder">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Book a Free Consultation</h2>
                    </div>
                    <div class="col-md-4">
                        <p>Allan is available for a no-cost consultation to better understand your legal needs, and to
                            provide guidance on the best next steps.</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <a href="{{ route('contact') }}" class="btn btn-consultation change-colorbutton">BOOK A FREE
                            CONSULTATION</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- end consultation --}}



        {{-- why choose section start here --}}
        <section class="why-choose-layout">
            <div class="why-choose-background"></div>
            <div class="container">
                <div class="why-choose-content">
                    <div class="why-choose-left">
                        <div class="mobile-only-content">
                            <h1 class="why-choose-title">Professional And Experienced Barrister & Solicitor in Toronto
                            </h1>
                            <h2 class="why-choose-subtitle">Why Choose Allan Rouben</h2>
                        </div>
                    </div>

                    <div class="why-choose-right">
                        <div class="desktop-content">
                            <h1 class="why-choose-title">Professional And Experienced Barrister & Solicitor in Toronto
                            </h1>
                            <h2 class="why-choose-subtitle">Why Choose Allan Rouben</h2>
                        </div>

                        <div class="testimonial-box">
                            <div class="testimonial-quote">
                                <img src="{{ asset('images/home-img/double-quote-icon.png') }}" alt="Quote icon"
                                    class="quote-icon">
                            </div>
                            <p class="testimonial-text">
                                I would like to extend my sincerest thanks for representing me in this case. I can
                                honestly
                                say that for the first time in all my experiences in this case, I was proud to be
                                represented by a competent solicitor. You were articulate, organized and well-composed.
                                In
                                my humble opinion, you argued this case brilliantly. As you are aware, good lawyers are
                                hard
                                to come by, and the general public does not have much regard for lawyers. However, there
                                are
                                always those few excellent ones who demonstrate a deep commitment to their clients. You
                                are
                                certainly in this category. I would highly recommend your services to anyone
                            </p>
                            <div class="testimonial-author">
                                <span class="author-name">A Former Client</span>
                                <span class="author-location">Canada</span>
                            </div>
                            <div class="testimonial-divider"></div>
                        </div>

                        <div class="testimonial-box">
                            <div class="testimonial-quote">
                                <img src="{{ asset('images/home-img/double-quote-icon.png') }}" alt="Quote icon"
                                    class="quote-icon">
                            </div>
                            <p class="testimonial-text">
                                Allan is one of the finest appellate lawyers I have known. In consultation he is calm,
                                deeply knowledgeable and very insightful. His written material is persuasive, thorough
                                and
                                conversational. In court he is at his best: a remarkable orator who is as focused on the
                                content of his argument as he is on the subtleties of how he presents it. Most
                                importantly,
                                I know Allan to be a very conscientious and ethical practitioner. I have relied on his
                                talents and advice in the past and will do so in the future.
                            </p>
                            <div class="testimonial-author">
                                <span class="author-name">A Former Client</span>
                                <span class="author-location add-margin-botoom">Canada</span>
                            </div>
                            <div class="testimonial-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end  why choose use sectionhere --}}


    </body>

    </html>
@endsection
