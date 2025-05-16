@extends('include.master')

@section('title', 'Blogs')

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

        {{-- Blog banner --}}
        <section class="blog-banner">
            <img src="{{ asset('images/contacts-image/contact-banner-img.jpg') }}" alt="Contact Allan"
                class="contact-banner-img">
            <div class="container">
                <div class="contact-banner-content">
                    <h1>Blogs​</h1>
                </div>
            </div>
        </section>
        {{-- end Blog  banner --}}

        {{-- blog section start here --}}
        <section class="low-blogs-design">
            <div class="container">
                <div class="blog-section-title">
                    <span class="title-line"></span>
                    <h2>Blogs</h2>
                    <span class="title-line"></span>
                </div>

                <div class="blog-row">
                    <!-- Row 1 - Card 1 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}"
                                alt="White Cement vs Acrylic Wall Putty">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Mar 12 2025</a>
                        </div>
                        <a href="#" class="blog-title">White Cement vs Acrylic Wall Putty Which One is Right For Your
                            Home?</a>
                    </div>

                    <!-- Row 1 - Card 2 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}" alt="How to Use Wall Putty">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Mar 10 2025</a>
                        </div>
                        <a href="#" class="blog-title">How to Use Wall PuttyIn the Best Way?</a>
                    </div>

                    <!-- Row 1 - Card 3 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}" alt="Moisture and Paint Bubbling">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Feb 25 2025</a>
                        </div>
                        <a href="#" class="blog-title">Moisture and Paint Bubbling: How Wall Putty Can Protect Your
                            Walls</a>
                    </div>

                    <!-- Row 2 - Card 4 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}"
                                alt="White Cement vs Acrylic Wall Putty">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Mar 12 2025</a>
                        </div>
                        <a href="#" class="blog-title">White Cement vs Acrylic Wall Putty Which One is Right For Your
                            Home?</a>
                    </div>

                    <!-- Row 3 - Card 5 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}" alt="How to Use Wall Putty">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Mar 10 2025</a>
                        </div>
                        <a href="#" class="blog-title">How to Use Wall PuttyIn the Best Way?</a>
                    </div>

                    <!-- Row 3 - Card 6 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}" alt="Moisture and Paint Bubbling">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Feb 25 2025</a>
                        </div>
                        <a href="#" class="blog-title">Moisture and Paint Bubbling: How Wall Putty Can Protect Your
                            Walls</a>
                    </div>

                    <!-- Row 3 - Card 4 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}"
                                alt="White Cement vs Acrylic Wall Putty">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Mar 12 2025</a>
                        </div>
                        <a href="#" class="blog-title">White Cement vs Acrylic Wall Putty Which One is Right For Your
                            Home?</a>
                    </div>

                    <!-- Row 3 - Card 5 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}" alt="How to Use Wall Putty">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Mar 10 2025</a>
                        </div>
                        <a href="#" class="blog-title">How to Use Wall PuttyIn the Best Way?</a>
                    </div>

                    <!-- Row 3 - Card 6 -->
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="{{ asset('images/blog-image/log-imag1.jpg') }}" alt="Moisture and Paint Bubbling">
                        </div>
                        <div class="blog-meta">
                            <a href="#" class="blog-category">WONDER WALLCARE</a>
                            <a href="#" class="blog-date">Feb 25 2025</a>
                        </div>
                        <a href="#" class="blog-title">Moisture and Paint Bubbling: How Wall Putty Can Protect Your
                            Walls</a>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="blog-pagination">
                    <a href="#" class="page-nav prenav-add-color">
                        < Previous</a>
                            <a href="#" class="page-number active">1</a>
                            <a href="#" class="page-number">2</a>
                            <a href="#" class="page-number">3</a>
                            <a href="#" class="page-number">4</a>
                            <a href="#" class="page-nav next-nav-pagination">Next ></a>
                </div>
            </div>
        </section>
        {{-- end blog section --}}
    </body>

    </html>

@endsection
