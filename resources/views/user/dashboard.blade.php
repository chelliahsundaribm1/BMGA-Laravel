@extends('layouts.app')

@section('content')

  <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Dashboard</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Wrapper -->
    <div class="content content-two">
        <div class="container">

            <div class="row">

                <!-- Sidebar -->
              @include('user.sidebar')
                <!-- /Sidebar -->

                <div class="col-xl-9 col-lg-8">
                    <div class="alert alert-teal alert-dismissible d-flex align-items-center border-0 mb-4 fade show">
                        <i class="isax isax-info-circle5 me-2"></i> Reminder about your upcoming booking Hotel Hayat on 15 May 2025 at 09:30 AM . We look forward to seeing you!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-xmark"></i></button>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-xl rounded-circle bg-primary me-3">
											<i class="isax isax-calendar-15 fs-36"></i>
										</span>
                                        <div>
                                            <h3>80</h3>
                                            <p>Total Bookings</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-xl rounded-circle bg-secondary me-3">
											<i class="isax isax-money-send5 fs-36"></i>
										</span>
                                        <div>
                                            <h3>$5.3K</h3>
                                            <p>Total Transactions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-xl rounded-circle bg-purple me-3">
											<i class="isax isax-money-tick5 fs-36"></i>
										</span>
                                        <div>
                                            <h3>$5965</h3>
                                            <p>Average Value</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-7 d-flex">
                            <div class="card shadow-none flex-fill">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h6>Recent Bookings</h6>
                                        <div class="dropdown ">
                                            <a href="javascript:void(0);" class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-document-filter me-2 fs-14 text-gray-6"></i>Filter
                                            </a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>Completed
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>Upcoming
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>Inprogress
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card shadow-none mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap row-gap-2">
                                                <a href="hotel-details.html" class="avatar avatar-xl flex-shrink-0 me-2">
                                                    <img src="assets/img/hotels/hotel-15.jpg" class="img-fluid rounded-circle" alt="Img">
                                                </a>
                                                <div class="flex-fill">
                                                    <span class="badge badge-soft-info badge-xs rounded-pill mb-1"><i class="isax isax-buildings me-1"></i>Hotel</span>
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="fs-16 text-truncate"><a href="hotel-details.html">Hayat Residency <span class="text-gray-5 fw-normal fs-14">( Queen Room )</span></a></h6>
                                                        <span class="badge badge-purple badge-sm  rounded-pill"><i class="ti ti-point-filled me-1"></i>Upcoming</span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <p class="fs-14 d-flex align-items-center border-end pe-2 me-2 mb-0"><i class="isax isax-calendar-25 me-2"></i>Date : 25 May 2025</p>
                                                        <p class="fs-14 d-flex align-items-center"><i class="isax isax-timer5 me-2"></i>Time : 09:30 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-none mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap row-gap-2">
                                                <a href="hotel-details.html" class="avatar avatar-xl flex-shrink-0 me-2">
                                                    <img src="assets/img/flight/flight-04.jpg" class="img-fluid rounded-circle" alt="Img">
                                                </a>
                                                <div class="flex-fill">
                                                    <span class="badge badge-soft-teal badge-xs rounded-pill mb-1"><i class="isax isax-airplane5 me-1"></i>Flight</span>
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="fs-16 text-truncate"><a href="hotel-details.html">AstraFlight 215 <span class="text-gray-5 fw-normal fs-14">( Suite )</span></a></h6>
                                                        <span class="badge badge-info badge-sm rounded-pill"><i class="ti ti-point-filled me-1"></i>Inpogress</span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <p class="fs-14 d-flex align-items-center border-end pe-2 me-2 mb-0"><i class="isax isax-calendar-25 me-2"></i>Date : 25 May 2025</p>
                                                        <p class="fs-14 d-flex align-items-center"><i class="isax isax-timer5 me-2"></i>Time : 09:30 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-none mb-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center flex-wrap row-gap-2">
                                                <a href="hotel-details.html" class="avatar avatar-xl flex-shrink-0 me-2">
                                                    <img src="assets/img/tours/tours-24.jpg" class="img-fluid rounded-circle" alt="Img">
                                                </a>
                                                <div class="flex-fill">
                                                    <span class="badge badge-soft-pink badge-xs rounded-pill mb-1"><i class="isax isax-signpost me-1"></i>Tour</span>
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="fs-16 text-truncate"><a href="hotel-details.html">Rainbow Valley</a></h6>
                                                        <span class="badge badge-success badge-sm rounded-pill"><i class="ti ti-point-filled me-1"></i>Completed</span>
                                                    </div>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <p class="fs-14 d-flex align-items-center border-end pe-2 me-2 mb-0"><i class="isax isax-calendar-25 me-2"></i>Date : 25 May 2025</p>
                                                        <p class="fs-14 d-flex align-items-center"><i class="isax isax-timer5 me-2"></i>Time : 09:30 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 d-flex">
                            <div class="card shadow-none flex-fill">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h6>Bookings Statistics</h6>
                                        <div class="dropdown ">
                                            <a href="javascript:void(0);" class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-calendar-2 me-2 fs-14 text-gray-6"></i>January
                                            </a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>January
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>February
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>March
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-0">
                                            <p class="mb-0">Total Amount Spend</p>
                                            <h3>$2659</h3>
                                        </div>
                                        <div id="tours_chart"></div>
                                        <p class="fs-14"><span class="text-success">+21 %</span> increased Compared to Last year</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl col-lg-4 col-sm-6">
                            <!-- Tours Plan-->
                            <div class="tours-item mb-4">
                                <a href="hotel-grid.html" class="tours-img">
                                    <img src="assets/img/hotels/hotel-15.jpg" class="img-fluid w-100" alt="img">
                                </a>
                                <div class="tours-content text-center">
                                    <h6 class="fs-16 fw-medium">968 Hotels</h6>
                                    <a href="hotel-grid.html" class="link-primary text-decoration-underline">Book Now</a>
                                </div>
                            </div>
                            <!-- /Tours Plan-->
                        </div>

                        <div class="col-xl col-lg-4 col-sm-6">
                            <!-- Tours Plan-->
                            <div class="tours-item mb-4">
                                <a href="flight-grid.html" class="tours-img">
                                    <img src="assets/img/flight/flight-07.jpg" class="img-fluid w-100" alt="img">
                                </a>
                                <div class="tours-content text-center">
                                    <h6 class="fs-16 fw-medium">689 Flights</h6>
                                    <a href="flight-grid.html" class="link-primary text-decoration-underline">Book Now</a>
                                </div>
                            </div>
                            <!-- /Tours Plan-->
                        </div>

                        <div class="col-xl col-lg-4 col-sm-6">
                            <!-- Tours Plan-->
                            <div class="tours-item mb-4">
                                <a href="tour-grid.html" class="tours-img">
                                    <img src="assets/img/tours/tours-24.jpg" class="img-fluid w-100" alt="img">
                                </a>
                                <div class="tours-content text-center">
                                    <h6 class="fs-16 fw-medium">985 Tours</h6>
                                    <a href="tour-grid.html" class="link-primary text-decoration-underline">Book Now</a>
                                </div>
                            </div>
                            <!-- /Tours Plan-->
                        </div>

                        <div class="col-xl col-lg-4 col-sm-6">
                            <!-- Tours Plan-->
                            <div class="tours-item mb-4">
                                <a href="car-grid.html" class="tours-img">
                                    <img src="assets/img/cars/car-11.jpg" class="img-fluid w-100" alt="img">
                                </a>
                                <div class="tours-content text-center">
                                    <h6 class="fs-16 fw-medium">698 Cars</h6>
                                    <a href="car-grid.html" class="link-primary text-decoration-underline">Book Now</a>
                                </div>
                            </div>
                            <!-- /Tours Plan-->
                        </div>

                        <div class="col-xl col-lg-4 col-sm-6">
                            <!-- Tours Plan-->
                            <div class="tours-item mb-4">
                                <a href="cruise-grid.html" class="tours-img">
                                    <img src="assets/img/cruise/cruise-15.jpg" class="img-fluid w-100" alt="img">
                                </a>
                                <div class="tours-content text-center">
                                    <h6 class="fs-16 fw-medium">968 Cruise</h6>
                                    <a href="cruise-grid.html" class="link-primary text-decoration-underline">Book Now</a>
                                </div>
                            </div>
                            <!-- /Tours Plan-->
                        </div>

                    </div>

                    <div class="row">

                        <!-- Recent Booking -->
                        <div class="col-xl-6 col-xxl-7 d-flex">
                            <div class="card shadow-none flex-fill">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h6>Recent Bookings</h6>
                                        <div class="dropdown ">
                                            <a href="javascript:void(0);" class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-calendar-2 me-2 fs-14 text-gray-6"></i>2025
                                            </a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>2025
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>2024
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>2023
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-2">
                                            <p class="mb-0">Spending For Bookings</p>
                                            <div class="d-flex align-items-center">
                                                <h3 class="me-2">$20,659</h3>
                                                <p class="fs-14"><span class="badge badge-soft-success badge-md border border-success rounded-pill me-2"><i class="isax isax-arrow-up-3 "></i>12%</span>vs last years</p>
                                            </div>
                                        </div>
                                        <div id="transcation_chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Booking -->

                        <!-- Most Booked Services -->
                        <div class="col-xl-6 col-xxl-5 d-flex">
                            <div class="card shadow-none flex-fill">
                                <div class="card-body">
                                    <h6 class="mb-4">Most Booked Services</h6>
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <a href="flight-details.html" class="avatar avatar-lg flex-shrink-0 me-2">
                                                <img src="assets/img/flight/flight-01.jpg" class="img-fluid rounded-circle" alt="Img">
                                            </a>
                                            <div>
                                                <h6 class="fs-16"><a href="flight-details.html">Cloudrider 789</a> <span class="badge badge-soft-teal badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Flight</span></h6>
                                                <p class="fs-14">Last Booked : 25 Apr 2025</p>
                                            </div>
                                        </div>
                                        <a href="flight-details.html" class="btn rebook-btn btn-sm"><i class="isax isax-calendar-add5 me-1"></i>Rebook</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <a href="hotel-details.html" class="avatar avatar-lg flex-shrink-0 me-2">
                                                <img src="assets/img/hotels/hotel-21.jpg" class="img-fluid rounded-circle" alt="Img">
                                            </a>
                                            <div>
                                                <h6 class="fs-16"><a href="hotel-details.html">The Luxe Haven</a> <span class="badge badge-soft-info badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Hotel</span></h6>
                                                <p class="fs-14">Last Booked : 16 May 2025</p>
                                            </div>
                                        </div>
                                        <a href="hotel-details.html" class="btn rebook-btn btn-sm"><i class="isax isax-calendar-add5 me-1"></i>Rebook</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <a href="car-details.html" class="avatar avatar-lg flex-shrink-0 me-2">
                                                <img src="assets/img/cars/car-09.jpg" class="img-fluid rounded-circle" alt="Img">
                                            </a>
                                            <div>
                                                <h6 class="fs-16"><a href="car-details.html">Ford Mustang 4.0 AT</a> <span class="badge badge-soft-purple badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Car</span></h6>
                                                <p class="fs-14">Last Booked : 25 May 2025</p>
                                            </div>
                                        </div>
                                        <a href="car-details.html" class="btn rebook-btn btn-sm"><i class="isax isax-calendar-add5 me-1"></i>Rebook</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                            <a href="cruise-details.html" class="avatar avatar-lg flex-shrink-0 me-2">
                                                <img src="assets/img/cruise/cruise-26.jpg" class="img-fluid rounded-circle" alt="Img">
                                            </a>
                                            <div>
                                                <h6 class="fs-16"><a href="cruise-details.html">Super Aquamarine</a> <span class="badge badge-soft-cyan badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Cruise</span></h6>
                                                <p class="fs-14">Last Booked : 18 Jun 2025</p>
                                            </div>
                                        </div>
                                        <a href="cruise-details.html" class="btn rebook-btn btn-sm"><i class="isax isax-calendar-add5 me-1"></i>Rebook</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <a href="tour-details.html" class="avatar avatar-lg flex-shrink-0 me-2">
                                                <img src="assets/img/tours/tours-29.jpg" class="img-fluid rounded-circle" alt="Img">
                                            </a>
                                            <div>
                                                <h6 class="fs-16"><a href="tour-details.html">Mystic Falls</a> <span class="badge badge-soft-pink badge-xs rounded-pill"><i class="isax isax-signpost me-1"></i>Tour</span></h6>
                                                <p class="fs-14">Last Booked : 25 May 2025</p>
                                            </div>
                                        </div>
                                        <a href="tour-details.html" class="btn rebook-btn btn-sm"><i class="isax isax-calendar-add5 me-1"></i>Rebook</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Most Booked Services -->

                    </div>

                    <div class="row">

                        <!-- Notifications -->
                        <div class="col-xl-5 d-flex">
                            <div class="card shadow-none flex-fill">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h6>Notifications</h6>
                                        <div class="dropdown ">
                                            <a href="javascript:void(0);" class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-document-filter me-2 fs-14 text-gray-6"></i>All
                                            </a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>All
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>Recent
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-lg bg-primary rounded-circle flex-shrink-0 me-2">
											<i class="isax isax-info-circle5"></i>
										</span>
                                        <div class="flex-fill overflow-hidden">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="fs-16 text-truncate">Pre-Tour Information</h6>
                                                <p class="fs-14 text-primary text-nowrap">1 day ago</p>
                                            </div>
                                            <p class="fs-14 two-line-ellipsis">Your <span class="fw-medium">Mountain Valley</span> is on 15 May 2024. Please arrive at los Angeles"</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-lg bg-purple rounded-circle flex-shrink-0 me-2">
											<i class="isax isax-calendar-remove5"></i>
										</span>
                                        <div class="flex-fill overflow-hidden">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="fs-16 text-truncate">Rescheduling Notification</h6>
                                                <p class="fs-14 text-primary text-nowrap">1 day ago</p>
                                            </div>
                                            <p class="fs-14 two-line-ellipsis">Your Hotel Booking of Suite Room on 15 Jan 2025 has been rescheduled to 20 May 2025.</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="avatar avatar-lg bg-teal rounded-circle flex-shrink-0 me-2">
											<i class="isax isax-calendar-edit5"></i>
										</span>
                                        <div class="flex-fill overflow-hidden">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="fs-16 text-truncate">Booking Confirmation</h6>
                                                <p class="fs-14 text-primary text-nowrap">1 day ago</p>
                                            </div>
                                            <p class="fs-14 two-line-ellipsis">Thank you for choosing Air India. Your adventure is set for 21 Jan 2025 at 04:45 PM. </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-secondary rounded-circle flex-shrink-0 me-2">
											<i class="isax isax-color-swatch5"></i>
										</span>
                                        <div class="flex-fill overflow-hidden">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h6 class="fs-16 text-truncate">Special Offer Notification</h6>
                                                <p class="fs-14 text-primary text-nowrap">1 day ago</p>
                                            </div>
                                            <p class="fs-14 two-line-ellipsis">Book next tour with us by Jan 2025 to avail Offer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Notifications -->

                        <!-- Recent Invoices -->
                        <div class="col-xl-7 d-flex">
                            <div class="card shadow-none flex-fill">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h6>Recent Invoices</h6>
                                        <div class="dropdown ">
                                            <a href="javascript:void(0);" class="dropdown-toggle btn bg-light-200 btn-sm text-gray-6 rounded-pill fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-document-filter me-2 fs-14 text-gray-6"></i>All
                                            </a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>All
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">
                                                        <i class="ti ti-point-filled me-1"></i>Recent
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card shadow-none mb-4">
                                        <div class="card-body p-2">
                                            <div class="d-flex align-items-center">
                                                <a href="flight-details.html" class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                    <img src="assets/img/flight/flight-01.jpg" class="img-fluid rounded-circle" alt="Img">
                                                </a>
                                                <div class="d-flex justify-content-between align-items-center flex-fill">
                                                    <div>
                                                        <h6 class="fs-16 fw-medium mb-1"><a href="flight-details.html">Cloudrider 789</a></h6>
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <a href="invoices.html" class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12565</a>
                                                            <p class="fs-14">Date: 15 May 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <h6 class="fw-medium mb-1">$569</h6>
                                                        <p class="fs-14 text-success">Paid</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-none mb-4">
                                        <div class="card-body p-2">
                                            <div class="d-flex align-items-center">
                                                <a href="hotel-details.html" class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                    <img src="assets/img/hotels/hotel-24.jpg" class="img-fluid rounded-circle" alt="Img">
                                                </a>
                                                <div class="d-flex justify-content-between align-items-center flex-fill">
                                                    <div>
                                                        <h6 class="fs-16 fw-medium mb-1"><a href="hotel-details.html">The Luxe Haven</a></h6>
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <a href="invoices.html" class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12564</a>
                                                            <p class="fs-14">Date: 13 May 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <h6 class="fw-medium mb-1">$430</h6>
                                                        <p class="fs-14 text-success">Paid</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-none mb-4">
                                        <div class="card-body p-2">
                                            <div class="d-flex align-items-center">
                                                <a href="car-details.html" class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                    <img src="assets/img/cars/car-07.jpg" class="img-fluid rounded-circle" alt="Img">
                                                </a>
                                                <div class="d-flex justify-content-between align-items-center flex-fill">
                                                    <div>
                                                        <h6 class="fs-16 fw-medium mb-1"><a href="car-details.html">Ford Mustang 4.0 AT</a></h6>
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <a href="invoices.html" class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12563</a>
                                                            <p class="fs-14">Date: 10 May 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <h6 class="fw-medium mb-1">$380</h6>
                                                        <p class="fs-14 text-success">Paid</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-none mb-0">
                                        <div class="card-body p-2">
                                            <div class="d-flex align-items-center">
                                                <a href="cruise-details.html" class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                    <img src="assets/img/cruise/cruise-02.jpg" class="img-fluid rounded-circle" alt="Img">
                                                </a>
                                                <div class="d-flex justify-content-between align-items-center flex-fill">
                                                    <div>
                                                        <h6 class="fs-16 fw-medium mb-1"><a href="cruise-details.html">Super Aquamarine</a></h6>
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <a href="invoices.html" class="fs-14 link-primary border-end pe-2 me-2 mb-0">#INV12562</a>
                                                            <p class="fs-14">Date: 04 May 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end">
                                                        <h6 class="fw-medium mb-1">$475</h6>
                                                        <p class="fs-14 text-success">Paid</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Invoices -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    
@endsection