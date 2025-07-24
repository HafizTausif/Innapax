<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <title>Home - Innapax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- site favicon -->
    <link rel="icon" type="image/png" href="{{ url('/assets/images/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- All stylesheet and icons css  -->
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

</head>

<body>
    <!-- preloader start here -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- preloader ending here -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fa-solid fa-angle-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- ================> header section start here <================== -->
   <header class="header header--style2" id="navbar">
    <div class="header__top d-none d-lg-block">
        <div class="container">
            <div class="header__top--area">
                <div class="header__top--left">
                    <ul>
                        <li>
                            <i class="fa-solid fa-phone"></i> <span>+800-123-4567 6587</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i> Beverley, New York 224 USA
                        </li>
                    </ul>
                </div>
                <div class="header__top--right">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i>Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler--icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav mainmenu">
                        <ul>
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="{{ request()->routeIs('explore') ? 'active' : '' }}">
                                <a href="{{ route('explore') }}">Explore</a>
                            </li>
                            <li class="{{ request()->routeIs('profiles.index') ? 'active' : '' }}">
                                <a href="{{ route('profiles.index') }}">Matches</a>
                            </li>
                            <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                                <a href="{{ route('services') }}">Service</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="button-group">
                        @auth
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="default-btn login">
                                        <span>Logout</span>
                                    </a>
                                </form>
                            </li>
                            <li><a href="{{ route('dashboard') }}" class="default-btn signup"><span>Dashboard</span></a></li>
                        @else
                            <li><a href="{{ route('register') }}" class="default-btn login"><span>Sign Up</span></a></li>
                            <li><a href="{{ route('login') }}" class="default-btn signup"><span>Login</span></a></li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>