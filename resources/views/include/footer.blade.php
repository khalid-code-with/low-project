<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Allan Rouben Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .footer {
            padding: 70px 0 45px;
            background-color: #2c1315;
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
            background-color: red;
            color: white;
            border: none;
            border-radius: 2px;
            font-weight: 500;
            padding: 6px 12px;
            font-size: 0.9rem;
        }

        .footer .btn-red:hover {
            background-color: #2c1315;
        }

        hr.full-width {
            border: none;
            border-top: 1.5px solid #FFFFFF;
            margin: 0;
            margin-top: 15px;
        }

        .footer-bottom {
            padding: 45px 0 0;
            background-color: #2c1315;
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

                    <img src="images/logo-company.png" alt="Logo" class="logo img-fluid" />
                    <div class="social-icons d-flex mt-3">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <h5>Contact Detail</h5>
                    <p>Address: 70 Bond Street, Suite 200, Toronto, Ontario, M5B 1X3</p>
                    <p><a href="tel:4163605444">Number: 416 360-5444</a></p>
                    <p>Mon to Fri: 9.00 AM – 5.00 PM</p>
                </div>

                <div class="col-md-3 mb-4 practice-area-shift">
                    <h5>Practice Areas</h5>
                    <a href="#">Appeals</a>
                    <a href="#">Litigation</a>
                    <a href="#">Employment Law</a>
                    <a href="#">Personal Injury</a>
                    <a href="#">Professional Negligence</a>
                    <a href="#">Insurance Cases</a>
                    <a href="#">Long-Term Disability</a>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="mb-4">
                        <button class="btn btn-red">BOOK A FREE CONSULTATION</button>
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
