@extends('layouts.app')

@section('content')



    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- About Section -->
    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image mb-4 mb-lg-0">
                        <div class="about-listing">
                            <i class="isax isax-calendar-add text-white mb-2"></i>
                            <h6 class="fs-16 mb-3 text-white">All Listings</h6>
                            <div class="listing-img">
                                <div>
                                    <img src="assets/img/icons/listing.svg" alt="icon">
                                </div>
                                <a href="add-hotel.html" class="btn btn-warning text-gray-9">Add You Listings</a>
                            </div>
                        </div>
                        <div class="about-img">
                            <img src="assets/img/about.png" alt="about">
                        </div>
                        <div class="about-progress d-inline-flex align-items-center">
                            <img src="assets/img/icons/progress-icon.svg" alt="icon">
                            <div class="ms-2">
                                <p class="fs-10 mb-1">Today’s Earnings</p>
                                <h6 class="fs-13">$2500</h6>
                            </div>
                            <a href="wallet.html" class="btn btn-teal btn-sm fw-normal ms-4">Withdraw</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content mb-4">
                        <h6 class="text-primary fs-14 fw-medium mb-2">About DreamsTour</h6>
                        <h2 class="display-6 mb-2">All-in-one platform for unforgettable travel experiences!</h2>
                        <p class="mb-4">At DreamsTour, we believe that travel should be simple, seamless, and tailored to your needs. Whether you're dreaming of an exotic beach getaway, a cultural city tour, or a luxury cruise, we are here to turn your travel dreams
                            into reality.​</p>
                        <div class="d-flex align-items-center mb-4">
                            <span class="avatar avatar-xl bg-primary rounded-circle flex-shrink-0 me-3">
								<i class="isax isax-map5 fs-24"></i>
							</span>
                            <p>Clients navigate their journeys, whether for travel or educational purposes, primarily in Canada, the U.S., and the U.K</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-xl bg-secondary rounded-circle flex-shrink-0 me-3">
								<i class="isax isax-trade5 fs-24 text-gray-9"></i>
							</span>
                            <p>Provides a range of services from immigration advice to study-abroad support and vacation planning.</p>
                        </div>
                    </div>
                    <div class="about-mission">
                        <h6 class="text-primary fs-14 fw-medium mb-3">Our Mission</h6>
                        <p class="fs-16 text-gray-6">Our mission is to make travel more accessible, enjoyable, and hassle-free for everyone. With our range of services</p>
                    </div>
                </div>
            </div>
            <div class="about-bg d-none d-md-block">
                <img src="assets/img/bg/about-bg.png" alt="img" class="about-bg-01">
            </div>
            <div class="about-bg-1 d-none d-md-block">
                <img src="assets/img/bg/about-arrow.png" alt="img" class="about-bg-01">
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <!-- Why Choose Us -->
    <section class="section choose-us-section">
        <div class="container">
            <div class="choose-title">
                <h2>Why Choose <span class="text-primary">Us?</span></h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="choose-card">
                        <div class="choose-icon mb-3">
                            <span class="rounded-circle d-flex align-items-center justify-content-center"><i class="isax isax-archive-tick text-white"></i></span>
                        </div>
                        <div class="card-content">
                            <h6 class="mb-2">Convenience</h6>
                            <p class="fs-16 text-gray-6">Plan your entire trip from one platform, saving you time and effort. No more hopping between different websites .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-card">
                        <div class="choose-icon mb-3">
                            <span class="rounded-circle d-flex align-items-center justify-content-center"><i class="isax isax-dollar-square text-white"></i></span>
                        </div>
                        <div class="card-content">
                            <h6 class="mb-2">Best Price Guarantee</h6>
                            <p class="fs-16 text-gray-6">We work with trusted travel partners to bring you the best deals, whether you're booking a flight, hotel, or car rental.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-card">
                        <div class="choose-icon mb-3">
                            <span class="rounded-circle d-flex align-items-center justify-content-center"><i class="isax isax-headphone text-white"></i></span>
                        </div>
                        <div class="card-content">
                            <h6 class="mb-2">Customer Support</h6>
                            <p class="fs-16 text-gray-6">Our dedicated support team is here for you 24/7, ensuring your travel plans go smoothly from start to finish.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="choose-card">
                        <div class="choose-icon mb-3">
                            <span class="rounded-circle d-flex align-items-center justify-content-center"><i class="isax isax-map text-white"></i></span>
                        </div>
                        <div class="card-content">
                            <h6 class="mb-2">Tailored Travel Experiences</h6>
                            <p class="fs-16 text-gray-6">Whether you're traveling for business, family vacations, or a solo adventure, we provide options that suit every needs</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose-bg-01">
                <img src="assets/img/bg/about-bg-stars-bottom.png" alt="image" class="img-fluid">
            </div>
            <div class="choose-bg-01">
                <img src="assets/img/bg/about-bg-stars-bottom.png" alt="image" class="img-fluid">
            </div>
            <div class="choose-bg-02">
                <img src="assets/img/bg/about-bg-stars-top.png" alt="image" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- /Why Choose Us -->

    <!-- Our Team -->
    <section class="section team-section">
        <div class="container">
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-7 d-flex justify-content-center">
                        <div class="header-section text-center">
                            <h2 class="mb-2">Our <span class="text-primary">Team</span></h2>
                            <p class="fs-16 text-gray-6">We’re a team of explorers, innovators, and customer-focused professionals who are passionate about making travel easy and accessible for everyone.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- Team Item-->
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/img/users/user-17.jpg" alt="Img" class="img-fluid">
                                </div>
                                <div class="team-overlay ">
                                    <div class="bg-white py-2 px-3  rounded-pill  text-center">
                                        <h5>James Parker</h5>
                                        <p class="fs-16 text-gray-6">Chief Executive Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Team Item-->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <!-- Team Item-->
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/img/users/user-18.jpg" alt="Img" class="img-fluid">
                                </div>
                                <div class="team-overlay">
                                    <div class="bg-white py-2 px-3 rounded-pill  text-center">
                                        <h5>Morgan Owen</h5>
                                        <p class="fs-16 text-gray-6">Chief Operations Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Team Item-->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <!-- Team Item-->
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/img/users/user-19.jpg" alt="Img" class="img-fluid">
                                </div>
                                <div class="team-overlay">
                                    <div class="bg-white py-2 px-3 rounded-pill  text-center">
                                        <h5>Richard Dolen</h5>
                                        <p class="fs-16 text-gray-6">Chief Marketing Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Team Item-->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <!-- Team Item-->
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/img/users/user-20.jpg" alt="Img" class="img-fluid">
                                </div>
                                <div class="team-overlay">
                                    <div class="bg-white py-2 px-3 rounded-pill  text-center">
                                        <h5>Linday Brookins</h5>
                                        <p class="fs-16 text-gray-6">Technology Officer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Team Item-->
                    </div>
                </div>
                <div class="text-center view-all wow fadeInUp">
                    <a href="team.html" class="btn btn-dark">View All Experts<i class="isax isax-arrow-right-3 ms-2"></i></a>
                </div>
                <div class="col-md-12">
                    <div class="counter-wrap">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-4">
                                    <h6 class="mb-1 d-flex align-items-center justify-content-center text-teal"><i class="isax isax-global5 me-2"></i>Destinations Worldwide</h6>
                                    <h3 class="display-6"><span class="counter">50</span>+</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-4">
                                    <h6 class="mb-1 d-flex align-items-center justify-content-center text-purple"><i class="isax isax-calendar-2 me-2"></i>Booking Completed</h6>
                                    <h3 class="display-6"><span class="counter">7000</span>+</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-4">
                                    <h6 class="mb-1 d-flex align-items-center justify-content-center text-pink"><i class="isax isax-tag-user5 me-2"></i>Client Globally</h6>
                                    <h3 class="display-6"><span class="counter">100</span>+</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-4">
                                    <h6 class="mb-1 d-flex align-items-center justify-content-center text-info"><i class="isax isax-status-up5 me-2"></i>Providers Registered</h6>
                                    <h3 class="display-6"><span class="counter">89</span>+</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-bg">
                <img src="assets/img/bg/about-bg-01.svg" alt="img" class="about-bg-02">
            </div>
        </div>
    </section>
    <!-- /Our Team -->

    <!-- user Section -->
    <section class="section user-section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">What’s Our <span class="text-primary  text-decoration-underline">User</span> Says</h2>
                        <p class="sub-title">DreamsTour, a tour operator specializing in dream destinations, offers a variety of benefits for travelers.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel testimonial-slider">

                <!-- Testimonial Item-->
                <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-body">
                        <h6 class="mb-4">Great Hospitalization</h6>
                        <p class="mb-4">Dream Tours is the only way to go. We had the time of our life on our trip to the Ark. The customer service was wonderful & the staff was very helpful.</p>
                        <div class="border-top pt-4 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-md  flex-shrink-0">
                                    <img src="assets/img/users/user-01.jpg" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="javascript:void(0);">Andrew Fetcher</a></h6>
                                    <p>Newyork, United States</p>
                                </div>
                            </div>
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                        </div>
                    </div>
                </div>
                <!-- /Testimonial Item-->

                <!-- Testimonial Item-->
                <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-body">
                        <h6 class="mb-4">Hidden Treasure</h6>
                        <p class="mb-4">I went on the Gone with the Wind tour, and it was my first multi-day bus tour. The experience was terrific, thanks to the friendly tour guides.</p>
                        <div class="border-top pt-4 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-md  flex-shrink-0">
                                    <img src="assets/img/users/user-02.jpg" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="javascript:void(0);">Bryan Bradfield</a></h6>
                                    <p>Cape Town, South Africa</p>
                                </div>
                            </div>
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                        </div>
                    </div>
                </div>
                <!-- /Testimonial Item-->

                <!-- Testimonial Item-->
                <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-body">
                        <h6 class="mb-4">Easy to Find your Leisuere Place</h6>
                        <p class="mb-4">Thanks for arranging a smooth travel experience for us. Our cab driver was polite, timely, and helpful. The team ensured making it a stress-free trip.</p>
                        <div class="border-top pt-4 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="avatar avatar-md  flex-shrink-0">
                                    <img src="assets/img/users/user-03.jpg" class="rounded-circle" alt="img">
                                </a>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium"><a href="javascript:void(0);">Prajakta Sasane</a></h6>
                                    <p>Paris, France</p>
                                </div>
                            </div>
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                        </div>
                    </div>
                </div>
                <!-- /Testimonial Item-->

                <!-- Testimonial Item-->
                <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-body">
                        <h6 class="mb-4">Great Hospitalization</h6>
                        <p class="mb-4">Dream Tours is the only way to go. We had the time of our life on our trip to the Ark. The customer service was wonderful & the staff was very helpful.</p>
                        <div class="border-top pt-4 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-md  flex-shrink-0">
									<img src="assets/img/users/user-01.jpg" class="rounded-circle" alt="img">
								</span>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium">Andrew Fetcher</h6>
                                    <p>Newyork, United States</p>
                                </div>
                            </div>
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                        </div>
                    </div>
                </div>
                <!-- /Testimonial Item-->

            </div>
        </div>
        <div class="testimonial-bg">
            <img src="assets/img/bg/testimonial-bg-01.svg" alt="img">
        </div>
    </section>
    <!-- /user Section -->

@endsection