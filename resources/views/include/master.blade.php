<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}">
    {{-- font-awesome --}}

    <link rel="" href="{{ asset('images/titile-icon.png') }}" type="">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <style>
        /* whatsapp add our website right side mai  */
        .add-whatsapp {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }


        .whatsapp-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: white;
            font-size: 28px;
            border-radius: 50%;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
        }


        .whatsapp-btn::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(37, 211, 102, 0.5);
            border-radius: 50%;
            opacity: 0.8;
            animation: pulseEffect 1.5s infinite ease-out;
        }

        .whatsapp-btn:hover {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        @keyframes pulseEffect {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }

            50% {
                transform: scale(1.5);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    {{-- whatsapp --}}
    <div class="add-whatsapp">
        <a href="https://wa.me/910000000000?text=Hi" target="_blank" class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <div id="preloader"
        style="position: fixed; top:0; left:0; width:100%; height:100%; background:#212529; z-index:9999; display: flex; justify-content: center; align-items: center;">
        <div>
            <div class="spinner-border" style="width: 3rem; height: 3rem; color:#ffffff" role="status">
                <span class="sr-only"></span>
            </div>
        </div>
    </div>

    @include('include.header')
    @yield('body-section')

    @include('include.footer')
    {{-- bootstarp js --}}
    <script src="{{ asset('js/js/bootstrap.bundle.min.js') }}"></script>
    {{-- custom.js --}}
    <script src="js/custom.js"></script>
</body>

</html>
