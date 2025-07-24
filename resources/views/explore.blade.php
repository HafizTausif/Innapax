@include('layouts.header')

<!-- CSS Styling -->
<style>

    @media (min-width: 576px) {
    .about--style3 .section__wrapper form {
        padding: 15px 30px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }
}

@media (min-width: 992px) {
    .about--style3 {
        margin-top: -40px;
        position: relative;
        z-index: 999;
    }
}

    body {
        background-color: #fff;
    }

</style>


<div class="pageheader bg_img"
    style="background-image: url({{ asset('/assets/images/bg-img/pageheader.jpg') }});">
    <div class="container">
        <div class="pageheader__content text-center">
            <h2>Explore People’s</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Explore</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="about about--style3 padding-top pt-xl-0 ">
		<div class="container">
			<div class="section__wrapper">
				<form action="#">
					<div class="banner__list banner__list-explore">
						<div class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1">
							
							<div class="col-12">
								<div class="position-relative">
        <input type="text" class="form-control search-input" placeholder="Search People’s Here...">
        <i class="fas fa-search search-icon"></i>
      </div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


<!-- Member Grid Section -->
<section class="padding-top padding-bottom bg-white">
    <div class="container">
        <div class="row justify-content-center g-4">

            <!-- Member Box Start -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="member-box position-relative">
                    <div class="position-relative">
                        <img src="{{ url('/assets/images/member/female/01.jpg') }}"
                            alt="Olivia Doe" class="img-fluid w-100 member-img">
                        <span class="status-badge"><i class="fa fa-clock me-1"></i> Active 2 Hours Ago</span>
                    </div>
                    <div class="mt-4 member-info">
                        <h4 class="fw-bold mb-1">Olivia Doe</h4>
                        <div class="text-black">London</div>
                        <div class="text-pink mt-1">85% Match</div>
                    </div>
                </div>
            </div>

            <!-- Duplicate for more members -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="member-box position-relative">
                    <div class="position-relative">
                        <img src="{{ url('/assets/images/member/male/02.jpg') }}"
                            alt="Paul E. Davis" class="img-fluid w-100 member-img">
                        <span class="status-badge active_now"><i class="fa fa-clock me-1"></i> Active Now</span>
                    </div>
                    <div class="mt-4 member-info">
                        <h4 class="fw-bold mb-1">Paul E. Davis</h4>
                        <div class="text-black">Paris</div>
                        <div class="text-pink mt-1">64% Match</div>
                    </div>
                </div>
            </div>

            <!-- Member Box Start -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="member-box position-relative">
                    <div class="position-relative">
                        <img src="{{ url('/assets/images/member/female/02.jpg') }}"
                            alt="Olivia Doe" class="img-fluid w-100 member-img">
                        <span class="status-badge"><i class="fa fa-clock me-1"></i> Active 2 Hours Ago</span>
                    </div>
                    <div class="mt-4 member-info">
                        <h4 class="fw-bold mb-1">Olivia Doe</h4>
                        <div class="text-black">London</div>
                        <div class="text-pink mt-1">85% Match</div>
                    </div>
                </div>
            </div>

            <!-- Duplicate for more members -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="member-box position-relative">
                    <div class="position-relative">
                        <img src="{{ url('/assets/images/member/male/04.jpg') }}"
                            alt="Paul E. Davis" class="img-fluid w-100 member-img">
                        <span class="status-badge"><i class="fa fa-clock me-1"></i> Active 1 Day Ago</span>
                    </div>
                    <div class="mt-4 member-info">
                        <h4 class="fw-bold mb-1">Paul E. Davis</h4>
                        <div class="text-black">Paris</div>
                        <div class="text-pink mt-1">64% Match</div>
                    </div>
                </div>
            </div>

            <!-- Member Box Start -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="member-box position-relative">
                    <div class="position-relative">
                        <img src="{{ url('/assets/images/member/female/03.jpg') }}"
                            alt="Olivia Doe" class="img-fluid w-100 member-img">
                       <span class="status-badge active_now"><i class="fa fa-clock me-1"></i> Active Now</span>
                    </div>
                    <div class="mt-4 member-info">
                        <h4 class="fw-bold mb-1">Olivia Doe</h4>
                        <div class="text-black">London</div>
                        <div class="text-pink mt-1">85% Match</div>
                    </div>
                </div>
            </div>

            <!-- Duplicate for more members -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="member-box position-relative">
                    <div class="position-relative">
                        <img src="{{ url('/assets/images/member/male/06.jpg') }}"
                            alt="Paul E. Davis" class="img-fluid w-100 member-img">
                        <span class="status-badge"><i class="fa fa-clock me-1"></i> Active 1 Day Ago</span>
                    </div>
                    <div class="mt-4 member-info">
                        <h4 class="fw-bold mb-1">Paul E. Davis</h4>
                        <div class="text-black">Paris</div>
                        <div class="text-pink mt-1">64% Match</div>
                    </div>
                </div>
            </div>

            <!-- Member Box Start -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="member-box position-relative">
                    <div class="position-relative">
                        <img src="{{ url('/assets/images/member/female/04.jpg') }}"
                            alt="Olivia Doe" class="img-fluid w-100 member-img">
                        <span class="status-badge"><i class="fa fa-clock me-1"></i> Active 2 Hours Ago</span>
                    </div>
                    <div class="mt-4 member-info">
                        <h4 class="fw-bold mb-1">Olivia Doe</h4>
                        <div class="text-black">London</div>
                        <div class="text-pink mt-1">85% Match</div>
                    </div>
                </div>
            </div>

            <!-- Duplicate for more members -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="member-box position-relative">
                    <div class="position-relative">
                        <img src="{{ url('/assets/images/member/male/08.jpg') }}"
                            alt="Paul E. Davis" class="img-fluid w-100 member-img">
                        <span class="status-badge"><i class="fa fa-clock me-1"></i> Active 1 Day Ago</span>
                    </div>
                    <div class="mt-4 member-info">
                        <h4 class="fw-bold mb-1">Paul E. Davis</h4>
                        <div class="text-black">Paris</div>
                        <div class="text-pink mt-1">64% Match</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




@include('layouts.footer')
