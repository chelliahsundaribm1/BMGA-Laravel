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

            <!-- Flight Search -->
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        <form action="{{ route('flightsearch') }}" method="GET" class="flight-form" id="flight-form">
                            @csrf
                            <input type="hidden" name="directFlight" value="true">

                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="journeyType"
                                            id="oneway" value="1" checked="">
                                        <label class="form-check-label fs-14 ms-2" for="oneway">
                                            Oneway
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="journeyType"
                                            id="roundtrip" value="2">
                                        <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                            Round Trip
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                        <input class="form-check-input mt-0" type="radio" name="journeyType"
                                            id="multiway" value="3">
                                        <label class="form-check-label fs-14 ms-2" for="multiway">
                                            Multi Trip
                                        </label>
                                    </div>
                                </div>
                                <h6 class="fw-medium fs-16 mb-2">Millions of cheap flights. One simple
                                    search</h6>
                            </div>
                            <div class="normal-trip">
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <!-- From Airport Dropdown -->
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control from-input"
                                                    placeholder="Where are you flying from?" readonly>
                                                <p class="fs-12 mb-0 from-country">Select departure
                                                    airport</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control from-search"
                                                            placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i
                                                                class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul class="from-results list-unstyled"></ul>
                                            </div>
                                        </div>
                                        <!-- To Airport Dropdown -->
                                        <div class="form-item dropdown ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <input type="text" class="form-control to-input"
                                                    placeholder="Where are you flying to?" readonly>
                                                <p class="fs-12 mb-0 to-country">Select destination
                                                    airport</p>
                                                <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                </span>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control to-search"
                                                            placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i
                                                                class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul class="to-results list-unstyled"></ul>
                                            </div>
                                        </div>
                                        <input type="hidden" name="origin" class="from-code">
                                        <input type="hidden" name="destination" class="to-code">
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                const fromCode = document.querySelector(".from-code");
                                                const toCode = document.querySelector(".to-code");
                                                const searchBtn = document.querySelector(".search-btn");

                                                function toggleSearchButton() {
                                                    if (fromCode.value.trim() !== "" && toCode.value.trim() !== "") {
                                                        searchBtn.disabled = false;
                                                    } else {
                                                        searchBtn.disabled = true;
                                                    }
                                                }

                                                // Monitor changes (if values are updated via JS/autocomplete)
                                                const observer = new MutationObserver(toggleSearchButton);
                                                observer.observe(fromCode, {
                                                    attributes: true,
                                                    attributeFilter: ['value']
                                                });
                                                observer.observe(toCode, {
                                                    attributes: true,
                                                    attributeFilter: ['value']
                                                });

                                                // Also bind to input events just in case values change through user action
                                                fromCode.addEventListener("input", toggleSearchButton);
                                                toCode.addEventListener("input", toggleSearchButton);

                                                // Initial state
                                                toggleSearchButton();
                                            });
                                        </script>

                                        <!-- Departure and return dates -->
                                        {{-- <div class="form-item">
                                                                <label class="form-label fs-14 text-default mb-1">Departure</label>
                                                                <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                                                <p class="fs-12 mb-0">Monday</p>
                                                            </div>
                                                            <div class="form-item round-drip">
                                                                <label class="form-label fs-14 text-default mb-1">Return</label>
                                                                <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                                                <p class="fs-12 mb-0">Wednesday</p>
                                                            </div> --}}
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" id="preferredDepartureTime"
                                                name="preferredDepartureTime" class="form-control datetimepicker"
                                                value="">
                                            <p class="fs-12 mb-0" id="departureDay"></p>
                                        </div>

                                        <div class="form-item round-drip">
                                            <label class="form-label fs-14 text-default mb-1">Return</label>
                                            <input type="text" id="preferredReturnDepartureTime"
                                                name="preferredReturnDepartureTime" class="form-control datetimepicker"
                                                value="">
                                            <p class="fs-12 mb-0" id="returnDay"></p>
                                        </div>

                                        <script>
                                            // Utility function to format date as dd-mm-yyyy
                                            function formatDate(date) {
                                                return date.toLocaleDateString('en-GB').split('/').join('-');
                                            }

                                            // Utility function to get weekday name
                                            function getWeekday(dateStr) {
                                                const [day, month, year] = dateStr.split('-');
                                                const date = new Date(`${year}-${month}-${day}`);
                                                return date.toLocaleDateString('en-US', {
                                                    weekday: 'long'
                                                });
                                            }

                                            // Set today's date for departure input
                                            const today = new Date();
                                            const formattedToday = formatDate(today);
                                            const departureInput = document.getElementById('preferredDepartureTime');
                                            const departureDay = document.getElementById('departureDay');
                                            departureInput.value = formattedToday;
                                            departureDay.textContent = getWeekday(formattedToday);

                                            // Set return input to null (empty)
                                            const returnInput = document.getElementById('preferredReturnDepartureTime');
                                            const returnDay = document.getElementById('returnDay');
                                            returnInput.value = '';
                                            returnDay.textContent = '';

                                            // Attach date change event
                                            document.querySelectorAll('.datetimepicker').forEach(input => {
                                                input.addEventListener('change', function() {
                                                    const dateVal = this.value;
                                                    if (this.id === 'preferredDepartureTime') {
                                                        departureDay.textContent = getWeekday(dateVal);
                                                    } else if (this.id === 'preferredReturnDepartureTime') {
                                                        returnDay.textContent = getWeekday(dateVal);
                                                    }
                                                });
                                            });
                                        </script>


                                        <!-- Travellers and cabin class Dropdown -->
                                        <div class="form-item dropdown travellers-dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Travellers
                                                    and cabin class</label>
                                                <h5 id="total-travelers" class="traveller-summary">1
                                                    <span class="fw-normal fs-14">Person</span>
                                                </h5>
                                                <p id="traveler-summary" class="fs-12 mb-0 traveller-breakdown">1 Adult,
                                                    Economy</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                <h5 class="mb-3">Select Travelers & Class</h5>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Adults
                                                                    <span class="text-default fw-normal">(12+
                                                                        Yrs)</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <button type="button"
                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                            data-type="minus" data-field="adult">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        <input type="text" name="adultCount"
                                                                            class="input-number adult-count"
                                                                            value="1" min="1" max="9">
                                                                        <button type="button"
                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                            data-type="plus" data-field="adult">
                                                                            <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Children
                                                                    <span class="text-default fw-normal">(2-12
                                                                        Yrs)</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <button type="button"
                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                            data-type="minus" data-field="child">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        <input type="text" name="childCount"
                                                                            class="input-number child-count"
                                                                            value="0" min="0" max="8">
                                                                        <button type="button"
                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                            data-type="plus" data-field="child">
                                                                            <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Infants
                                                                    <span class="text-default fw-normal">(0-2
                                                                        Yrs)</span></label>
                                                                <div class="custom-increments">
                                                                    <div class="input-group">
                                                                        <button type="button"
                                                                            class="quantity-left-minus btn btn-light btn-number"
                                                                            data-type="minus" data-field="infant">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        <input type="text" name="infantCount"
                                                                            class="input-number infant-count"
                                                                            value="0" min="0" max="4">
                                                                        <button type="button"
                                                                            class="quantity-right-plus btn btn-light btn-number"
                                                                            data-type="plus" data-field="infant">
                                                                            <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Cabin Class</h6>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        @forelse($flightclass as $class)
                                                            <div class="form-check me-3 mb-3">
                                                                <input class="form-check-inputs cabin-class-radio"
                                                                    type="radio" name="flightCabinClass"
                                                                    id="{{ Str::slug($class->name) }}"
                                                                    value="{{ $class->id }}"{{ $loop->first ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="{{ Str::slug($class->name) }}">
                                                                    {{ $class->name }}
                                                                </label>
                                                            </div>
                                                        @empty
                                                            <p class="text-muted">No cabin classes
                                                                available.</p>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded"
                                        disabled>Search</button>

                                </div>
                            </div>

                            <div class="multi-trip">
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control from-input"
                                                    placeholder="Where are you flying from?" readonly>
                                                <p class="fs-12 mb-0 from-country">Select departure
                                                    airport</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control from-search"
                                                            placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i
                                                                class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul class="from-results list-unstyled"></ul>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <input type="text" class="form-control to-input"
                                                    placeholder="Where are you flying to?" readonly>
                                                <p class="fs-12 mb-0 to-country">Select destination
                                                    airport</p>
                                                <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                </span>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control to-search"
                                                            placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i
                                                                class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul class="to-results list-unstyled"></ul>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" id="multiPreferredDeparture"
                                                name="multiPreferredDeparture" class="form-control datetimepicker"
                                                value="">
                                            <p class="fs-12 mb-0" id="multidepartureDay"></p>
                                        </div>


                                        <script>
                                            // Utility function to format date as dd-mm-yyyy
                                            function formatDate(date) {
                                                return date.toLocaleDateString('en-GB').split('/').join('-');
                                            }

                                            // Utility function to get weekday name
                                            function getWeekday(dateStr) {
                                                const [day, month, year] = dateStr.split('-');
                                                const date = new Date(`${year}-${month}-${day}`);
                                                return date.toLocaleDateString('en-US', {
                                                    weekday: 'long'
                                                });
                                            }

                                            // Set today's date for departure input
                                            const today = new Date();
                                            const formattedToday = formatDate(today);
                                            const departureInput = document.getElementById('multiPreferredDeparture');
                                            const multidepartureDay = document.getElementById('multidepartureDay');
                                            departureInput.value = formattedToday;
                                            multidepartureDay.textContent = getWeekday(formattedToday);

                                            // Set return input to null (empty)
                                            const returnInput = document.getElementById('preferredReturnDepartureTime');
                                            const returnDay = document.getElementById('returnDay');
                                            returnInput.value = '';
                                            returnDay.textContent = '';

                                            // Attach date change event
                                            document.querySelectorAll('.datetimepicker').forEach(input => {
                                                input.addEventListener('change', function() {
                                                    const dateVal = this.value;
                                                    if (this.id === 'multiPreferredDeparture') {
                                                        multidepartureDay.textContent = getWeekday(dateVal);
                                                    } else if (this.id === 'preferredReturnDepartureTime') {
                                                        returnDay.textContent = getWeekday(dateVal);
                                                    }
                                                });
                                            });
                                        </script>

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
                                        $segments = $flight['sg'] ?? [];
                                        $firstSegment = $segments[0] ?? [];
                                        $lastSegment = end($segments);
                                        $airline = $firstSegment['al'] ?? [];
                                        $origin = $firstSegment['or'] ?? [];
                                        $destination = $lastSegment['ds'] ?? [];

                                        $departureTime = isset($origin['dT'])
                                            ? \Carbon\Carbon::parse($origin['dT'])->format('M d, Y h:i A')
                                            : '';
                                        $arrivalTime = isset($destination['aT'])
                                            ? \Carbon\Carbon::parse($destination['aT'])->format('M d, Y h:i A')
                                            : '';
                                        $departureDateShort = isset($origin['dT'])
                                            ? \Carbon\Carbon::parse($origin['dT'])->format('M d, Y')
                                            : '';
                                        $arrivalDateShort = isset($destination['aT'])
                                            ? \Carbon\Carbon::parse($destination['aT'])->format('M d, Y')
                                            : '';

                                        $price = $flight['fF'] ?? 0;
                                        $formattedPrice = number_format($price);
                                        $currency = $flight['cr'] ?? 'INR';
                                        $seatsLeft = $firstSegment['nOSA'] ?? 0;

                                        $durationMinutes = $firstSegment['dr'] ?? 0;
                                        $durationHours = floor($durationMinutes / 60);
                                        $durationMinutesRemainder = $durationMinutes % 60;
                                        $durationFormatted = "{$durationHours}h {$durationMinutesRemainder}m";

                                        $stopsCount = count($segments) - 1;
                                        $isNonStop = $stopsCount === 0;
                                        $stopCity = !$isNonStop ? $segments[0]['ds']['cN'] ?? '' : '';
                                        $stopDetailText = $isNonStop
                                            ? 'Non-stop'
                                            : "{$stopsCount} stop" . ($stopsCount > 1 ? 's' : '') . "<br>at {$stopCity}";

                                        $isRefundable = $flight['iR'] ?? false;
                                        $baggageAllowance = $firstSegment['bg'] ?? 'N/A';
                                        $cabinBagAllowance = $firstSegment['cBg'] ?? 'N/A';
                                        $remarks = $flight['aR'] ?? null;

                                        $airlineName = $airline['alN'] ?? 'Unknown';
                                        $airlineCode = $airline['alC'] ?? '';
                                        $flightNumber = $airlineName . ' ' . ($airline['fN'] ?? '');

                                        $cheapestPrice = min(array_column($flights[$direction], 'fF'));
                                        $isCheapest = $price === $cheapestPrice;

                                        $fareType = $flight['fareIdentifier']['name'] ?? '';
                                        $fareColor = $flight['fareIdentifier']['colorCode'] ?? '#0077CE';

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
                                                            {!! $stopDetailText !!}
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
                                                        {{ $flightNumber }}
                                                    </a>
                                                </h5>
                                                @if ($fareType)
                                                    <span class="badge me-1"
                                                        style="background-color: {{ $fareColor }}; color: #fff;">
                                                        {{ $fareType }}
                                                    </span>
                                                @endif


                                                <!-- Airline Details -->
                                                <div class="mb-2">
                                                    <div class="d-flex align-items-center mb-1">
                                                        <span class="avatar avatar-sm me-2">
                                                            <img src="{{ asset("assets/airlines_icons/{$airlineCode}.png") }}"
                                                                class="rounded-circle" alt="{{ $airlineName }} icon"
                                                                onerror="this.src='{{ asset('assets/img/default-airline.png') }}'">
                                                        </span>
                                                        <p class="fs-14 mb-0 me-2 fw-medium text-dark">{{ $airlineName }}
                                                        </p>
                                                        <span class="badge bg-light text-dark small">
                                                            {{ $isNonStop ? 'Non-stop' : "{$stopsCount} Stop" . ($stopsCount > 1 ? 's' : '') }}
                                                        </span>
                                                    </div>

                                                    @if (!$isNonStop)
                                                        <div class="dropdown d-flex justify-content-center mt-2">
                                                            <button
                                                                class="btn btn-outline-primary btn-sm dropdown-toggle w-100 d-flex align-items-center justify-content-center"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="isax isax-route-square me-2"></i>
                                                                View Stopover Details
                                                            </button>

                                                            <div class="dropdown-menu p-3"
                                                                style="width: 100%; max-width: 100%;">
                                                                <strong class="d-block mb-2 text-primary">Stopover
                                                                    Details</strong>
                                                                <ul class="mb-0 ps-3">
                                                                    @foreach ($segments as $index => $seg)
                                                                        @if ($index < count($segments) - 1)
                                                                            @php
                                                                                $arrival = $seg['ds'] ?? [];
                                                                                $nextSeg = $segments[$index + 1];
                                                                                $groundTime = $nextSeg['gT'] ?? 0;

                                                                                $stopCity =
                                                                                    $arrival['cN'] ?? 'Unknown City';
                                                                                $stopCountry = $arrival['cnN'] ?? '';
                                                                                $airportName = $arrival['aN'] ?? '';
                                                                                $terminal = $arrival['tr'] ?? 'N/A';

                                                                                $arrivalTime = isset($arrival['aT'])
                                                                                    ? \Carbon\Carbon::parse(
                                                                                        $arrival['aT'],
                                                                                    )->format('M d, Y h:i A')
                                                                                    : 'N/A';
                                                                                $departureTime = isset(
                                                                                    $nextSeg['or']['dT'],
                                                                                )
                                                                                    ? \Carbon\Carbon::parse(
                                                                                        $nextSeg['or']['dT'],
                                                                                    )->format('M d, Y h:i A')
                                                                                    : 'N/A';
                                                                                $airlineNext =
                                                                                    $nextSeg['al']['alN'] ??
                                                                                    'Unknown Airline';
                                                                            @endphp

                                                                            <li class="mb-2">
                                                                                <strong>Stop {{ $index + 1 }}:</strong>
                                                                                {{ $stopCity }},
                                                                                {{ $stopCountry }}<br>
                                                                                <strong>Airport:</strong>
                                                                                {{ $airportName }} (Terminal
                                                                                {{ $terminal }})<br>
                                                                                <strong>Arrival:</strong>
                                                                                {{ $arrivalTime }}<br>
                                                                                <strong>Departure:</strong>
                                                                                {{ $departureTime }}<br>
                                                                                <strong>Layover Duration:</strong>
                                                                                {{ floor($groundTime / 60) }}h
                                                                                {{ $groundTime % 60 }}m<br>
                                                                                <strong>Next Flight Operated by:</strong>
                                                                                {{ $airlineNext }}
                                                                            </li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endif

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
                                                        <span class="fs-14 fw-normal text-default">From</span>
                                                        {{ $currency }} {{ $formattedPrice }}
                                                        <small class="text-muted">({{ $departureDateShort }} -
                                                            {{ $arrivalDateShort }})</small>
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

                    {{-- <!-- Pagination -->
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
                    <!-- /Pagination --> --}}

                </div>

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Debounce function to limit API calls
            function debounce(func, wait) {
                let timeout;
                return function() {
                    const context = this,
                        args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(() => {
                        func.apply(context, args);
                    }, wait);
                };
            }

            // Generic function to set up the airport search for both "from" and "to" fields
            function setupAirportSearch(type, multi = false) {
                const prefix = multi ? `${type}-multi` : type;
                const dropdown = $(`.${prefix}-dropdown`);
                const searchInput = $(`.${prefix}-search`);
                const resultList = $(`.${prefix}-results`);
                const displayInput = $(`.${prefix}-input`);
                const countryDisplay = $(`.${prefix}-country`);

                // Perform airport search using debounce to limit API calls
                const searchAirports = debounce(function(query) {
                    if (query.length < 2) {
                        resultList.empty();
                        return;
                    }

                    $.ajax({
                        url: "/flights/airports/search",
                        method: "GET",
                        data: {
                            q: query
                        },
                        success: function(data) {
                            displayResults(data);
                        },
                        error: function(xhr, status, error) {
                            console.error("Error fetching airport data:", error);
                            resultList.html(
                                '<li class="border-bottom px-3 py-2 text-muted">Error loading results</li>'
                            );
                        }
                    });
                }, 300);

                // Display results from the airport search
                function displayResults(data) {
                    resultList.empty();

                    if (!data || data.length === 0) {
                        resultList.append('<li class="border-bottom px-3 py-2 text-muted">No results found</li>');
                        return;
                    }

                    data.forEach(function(airport) {
                        const listItem = $(`
                    <li class="border-bottom">
                        <a class="dropdown-item airport-option d-block px-3 py-2" href="javascript:void(0);" 
                           data-label="${airport.airport_name} (${airport.airport_code || airport.airport_name})"
                           data-country="${airport.country_name}">
                            <h6 class="fs-16 fw-medium mb-0">${airport.airport_name} (${airport.airport_code || airport.airport_name})</h6>
                            <p class="mb-0 text-muted">${airport.city_name}, ${airport.country_name}</p>
                        </a>
                    </li>
                `);
                        resultList.append(listItem);
                    });
                }

                // Search input event listener
                searchInput.on('input', function() {
                    searchAirports($(this).val());
                });

                // Handle option selection
                resultList.on('click', '.airport-option', function() {
                    const label = $(this).data('label');
                    const country = $(this).data('country');
                    const code = label.match(/\((.*?)\)/)?.[1] || ''; // Extract code from label

                    displayInput.val(label);
                    countryDisplay.text(country);

                    // Set hidden input value
                    if (type === 'from') {
                        $('.from-code').val(code);
                    } else if (type === 'to') {
                        $('.to-code').val(code);
                    }

                    // Close the dropdown
                    dropdown.find('.dropdown-menu').removeClass('show');
                });

                // Initialize display values
                displayInput.val('');
                countryDisplay.text('Country');

                // Add event listener for dropdown shown event to autofocus search input
                $(`.form-item.dropdown:has(.${prefix}-input)`).on('shown.bs.dropdown', function() {
                    $(`.${prefix}-search`).focus();
                });
            }

            // Setup for single trip search
            setupAirportSearch('from');
            setupAirportSearch('to');

            // Setup for multi-trip search (if necessary)
            setupAirportSearch('from', true);
            setupAirportSearch('to', true);

            // Swap functionality
            $('.way-icon').click(function(e) {
                e.stopPropagation(); // Prevent dropdown from toggling
                swapAirportInputs('from', 'to');
            });

            // Swap functionality for multi-trip
            $('.way-icon-multi').click(function(e) {
                e.stopPropagation(); // Prevent dropdown from toggling
                swapAirportInputs('from-multi', 'to-multi');
            });

            // Swap airport inputs helper function
            function swapAirportInputs(fromType, toType) {
                const fromInput = $(`.${fromType}-input`).val();
                const fromCountry = $(`.${fromType}-country`).text();
                const toInput = $(`.${toType}-input`).val();
                const toCountry = $(`.${toType}-country`).text();
                const fromCode = $('.from-code').val();
                const toCode = $('.to-code').val();

                // Swap display values
                $(`.${fromType}-input`).val(toInput);
                $(`.${fromType}-country`).text(toCountry);
                $(`.${toType}-input`).val(fromInput);
                $(`.${toType}-country`).text(fromCountry);

                // Swap hidden code values as well
                $('.from-code').val(toCode);
                $('.to-code').val(fromCode);
            }
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const totalTravelersEl = document.getElementById('total-travelers');
            const travelerSummaryEl = document.getElementById('traveler-summary');
            const inputFields = {
                adult: document.querySelector('.adult-count'),
                child: document.querySelector('.child-count'),
                infant: document.querySelector('.infant-count')
            };
            const cabinClassRadios = document.querySelectorAll('input[name="flightCabinClass"]');
            const incrementButtons = document.querySelectorAll('.quantity-left-minus, .quantity-right-plus');

            // Helper functions
            function getTravelerCounts() {
                return {
                    adults: parseInt(inputFields.adult.value) || 0,
                    children: parseInt(inputFields.child.value) || 0,
                    infants: parseInt(inputFields.infant.value) || 0
                };
            }

            function getSelectedCabinClass() {
                const selectedRadio = Array.from(cabinClassRadios).find(radio => radio.checked);
                return selectedRadio ? selectedRadio.nextElementSibling.innerText : 'Economy';
            }

            function formatTravelerSummary(counts, cabinClass) {
                const {
                    adults,
                    children,
                    infants
                } = counts;
                const parts = [];

                if (adults > 0) parts.push(`${adults} Adult${adults > 1 ? 's' : ''}`);
                if (children > 0) parts.push(`${children} Child${children > 1 ? 'ren' : ''}`);
                if (infants > 0) parts.push(`${infants} Infant${infants > 1 ? 's' : ''}`);

                parts.push(cabinClass);
                return parts.join(', ');
            }

            function updateTravelerSummary() {
                const counts = getTravelerCounts();
                const total = counts.adults + counts.children + counts.infants;
                const cabinClass = getSelectedCabinClass();

                // Update UI
                totalTravelersEl.innerHTML =
                    `${total} <span class="fw-normal fs-14">${total === 1 ? 'Person' : 'Persons'}</span>`;
                travelerSummaryEl.textContent = formatTravelerSummary(counts, cabinClass);
            }

            // Event Listeners
            function handleIncrementDecrement() {
                setTimeout(updateTravelerSummary, 10); // Small delay to ensure input value is updated
            }

            // Set up event listeners
            Object.values(inputFields).forEach(input => {
                input.addEventListener('input', updateTravelerSummary);
            });

            cabinClassRadios.forEach(radio => {
                radio.addEventListener('change', updateTravelerSummary);
            });

            incrementButtons.forEach(button => {
                button.addEventListener('click', handleIncrementDecrement);
            });

            // Initial update
            updateTravelerSummary();
        });
    </script>
    <script>
        function convertToIsoString(dateStr) {
            // Assumes input in dd-mm-yyyy
            const [day, month, year] = dateStr.split('-');
            const date = new Date(`${year}-${month}-${day}T00:00:00`);
            return date.toISOString().split('.')[0]; // removes milliseconds
        }

        // Before form submission, format all relevant fields to ISO string
        document.querySelector('form').addEventListener('submit', function(e) {
            const normalDeparture = document.getElementById('preferredDepartureTime');
            const returnDeparture = document.getElementById('preferredReturnDepartureTime');
            const multiDeparture = document.getElementById('multiPreferredDeparture');

            if (normalDeparture && normalDeparture.value && !normalDeparture.value.includes('T')) {
                normalDeparture.value = convertToIsoString(normalDeparture.value);
            }

            if (returnDeparture && returnDeparture.value && !returnDeparture.value.includes('T')) {
                returnDeparture.value = convertToIsoString(returnDeparture.value);
            }

            if (multiDeparture && multiDeparture.value && !multiDeparture.value.includes('T')) {
                multiDeparture.value = convertToIsoString(multiDeparture.value);
            }
        });
    </script>


    @include('preloaders.preflight', ['departureCode' => '---', 'arrivalCode' => '---'])
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('flight-form');
            if (!form) return;

            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Stop default submit temporarily

                const originCode = document.querySelector('.from-code')?.value || '---';
                const destinationCode = document.querySelector('.to-code')?.value || '---';

                // Update preloader values
                document.querySelector('.departure_city').innerText = originCode;
                document.querySelector('.arrival_city').innerText = destinationCode;

                // Show the preloader
                const preloader = document.querySelector('.flight-preloader');
                if (preloader) {
                    preloader.style.display = 'flex';
                }

                setTimeout(() => form.submit(), 100);
            });
        });
    </script>
@endsection
