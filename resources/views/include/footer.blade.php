<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>


    <style>
        .footer {
            padding: 70px 0 45px;
            background: #06063A;
            color: #FFFFFF !important;
        }

        .footer .logo {
            max-width: 210px;
            margin-bottom: 30px;
        }

        .footer h5 {
            font-size: 20px;
            margin-bottom: 35px;
            color: white;
        }

        .footer a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 3px;
            text-decoration: none !important;

        }

        .footer .social-icons a i {
            font-size: 1.2rem;
            color: #FFFFFF;
            background-color: #0d66c2;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            margin-right: 30px;
            transition: background-color 0.3s, color 0.3s;
        }

        .footer .social-icons a i:hover {}

        .footer .btn-red {
            background-color: #3A7BD5;
            color: white;
            border-radius: 2px;
            font-weight: 500;
            padding: 6px 12px;
            font-size: 0.9rem;
        }

        .footer .btn-red:hover {
            background-color: #2E5CA8;
            color: #FFFFFF;
        }



        hr.full-width {
            border: none;
            border-top: 1.5px solid #FFFFFF;
            margin: 0;
            margin-top: 15px;
        }

        .footer-bottom {
            padding: 45px 0 0;
            background: #06063A;
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .footer-bottom .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #FFFFFF;
            font-size: 15px;
        }

        .footer p {
            margin-bottom: 0px;
        }

        .footer .col-md-3.mb-4:last-child {
            padding-top: 10px;
        }

        @media (min-width: 992px) {
            .practice-area-shift {
                padding-left: 30px;
            }
        }

        @media (max-width: 767px) {
            .footer-bottom .container {
                flex-direction: column;
                text-align: center;
            }

            .footer-bottom .container span {
                display: block;
                margin: 5px 0;
            }

            .footer-bottom {
                padding: 30px 0 0;
            }

            .footer {
                padding: 70px 0 30px;
            }

            .mover-bottom {
                margin-top: -5px !important;

            }
        }
    </style>
</head>

<body>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-3 mb-4">
                    <a href="{{ url('/') }}">
                        <img src="images/home-img/logo-company.png" alt="Logo" class="logo img-fluid" />
                    </a>
                    <div class="social-icons d-flex mt-3">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <h5>Contact Detail</h5>
                    <p>Address: 12, Kalyan Colony, Tonk Phatak, Toronto,
                        Jaipur - 302015 (Rajasthan)</p>
                    <p><a href="tel:+91-9414749404">Number: +91-9414749404</a></p>
                    <p>Mon to Fri: 9.00 AM – 5.00 PM</p>
                </div>

                <div class="col-md-3 mb-4 practice-area-shift">
                    <h5>Practice Areas</h5>
                    <a href="{{ route('apeals') }}">Appeals</a>
                    <a href="#">Litigation</a>
                    <a href="#">Employment Law</a>
                    <a href="#">Personal Injury</a>
                    <a href="#">Professional Negligence</a>
                    <a href="#">Insurance Cases</a>
                    <a href="#">Long-Term Disability</a>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="mb-4">
                        <a href="{{ route('contact') }}">
                            <button class="btn btn-red">BOOK A FREE CONSULTATION</button>
                        </a>
                    </div>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Accessibility</a>
                </div>
            </div>
        </div>

        <hr class="full-width" />

        <div class="footer-bottom text-white">
            <div class="container">
                <span>Copyright © 2025 Allan Rouben</span>
                <span class="mover-bottom">Powered by Allan Rouben</span>
            </div>
        </div>
    </footer>

</body>

</html>
