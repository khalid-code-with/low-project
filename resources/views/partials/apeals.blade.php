@extends('include.master')

@section('title', 'Appeals')

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
        {{-- appleas banner start --}}
        <section class="appeals-banner">
            <img src="{{ asset('images/abouts-img/abouts-banner.png') }}" alt="About Allan" class="appeals-banner-img">
            <div class="container">
                <div class="appeals-banner-content">
                    <h1>Appeals</h1>
                </div>
            </div>
        </section>
        {{-- end appleas bannere --}}


        {{-- about the appleas  --}}
        <section class="Apples-section-layout">
            <div class="container">
                <div class="Apples-row">
                    <div class="Apples-left">
                        <h2>Hire an Experienced Toronto Appeals Lawyer</h2>
                    </div>

                    <div class="Apples-gap"></div>

                    <div class="Apples-right">
                        <p class="mb-4">
                            If you're unhappy with a court decision and feel as if the trial judge made an error, failed to
                            see the facts, fresh evidence came up or a combination, you should contact an appeal lawyer
                            right away as you might have <span class="highlight-red">grounds for an appeal</span> in an
                            appellate court.
                        </p>

                        <p class="mb-4">
                            Appeals allow a court of higher authority to review a decision and all its related facts and
                            documentation to determine if the decision was rendered in accordance with the law. Should you
                            feel your decision was not, an appeals lawyer can help.
                        </p>

                        <p>
                            Allan Rouben is an experienced Toronto appeals lawyer and conducts appeals to any court in
                            Ontario or the <a href="#" class="highlight-red">Supreme Court of Canada</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        {{-- Book a Free Consultation section --}}
        <section class="appleas-book-free">
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
        {{-- Book a Free Consultation section end --}}


        {{-- about the appleas  --}}
        <section class="apples-contentss">
            <div class="container">
                <!-- First Row -->
                <div class="apples-row">
                    <div class="apples-left">
                        <h2>Why You Need An Appellate Lawyer</h2>
                    </div>
                    <div class="apples-gap"></div>

                    <div class="apples-right">
                        <p class="mb-4">
                            Conducting a successful appeal is a highly specialized process. The skills needed in reviewing
                            large volumes of documents and finding grounds for appeal require focus and the ability to spot
                            important issues.
                        </p>

                        <p class="mb-4">
                            As an appellate lawyer, I have a wealth of experience handling appeals in the <a
                                class="red-lind-layour" href="">
                                Court of Appeal
                                for Ontario,</a> many of them on issues of importance to the administration of justice in
                            Ontario. I
                            have also written and spoken at conferences in the areas of oral and written advocacy and
                            appellate practice. I have appeared as counsel on interventions for the <a
                                class="red-lind-layour" href="">
                                Ontario Trial Lawyers
                                Association </a> in the Superior Court of Justice, the Court of Appeal and the Supreme Court
                            of
                            Canada.
                        </p>
                    </div>
                </div>


                <!-- Second Row -->
                <div class="apples-row" style="margin-top:20px;">
                    <div class="apples-left">
                        <h2>Areas of Appeals Expertise</h2>
                    </div>

                    <div class="apples-gap"></div>

                    <div class="apples-right">
                        <p class="mb-4">
                            Allan Rouben has experience in a variety of appeals to the Superior Court of Justice, the
                            Ontario Court of Appeal, the Supreme Court of Canada and the Federal Court of Appeals. Types of
                            Appeals, we can assist you with:
                        </p>

                        <ul class="apples-appeals-list">
                            <li><a href="#" class="apples-red-link">Family law appeals</a> such as custody, access,
                                property and support cases.</li>
                            <li><a href="#" class="apples-red-link">Commercial Law appeals</a> such as shareholder
                                disputes, partnership disputes and contract cases.</li>
                            <li><a href="#" class="apples-red-link">Personal injury law appeals</a> such as car
                                accidents, municipal and occupiers liability, slip and fall, medical malpractice and
                                professional liability.</li>
                            <li><a href="#" class="apples-red-link">Judicial Review applications</a> such as appeals
                                and reviews of all manner of Boards and Tribunals.</li>
                            <li><a href="#" class="apples-red-link">Criminal appeals</a> to ensure that justice is
                                served and that any errors or injustices in the lower court's decision are rectified.</li>
                        </ul>

                        <p class="margin-bottom-appleas">
                            Allan is a highly experienced judicial review lawyer with over 30 years of experience in
                            handling cases of all kinds. He is an active member of thea Ontario Trial
                            Lawyers Association
                            Advocates Society and Criminal Lawyers Association and other law associations.
                        </p>

                        <a href="{{ route('contact') }}" class="apples-consultation-btn"
                            style="margin-top: 15px !important">BOOK A FREE
                            CONSULTATION</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- appleas section end --}}


        {{--  start Testimonials section --}}
        <section class="Testimonials-layour-section">
            <div class="container">
                <div class="Testimonials-content">
                    <h2>Testimonials For An Appellate Lawyer You Can Trust</h2>
                    <div class="Testimonials-grid">
                        <!-- Testimonial 1 -->
                        <div class="Testimonial-item">
                            <div class="quote-image">
                                <img src="images/appleas-image/doulbe-quote.png" alt="Quote mark" width="50"
                                    height="50">
                            </div>
                            <blockquote>
                                “As appeal counsel, Allan worked hard to master the complicated facts and law of an unusual
                                and difficult case, producing good results for clients. He stayed cool under fire as a
                                well-prepared and experienced advocate.”
                            </blockquote>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="Testimonial-item">
                            <div class="quote-image">
                                <img src="images/appleas-image/doulbe-quote.png" alt="Quote mark" width="50"
                                    height="50">
                            </div>
                            <blockquote>
                                “I would highly recommend Allan to assist with any files that end up at an appeal. I have
                                had the pleasure of working with Allan over the past few years and I have found his skill
                                and preparedness top notch.”
                            </blockquote>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="Testimonial-item">
                            <div class="quote-image">
                                <img src="images/appleas-image/doulbe-quote.png" alt="Quote mark" width="50"
                                    height="50">
                            </div>
                            <blockquote>
                                “Allan has displayed the ability to reduce complex matters to their essential terms and
                                advance the most persuasive approach to the issues. I think very highly of Allan's appellate
                                skills and would have no hesitation in recommending him.”
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- image section start --}}
        <section class="apples-image-section">
            <div class="apples-image container">
                <div class="apples-image-container">
                    <img src="{{ asset('images/appleas-image/loyour-img.jpg') }}" alt="Person"
                        class="apples-center-image">
                    <hr class="apples-underline">
                </div>
            </div>
        </section>
        {{--  end image section --}}


        {{-- contact form include --}}
        <div>
            @include('component.contacts-component')
        </div>



        {{-- Sample cases section  --}}
        <section class="apples-sample-cases">
            <div class="container">
                <h2>Sample Cases</h2>
                <ul class="apples-cases-list">
                    <li>
                        <a href="#" class="apples-red-link">Legrouk v. Pitre</a>: <a class="apples-red-link"
                            href=""> Striking Jury Notice,</a>
                        <a href="#" class="apples-red-link">Charter of Rights and Freedoms and Rules of Civil
                            Procedure</a>
                    </li>
                    <li>
                        <a href="#" class="apples-red-link">Patrizia's Case</a>:
                        <a href="" class="apples-red-link"> Appeals,</a>
                        <a href="#" class="apples-red-link">Civil Litigation,</a>
                        <a href="#" class="apples-red-link">Negligence and Minimum Maintenance Standard</a>
                    </li>
                </ul>
            </div>
        </section>
        {{--  End Sample cases section  --}}
    </body>

    </html>

@endsection
