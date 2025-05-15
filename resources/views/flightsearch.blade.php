@extends('layouts.app')

@section('content')


    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Flight</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Flight</li>
                            <li class="breadcrumb-item active" aria-current="page">Flight Grid</li>
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

@if($error)
    <div class="alert alert-warning">
        {{ is_array($error) ? ($error['errorMessage'] ?? 'Something went wrong') : $error }}
    </div>
@endif





            <!-- Flight Search -->
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        <form class="">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="Radio" id="oneway" value="oneway" checked="">
                                        <label class="form-check-label fs-14 ms-2" for="oneway">
                                            Oneway
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="Radio" id="roundtrip" value="roundtrip">
                                        <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                            Round Trip
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="Radio" id="multiway" value="multiway">
                                        <label class="form-check-label fs-14 ms-2" for="multiway">
                                            Multi Trip
                                        </label>
                                    </div>
                                </div>
                                <h6 class="fw-medium fs-16 mb-2">Millions of cheap flights. One simple search</h6>
                            </div>
                            <div class="normal-trip">
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">Ken International Airport</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
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
                                        <div class="form-item dropdown ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <h5>Las Vegas</h5>
                                                <p class="fs-12 mb-0">Martini International Airport</p>
                                                <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                </span>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
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
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="form-item round-drip">
                                            <label class="form-label fs-14 text-default mb-1">Return</label>
                                            <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                            <p class="fs-12 mb-0">Wednesday</p>
                                        </div>
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Travellers and cabin class</label>
                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                <p class="fs-12 mb-0">1 Adult, Economy</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                <h5 class="mb-3">Select Travelers &  Class</h5>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Adults <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                              <span><i class="isax isax-minus"></i></span>
                                                                            </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Childrens <span class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                              <span><i class="isax isax-minus"></i></span>
                                                                            </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Infants<span class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number" data-type="minus" data-field="">
                                                                              <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" value="Economy" name="cabin-class" id="economy" checked="">
                                                            <label class="form-check-label" for="economy">
                                                                Economy
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" value="Economy" name="cabin-class" id="premium-economy">
                                                            <label class="form-check-label" for="premium-economy">
                                                                Premium Economy
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" value="Business" name="cabin-class" id="business">
                                                            <label class="form-check-label" for="business">
                                                                Business
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio" value="First Class" name="cabin-class" id="first-class">
                                                            <label class="form-check-label" for="first-class">
                                                                First Class
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                </div>
                            </div>
                            <div class="multi-trip">
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">Ken International Airport</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
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
                                        <div class="form-item dropdown ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <h5>Las Vegas</h5>
                                                <p class="fs-12 mb-0">Martini International Airport</p>
                                                <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                </span>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
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
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Flight Search -->

            <!-- Flight Types -->
            <div class="mb-2">
                <div class="mb-3">
                    <h5 class="mb-2">Choose type of Flights you are interested</h5>
                </div>
                <div class="row">
              <div class="row">
                    @foreach($airlineFlightCounts as $airline)
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="d-flex align-items-center hotel-type-item mb-3">
                                <div class="avatar avatar-lg">
                                    {{-- Optional logo matching --}}
                                    @php
                                        $logo = optional($airlinelogo->firstWhere('code', $airline['code']))->logo;
                                    @endphp
                                    <img src="{{ $logo ?? asset('assets/img/default-airline.png') }}" class="rounded-circle" alt="{{ $airline['name'] }}">
                                </div>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium">{{ $airline['name'] }}</h6>
                                    <p class="fs-14">{{ $airline['count'] }} Flights</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                </div>
            </div>
            <!-- /Flight Types -->

            <div class="row">

                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                    <div class="card filter-sidebar mb-4 mb-lg-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Filters</h5>
                            <a href="javascript:void(0);" class="fs-14 link-primary">Reset</a>
                        </div>
                        <div class="card-body p-0">
                            <form action="search.html">
                                <div class="p-3 border-bottom">
                                    <label class="form-label fs-16">Search by Airline Names</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
											<i class="isax isax-search-normal"></i>
										</span>
                                        <input type="text" class="form-control" placeholder="Search by Airline Names">
                                    </div>
                                </div>
                                <div class="accordion accordion-list">
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse" data-bs-target="#accordion-populars" aria-expanded="true" aria-controls="accordion-populars" role="button">
                                                <i class="isax isax-ranking me-2 text-primary"></i>Popular
                                            </div>
                                        </div>
                                        <div id="accordion-populars" class="accordion-collapse collapse show">
                                            <div class="accordion-body pt-2">
                                                <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                    <input class="form-check-input ms-0 mt-0" name="popular1" type="checkbox" id="popular1" checked="">
                                                    <label class="form-check-label ms-2" for="popular1">
                                                        Breakfast Included
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse" data-bs-target="#accordion-popular" aria-expanded="true" aria-controls="accordion-popular" role="button">
                                                <i class="isax isax-coin me-2 text-primary"></i>Price Per Night
                                            </div>
                                        </div>
                                        <div id="accordion-popular" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="filter-range">
                                                    <input type="text" id="range_03">
                                                </div>
                                                <div class="filter-range-amount">
                                                    <p class="fs-14">Range : <span class="text-gray-9 fw-medium">$200 - $5695</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse" data-bs-target="#accordion-flight" aria-expanded="true" aria-controls="accordion-flight" role="button">
                                                <i class="isax isax-airplane4 me-2 text-primary"></i>Airline Names
                                            </div>
                                        </div>
                                        <div id="accordion-flight" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="flight1" type="checkbox" id="flight1">
                                                        <label class="form-check-label ms-2" for="flight1">
                                                            American Airlines
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                                <a href="javascript:void(0);" class="more-view fw-medium fs-14">Show More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse" data-bs-target="#accordion-amenity" aria-expanded="true" aria-controls="accordion-amenity" role="button">
                                                <i class="isax isax-candle me-2 text-primary"></i>Amenities
                                            </div>
                                        </div>
                                        <div id="accordion-amenity" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="amenity1" type="checkbox" id="amenity1">
                                                        <label class="form-check-label ms-2" for="amenity1">
                                                            Free Wifi
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                                <a href="javascript:void(0);" class="more-view fw-medium fs-14">Show More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse" data-bs-target="#accordion-cabin" aria-expanded="true" aria-controls="accordion-cabin" role="button">
                                                <i class="isax isax-home-2 me-2 text-primary"></i>Cabin Class
                                            </div>
                                        </div>
                                        <div id="accordion-cabin" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="cabin1" type="checkbox" id="cabin1">
                                                        <label class="form-check-label ms-2" for="cabin1">
                                                            Economy
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                                <a href="javascript:void(0);" class="more-view fw-medium fs-14">Show More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse" data-bs-target="#accordion-meal" aria-expanded="true" aria-controls="accordion-meal" role="button">
                                                <i class="isax isax-reserve me-2 text-primary"></i>Meal plans available
                                            </div>
                                        </div>
                                        <div id="accordion-meal" class="accordion-collapse collapse show">
                                            <div class="accordion-body pt-2">
                                                <div class="form-checkbox form-check form-check-inline d-inline-flex align-items-center mt-2 me-2">
                                                    <input class="form-check-input ms-0 mt-0" name="meals1" type="checkbox" id="meals1">
                                                    <label class="form-check-label ms-2" for="meals1">
                                                        All inclusive
                                                    </label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse" data-bs-target="#accordion-brand" aria-expanded="true" aria-controls="accordion-brand" role="button">
                                                <i class="isax isax-discount-shape me-2 text-primary"></i>Reviews
                                            </div>
                                        </div>
                                        <div id="accordion-brand" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review1" type="checkbox" id="review1">
                                                    <label class="form-check-label ms-2" for="review1">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">5 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review2" type="checkbox" id="review2">
                                                    <label class="form-check-label ms-2" for="review2">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">4 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review3" type="checkbox" id="review3">
                                                    <label class="form-check-label ms-2" for="review3">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">3 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review4" type="checkbox" id="review4">
                                                    <label class="form-check-label ms-2" for="review4">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">2 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                    <input class="form-check-input ms-0 mt-0" name="review5" type="checkbox" id="review5">
                                                    <label class="form-check-label ms-2" for="review5">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">1 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                <div class="col-xl-9 col-lg-8">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        @if($totalFlightsCount)
                            <h6 class="mb-3">{{ $totalFlightsCount }} Flights Found on Your Search</h6>
                        @endif
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="dropdown mb-3">
                                <a href="javascript:void(0);" class="dropdown-toggle py-2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                                </a>
                                <div class="dropdown-menu dropdown-sm">
                                    <form method="GET" action="{{ route('flights.search') }}">
                                            <h6 class="fw-medium fs-16 mb-3">Sort By</h6>

                                            @php
                                                $sort = session('sort') ?? request('sort');
                                            @endphp

                                            {{-- Preserve search parameters --}}
                                            @foreach(request()->except('sort') as $key => $value)
                                                @if(is_array($value))
                                                    @foreach($value as $subValue)
                                                        <input type="hidden" name="{{ $key }}[]" value="{{ $subValue }}">
                                                    @endforeach
                                                @else
                                                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                                @endif
                                            @endforeach

                                            @foreach([
                                                'recommended' => 'Recommended',
                                                'price_low_high' => 'Price: low to high',
                                                'price_high_low' => 'Price: high to low',
                                                'newest' => 'Newest (latest departure)'
                                            ] as $key => $label)
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="sort" type="radio" id="sort_{{ $key }}" value="{{ $key }}" {{ $sort === $key ? 'checked' : '' }}>
                                                    <label class="form-check-label ms-2" for="sort_{{ $key }}">{{ $label }}</label>
                                                </div>
                                            @endforeach

                                            <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                                <a href="{{ route('flights.search', request()->except('sort')) }}" class="btn btn-light btn-sm me-2">Reset</a>
                                                <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                            </div>
                                        </form>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-info br-10 p-3 pb-2 mb-4">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <p class="fs-14 fw-medium mb-2 d-inline-flex align-items-center"><i class="isax isax-info-circle me-2"></i>Save an average of 15% on thousands of flights when you're signed in</p>
                            <a href="login.html" class="btn btn-white btn-sm mb-2">Sign In</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <!-- Flight Grid -->
                    @foreach (['outboundFlights', 'inboundFlights'] as $direction)

                        @if (isset($flights[$direction]) && count($flights[$direction]))
                            @foreach ($flights[$direction] as $flight)
                            @php
                                $segment = $flight['sg'][0] ?? null;
                                $airline = $segment['al'] ?? [];
                                $origin = $segment['or'] ?? [];
                                $destination = $segment['ds'] ?? [];

                                $departureTime = isset($origin['dT']) ? \Carbon\Carbon::parse($origin['dT'])->format('M d, Y h:i A') : '';
                                $arrivalTime = isset($destination['aT']) ? \Carbon\Carbon::parse($destination['aT'])->format('M d, Y h:i A') : '';

                                $price = $flight['pF'] ?? 'N/A';
                                $seatsLeft = $segment['nOSA'] ?? 0;
                            @endphp

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <div class="img-slider image-slide owl-carousel nav-center">
                                                <div class="slide-images">
                                                    <img src="{{ asset('assets/img/flight/flight-09.jpg') }}" class="img-fluid" alt="img">
                                                </div>
                                                <div class="slide-images">
                                                    <img src="{{ asset('assets/img/flight/flight-05.jpg') }}" class="img-fluid" alt="img">
                                                </div>
                                                <div class="slide-images">
                                                    <img src="{{ asset('assets/img/flight/flight-07.jpg') }}" class="img-fluid" alt="img">
                                                </div>
                                            </div>
                                            <div class="fav-item">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="fav-icon me-2 selected">
                                                        <i class="isax isax-heart5"></i>
                                                    </a>
                                            @if($price == collect($flights)->min('pF'))
                                                <span class="badge bg-indigo">Cheapest</span>
                                            @endif

                                                </div>
                                                <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5</span>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                                <span class="loc-name d-inline-flex align-items-center">
                                                    <i class="isax isax-airplane rotate-45 me-2"></i>{{ $origin['cN'] }}
                                                </span>
                                                <a href="javascript:void(0);" class="arrow-icon flex-shrink-0">
                                                    <i class="isax isax-arrow-2"></i>
                                                </a>
                                                <span class="loc-name d-inline-flex align-items-center">
                                                    <i class="isax isax-airplane rotate-135 me-2"></i>{{ $destination['cN'] }}
                                                </span>
                                            </div>
                                            <h5 class="text-truncate mb-1">
                                                <a href="flight-details.html">{{ $airline['alN'] }} {{ $airline['fN'] }}</a>
                                            </h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="{{ asset('assets/airlines_icons/' . $airline['alC'] . '.png') }}" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">{{ $airline['alN'] }}</p>
                                                <p class="fs-14 mb-0">
                                                    <i class="ti ti-point-filled text-primary me-2"></i>
                                                    {{ $segment['cC'] > 1 ? $segment['cC'] - 1 . '-stop' : 'Non-stop' }}
                                                </p>
                                            </div>
                                            <div class="date-info p-2 mb-3">
                                                <p class="d-flex align-items-center">
                                                    <i class="isax isax-calendar-2 me-2"></i>
                                                    {{ $departureTime }} - {{ $arrivalTime }}
                                                </p>
                                                <p class="d-flex align-items-center">
                                                    <i class="isax isax-clock me-2"></i>
                                                    {{ $segment['dr'] }} min
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h6 class="text-primary">
                                                    <span class="fs-14 fw-normal text-default">From </span>₹{{ number_format($price) }}
                                                </h6>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge {{ $seatsLeft < 10 ? 'bg-danger' : 'bg-outline-success' }} fs-10 fw-medium me-2">
                                                        {{ $seatsLeft > 0 ? $seatsLeft . ' Seats Left' : '0 Seats Left' }}
                                                    </span>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm">
                                                        <img src="{{ asset('assets/img/users/user-08.jpg') }}" class="rounded-circle" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No flights found.</p>
                        @endif
                    @endforeach


                    </div>

                    <!-- Pagination -->
                    <nav class="pagination-nav">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Pagination -->

                </div>

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection