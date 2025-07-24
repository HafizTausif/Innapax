@include('layouts.header')


<div class="pageheader bg_img"
    style="background-image: url({{ asset('/assets/images/bg-img/pageheader.jpg') }});">
    <div class="container">
        <div class="pageheader__content text-center">
            <h2>Innapax Profiles</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- Member Grid Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6">
                <img src="{{ url('/assets/images/profiles.png') }}"
                    alt="Smiling Couple" />
            </div>

            <!-- Text Section -->
            <div class="col-md-6 ps-5">
                <h1 class="hero-title">Sharon J. Redondo</h1>
                <div class="mamber-insod">
                    <p class="mb-1">23 Kilometers Away</p>
                    <p>4054 Hartway Street Goodwin, SD 57238</p>
                </div>
                <div class="mamber-inso">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>

                <div class="display-icons">
                    <ul class="list-inline">
                        <li class="circle-inline"> <img
                                src="{{ url('/assets/images/icon-02.png') }}"
                                alt="icon" /></li>
                        <li class="circle-inline"> <img
                                src="{{ url('/assets/images/icon-01.png') }}"
                                alt="icon" /></li>
                        <li class="circle-inline"> <img
                                src="{{ url('/assets/images/icon-03.png') }}"
                                alt="icon" /></li>
                        <li class="circle-inline"> <img
                                src="{{ url('/assets/images/icon-04.png') }}"
                                alt="icon" /></li>
                        <li class="circle-inline"> <img
                                src="{{ url('/assets/images/icon-05.png') }}"
                                alt="icon" /></li>
                    </ul>
                </div>
                <button class="btn btn-pink px-4 py-2 mt-3 me-3">Match</button>
                <button class="btn btn-pink px-4 py-2 mt-3 ">Messages</button>
            </div>
        </div>
    </div>
</section>




@include('layouts.footer')
