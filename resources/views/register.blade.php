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
            <div class="image">
            </div>
            <div class="col-lg-7">
                <div class="log-reg-inner">
                    <div class="section-header">
                        <h2 class="title">Welcome to Innapax</h2>
                        <p>Let's create your profile! Just fill in the fields below, and we’ll get a new account.</p>
                    </div>
                    <div class="main-content">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <h4 class="content-title">Account Details</h4>
                            <div class="form-group">
                                <label>Username*</label>
                                <input type="text" name="username" class="my-form-control" placeholder="Enter Your Username" value="{{ old('username') }}">
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Address*</label>
                                <input type="email" name="email" class="my-form-control" placeholder="Enter Your Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password*</label>
                                <input type="password" name="password" class="my-form-control" placeholder="Enter Your Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Confirm Password*</label>
                                <input type="password" name="password_confirmation" class="my-form-control" placeholder="Confirm Your Password">
                            </div>
                            <h4 class="content-title mt-5">Profile Details</h4>
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" name="name" class="my-form-control" placeholder="Enter Your Full Name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Birthday*</label>
                                <input type="date" name="birthday" class="my-form-control" value="{{ old('birthday') }}">
                                @error('birthday')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>I am a*</label>
                                <div class="banner__inputlist">
                                    <div class="s-input me-3">
                                        <input type="radio" name="gender" id="males1" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                        <label for="males1">Man</label>
                                    </div>
                                    <div class="s-input">
                                        <input type="radio" name="gender" id="females1" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                        <label for="females1">Woman</label>
                                    </div>
                                </div>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Looking for a*</label>
                                <div class="banner__inputlist">
                                    <div class="s-input me-3">
                                        <input type="radio" name="looking_for" id="males" value="male" {{ old('looking_for') == 'male' ? 'checked' : '' }}>
                                        <label for="males">Man</label>
                                    </div>
                                    <div class="s-input">
                                        <input type="radio" name="looking_for" id="females" value="female" {{ old('looking_for') == 'female' ? 'checked' : '' }}>
                                        <label for="females">Woman</label>
                                    </div>
                                </div>
                                @error('looking_for')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Marital status*</label>
                                <div class="banner__inputlist">
                                    <select name="marital_status" class="my-form-control">
                                        <option value="Single" {{ old('marital_status') == 'Single' ? 'selected' : '' }}>Single</option>
                                        <option value="Married" {{ old('marital_status') == 'Married' ? 'selected' : '' }}>Married</option>
                                    </select>
                                </div>
                                @error('marital_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>City*</label>
                                <input type="text" name="city" class="my-form-control" placeholder="Enter Your City" value="{{ old('city') }}">
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-pink mt-2 mb-2" type="submit"><span>Create Your Profile</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
