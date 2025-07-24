@include('layouts.header')


<style>
   .trip-card {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08); */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
      border: 1px solid #A29B9B;
      padding: 8px;
    }

    .trip-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
      border-radius: 10px;
    }

    .trip-card .content {
      padding: 10px 5px;
    }

    .trip-card .title {
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 5px;
      color: #000;
    }

    .trip-card .location {
      font-size: 12px;
    color: #000;
    margin-bottom: 10px;
    }

    .trip-card .price {
      font-size: 13px;
      color: #000;
      margin-bottom: 5px;
    }

    .trip-card .days {
      font-size: 12px;
      color:rgb(0, 0, 0);
    }

    .trip-card .footer {
      /* border-top: 1px solid #eee; */
      padding: 0px 15px 5px;
      text-align: right;
    }

    .trip-card .footer a {
      font-size: 14px;
    color: #000;
    background: none;
    border: 1px solid #000;
    cursor: pointer;
    }

    .trip-card .footer a:hover {
      border: 1px solid #000;
      background: #000;
      color: #fff;
    }
  </style>

<div class="pageheader bg_img"
    style="background-image: url({{ asset('/assets/images/bg-img/pageheader.jpg') }});">
    <div class="container">
        <div class="pageheader__content text-center">
            <h2>Core Services</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- Start: It All Starts With A Innapax Section -->
<section class="section-starts-innapax services-section">
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
                <div class="card text-center h-100 services-card">
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
                <div class="card text-center h-100 services-card">
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
                <div class="card text-center h-100 services-card">
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


<section class=" padding-bottom trip-section">
     <div class="container">
        <div class="section__header text-center mb-5">
            <h2>Plan a Trip</h2>
            <p>Explore our most popular trips and find your next adventure.</p>
        </div>
    <div class="row g-4">
      
      <!-- Card Start -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="trip-card">
         <img src="{{ url('/assets/images/trip-img.png') }}" alt="Find Love">
          <div class="content">
            <a href="#">
                <h5>Meet Our Famous Members</h5>
            </a>
            <div class="location">Bhutan, India, Tiber</div>
            <div class="price">$250.00 / Person</div>
            <div class="days">⏱️ 6 Days Trip</div>
          </div>
          <div class="footer">
            <a class="btn btn-book">Book Now →</a>
          </div>
        </div>
      </div>
      <!-- Card End -->

      <!-- Duplicate above col-md-4 block for more cards -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="trip-card">
         <img src="{{ url('/assets/images/trip-img.png') }}" alt="Find Love">
          <div class="content">
            <a href="#"><h5>Meet Our Famous Members</h5></a>
            <div class="location">Bhutan, India, Tiber</div>
            <div class="price">$250.00 / Person</div>
            <div class="days">⏱️ 6 Days Trip</div>
          </div>
          <div class="footer">
           <a href="#" class="btn btn-book">Book Now →</a>
          </div>
        </div>
      </div>

      <!-- Add more cards as needed... -->

       <!-- Card Start -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="trip-card">
         <img src="{{ url('/assets/images/trip-img.png') }}" alt="Find Love">
          <div class="content">
           <a href="#"> <h5>Meet Our Famous Members</h5></a>
            <div class="location">Bhutan, India, Tiber</div>
            <div class="price">$250.00 / Person</div>
            <div class="days">⏱️ 6 Days Trip</div>
          </div>
          <div class="footer">
            <a href="#" class="btn btn-book">Book Now →</a>
          </div>
        </div>
      </div>
      <!-- Card End -->

      <!-- Duplicate above col-md-4 block for more cards -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="trip-card">
         <img src="{{ url('/assets/images/trip-img.png') }}" alt="Find Love">
          <div class="content">
            <a href="#"><h5>Meet Our Famous Members</h5></a>
            <div class="location">Bhutan, India, Tiber</div>
            <div class="price">$250.00 / Person</div>
            <div class="days">⏱️ 6 Days Trip</div>
          </div>
          <div class="footer">
            <a href="#" class="btn btn-book">Book Now →</a>
          </div>
        </div>
      </div>

      <!-- Add more cards as needed... -->


       <!-- Card Start -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="trip-card">
         <img src="{{ url('/assets/images/trip-img.png') }}" alt="Find Love">
          <div class="content">
            <a href="#"><h5>Meet Our Famous Members</h5></a>
            <div class="location">Bhutan, India, Tiber</div>
            <div class="price">$250.00 / Person</div>
            <div class="days">⏱️ 6 Days Trip</div>
          </div>
          <div class="footer">
            <a href="#" class="btn btn-book">Book Now →</a>
          </div>
        </div>
      </div>
      <!-- Card End -->

      <!-- Duplicate above col-md-4 block for more cards -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="trip-card">
         <img src="{{ url('/assets/images/trip-img.png') }}" alt="Find Love">
          <div class="content">
            <a href="#"><h5>Meet Our Famous Members</h5></a>
            <div class="location">Bhutan, India, Tiber</div>
            <div class="price">$250.00 / Person</div>
            <div class="days">⏱️ 6 Days Trip</div>
          </div>
          <div class="footer">
            <a href="#" class="btn btn-book">Book Now →</a>
          </div>
        </div>
      </div>

      <!-- Add more cards as needed... -->


       <!-- Card Start -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="trip-card">
         <img src="{{ url('/assets/images/trip-img.png') }}" alt="Find Love">
          <div class="content">
            <a href="#"><h5>Meet Our Famous Members</h5>
            <div class="location">Bhutan, India, Tiber</div>
            <div class="price">$250.00 / Person</div>
            <div class="days">⏱️ 6 Days Trip</div>
          </div>
          <div class="footer">
            <a href="#" class="btn btn-book">Book Now →</a>
          </div>
        </div>
      </div>
      <!-- Card End -->

      <!-- Duplicate above col-md-4 block for more cards -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="trip-card">
         <img src="{{ url('/assets/images/trip-img.png') }}" alt="Find Love">
          <div class="content">
            <a href="#"><h5>Meet Our Famous Members</h5>
            <div class="location">Bhutan, India, Tiber</div>
            <div class="price">$250.00 / Person</div>
            <div class="days">⏱️ 6 Days Trip</div>
          </div>
          <div class="footer">
           <a href="#" class="btn btn-book">Book Now →</a>
          </div>
        </div>
      </div>

      <!-- Add more cards as needed... -->

    </div>
  </div>
</section>



@include('layouts.footer')