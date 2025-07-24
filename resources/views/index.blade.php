@include('layouts.header')

<!-- ================> Banner section start here <================== -->
<div class="banner banner--style3 padding-top "
    style="background-image: url({{ asset('/assets/images/banner/sd.png') }});background-size: cover;">
    <div class="container">
        <div class="row g-0 justify-content-center justify-content-xl-between">
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-duration="1.5s">
                <div class="banner__content">
                    <div class="banner__title">
                        <h4>Find in Innapax</h4>
                        <h2>Find Love, Join an Event,
                            And Plan a Trip</h2>
                        <p>Join our international family today! Please call us for more info.</p>
                        <a href="{{ url('/') }}" class="default-btn style-2"><span>Get A
                                Started</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeInUp" data-wow-duration="1.5s">
                <div class="banner__thumb text-xl-end">
                    <img src="{{ url('/assets/images/banner/05.png') }}" alt="banner">
                    <!-- <div class="banner__thumb--shape">
                            <div class="shapeimg">
                                <img src="{{ url('/assets/images/banner/shape/home3/01.png') }}" alt="dating thumb">
                            </div>
                        </div>
                        <div class="banner__thumb--title">
                            <h4>Are You Waiting For Dating?</h4>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<section class="section-innapax about--style3">
    <div class="container">
        <div class="row align-items-stretch section__wrapper ">
            <!-- Left Column -->
            <div class="col-lg-6 p-0">
                <div class="bg-white h-100 content-boxes">
                    <h3 class="mb-3 fw-bold">Welcome To Our Innapax</h3>
                    <p class="mb-4">
                        You find us, finally, and you are already in love. More than 4,000,000 around the world already
                        shared the same experiences and uses our system. Joining us today just got easier!
                    </p>
                    <div class="members-box">
                        <p>Latest Registered Members</p>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <img src="{{ url('/assets/images/img01.png') }}"
                            class="rounded-circle" width="100" height="100" alt="member">
                        <img src="{{ url('/assets/images/img02.png') }}"
                            class="rounded-circle" width="100" height="100" alt="member">
                        <img src="{{ url('/assets/images/img03.png') }}"
                            class="rounded-circle" width="100" height="100" alt="member">
                        <img src="{{ url('/assets/images/img04.png') }}"
                            class="rounded-circle" width="100" height="100" alt="member">
                        <img src="{{ url('/assets/images/img05.png') }}"
                            class="rounded-circle" width="100" height="100" alt="member">
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 p-0">
                <div class="bg-primary-subtle rounded h-100 position-relative content-boxes">
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-4 justify-content-start csutom-tabs" id="pills-tab" role="tablist">
                        <li class="nav-item me-2" role="presentation">
                            <button class="nav-link active tab-btn" id="pills-love-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-love" type="button" role="tab">Find Love</button>
                        </li>
                        <li class="nav-item me-2" role="presentation">
                            <button class="nav-link tab-btn" id="pills-event-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-event" type="button" role="tab">Join an Event</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link tab-btn" id="pills-trip-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-trip" type="button" role="tab">Plan a Trip</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-love" role="tabpanel">
                            <form class="p-0">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label text-white">I am a</label>
                                        <input type="number" class="form-control" placeholder="I am a">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Looking For</label>
                                        <select class="form-select">
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Age</label>
                                        <input type="number" class="form-control" placeholder="18">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Country</label>
                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-pink mt-3">Find Your Partner</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-event" role="tabpanel">
                            <form class="p-0">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label text-white">I am a</label>
                                        <input type="number" class="form-control" placeholder="I am a">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Looking For</label>
                                        <select class="form-select">
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Age</label>
                                        <input type="number" class="form-control" placeholder="18">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Country</label>
                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-pink mt-3">Find Your Event</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-trip" role="tabpanel">
                            <form class="p-0">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label text-white">I am a</label>
                                        <input type="number" class="form-control" placeholder="I am a">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Looking For</label>
                                        <select class="form-select">
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Age</label>
                                        <input type="number" class="form-control" placeholder="18">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-white">Country</label>
                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-pink mt-3">Find Your Trip</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================> Banner section end here <================== -->


