<style>
    .advocate-website.container {
        width: 90% !important;
        max-width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        margin: 0 auto;
    }

    .navbar {
        background: #2b161b;
        padding: 20px 0 !important;
        position: sticky !important;
        top: 0;
        z-index: 1020;
        transition: padding 0.6s ease-in-out;

    }

    .navbar.shrink {
        padding: 14px 0 !important;
    }


    .navbar-nav .nav-link {
        color: #FFFFFF !important;
        font-weight: 500;
        padding: 8px 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .contact-btn-changeing {

        background: #007F3F !important;
        border-radius: 2px;
        font-weight: 500 !important;
        margin-left: 20px;
        cursor: pointer;
    }

    .contact-btn-changeing:hover {
        background: #005e30 !important;
        cursor: pointer;
    }

    #contact_button {
        font-size: 14px;
        position: absolute;
        /* right: 0; */
        color: #FFFFFF !important;
    }

    .logo_fonia {
        margin-left: 0px;
    }

    .logo_fonia img {
        margin: 0;
        width: 120px;
        padding: 0;
        display: block;
    }

    .navbar-collapse {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-grow: 1;
    }

    #navbarContent {
        justify-content: space-between;
    }

    .navbar-nav {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-grow: 1;
        position: relative;
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        margin-top: 25px !important;
        border-top: 2px solid red;
    }

    @media(max-width:768px) {
        .logo_fonia {
            margin-left: 10px;
        }

        #contact_button {
            position: static;
            margin-left: 0;
        }

        .navbar-collapse {
            justify-content: center;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
            width: 200px;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            margin-top: 0 !important;
        }
    }

    @media (max-width: 992px) {
        .navbar-nav {
            padding-top: 15px;
            gap: 10px;
            flex-direction: column;
            align-items: center;
        }

        .contact-btn-changeing {
            margin-left: 0;
            margin-top: 10px;
        }

        #moving-right-side {
            margin-right: 0px !important;
            align-items: start;
        }

        #contact_button {
            position: static;
        }
    }

    .navbar-nav .nav-link:hover {
        color: red !important;
    }

    .dropdown-menu {
        background-color: #2c1315 !important;
        border-top: 2px solid red;
        margin-top: 40 !important;
    }

    .dropdown-item {
        color: white !important;
        font-weight: 600;
        padding: 15px 25px !important;
    }

    .dropdown-item:hover {
        background-color: #2c1315 !important;
        color: red !important;
    }

    .navbar-brand {
        color: white !important;
        font-weight: 700;
        font-size: 1.5rem;
        margin-right: 50px;
        display: flex;
        align-items: center;
    }

    .navbar-brand img {
        height: 50px;
        margin-right: 10px;
    }

    .navbar-brand-text {
        display: flex;
        flex-direction: column;
    }

    .navbar-brand-text span:first-child {
        font-size: 2rem;
        line-height: 1;
    }

    .navbar-brand-text span:last-child {
        font-size: 1.2rem;
        line-height: 1.2;
    }

    /* remove bydefault bootstrap green shadow */
    .navbar .dropdown-toggle:focus,
    .navbar .dropdown-toggle:active,
    .navbar .dropdown-toggle:hover {
        outline: none !important;
        box-shadow: none !important;
    }

    .navbar .dropdown-menu .dropdown-item:focus,
    .navbar .dropdown-menu .dropdown-item:active {
        outline: none !important;
        box-shadow: none !important;
    }

    .nav-link.active,
    .dropdown-item.active {
        color: red !important;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="advocate-website container px-0">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="images/home-img/logo-company.png" alt="Allan Rouben Logo">
            <div class="navbar-brand-text"></div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto" id="moving-right-side">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('abouts') ? 'active' : '' }}"
                        href="{{ route('abouts') }}">About</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Practice Areas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('apeals') }}">Appeals</a></li>
                        <li><a class="dropdown-item" href="#">Employment Law</a></li>
                        <li><a class="dropdown-item" href="#">Professional Negligence</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('blog') }}">Blogs</a></li>
                        <li><a class="dropdown-item" href="#">Case Studies</a></li>
                        <li><a class="dropdown-item" href="#">Appeals insights</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link contact-btn-changeing" id="contact_button">BOOK
                        FREE CONSULTATION</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
