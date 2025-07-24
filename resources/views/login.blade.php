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

    <style>
        .btn-pink {
            padding: 0.5rem 1.75rem; 
            font-size: 1.2rem;
        }
    </style>

</head>

<body>

<!-- ================> login section start here <================== -->
    <section class="log-reg">
        <div class="top-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-7">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ url('/assets/images/logo/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-5">
                        <a href="{{ url('/') }}" class="backto-home"><i class="fas fa-chevron-left"></i> Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="image image-log"></div>
                <div class="col-lg-7">
                    <div class="log-reg-inner">
                        <div class="section-header inloginp">
                            <h2 class="title">Welcome to Innapax</h2>
                        </div>
                        <div class="main-content inloginp">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" name="email" id="email" class="my-form-control" placeholder="Enter Your Email" value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="my-form-control" placeholder="Enter Your Password" required>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <p class="f-pass"><a href="#">Forgot your password?</a></p>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-pink"><span>Login</span></button>
                                </div>
                                <div class="or">
                                    <p>OR</p>
                                </div>
                                <div class="or-content">
                                    <p>Login with your email</p>
                                    <a href="#" class="btn btn-pink mt-2 mb-2">
                                        <img src="{{ url('/assets/images/login/google.png') }}" alt="google" class="me-2"> <span>Login with Google</span>
                                    </a>
                                    <p class="or-signup"> Don't have an account? <a href="{{ url('register') }}">Register</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================> login section end here <================== -->

<!-- All Needed JS -->
<script src="{{ url('/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ url('/assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ url('/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('/assets/js/swiper.min.js') }}"></script>
<!-- <script src="{{ url('/assets/js/all.min.js') }}"></script> -->
<script src="{{ url('/assets/js/wow.js') }}"></script>
<script src="{{ url('/assets/js/counterup.js') }}"></script>
<script src="{{ url('/assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ url('/assets/js/lightcase.js') }}"></script>
<script src="{{ url('/assets/js/waypoints.min.js') }}"></script>
<script src="{{ url('/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('/assets/js/plugins.js') }}"></script>
<script src="{{ url('/assets/js/main.js') }}"></script>
</body>

</html>