<!-- Start: It All Starts With A Innapax Section -->
<section class="section-starts-innapax">
    <div class="container">
        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">It All Starts With A Innapax</h2>
            <p class="">
                Learn from them and try to make it to this board. This will for sure boost you<br
                    class="d-none d-md-block">
                visibility and increase your chances to find you loved one.
            </p>
        </div>

        <!-- Cards Row -->
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="icon-circle mx-auto mb-3">
                        <img src="{{ url('/assets/images/icon-1.png') }}" width="50"
                            alt="Find Love">
                    </div>
                    <h5 class="fw-bold">Find Love</h5>
                    <p>
                        Learn from them and try to make it to this board. This will for sure boost you visibility and
                        increase your chances to find you loved one.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card text-center h-100 ">
                    <div class="icon-circle mx-auto mb-3">
                        <img src="{{ url('/assets/images/icon-2.png') }}" width="50"
                            alt="Join an Event">
                    </div>
                    <h5 class="fw-bold">Join an Event</h5>
                    <p>
                        Learn from them and try to make it to this board. This will for sure boost you visibility and
                        increase your chances to find you loved one.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card text-center h-100 ">
                    <div class="icon-circle mx-auto mb-3">
                        <img src="{{ url('/assets/images/icon-3.png') }}" width="50"
                            alt="Plan a Trip">
                    </div>
                    <h5 class="fw-bold">Plan a Trip</h5>
                    <p>
                        Learn from them and try to make it to this board. This will for sure boost you visibility and
                        increase your chances to find you loved one.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6 text-center mb-4 mb-md-0 hero-img-wrap">
                <img src="{{ url('/assets/images/young.png') }}" alt="Smiling Couple"
                    class="hero-img" />
            </div>

            <!-- Text Section -->
            <div class="col-md-6">
                <h1 class="hero-title">Hello My Friend</h1>
                <p class="lead"><strong>We are here to build emotion, connect people and create happy stories.</strong>
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-pink px-4 py-2 mt-3">Get Started</button>
            </div>
        </div>
    </div>
</section>


<!-- ================> About section start here <================== -->
<div class="about about--style4 padding-top padding-bottom bg_img">
    <div class="container">
        <div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
            <h2>Why Choose Innapax</h2>
            <p>Learn from them and try to make it to this board. This will for sure boost you visibility and increase
                your chances to find you loved one.</p>
        </div>
        <div class="section__wrapper">
            <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 wow fadeInUp"
                data-wow-duration="1.5s">
                <div class="col">
                    <div class="about__item text-center">
                        <div class="about__inner">
                            <div class="about__thumb">
                                <img src="{{ url('/assets/images/icon-4.png') }}"
                                    alt="dating thumb">
                            </div>
                            <div class="about__content">
                                <h3>Simple To Use</h3>
                                <p>Learn from them and try to make it to this board. This will for sure boost you
                                    visibility and increase your chances to find you loved one.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about__item text-center">
                        <div class="about__inner">
                            <div class="about__thumb">
                                <img src="{{ url('/assets/images/icon-5.png') }}"
                                    alt="dating thumb">
                            </div>
                            <div class="about__content">
                                <h3>Smart Matching</h3>
                                <p>Learn from them and try to make it to this board. This will for sure boost you
                                    visibility and increase your chances to find you loved one.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about__item text-center">
                        <div class="about__inner">
                            <div class="about__thumb">
                                <img src="{{ url('/assets/images/icon-6.png') }}"
                                    alt="dating thumb">
                            </div>
                            <div class="about__content">
                                <h3>Easy Trip</h3>
                                <p>Learn from them and try to make it to this board. This will for sure boost you
                                    visibility and increase your chances to find you loved one.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about__item text-center">
                        <div class="about__inner">
                            <div class="about__thumb">
                                <img src="{{ url('/assets/images/icon-7.png') }}"
                                    alt="dating thumb">
                            </div>
                            <div class="about__content">
                                <h3>Cool Community</h3>
                                <p>Learn from them and try to make it to this board. This will for sure boost you
                                    visibility and increase your chances to find you loved one.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================> About section end here <================== -->



<div class="work work--style2 padding-top padding-bottom">
    <div class="container">
        <div class="section__wrapper">
            <div class="row g-4 justify-content-center">
                <div class="col-xl-6 col-lg-8 col-12 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="work__item">
                        <div class="work__inner">
                            <div class="work__thumb">
                                <img src="{{ url('/assets/images/work/09.png') }}"
                                    alt="dating thumb">
                            </div>
                            <div class="work__content">
                                <h3>It All Starts With A Innapax</h3>
                                <p>Learn from them and try to make it to this board. This will for sure boost you
                                    visibility and increase your chances to find you loved one.</p>
                                <a href="{{ url('/') }}" class="btn btn-pink px-4 py-2 mt-3">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-12 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="work__item">
                        <div class="work__inner">
                            <div class="work__thumb">
                                <img src="{{ url('/assets/images/work/09.png') }}"
                                    alt="dating thumb">
                            </div>
                            <div class="work__content">
                                <h3>It All Starts With A Innapax</h3>
                                <p>Learn from them and try to make it to this board. This will for sure boost you
                                    visibility and increase your chances to find you loved one. </p>
                                <a href="{{ url('/') }}" class="btn btn-pink px-4 py-2 mt-3">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('layouts.footer')