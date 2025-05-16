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

            @if ($error)
                <div class="alert alert-warning">
                    {{ is_array($error) ? $error['errorMessage'] ?? 'Something went wrong' : $error }}
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
                                        <input class="form-check-input mt-0" type="radio" name="Radio" id="oneway"
                                            value="oneway" checked="">
                                        <label class="form-check-label fs-14 ms-2" for="oneway">
                                            Oneway
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="Radio" id="roundtrip"
                                            value="roundtrip">
                                        <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                            Round Trip
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="Radio" id="multiway"
                                            value="multiway">
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
                                        <div class="form-item dropdown ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
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
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Travellers and cabin
                                                    class</label>
                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                <p class="fs-12 mb-0">1 Adult, Economy</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                <h5 class="mb-3">Select Travelers & Class</h5>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Adults <span
                                                                        class="text-default fw-normal">( 12+ Yrs
                                                                        )</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button"
                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                data-type="minus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-minus"></i></span>
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
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Childrens <span
                                                                        class="text-default fw-normal">( 2-12 Yrs
                                                                        )</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button"
                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                data-type="minus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-minus"></i></span>
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
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Infants<span
                                                                        class="text-default fw-normal">( 0-12 Yrs
                                                                        )</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button"
                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                data-type="minus" data-field="">
                                                                                <span><i
                                                                                        class="isax isax-minus"></i></span>
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
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                value="Economy" name="cabin-class" id="economy"
                                                                checked="">
                                                            <label class="form-check-label" for="economy">
                                                                Economy
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                value="Economy" name="cabin-class" id="premium-economy">
                                                            <label class="form-check-label" for="premium-economy">
                                                                Premium Economy
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                value="Business" name="cabin-class" id="business">
                                                            <label class="form-check-label" for="business">
                                                                Business
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                value="First Class" name="cabin-class" id="first-class">
                                                            <label class="form-check-label" for="first-class">
                                                                First Class
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-light btn-sm me-2">Cancel</a>
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
                                        <div class="form-item dropdown ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
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
                    <h5 class="mb-2">These airlines have the most flights</h5>
                </div>
                <div class="row"
                    style="display: flex; flex-wrap: nowrap; gap: 15px; overflow-x: auto; -webkit-overflow-scrolling: touch; scrollbar-width: none; ms-overflow-style: none;">
                    @foreach ($airlineFlightCounts as $airline)
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="d-flex align-items-center hotel-type-item mb-3">
                                <div class="avatar avatar-lg">
                                    {{-- Optional logo matching --}}

                                    <img src="{{ asset('assets/airlines_icons/' . $airline['code'] . '.png') }}"
                                        class="rounded-circle" alt="{{ $airline['name'] }}">
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
            <!-- /Flight Types -->

            <div class="row">

                <!-- Sidebar -->
                @include('filters.flightfilter')
                <!-- /Sidebar -->

                <div class="col-xl-9 col-lg-8">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        @if ($totalFlightsCount)
                            <h6 class="mb-3">{{ $totalFlightsCount }} Flights Found on Your Search</h6>
                        @endif
                        <!-- Sort By -->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="dropdown mb-3">
                                <a href="javascript:void(0);" class="dropdown-toggle py-2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="fw-medium text-gray-9">Sort By : </span>Recommended
                                </a>
                                <div class="dropdown-menu dropdown-sm">
                                    <form method="GET" action="{{ route('flights.search') }}">
                                        <h6 class="fw-medium fs-16 mb-3">Sort By</h6>

                                        @php
                                            $sort = session('sort') ?? request('sort');
                                        @endphp

                                        {{-- Preserve search parameters --}}
                                        @foreach (request()->except('sort') as $key => $value)
                                            @if (is_array($value))
                                                @foreach ($value as $subValue)
                                                    <input type="hidden" name="{{ $key }}[]"
                                                        value="{{ $subValue }}">
                                                @endforeach
                                            @else
                                                <input type="hidden" name="{{ $key }}"
                                                    value="{{ $value }}">
                                            @endif
                                        @endforeach

                                        @foreach ([
            'recommended' => 'Recommended',
            'price_low_high' => 'Price: low to high',
            'price_high_low' => 'Price: high to low',
            'newest' => 'Newest (latest departure)',
        ] as $key => $label)
                                            <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                <input class="form-check-input ms-0 mt-0" name="sort" type="radio"
                                                    id="sort_{{ $key }}" value="{{ $key }}"
                                                    {{ $sort === $key ? 'checked' : '' }}>
                                                <label class="form-check-label ms-2"
                                                    for="sort_{{ $key }}">{{ $label }}</label>
                                            </div>
                                        @endforeach

                                        <div class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                            <a href="{{ route('flights.search', request()->except('sort')) }}"
                                                class="btn btn-light btn-sm me-2">Reset</a>
                                            <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-info br-10 p-3 pb-2 mb-4">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <p class="fs-14 fw-medium mb-2 d-inline-flex align-items-center"><i
                                    class="isax isax-info-circle me-2"></i>Save an average of 15% on thousands of flights
                                when you're signed in</p>
                            <a href="login.html" class="btn btn-white btn-sm mb-2">Sign In</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach (['outboundFlights', 'inboundFlights'] as $direction)
                            @if (!empty($flights[$direction]))
                                @foreach ($flights[$direction] as $flight)
                                    @php
                                        // Extract flight data
                                        $segment = $flight['sg'][0] ?? [];
                                        $airline = $segment['al'] ?? [];
                                        $origin = $segment['or'] ?? [];
                                        $destination = $segment['ds'] ?? [];

                                        // Format times
                                        $departureTime = isset($origin['dT'])
                                            ? \Carbon\Carbon::parse($origin['dT'])->format('M d, Y h:i A')
                                            : '';
                                        $arrivalTime = isset($destination['aT'])
                                            ? \Carbon\Carbon::parse($destination['aT'])->format('M d, Y h:i A')
                                            : '';

                                        // Pricing and availability
                                        $price = $flight['pF'] ?? 0;
                                        $formattedPrice = number_format($price);
                                        $currency = $flight['cr'] ?? 'N/A';
                                        $seatsLeft = $segment['nOSA'] ?? 0;

                                        // Flight duration
                                        $durationMinutes = $segment['dr'] ?? 0;
                                        $durationHours = floor($durationMinutes / 60);
                                        $durationMinutesRemainder = $durationMinutes % 60;
                                        $durationFormatted = "{$durationHours}h {$durationMinutesRemainder}m";

                                        // Flight details
                                        $stopsCount = $segment['sC'] ?? 0;
                                        $isNonStop = $stopsCount === 0;
                                        $isRefundable = $flight['iR'] ?? false;
                                        $baggageAllowance = $segment['bg'] ?? 'N/A';
                                        $cabinBagAllowance = $segment['cBg'] ?? 'N/A';
                                        $remarks = $flight['aR'] ?? null;

                                        // Airline info
                                        $airlineName = $airline['alN'] ?? 'Unknown';
                                        $airlineCode = $airline['alC'] ?? '';
                                        $flightNumber = ($airline['fC'] ?? '') . ' ' . ($airline['fN'] ?? '');

                                        // Determine if this is the cheapest flight
                                        $isCheapest = $price === min(array_column($flights[$direction], 'pF'));

                                    @endphp

                                    <div class="col-xxl-4 col-md-6 d-flex">
                                        <div class="place-item mb-4 flex-fill">
                                            <!-- Flight Images -->
                                            <div class="place-img">
                                                <div class="img-slider image-slide owl-carousel nav-center">
                                                    @foreach ([9, 5, 7] as $imgNum)
                                                        <div class="slide-images">
                                                            <a
                                                                href="{{ route('flights.view', ['traceId' => $traceId, 'resultIndex' => $flight['rI']]) }}">
                                                                <img src="{{ asset("assets/img/flight/flight-0{$imgNum}.jpg") }}"
                                                                    class="img-fluid" alt="Flight image">
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="fav-item">
                                                    <div class="d-flex align-items-center">
                                                        <a href="javascript:void(0);" class="fav-icon me-2 selected">
                                                            <i class="isax isax-heart5"></i>
                                                        </a>
                                                        @if ($isCheapest)
                                                            <span class="badge bg-indigo">Cheapest</span>
                                                        @endif
                                                    </div>
                                                    <span
                                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5</span>
                                                </div>
                                            </div>

                                            <!-- Flight Content -->
                                            <div class="place-content">
                                                <!-- Route Info -->
                                                <div
                                                    class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                                    <span class="loc-name d-inline-flex align-items-center">
                                                        <i class="isax isax-airplane rotate-45 me-2"></i>
                                                        {{ $origin['cN'] ?? 'Unknown' }}
                                                    </span>
                                                    <a href="javascript:void(0);" class="arrow-icon flex-shrink-0">
                                                        <i class="isax isax-arrow-2"></i>
                                                    </a>
                                                    <span class="loc-name d-inline-flex align-items-center">
                                                        <i class="isax isax-airplane rotate-135 me-2"></i>
                                                        {{ $destination['cN'] ?? 'Unknown' }}
                                                    </span>
                                                </div>

                                                <!-- Schedule Info -->
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="d-flex flex-column text-center">
                                                        <span
                                                            class="fw-medium text-dark fs-14">{{ $departureTime }}</span>
                                                        <small class="text-muted">{{ $origin['aC'] ?? '' }}</small>
                                                    </div>

                                                    <div class="d-flex flex-column align-items-center px-2">
                                                        <span class="text-muted small">{{ $durationFormatted }}</span>
                                                        <div class="border-top w-100 my-1"></div>
                                                        <span class="badge bg-light text-dark small">
                                                            {{ $isNonStop ? 'Non-stop' : $stopsCount . ' Stop' . ($stopsCount > 1 ? 's' : '') }}
                                                        </span>
                                                    </div>

                                                    <div class="d-flex flex-column text-center">
                                                        <span class="fw-medium text-dark fs-14">{{ $arrivalTime }}</span>
                                                        <small class="text-muted">{{ $destination['aC'] ?? '' }}</small>
                                                    </div>
                                                </div>

                                                <!-- Airline Info -->
                                                <h5 class="text-truncate mb-1">
                                                    <a href="flight-details.html">
                                                        {{ $airlineName }} {{ $flightNumber }}
                                                    </a>
                                                </h5>

                                                @if ($remarks)
                                                    <marquee class="mb-0 text-muted">{{ $remarks }}</marquee>
                                                @endif

                                                <!-- Airline Details -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="avatar avatar-sm me-2">
                                                        <img src="{{ asset("assets/airlines_icons/{$airlineCode}.png") }}"
                                                            class="rounded-circle" alt="{{ $airlineName }} icon"
                                                            onerror="this.src='{{ asset('assets/img/default-airline.png') }}'">
                                                    </span>
                                                    <p class="fs-14 mb-0 me-2">{{ $airlineName }}</p>
                                                    <p class="fs-14 mb-0">
                                                        <i class="ti ti-point-filled text-primary me-2"></i>
                                                        <a href="javascript:void(0);" data-bs-toggle="collapse"
                                                            data-bs-target="#stopDetail-{{ $flight['rI'] }}">
                                                            {{ $isNonStop ? 'Non-stop' : "{$stopsCount} Stop(s)" }}
                                                        </a>
                                                        @if (!$isNonStop)
                                                            <div class="collapse mb-2"
                                                                id="stopDetail-{{ $flight['rI'] }}">
                                                                <div class="p-2 border rounded bg-light">
                                                                    <strong>Stopover Details:</strong>
                                                                    <p class="mb-1">
                                                                        <strong>Point:</strong>
                                                                        {{ $segment['sP'] ?? 'N/A' }}
                                                                    </p>
                                                                    <p class="mb-0">
                                                                        <strong>Duration:</strong>
                                                                        {{ $segment['sD'] ?? 0 }} mins
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </p>
                                                </div>



                                                <!-- Flight Features -->
                                                <div class="dropdown d-flex justify-content-center">
                                                    <button
                                                        class="btn btn-primary btn-sm dropdown-toggle d-flex align-items-center"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                                        style="width: 100%;">
                                                        <i class="isax isax-info-circle me-2"></i>
                                                        Additional Details
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <p class="dropdown-item-text">
                                                                <i class="isax isax-calendar-2 me-2"></i>
                                                                Checked Baggage: {{ $baggageAllowance }}
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item-text">
                                                                <i class="isax isax-bag me-2"></i>
                                                                Cabin Baggage: {{ $cabinBagAllowance }}
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="dropdown-item-text">
                                                                <i class="isax isax-refresh me-2"></i>
                                                                Refundable: {{ $isRefundable ? 'Yes' : 'No' }}
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- Price and Booking -->
                                                <div
                                                    class="d-flex align-items-center justify-content-between border-top pt-3">
                                                    <h6 class="text-primary">
                                                        <span class="fs-14 fw-normal text-default">From </span>
                                                        {{ $currency }} {{ $formattedPrice }}
                                                    </h6>
                                                    <div class="d-flex align-items-center">
                                                        <span
                                                            class="badge {{ $seatsLeft > 10 ? 'bg-outline-success' : ($seatsLeft > 0 ? 'bg-warning' : 'bg-danger') }} fs-10 fw-medium me-2">
                                                            {{ $seatsLeft > 0 ? "{$seatsLeft} Seats Left" : 'Sold Out' }}
                                                        </span>
                                                        <a href="javascript:void(0);" class="avatar avatar-sm">
                                                            <img src="{{ asset('assets/seat.png') }}"
                                                                class="rounded-circle" alt="Booking agent">
                                                        </a>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="alert alert-info">No {{ str_replace('Flights', '', $direction) }} flights
                                        found.</div>
                                </div>
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
