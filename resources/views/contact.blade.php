@include('layouts.header')

<style>
    .btn {
        padding: .375rem 1.75rem;
    }
</style>


<div class="pageheader bg_img"
    style="background-image: url({{ asset('public/assets/images/bg-img/pageheader.jpg') }});">
    <div class="container">
        <div class="pageheader__content text-center">
            <h2>Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- ===========Info Section Ends Here========== -->

    <div class="info-section padding-top padding-bottom">
        <div class="container">
            <div class="section__header style-2 text-center">
                <h2>Contact Info</h2>
                <p>Let us know your opinions. Also you can write us if you have any questions.</p>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="{{ url('public/assets/images/contact/icon/01.png') }}" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Office Address</h6>
                                <p>1201 park street, Fifth Avenue</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="{{ url('public/assets/images/contact/icon/02.png') }}" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Phone number</h6>
                                <p>
                                    <a href="tel:+22698745632">{{ '+22698 745 632' }}</a>, 
                                    <a href="tel:02982745">{{ '02 982 745' }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="contact-item text-center">
                            <div class="contact-thumb mb-4">
                                <img src="{{ url('public/assets/images/contact/icon/03.png') }}" alt="contact-thumb">
                            </div>
                            <div class="contact-content">
                                <h6 class="title">Send Email</h6>
                                <p>
                                    <a href="mailto:youremail@gmil.com">youremail@gmil.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- ===========Info Section Ends Here========== -->



    <!-- ================> contact section start here <================== -->

    <div class="contact-section bg-white">
        <div class="contact-top padding-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12">
                        <div class="contact-form-wrapper text-center">
                            <h2>Feedback</h2>
                            <p class="mb-5">Let us know your opinions. Also you can write us if you have any questions.</p>
                            <form class="contact-form" action="{{ url('contact') }}" id="contact-form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Phone" id="phone" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" id="subject" name="subject" required>
                                </div>
                                <div class="form-group w-100">
                                    <textarea name="message" rows="8" id="message" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="form-group w-100 text-center">
                                    <button class="btn btn-pink" type="submit"><span>Send our Message</span></button>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================> contact section end here <================== -->


@include('layouts.footer')
