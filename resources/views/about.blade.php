@include('layouts.header')


<div class="pageheader bg_img"
    style="background-image: url({{ asset('/assets/images/bg-img/pageheader.jpg') }});">
    <div class="container">
        <div class="pageheader__content text-center">
            <h2>About Our Innapax</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6">
                <img src="{{ url('/assets/images/about-img.png') }}" alt="Smiling Couple" />
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

<div class="story padding-top padding-bottom" style="background: #fff;">
        <div class="container">
            <div class="section__header style-2 text-center">
                <h2>Innapax Success Stories</h2>
                <p>Listen and learn from our community members and find out tips and tricks to meet your love. Join us and be part of a bigger family.</p>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center row-cols-lg-3 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="story__item">
                            <div class="story__inner">
                                <div class="story__thumb">
                                    <a href="{{ url('/') }}"><img src="{{ url('/assets/images/story/01.jpg') }}" alt="dating thumb"></a>
                                    <span class="member__activity member__activity--ofline">Entertainment</span>
                                </div>
                                <div class="story__content">
                                    <a href="{{ url('/') }}"><h4>Dream places and locations to visit in 2022</h4></a>
                                    <div class="story__content--author">
                                        <div class="story__content--thumb">
                                            <img src="{{ url('/assets/images/story/author/01.jpg') }}" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <h6>Hester Reeves</h6>
                                            <p>April 16, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="story__item">
                            <div class="story__inner">
                                <div class="story__thumb">
                                    <a href="{{ url('/') }}"><img src="{{ url('/assets/images/story/02.jpg') }}" alt="dating thumb"></a>
                                    <span class="member__activity member__activity--ofline">Love Stories</span>
                                </div>
                                <div class="story__content">
                                    <a href="{{ url('/') }}"><h4>Make your dreams come true and monetise quickly</h4></a>
                                    <div class="story__content--author">
                                        <div class="story__content--thumb">
                                            <img src="{{ url('/assets/images/story/author/02.jpg') }}" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <h6>Arika Q Smith</h6>
                                            <p>March 14, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="story__item">
                            <div class="story__inner">
                                <div class="story__thumb">
                                    <a href="{{ url('/') }}"><img src="{{ url('/assets/images/story/03.jpg') }}" alt="dating thumb"></a>
                                    <span class="member__activity member__activity--ofline">Attraction</span>
                                </div>
                                <div class="story__content">
                                    <a href="{{ url('/') }}"><h4>Love looks not with the eyes, but with the mind.</h4></a>
                                    <div class="story__content--author">
                                        <div class="story__content--thumb">
                                            <img src="{{ url('/assets/images/story/author/03.jpg') }}" alt="dating thumb">
                                        </div>
                                        <div class="story__content--content">
                                            <h6>William Show</h6>
                                            <p>June 18, 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
