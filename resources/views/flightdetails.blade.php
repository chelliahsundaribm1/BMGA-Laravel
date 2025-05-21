@extends('layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Flight Details</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Flight</li>
                            <li class="breadcrumb-item active" aria-current="page">Flight Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content">
        <div class="container">

            @php
                $airlineCode = $flight['sg'][0]['al']['alC'] ?? '';
            @endphp
            <div class="row">
                <div class="col-xl-8">

                    <!-- Slider -->
                    <div>
                        <div class="service-wrap slider-wrap-five mb-4">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <div class="mb-2">
                                    <h4 class="mb-1 d-flex align-items-center flex-wrap">
                                        {{ $flight['sg'][0]['al']['alN'] ?? 'N/A' }}
                                        {{ $flight['sg'][0]['al']['fN'] ?? 'N/A' }}
                                        <span class="badge badge-xs bg-success rounded-pill ms-2">
                                            <i class="isax isax-ticket-star5 me-1"></i>
                                            Verified
                                        </span>
                                        <span class="badge badge-xs bg-indigo rounded-pill ms-2">
                                            Cheapest
                                        </span>
                                    </h4>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <p class="fs-14 mb-2 me-3 pe-3 border-end d-flex align-items-center">
                                            <img src="{{ asset("assets/airlines_icons/{$airlineCode}.png") }}"
                                                class="me-2" alt="{{ $flight['sg'][0]['al']['alC'] ?? 'default' }}">
                                            {{ $flight['sg'][0]['al']['alN'] ?? 'N/A' }}
                                            <span class="bg-primary divide-point mx-2"></span>
                                            Non-stop
                                        </p>
                                        <div class="d-flex align-items-center mb-2">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                            <p class="fs-14"><a href="#reviews">(400 Reviews)</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-light btn-icon btn-sm d-flex align-items-center justify-content-center me-2"><i
                                            class="isax isax-share"></i></a>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-light btn-sm d-inline-flex align-items-center"><i
                                            class="isax isax-heart5 text-danger me-1"></i>Save</a>
                                </div>
                            </div>
                            <div class="service-wrap mb-4">
                                                                                                    @foreach ([9, 5, 7] as $imgNum)

                                <div class="slider-wrap">

                                    <div class="owl-carousel service-carousel nav-center mb-4" id="large-img">
                                            <div class="service-img">
                                                <img src="{{ asset("assets/img/flight/flight-0{$imgNum}.jpg") }}"
                                                    class="img-fluid" alt="Slider Img">
                                            </div>
                                    </div>
                                    <a href="{{ asset("assets/img/flight/flight-0{$imgNum}.jpg") }}" data-fancybox="gallery"
                                        class="btn btn-white btn-xs view-btn"><i class="isax isax-image me-1"></i>See
                                        All</a>

                                </div>
                                <div class="owl-carousel slider-nav-thumbnails nav-center" id="small-img">
                                    <div><img src="{{ asset("assets/img/flight/flight-0{$imgNum}.jpg") }}" class="img-fluid"
                                            alt="Slider Img"></div>

                                </div>
                                                                    @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- /Slider -->

                    <div class="card shadow-none bg-light-200">
                        <div class="card-body pb-1">
                            <h5 class="d-flex align-items-center fs-18 mb-3">
                                <span class="avatar avatar-md rounded-circle bg-primary me-2"><i
                                        class="isax isax-airplane5"></i></span>
                                Flight Information
                            </h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Flight Number</h6>
                                        <p>{{ $flight['sg'][0]['al']['fN'] ?? 'N/A' }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">From</h6>
                                        <p>{{ $flight['sg'][0]['or']['aN'] ?? 'N/A' }}
                                            ({{ $flight['sg'][0]['or']['aC'] ?? '' }})</p>
                                        <small>{{ \Carbon\Carbon::parse($flight['sg'][0]['or']['dT'])->format('d M Y, h:i A') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">To</h6>
                                        <p>{{ $flight['sg'][0]['ds']['aN'] ?? 'N/A' }}
                                            ({{ $flight['sg'][0]['ds']['aC'] ?? '' }})</p>
                                        <small>{{ \Carbon\Carbon::parse($flight['sg'][0]['ds']['aT'])->format('d M Y, h:i A') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Duration</h6>
                                        <p>{{ $flight['sg'][0]['dr'] ?? 'N/A' }} minutes</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Baggage</h6>
                                        <p>Check-in: {{ $flight['sg'][0]['bg'] ?? 'N/A' }}, Cabin:
                                            {{ $flight['sg'][0]['cBg'] ?? 'N/A' }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Fare</h6>
                                        <p>{{ $flight['cr'] ?? 'INR' }} {{ number_format($flight['pF'], 2) }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Fare Type</h6>
                                        <p>{{ $flight['fareIdentifier']['name'] ?? 'N/A' }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                @php $breakup = $flight['paxFareBreakUp'][0]; @endphp
                                <div class="col-md-3">
                                    <h6>Base Fare</h6>
                                    <p>INR {{ number_format($breakup['baseFare'], 2) }}</p>
                                </div>
                                <div class="col-md-3">
                                    <h6>Tax</h6>
                                    <p>INR {{ number_format($breakup['tax'], 2) }}</p>
                                </div>
                                <div class="col-md-3">
                                    <h6>YQ Tax</h6>
                                    <p>INR {{ number_format($breakup['yqTax'], 2) }}</p>
                                </div>
                                <div class="col-md-3">
                                    <h6>GST</h6>
                                    <p>INR {{ number_format($breakup['gst'], 2) }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="accordion custom-accordion accordion-shadow-none">
                        <div class="accordion-item border-0 mb-4">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                    Fare Rules
                                </button>
                            </div>
                            <div id="accordion_collapse_two" class="accordion-collapse collapse show">
                                <div class="accordion-body pt-0">
                                    <p class="mb-2">
                                        {!! $fareRules !!}
                                    </p>

                                </div>
                            </div>
                        </div>
                        {{-- <div class="accordion-item mb-0 border-0 pb-1">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_three" aria-expanded="true">
                                    Amenities
                                </button>
                            </div>
                            <div id="accordion_collapse_three" class="accordion-collapse collapse show">
                                <div class="accordion-body pt-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <h6 class="mb-2">Dining Options</h6>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                    <p>Room Service</p>
                                                </div>
                                               
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="accordion-item mb-xl-0 mb-4 shadow-sm p-3 border-0" id="reviews">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_nine" aria-expanded="true">
                                    Reviews
                                </button>
                            </div>
                            <div id="accordion_collapse_nine" class="accordion-collapse collapse show">
                                <div class="accordion-body border-top mt-3 pt-3">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h6 class="mb-3">Reviews (45)</h6>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#add_review" class="btn btn-primary btn-md mb-3"><i
                                                    class="isax isax-edit-2 me-1"></i>Write a Review</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 d-flex">
                                                <div class="rating-item bg-light-200 text-center flex-fill mb-3">
                                                    <h6 class="fw-medium mb-3">Customer Reviews & Ratings</h6>
                                                    <h5 class="display-6">4.9 / 5.0</h5>
                                                    <div
                                                        class="d-inline-flex align-items-center justify-content-center mb-3">
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary me-1"></i>
                                                        <i class="ti ti-star-filled text-primary"></i>
                                                    </div>
                                                    <p>Based On 2,459 Reviews</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex">
                                                <div class="card rating-progress shadow-none flex-fill mb-3">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">5 Star Ratings</p>
                                                            <div class="progress w-100" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 90%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">247</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">4 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 80%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">145</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">3 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar"
                                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 70%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">600</p>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <p class="me-2 text-nowrap mb-0">2 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar"
                                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 60%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">560</p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <p class="me-2 text-nowrap mb-0">1 Star Ratings</p>
                                                            <div class="progress mb-0 w-100" role="progressbar"
                                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-primary" style="width: 40%">
                                                                </div>
                                                            </div>
                                                            <p class="progress-count ms-2">400</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="card review-item shadow-none mb-3">
                                            <div class="card-body p-3">
                                                <div class="review-info">
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="avatar avatar-lg me-2 flex-shrink-0">
																<img src="assets/img/users/user-05.jpg" class="rounded-circle" alt="img">
															</span>
                                                            <div>
                                                                <h6 class="fs-16 fw-medium mb-1">Joseph Massey</h6>
                                                                <div class="d-flex align-items-center flex-wrap date-info">
                                                                    <p class="fs-14 mb-0">2 days ago</p>
                                                                    <p class="fs-14 d-inline-flex align-items-center mb-0"><span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>Unforgettable Stay!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-outline-light btn-md d-inline-flex align-items-center mb-2"><i class="isax isax-repeat me-1"></i>Reply</a>
                                                    </div>
                                                    <p class="mb-2">It was a good location however the cocoon concept was weird. No tables, chairs etc was difficult as everything went on the floor.</p>
                                                    <div class="d-flex align-items-center">
                                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery" href="assets/img/flight/flight-large-04.jpg">
                                                            <img src="assets/img/flight/flight-thumb-04.jpg" class="br-10" alt="img">
                                                        </a>
                                                        <a class="avatar avatar-md me-2 mb-2" data-fancybox="gallery" href="assets/img/flight/flight-large-02.jpg">
                                                            <img src="assets/img/flight/flight-thumb-02.jpg" class="br-10" alt="img">
                                                        </a>
                                                        <a class="avatar avatar-md me-0 mb-2" data-fancybox="gallery" href="assets/img/flight/flight-large-03.jpg">
                                                            <img src="assets/img/flight/flight-thumb-03.jpg" class="br-10" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="d-inline-flex align-items-center">
                                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center fs-14 me-3"><i class="isax isax-like-1 me-2"></i>21</a>
                                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center me-3"><i class="isax isax-dislike me-2"></i>50</a>
                                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center me-3"><i class="isax isax-heart5 text-danger me-2"></i>45</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="text-center mb-4 mb-xl-0">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary btn-md d-inline-flex align-items-center justify-content-center mt-2">See
                                                all 4,078 reviews<i class="isax isax-arrow-right-3 ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 theiaStickySidebar">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <span class="btn btn-outline-light flex-fill"><span class="icon-rotate-up me-2"><i
                                            class="isax isax-airplane"></i></span>
                                            {{ $flight['sg'][0]['or']['aC'] ?? '' }}</span>
                                <a href="javascript:void(0);" class="way-icon badge badge-primary rounded-pill mx-2">
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                </a>
                                <span class="btn btn-outline-light flex-fill"><span class="icon-rotate-down me-2"><i
                                            class="isax isax-airplane"></i></span>{{ $flight['sg'][0]['ds']['aC'] ?? '' }}</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between bg-light-200 rounded p-3 mb-3">
                                <p class="fs-13 fw-medium mb-0">Starts From</p>
                                <h5 class="text-primary">{{ number_format($breakup['baseFare'], 2) }} <span
                                        class="fs-14 text-default fw-normal">/ Person</span></h5>
                            </div>
                            <h5 class="fs-18 mb-3">Check Availability</h5>
                            <div class="banner-form">
                                <form action="flight-booking.html" class="form-info border-0">
                                    <div class="form-info border-0">
                                        <div class="form-item dropdown border rounded p-3 mb-3 w-100">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">Ken International Airport</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i
                                                                class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Newyork</h6>
                                                            <p>Ken International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Boston</h6>
                                                            <p>Boston Logan International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                            <p>Dulles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                            <p>Los Angeles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Orlando</h6>
                                                            <p>Orlando International Airport</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown border rounded p-2 mb-3 w-100">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <h5>Las Vegas</h5>
                                                <p class="fs-12 mb-0">Martini International Airport</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i
                                                                class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Newyork</h6>
                                                            <p>Ken International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Boston</h6>
                                                            <p>Boston Logan International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                            <p>Dulles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                            <p>Los Angeles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Orlando</h6>
                                                            <p>Orlando International Airport</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item border rounded p-3 mb-3 w-100">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label fs-14 text-default mb-1">Preferred Class</label>
                                            <select class="select">
                                                <option>Economy</option>
                                                <option>Business Class</option>
                                            </select>
                                        </div>
                                        <div class="card shadow-none mb-3">
                                            <div class="card-body p-3 pb-0">
                                                <div class="border-bottom pb-2 mb-2">
                                                    <h6>Details</h6>
                                                </div>
                                                <div class="custom-increment">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Adults</label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity"
                                                                    class=" input-number" value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Infants <span
                                                                class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity"
                                                                    class=" input-number" value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <label class="form-label text-gray-9 mb-0">Children <span
                                                                class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                        <div class="custom-increment">
                                                            <div class="input-group">
                                                                <span class="input-group-btn float-start">
                                                                    <button type="button"
                                                                        class="quantity-left-minus btn btn-light btn-number"
                                                                        data-type="minus" data-field="">
                                                                        <span><i class="isax isax-minus"></i></span>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quantity"
                                                                    class=" input-number" value="01">
                                                                <span class="input-group-btn float-end">
                                                                    <button type="button"
                                                                        class="quantity-right-plus btn btn-light btn-number"
                                                                        data-type="plus" data-field="">
                                                                        <span><i class="isax isax-add"></i></span>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary btn-lg search-btn ms-0 w-100 mb-3 fs-14">Book Now</button>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="fs-14 fw-medium text-success">40 Seats Available on your Search</h6>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
