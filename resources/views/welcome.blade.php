@extends('layouts.app')

@section('content')


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="banner-slider banner-sec owl-carousel">
            <div class="slider-img">
                <img src="assets/img/banner/banner-01.jpg" alt="Img">
            </div>
            <div class="slider-img">
                <img src="assets/img/banner/banner-02.jpg" alt="Img">
            </div>
            <div class="slider-img">
                <img src="assets/img/banner/banner-03.jpg" alt="Img">
            </div>
            <div class="slider-img">
                <img src="assets/img/banner/banner-04.jpg" alt="Img">
            </div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="row align-items-center">
                    <div class="col-md-12 mx-auto wow fadeInUp" data-wow-delay="0.3s">
                        <div class="banner-content mx-auto">
                            <h1 class="text-white display-5 mb-2">Get Closer to the Dream: <span>Your Tour</span> Essentials
                                Await</h1>
                            <h6 class="text-light mx-auto">Your ultimate destination for all things help you celebrate &
                                remember tour experience.</h6>
                        </div>
                        <div class="banner-form card mb-0">
                            <div class="card-header">
                                <ul class="nav">
                                    <li>
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#flight">
                                            <i class="isax isax-airplane5 me-2"></i>Flights
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#Hotels">
                                            <i class="isax isax-buildings5 me-2"></i>Hotels
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#Cars">
                                            <i class="isax isax-car5 me-2"></i>Cars
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#Cruise">
                                            <i class="isax isax-ship5 me-2"></i>Cruise
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#Tour">
                                            <i class="isax isax-camera5 me-2"></i>Tour
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="flight">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul class="mb-0">
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <form action="{{ route('flightsearch') }}" method="GET" class="flight-form" id="flight-form">
                                                @csrf
                                                <input type="hidden" name="directFlight" value="true">

                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="journeyType" id="oneway" value="1"
                                                                checked="">
                                                            <label class="form-check-label fs-14 ms-2" for="oneway">
                                                                Oneway
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="journeyType" id="roundtrip" value="2">
                                                            <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                                                Round Trip
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio"
                                                                name="journeyType" id="multiway" value="3">
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
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">From</label>
                                                                    <input type="text" class="form-control from-input"
                                                                        placeholder="Where are you flying from?" readonly>
                                                                    <p class="fs-12 mb-0 from-country">Select departure
                                                                        airport</p>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text"
                                                                                class="form-control from-search"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="from-results list-unstyled"></ul>
                                                                </div>
                                                            </div>
                                                            <!-- To Airport Dropdown -->
                                                            <div class="form-item dropdown ps-2 ps-sm-3">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">To</label>
                                                                    <input type="text" class="form-control to-input"
                                                                        placeholder="Where are you flying to?" readonly>
                                                                    <p class="fs-12 mb-0 to-country">Select destination
                                                                        airport</p>
                                                                    <span
                                                                        class="way-icon badge badge-primary rounded-pill translate-middle">
                                                                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text"
                                                                                class="form-control to-search"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="to-results list-unstyled"></ul>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="origin" class="from-code">
                                                            <input type="hidden" name="destination" class="to-code">
                                                            <script>
                                                            document.addEventListener("DOMContentLoaded", function () {
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
                                                                observer.observe(fromCode, { attributes: true, attributeFilter: ['value'] });
                                                                observer.observe(toCode, { attributes: true, attributeFilter: ['value'] });

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
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Departure</label>
                                                                <input type="text" id="preferredDepartureTime"
                                                                    name="preferredDepartureTime"
                                                                    class="form-control datetimepicker" value="">
                                                                <p class="fs-12 mb-0" id="departureDay"></p>
                                                            </div>

                                                            <div class="form-item round-drip">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Return</label>
                                                                <input type="text" id="preferredReturnDepartureTime"
                                                                    name="preferredReturnDepartureTime"
                                                                    class="form-control datetimepicker" value="">
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
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">Travellers
                                                                        and cabin class</label>
                                                                    <h5 id="total-travelers" class="traveller-summary">1
                                                                        <span class="fw-normal fs-14">Person</span></h5>
                                                                    <p id="traveler-summary"
                                                                        class="fs-12 mb-0 traveller-breakdown">1 Adult,
                                                                        Economy</p>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                    <h5 class="mb-3">Select Travelers & Class</h5>
                                                                    <div class="mb-3 border br-10 info-item pb-1">
                                                                        <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        class="form-label text-gray-9 mb-2">Adults
                                                                                        <span
                                                                                            class="text-default fw-normal">(12+
                                                                                            Yrs)</span></label>
                                                                                    <div class="custom-increments">
                                                                                        <div class="input-group">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="adult">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                            <input type="text"
                                                                                                name="adultCount"
                                                                                                class="input-number adult-count"
                                                                                                value="1"
                                                                                                min="1"
                                                                                                max="9">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="adult">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        class="form-label text-gray-9 mb-2">Children
                                                                                        <span
                                                                                            class="text-default fw-normal">(2-12
                                                                                            Yrs)</span></label>
                                                                                    <div class="custom-increments">
                                                                                        <div class="input-group">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="child">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                            <input type="text"
                                                                                                name="childCount"
                                                                                                class="input-number child-count"
                                                                                                value="0"
                                                                                                min="0"
                                                                                                max="8">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="child">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="mb-3">
                                                                                    <label
                                                                                        class="form-label text-gray-9 mb-2">Infants
                                                                                        <span
                                                                                            class="text-default fw-normal">(0-2
                                                                                            Yrs)</span></label>
                                                                                    <div class="custom-increments">
                                                                                        <div class="input-group">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="infant">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                            <input type="text"
                                                                                                name="infantCount"
                                                                                                class="input-number infant-count"
                                                                                                value="0"
                                                                                                min="0"
                                                                                                max="4">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="infant">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
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
                                                                                    <input
                                                                                        class="form-check-inputs cabin-class-radio"
                                                                                        type="radio"
                                                                                        name="flightCabinClass"
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
                                                        <button type="submit" class="btn btn-primary search-btn rounded" disabled>Search</button>

                                                    </div>
                                                </div>

                                                <div class="multi-trip">
                                                    <div class="d-lg-flex">
                                                        <div class="d-flex  form-info">
                                                            <div class="form-item dropdown">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">From</label>
                                                                    <input type="text" class="form-control from-input"
                                                                        placeholder="Where are you flying from?" readonly>
                                                                    <p class="fs-12 mb-0 from-country">Select departure
                                                                        airport</p>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text"
                                                                                class="form-control from-search"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="from-results list-unstyled"></ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item dropdown ps-2 ps-sm-3">
                                                                <div data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside" aria-expanded="false"
                                                                    role="menu">
                                                                    <label
                                                                        class="form-label fs-14 text-default mb-1">To</label>
                                                                    <input type="text" class="form-control to-input"
                                                                        placeholder="Where are you flying to?" readonly>
                                                                    <p class="fs-12 mb-0 to-country">Select destination
                                                                        airport</p>
                                                                    <span
                                                                        class="way-icon badge badge-primary rounded-pill translate-middle">
                                                                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-md p-0">
                                                                    <div class="input-search p-3 border-bottom">
                                                                        <div class="input-group">
                                                                            <input type="text"
                                                                                class="form-control to-search"
                                                                                placeholder="Search Location">
                                                                            <span
                                                                                class="input-group-text px-2 border-start-0"><i
                                                                                    class="isax isax-search-normal"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="to-results list-unstyled"></ul>
                                                                </div>
                                                            </div>
                                                            <div class="form-item">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Departure</label>
                                                                <input type="text" id="multiPreferredDeparture"
                                                                    name="multiPreferredDeparture"
                                                                    class="form-control datetimepicker" value="">
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
                                        <div class="tab-pane fade" id="Hotels">
                                            <form action="hotel-grid.html">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h6 class="fw-medium fs-16 mb-2">Book Hotel - Villas, Apartments &
                                                        more.</h6>
                                                </div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">City,
                                                                    Property name or Location</label>
                                                                <input type="text" class="form-control"
                                                                    value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Search for City, Property name or Location">
                                                                        <span
                                                                            class="input-group-text px-2 border-start-0"><i
                                                                                class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">USA</h6>
                                                                            <p>2000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Japan</h6>
                                                                            <p>3000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Singapore</h6>
                                                                            <p>8000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Russia</h6>
                                                                            <p>8000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Germany</h6>
                                                                            <p>2000 Properties</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Check
                                                                In</label>
                                                            <input type="text" class="form-control datetimepicker"
                                                                value="21-10-2025">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Check
                                                                Out</label>
                                                            <input type="text" class="form-control datetimepicker"
                                                                value="21-10-2025">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label
                                                                    class="form-label fs-14 text-default mb-1">Guests</label>
                                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                                <p class="fs-12 mb-0">4 Adult, 2 Rooms</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <h5 class="mb-3">Select Travelers & Class</h5>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Rooms</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="01">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Adults</label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="01">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Children
                                                                                    <span class="text-default fw-normal">(
                                                                                        2-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="01">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label
                                                                                    class="form-label text-gray-9 mb-2">Infants
                                                                                    <span class="text-default fw-normal">(
                                                                                        0-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
                                                                                    <div class="input-group">
                                                                                        <span
                                                                                            class="input-group-btn float-start">
                                                                                            <button type="button"
                                                                                                class="quantity-left-minus btn btn-light btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-minus"></i></span>
                                                                                            </button>
                                                                                        </span>
                                                                                        <input type="text"
                                                                                            name="quantity"
                                                                                            class=" input-number"
                                                                                            value="01">
                                                                                        <span
                                                                                            class="input-group-btn float-end">
                                                                                            <button type="button"
                                                                                                class="quantity-right-plus btn btn-light btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="">
                                                                                                <span><i
                                                                                                        class="isax isax-add"></i></span>
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
                                                                                name="room" id="room1"
                                                                                checked="">
                                                                            <label class="form-check-label"
                                                                                for="room1">
                                                                                Single
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room2">
                                                                            <label class="form-check-label"
                                                                                for="room2">
                                                                                Double
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room3">
                                                                            <label class="form-check-label"
                                                                                for="room3">
                                                                                Delux
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="room" id="room4">
                                                                            <label class="form-check-label"
                                                                                for="room4">
                                                                                Suite
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <h6 class="fs-16 fw-medium mb-2">Property Type</h6>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property1"
                                                                                checked="">
                                                                            <label class="form-check-label"
                                                                                for="property1">
                                                                                Villa
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property2">
                                                                            <label class="form-check-label"
                                                                                for="property2">
                                                                                Condo
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property3">
                                                                            <label class="form-check-label"
                                                                                for="property3">
                                                                                Cabin
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="property" id="property4">
                                                                            <label class="form-check-label"
                                                                                for="property4">
                                                                                Apartments
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn btn-light btn-sm me-2">Cancel</a>
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-sm">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                                aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Price per
                                                                    Night</label>
                                                                <input type="text" class="form-control"
                                                                    value="$1000 - $15000">
                                                                <p class="fs-12 mb-0">20 Offers Available</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">$500 - $2000</h6>
                                                                            <p>Upto 65% offers</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Upto 65% offers
                                                                            </h6>
                                                                            <p>Upto 40% offers</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">$5000 - $8000</h6>
                                                                            <p>Upto 35% offers</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">$9000 - $11000</h6>
                                                                            <p>Upto 20% offers</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">$11000 - $15000
                                                                            </h6>
                                                                            <p>Upto 10% offers</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="Cars">
                                            <div class="text-center py-5">
                                                <h3 class="text-muted">Cars Search - Coming Soon</h3>
                                                <p class="text-secondary col-md-6 mx-auto">We are working hard to bring you
                                                    the best cars booking options. Stay tuned!</p>
                                            </div>
                                            {{-- <form action="car-grid.html">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio" name="drop" id="same-drop" value="same-drop" checked="">
                                                            <label class="form-check-label fs-14 ms-2" for="same-drop">
                                                                Same drop-off
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio" name="drop" id="different-drop" value="different-drop">
                                                            <label class="form-check-label fs-14 ms-2" for="different-drop">
                                                                Different Drop off
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio" name="drop" id="airport" value="airport">
                                                            <label class="form-check-label fs-14 ms-2" for="airport">
                                                                Airport
                                                            </label>
                                                        </div>
                                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                                            <input class="form-check-input mt-0" type="radio" name="drop" id="hourly-drop" value="hourly-drop">
                                                            <label class="form-check-label fs-14 ms-2" for="hourly-drop">
                                                                Hourly Package
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <h6 class="fw-medium fs-16 mb-2">Book Car for rental</h6>
                                                </div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item dropdown from-location">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                                <input type="text" class="form-control" value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search for Cars">
                                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">USA</h6>
                                                                            <p>2000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Japan</h6>
                                                                            <p>3000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Singapore</h6>
                                                                            <p>8000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Russia</h6>
                                                                            <p>8000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Germany</h6>
                                                                            <p>6000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item dropdown pickup-airport">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                                <input type="text" class="form-control" value="Newyork">
                                                                <p class="fs-12 mb-0">Ken International Airport</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search for Airport">
                                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Hartsfield-Jackson Atlanta International</h6>
                                                                            <p>USA</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Dallas/Fort Worth International</h6>
                                                                            <p>USA</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">London Heathrow</h6>
                                                                            <p>UK</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Seoul Incheon</h6>
                                                                            <p>South Korea</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Singapore Changi International</h6>
                                                                            <p>Singapore</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item dropdown to-location ps-2 ps-sm-3">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                                <input type="text" class="form-control" value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
                                                                <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                                </span>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search for Cars">
                                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">USA</h6>
                                                                            <p>2000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Japan</h6>
                                                                            <p>3000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Singapore</h6>
                                                                            <p>8000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Russia</h6>
                                                                            <p>8000 Cars</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Germany</h6>
                                                                            <p>6000 Cars</p>
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
                                                        <div class="form-item return-drop">
                                                            <label class="form-label fs-14 text-default mb-1">Return</label>
                                                            <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                                            <p class="fs-12 mb-0">Wednesday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Pickup Time</label>
                                                            <input type="text" class="form-control timepicker" value="11:45 PM">
                                                        </div>
                                                        <div class="form-item dropoff-time">
                                                            <label class="form-label fs-14 text-default mb-1">Dropoff Time</label>
                                                            <input type="text" class="form-control timepicker" value="11:45 PM">
                                                        </div>
                                                        <div class="form-item hourly-time">
                                                            <label class="form-label fs-14 text-default mb-1">Hours</label>
                                                            <h5>02 Hrs 10 Kms</h5>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form> --}}
                                        </div>
                                        <div class="tab-pane fade" id="Cruise">

                                            <div class="text-center py-5">
                                                <h3 class="text-muted">Cruise Search - Coming Soon</h3>
                                                <p class="text-secondary col-md-6 mx-auto">We are working hard to bring you
                                                    cruise booking options. Stay tuned!</p>
                                            </div>
                                            {{-- <form action="cruise-grid.html">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h6 class="fw-medium fs-16 mb-2">Search For Cruise</h6>
                                                </div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Destination</label>
                                                                <input type="text" class="form-control" value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
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
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Start Date</label>
                                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">End Date</label>
                                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Travellers & Cabin </label>
                                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                                <p class="fs-12 mb-0">4 Adult, 2 Rooms</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <h5 class="mb-3">Select Travelers &  Class</h5>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="mb-3">
                                                                                <label class="form-label text-gray-9 mb-2">Adults <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                                                <div class="custom-increment">
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
                                                                                <div class="custom-increment">
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
                                                                                <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                                                <div class="custom-increment">
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
                                                                    <h6 class="fs-16 fw-medium mb-2">Select Cabin</h6>
                                                                    <div class="d-flex align-items-center flex-wrap">
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio" name="cabin" id="cabin1" checked="">
                                                                            <label class="form-check-label" for="cabin1">
                                                                                Solo cabins
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio" name="cabin" id="cabin2">
                                                                            <label class="form-check-label" for="cabin2">
                                                                                Balcony
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check me-3 mb-3">
                                                                            <input class="form-check-input" type="radio" value="Business" name="cabin" id="cabin3">
                                                                            <label class="form-check-label" for="cabin3">
                                                                                Oceanview
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input" type="radio" name="cabin" id="cabin4">
                                                                            <label class="form-check-label" for="cabin4">
                                                                                Balcony rooms
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
                                            </form> --}}
                                        </div>
                                        <div class="tab-pane fade" id="Tour">
                                            <div class="text-center py-5">
                                                <h3 class="text-muted">Tour Search - Coming Soon</h3>
                                                <p class="text-secondary col-md-6 mx-auto">We are working hard to bring you
                                                    the best booking options. Stay tuned!</p>
                                            </div>
                                            {{-- <form action="tour-grid.html">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h6 class="fw-medium fs-16 mb-2">Search holiday packages & trips</h6>
                                                </div>
                                                <div class="d-lg-flex">
                                                    <div class="d-flex  form-info">
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Where would like to go?</label>
                                                                <input type="text" class="form-control" value="Newyork">
                                                                <p class="fs-12 mb-0">USA</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-md p-0">
                                                                <div class="input-search p-3 border-bottom">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search for City, Property name or Location">
                                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                                    </div>
                                                                </div>
                                                                <ul>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">USA</h6>
                                                                            <p>200 Places</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Japan</h6>
                                                                            <p>300 Places</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Singapore</h6>
                                                                            <p>80 Places</p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="border-bottom">
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Russia</h6>
                                                                            <p>500 Places</p>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                                            <h6 class="fs-16 fw-medium">Germany</h6>
                                                                            <p>150 Places</p>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Dates</label>
                                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                                            <p class="fs-12 mb-0">Monday</p>
                                                        </div>
                                                        <div class="form-item">
                                                            <label class="form-label fs-14 text-default mb-1">Check Out</label>
                                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                                            <p class="fs-12 mb-0">Wednesday</p>
                                                        </div>
                                                        <div class="form-item dropdown">
                                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                                <label class="form-label fs-14 text-default mb-1">Travellers</label>
                                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                                <p class="fs-12 mb-0">2 Adult</p>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                                <h5 class="mb-3">Select Travelers</h5>
                                                                <div class="mb-3 border br-10 info-item pb-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label class="form-label text-gray-9 mb-2">Adult</label>
                                                                                <div class="custom-increment">
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
                                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label class="form-label text-gray-9 mb-2">Childrens <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                                                <div class="custom-increment">
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
                                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                                <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                                                <div class="custom-increment">
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
                                                                <div class="d-flex justify-content-end">
                                                                    <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                                </div>
                                            </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Destination Section -->
    <section class="section destination-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">Search by <span
                                class="text-primary  text-decoration-underline">Destinations</span> Around the World </h2>
                        <p class="sub-title">DreamsTour Marketplace is a platform designed to connect fans with exclusive
                            experiences related to a specific tour</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel destination-slider nav-center">

                <!-- Destination Item-->
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-01.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Turkey</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">452 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">21 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">15 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">06 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="destination.html" class="overlay-circle-link"><i class="isax isax-arrow-right-1"></i></a>
                </div>
                <!-- /Destination Item-->

                <!-- Destination Item-->
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-02.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Thailand</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">400 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">21 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">15 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">06 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="destination.html" class="overlay-circle-link"><i class="isax isax-arrow-right-1"></i></a>
                </div>
                <!-- /Destination Item-->

                <!-- Destination Item-->
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-03.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Australia</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">400 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">21 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">15 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">06 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="destination.html" class="overlay-circle-link"><i class="isax isax-arrow-right-1"></i></a>
                </div>
                <!-- /Destination Item-->

                <!-- Destination Item-->
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-04.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Brazil</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">422 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">21 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">15 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">06 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="destination.html" class="overlay-circle-link"><i class="isax isax-arrow-right-1"></i></a>
                </div>
                <!-- /Destination Item-->

                <!-- Destination Item-->
                <div class="destination-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="assets/img/destination/destination-05.jpg" alt="img">
                    <div class="destination-info text-center">
                        <div class="destination-content">
                            <h5 class="mb-1 text-white">Canada</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled"></i>
                                </div>
                                <p class="fs-14 text-white">370 Reviews</p>
                            </div>
                        </div>
                        <div class="destination-overlay bg-white mt-2">
                            <div class="d-flex">
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-indigo">
                                            <i class="isax isax-airplane"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">21 Flights</h6>
                                    </div>
                                </div>
                                <div class="col border-end">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-cyan">
                                            <i class="isax isax-buildings"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">15 Hotels</h6>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count-info text-center">
                                        <span class="d-block mb-1 text-success">
                                            <i class="isax isax-ship"></i>
                                        </span>
                                        <h6 class="fs-13 fw-medium">06 Cruises</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="destination.html" class="overlay-circle-link"><i class="isax isax-arrow-right-1"></i></a>
                </div>
                <!-- /Destination Item-->

            </div>
            <div class="text-center view-all wow fadeInUp">
                <a href="destination.html" class="btn btn-dark d-inline-flex align-items-center">View All Locations<i
                        class="isax isax-arrow-right-3 ms-2"></i></a>
            </div>
        </div>
    </section>
    <!-- /Destination Section -->

    <!-- Benefit Section -->
    <section class="section benefit-section bg-light-300">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">Our <span class="text-primary  text-decoration-underline">Benefits</span> & Key
                            Advantages</h2>
                        <p class="sub-title">DreamsTour, a tour operator specializing in dream destinations, offers a
                            variety of benefits for travelers.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card benefit-card mb-0 flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-body text-center">
                            <div class="benefit-icon mb-2 bg-secondary text-gray-9 mx-auto">
                                <i class="isax isax-lock-1"></i>
                            </div>
                            <h5 class="mb-2">VIP Packages</h5>
                            <p class="mb-0">Include premium seating, meet-and-greet experiences, backstage tours.</p>
                            <span class="icon-view text-secondary"><i class="isax isax-lock-1"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card benefit-card mb-0 flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-body text-center">
                            <div class="benefit-icon mb-2 bg-orange text-white mx-auto">
                                <i class="isax isax-magicpen"></i>
                            </div>
                            <h5 class="mb-2">Concert Tickets</h5>
                            <p class="mb-0">A centralized place to buy tickets for various dates of the tour</p>
                            <span class="icon-view text-orange"><i class="isax isax-magicpen"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card benefit-card mb-0 flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-body text-center">
                            <div class="benefit-icon mb-2 bg-purple text-white mx-auto">
                                <i class="isax isax-receipt-add"></i>
                            </div>
                            <h5 class="mb-2">Travel Packages</h5>
                            <p class="mb-0">Bundles that include concert tickets, accommodations</p>
                            <span class="icon-view text-purple"><i class="isax isax-receipt-add"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card benefit-card mb-0 flex-fill wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-body text-center">
                            <div class="benefit-icon mb-2 bg-teal text-white mx-auto">
                                <i class="isax isax-location-tick"></i>
                            </div>
                            <h5 class="mb-2">Best Price Guarantee</h5>
                            <p class="mb-0">Such as private rehearsals, soundcheck access,</p>
                            <span class="icon-view text-teal"><i class="isax isax-location-tick"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Benefit Section -->

    <!-- Place Section -->
    <section class="section place-section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header mb-4 text-center">
                        <h2 class="mb-2">Our <span class="text-primary  text-decoration-underline">Trending</span>
                            Places</h2>
                        <p class="sub-title">Here are some famous tourist places around the world that are known for their
                            historical significance, natural beauty, or cultural impact</p>
                    </div>
                </div>
            </div>
            <div class="place-nav">
                <ul class="nav justify-content-center">
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#flight-list">
                            Flights
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab"
                            data-bs-target="#Hotels-list">
                            Hotels
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cars-list">
                            Cars
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                            data-bs-target="#Cruise-list">
                            Cruise
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Tour-list">
                            Tour
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">

                <!-- Hotels List -->
                <div class="tab-pane fade active show" id="Hotels-list">
                    <div class="owl-carousel place-slider nav-center">

                        <!-- Place Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/hotels/hotel-01.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/hotels/hotel-02.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/hotels/hotel-03.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                    <a href="javascript:void(0);" class="fav-icon selected">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                    <p class="fs-14">(400 Reviews)</p>
                                </div>
                                <h5 class="mb-1"><a href="hotel-details.html">Hotel Plaza Athenee</a></h5>
                                <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Ciutat
                                    Vella, Barcelona</p>
                                <div class="border-top pt-2 mb-2">
                                    <h6 class="d-flex align-items-center">Facillities :<i
                                            class="isax isax-wifi ms-2 me-2 text-primary"></i><i
                                            class="isax isax-scissor me-2 text-primary"></i><i
                                            class="isax isax-profile-2user me-2 text-primary"></i><i
                                            class="isax isax-wind-2 me-2 text-primary"></i><a href="javascript:void(0);"
                                            class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h5 class="text-primary">$500 <span class="fs-14 fw-normal text-default">/
                                            Night</span></h5>
                                    <a href="javascript:void(0);" class="d-flex align-items-center">
                                        <span class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-01.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14">Beth Williams</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <a href="hotel-details.html">
                                    <img src="assets/img/hotels/hotel-02.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <span class="badge bg-danger d-inline-flex align-items-center"><i
                                            class="isax isax-tag me-1"></i>Hot</span>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                    <p class="fs-14">(210 Reviews)</p>
                                </div>
                                <h5 class="mb-1"><a href="hotel-details.html">A Luxury Hotel</a></h5>
                                <p class="d-flex align-items-center mb-2"><i
                                        class="isax isax-location5 me-2"></i>Downtown, New York</p>
                                <div class="border-top pt-2 mb-2">
                                    <h6 class="d-flex align-items-center">Facillities :<i
                                            class="isax isax-wifi ms-2 me-2 text-primary"></i><i
                                            class="isax isax-scissor me-2 text-primary"></i><i
                                            class="isax isax-personalcard me-2 text-primary"></i></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h5 class="text-primary">$500 <span class="fs-14 fw-normal text-default">/
                                            Night</span></h5>
                                    <a href="javascript:void(0);" class="d-flex align-items-center">
                                        <span class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-06.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14">Kyle Woodward</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/hotels/hotel-03.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/hotels/hotel-04.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/hotels/hotel-01.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item justify-content-end">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                                    <p class="fs-14">(60 Reviews)</p>
                                </div>
                                <h5 class="mb-1"><a href="hotel-details.html">The Start Hotel, Casino</a></h5>
                                <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Paris,
                                    France</p>
                                <div class="border-top pt-2 mb-2">
                                    <h6 class="d-flex align-items-center">Facillities :<i
                                            class="isax isax-wifi ms-2 me-2 text-primary"></i><i
                                            class="isax isax-note-text me-2 text-primary"></i><i
                                            class="isax isax-wind-2 me-2 text-primary"></i></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h5 class="text-primary">$740 <span class="fs-14 fw-normal text-default">/
                                            Night</span></h5>
                                    <a href="javascript:void(0);" class="d-flex align-items-center">
                                        <span class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-02.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14">Jeanette Lupo</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <a href="hotel-details.html">
                                    <img src="assets/img/hotels/hotel-04.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <span class="badge bg-purple d-inline-flex align-items-center"><i
                                            class="isax isax-more-2 me-1"></i>Featured</span>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                                    <p class="fs-14">(10 Reviews)</p>
                                </div>
                                <h5 class="mb-1"><a href="hotel-details.html">K’s House Tokyo Oasis</a></h5>
                                <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Tokyo,
                                    Japan</p>
                                <div class="border-top pt-2 mb-2">
                                    <h6 class="d-flex align-items-center">Facillities :<i
                                            class="isax isax-wifi ms-2 me-2 text-primary"></i><i
                                            class="isax isax-scissor me-2 text-primary"></i><i
                                            class="isax isax-profile-2user me-2 text-primary"></i><i
                                            class="isax isax-wind-2 me-2 text-primary"></i><a href="javascript:void(0);"
                                            class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h5 class="text-primary">$147 <span class="fs-14 fw-normal text-default">/
                                            Night</span></h5>
                                    <a href="javascript:void(0);" class="d-flex align-items-center">
                                        <span class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-04.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14">Hilda Pate</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <a href="hotel-details.html">
                                    <img src="assets/img/hotels/hotel-03.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                                    <p class="fs-14">(400 Reviews)</p>
                                </div>
                                <h5 class="mb-1"><a href="hotel-details.html">Hotel Plaza Athenee</a></h5>
                                <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Ciutat
                                    Vella, Barcelona</p>
                                <div class="border-top pt-2 mb-2">
                                    <h6 class="d-flex align-items-center">Facillities :<i
                                            class="isax isax-wifi ms-2 me-2 text-primary"></i><i
                                            class="isax isax-scissor me-2 text-primary"></i><i
                                            class="isax isax-profile-2user me-2 text-primary"></i><i
                                            class="isax isax-wind-2 me-2 text-primary"></i><a href="javascript:void(0);"
                                            class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h5 class="text-primary">$500 <span class="fs-14 fw-normal text-default">/
                                            Night</span></h5>
                                    <a href="javascript:void(0);" class="d-flex align-items-center">
                                        <span class="avatar avatar-md me-2">
                                            <img src="assets/img/users/user-01.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14">Beth Williams</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                    </div>
                </div>
                <!-- /Hotels List -->

                <!-- Flight List -->
                <div class="tab-pane fade" id="flight-list">
                    <div class="owl-carousel place-slider nav-center">

                        <!-- Flight Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <a href="flight-details.html">
                                    <img src="assets/img/flight/flight-01.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="fav-icon me-2">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-indigo">Cheapest</span>
                                    </div>
                                    <span
                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.3</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-45 me-2"></i>Toronto</span>
                                    <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-135 me-2"></i>Bangkok</span>
                                </div>
                                <h5 class="text-truncate mb-1"><a href="flight-details.html">AstraFlight 215</a></h5>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="avatar avatar-sm me-2">
                                        <img src="assets/img/icons/airindia.svg" class="rounded-circle"
                                            alt="icon">
                                    </span>
                                    <p class="fs-14 mb-0">Indigo</p>
                                    <p class="fs-14 mb-0">1-stop at Frankfurt</p>
                                </div>
                                <div class="date-info p-2 mb-3">
                                    <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Sep
                                        04, 2024 - Sep 07, 2024</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$300
                                    </h6>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-outline-success fs-10 fw-medium p-2 me-2">22 Seats
                                            Left</span>
                                        <a href="javascript:void(0);" class="avatar avatar-sm">
                                            <img src="assets/img/users/user-11.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Item-->

                        <!-- Flight Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="flight-details.html">
                                            <img src="assets/img/flight/flight-02.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="flight-details.html">
                                            <img src="assets/img/flight/flight-06.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="flight-details.html">
                                            <img src="assets/img/flight/flight-07.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="fav-icon me-2">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-indigo">Cheapest</span>
                                    </div>
                                    <span
                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.7</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-45 me-2"></i>Chicago</span>
                                    <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-135 me-2"></i>Melbourne</span>
                                </div>
                                <h5 class="text-truncate mb-1"><a href="flight-details.html">Cloudrider 789</a></h5>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="avatar avatar-sm me-2">
                                        <img src="assets/img/icons/airindia.svg" class="rounded-circle"
                                            alt="icon">
                                    </span>
                                    <p class="fs-14 mb-0">Indigo</p>
                                    <p class="fs-14 mb-0">1-stop at Dallas</p>
                                </div>
                                <div class="date-info p-2 mb-3">
                                    <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Sep
                                        11, 2024 - Sep 13, 2024</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$550
                                    </h6>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-outline-success fs-10 fw-medium p-2 me-2">14 Seats
                                            Left</span>
                                        <a href="javascript:void(0);" class="avatar avatar-sm">
                                            <img src="assets/img/users/user-12.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Item-->

                        <!-- Flight Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <a href="flight-details.html">
                                    <img src="assets/img/flight/flight-03.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="fav-icon me-2">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-indigo">Cheapest</span>
                                    </div>
                                    <span
                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.5</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-45 me-2"></i>Miami</span>
                                    <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-135 me-2"></i>Tokyo</span>
                                </div>
                                <h5 class="text-truncate mb-1"><a href="flight-details.html">Aether Express 901</a></h5>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="avatar avatar-sm me-2">
                                        <img src="assets/img/icons/airindia.svg" class="rounded-circle"
                                            alt="icon">
                                    </span>
                                    <p class="fs-14 mb-0">Indigo</p>
                                    <p class="fs-14 mb-0">1-stop at Seoul</p>
                                </div>
                                <div class="date-info p-2 mb-3">
                                    <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Sep
                                        22, 2024 - Sep 24, 2024</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$450
                                    </h6>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-outline-success fs-10 fw-medium p-2 me-2">12 Seats
                                            Left</span>
                                        <a href="javascript:void(0);" class="avatar avatar-sm">
                                            <img src="assets/img/users/user-13.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Item-->

                        <!-- Flight Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="flight-details.html">
                                            <img src="assets/img/flight/flight-04.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="flight-details.html">
                                            <img src="assets/img/flight/flight-08.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="flight-details.html">
                                            <img src="assets/img/flight/flight-10.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="fav-icon me-2">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-indigo">Cheapest</span>
                                    </div>
                                    <span
                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.3</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-45 me-2"></i>Boston</span>
                                    <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-135 me-2"></i>Singapore</span>
                                </div>
                                <h5 class="text-truncate mb-1"><a href="flight-details.html">Silverwing 505</a></h5>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="avatar avatar-sm me-2">
                                        <img src="assets/img/icons/airindia.svg" class="rounded-circle"
                                            alt="icon">
                                    </span>
                                    <p class="fs-14 mb-0">Indigo</p>
                                    <p class="fs-14 mb-0">1-stop at London</p>
                                </div>
                                <div class="date-info p-2 mb-3">
                                    <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Oct
                                        17, 2024 - Oct 19, 2024</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$700
                                    </h6>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-outline-success fs-10 fw-medium p-2 me-2">18 Seats
                                            Left</span>
                                        <a href="javascript:void(0);" class="avatar avatar-sm">
                                            <img src="assets/img/users/user-15.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Item-->

                        <!-- Flight Item-->
                        <div class="place-item mb-4">
                            <div class="place-img">
                                <a href="flight-details.html">
                                    <img src="assets/img/flight/flight-10.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="fav-icon me-2">
                                            <i class="isax isax-heart5"></i>
                                        </a>
                                        <span class="badge bg-indigo">Cheapest</span>
                                    </div>
                                    <span
                                        class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.6</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-45 me-2"></i>Paris</span>
                                    <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                    <span class="loc-name d-inline-flex align-items-center"><i
                                            class="isax isax-airplane rotate-135 me-2"></i>Cape Town</span>
                                </div>
                                <h5 class="text-truncate mb-1"><a href="flight-details.html">Nimbus 345</a></h5>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="avatar avatar-sm me-2">
                                        <img src="assets/img/icons/airindia.svg" class="rounded-circle"
                                            alt="icon">
                                    </span>
                                    <p class="fs-14 mb-0">Indigo</p>
                                    <p class="fs-14 mb-0">1-stop at Doha</p>
                                </div>
                                <div class="date-info p-2 mb-3">
                                    <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Aug
                                        26, 2024 - Aug 27, 2024</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$300
                                    </h6>
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-outline-success fs-10 fw-medium p-2 me-2">27 Seats
                                            Left</span>
                                        <a href="javascript:void(0);" class="avatar avatar-sm">
                                            <img src="assets/img/users/user-10.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Flight Item-->

                    </div>
                </div>
                <!-- /Flight List -->

                <!-- Cars List -->
                <div class="tab-pane fade" id="Cars-list">
                    <div class="owl-carousel place-slider nav-center">

                        <!-- Car Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-06.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-07.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-08.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon selected">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <a href="javascript:void(0);" class="avatar avatar-md ms-3 car-avatar-image">
                                    <img src="assets/img/users/user-08.jpg" class="rounded-circle" alt="img">
                                </a>
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="car-details.html">Toyota Camry SE 400</a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat
                                    Vella, Barcelona</p>
                                <div class="mb-3 p-2 border rounded d-flex align-items-center justify-content-between">
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-gas-station me-1"></i>Fuel</span>
                                        <p class="text-dark fs-14">Hybrid</p>
                                    </div>
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-kanban me-1"></i>Gear</span>
                                        <p class="text-dark fs-14">Manual</p>
                                    </div>
                                    <div>
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-routing-2 me-1"></i>Travelled</span>
                                        <p class="text-dark fs-14">14,000 KM</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <h5 class="text-primary">$500 <span class="fs-14 text-gray-6 fw-normal">/
                                                day</span></h5>
                                    </div>
                                    <div class="ms-2 d-flex align-items-center">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">5.0</span>
                                            <p class="fs-14">(400 Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Item-->

                        <!-- Car Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-07.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-08.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-09.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <a href="javascript:void(0);" class="avatar avatar-md ms-3 car-avatar-image">
                                    <img src="assets/img/users/user-09.jpg" class="rounded-circle" alt="img">
                                </a>
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="car-details.html">Ford Mustang 4.0 AT</a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford
                                    Street, London</p>
                                <div class="mb-3 p-2 border rounded d-flex align-items-center justify-content-between">
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-gas-station me-1"></i>Fuel</span>
                                        <p class="text-dark fs-14">Hybrid</p>
                                    </div>
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-kanban me-1"></i>Gear</span>
                                        <p class="text-dark fs-14">Auto</p>
                                    </div>
                                    <div>
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-routing-2 me-1"></i>Travelled</span>
                                        <p class="text-dark fs-14">12,000 KM</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/
                                                day</span></h5>
                                    </div>
                                    <div class="ms-2 d-flex align-items-center">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.7</span>
                                            <p class="fs-14">(300 Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Item-->

                        <!-- Car Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-08.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-09.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-10.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <a href="javascript:void(0);" class="avatar avatar-md ms-3 car-avatar-image">
                                    <img src="assets/img/users/user-10.jpg" class="rounded-circle" alt="img">
                                </a>
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="car-details.html">Ferrari 458 MM Special</a>
                                </h5>
                                <p class="d-flex align-items-center mb-3"><i
                                        class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                <div class="mb-3 p-2 border rounded d-flex align-items-center justify-content-between">
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-gas-station me-1"></i>Fuel</span>
                                        <p class="text-dark fs-14">Hybrid</p>
                                    </div>
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-kanban me-1"></i>Gear</span>
                                        <p class="text-dark fs-14">Auto</p>
                                    </div>
                                    <div>
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-routing-2 me-1"></i>Travelled</span>
                                        <p class="text-dark fs-14">13,000 KM</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/
                                                day</span></h5>
                                    </div>
                                    <div class="ms-2 d-flex align-items-center">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.0</span>
                                            <p class="fs-14">(320 Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Item-->

                        <!-- Car Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-10.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-11.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-12.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <a href="javascript:void(0);" class="avatar avatar-md ms-3 car-avatar-image">
                                    <img src="assets/img/users/user-12.jpg" class="rounded-circle" alt="img">
                                </a>
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="car-details.html">BMW 3.0 Gran Turismo</a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s
                                    Road, Chelsea</p>
                                <div class="mb-3 p-2 border rounded d-flex align-items-center justify-content-between">
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-gas-station me-1"></i>Fuel</span>
                                        <p class="text-dark fs-14">Petrol</p>
                                    </div>
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-kanban me-1"></i>Gear</span>
                                        <p class="text-dark fs-14">Manual</p>
                                    </div>
                                    <div>
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-routing-2 me-1"></i>Travelled</span>
                                        <p class="text-dark fs-14">12,800 KM</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <h5 class="text-primary">$550 <span class="fs-14 text-gray-6 fw-normal">/
                                                day</span></h5>
                                    </div>
                                    <div class="ms-2 d-flex align-items-center">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.3</span>
                                            <p class="fs-14">(300 Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Item-->

                        <!-- Car Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-11.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-12.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="car-details.html">
                                            <img src="assets/img/cars/car-13.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <a href="javascript:void(0);" class="avatar avatar-md ms-3 car-avatar-image">
                                    <img src="assets/img/users/user-13.jpg" class="rounded-circle" alt="img">
                                </a>
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="car-details.html">Infiniti QX60 </a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Bold
                                    Street, Liverpool</p>
                                <div class="mb-3 p-2 border rounded d-flex align-items-center justify-content-between">
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-gas-station me-1"></i>Fuel</span>
                                        <p class="text-dark fs-14">Diesel</p>
                                    </div>
                                    <div class="pe-4 border-end">
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-kanban me-1"></i>Gear</span>
                                        <p class="text-dark fs-14">Auto</p>
                                    </div>
                                    <div>
                                        <span class="fs-14 d-flex align-items-center text-dark"><i
                                                class="isax isax-routing-2 me-1"></i>Travelled</span>
                                        <p class="text-dark fs-14">13,500 KM</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/
                                                day</span></h5>
                                    </div>
                                    <div class="ms-2 d-flex align-items-center">
                                        <div class="d-flex align-items-center flex-wrap">
                                            <span
                                                class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.1</span>
                                            <p class="fs-14">(450 Reviews)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Car Item-->

                    </div>

                </div>
                <!-- /Cars List -->

                <!-- Cruise List -->
                <div class="tab-pane fade" id="Cruise-list">
                    <div class="owl-carousel place-slider nav-center">

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="cruise-details.html">
                                            <img src="assets/img/cruise/cruise-05.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="cruise-details.html">
                                            <img src="assets/img/cruise/cruise-02.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="cruise-details.html">
                                            <img src="assets/img/cruise/cruise-04.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon selected">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="javascript:void(0);"
                                        class="d-flex align-items-center overflow-hidden me-2">
                                        <span class="avatar avatar-md flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-08.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14 text-truncate">Beth Williams</p>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                                        <p class="fs-14 text-truncate">(400)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Super Aquamarine</a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat
                                    Vella, Barcelona</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                            <span class="text-dark fw-medium">2021</span></p>
                                        <p><i class="isax isax-user me-1"></i>Guests : <span
                                                class="text-dark fw-medium">4</span></p>
                                    </div>
                                    <div>
                                        <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                            <span class="text-dark fw-medium">88.47 m</span></p>
                                        <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                class="text-dark fw-medium">19 Knots</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="d-flex align-items-center"><i
                                            class="isax isax-home-wifi ms-2 me-2"></i><i
                                            class="isax isax-scissor me-2"></i><i
                                            class="isax isax-profile-2user me-2"></i><i
                                            class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);"
                                            class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    <h5 class="text-primary text-nowrap me-2">$500 <span
                                            class="fs-14 fw-normal text-default">/ day</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <a href="cruise-details.html">
                                    <img src="assets/img/cruise/cruise-12.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="javascript:void(0);"
                                        class="d-flex align-items-center overflow-hidden me-2">
                                        <span class="avatar avatar-md flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-09.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14 text-truncate">Tom Andrews</p>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.7</span>
                                        <p class="fs-14 text-truncate">(300)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Bonnie Yacht</a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford
                                    Street, London</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                            <span class="text-dark fw-medium">2020</span></p>
                                        <p><i class="isax isax-user me-1"></i>Guests : <span
                                                class="text-dark fw-medium">3</span></p>
                                    </div>
                                    <div>
                                        <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                            <span class="text-dark fw-medium">70.63 m</span></p>
                                        <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                class="text-dark fw-medium">17 Knots</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="d-flex align-items-center"><i
                                            class="isax isax-home-wifi ms-2 me-2"></i><i
                                            class="isax isax-scissor me-2"></i><i
                                            class="isax isax-profile-2user me-2"></i><i
                                            class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);"
                                            class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    <h5 class="text-primary text-nowrap me-2">$600 <span
                                            class="fs-14 fw-normal text-default">/ day</span></h5>

                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <a href="cruise-details.html">
                                    <img src="assets/img/cruise/cruise-09.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="javascript:void(0);"
                                        class="d-flex align-items-center overflow-hidden me-2">
                                        <span class="avatar avatar-md flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-10.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14 text-truncate ">Robert Cogswell</p>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.5</span>
                                        <p class="fs-14 text-truncate">(320)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Coral Cruiser</a></h5>
                                <p class="d-flex align-items-center mb-3"><i
                                        class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                            <span class="text-dark fw-medium">2021</span></p>
                                        <p><i class="isax isax-user me-1"></i>Guests : <span
                                                class="text-dark fw-medium">4</span></p>
                                    </div>
                                    <div>
                                        <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                            <span class="text-dark fw-medium">88.47 m</span></p>
                                        <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                class="text-dark fw-medium">19 Knots</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="d-flex align-items-center"><i
                                            class="isax isax-home-wifi ms-2 me-2"></i><i
                                            class="isax isax-scissor me-2"></i><i
                                            class="isax isax-profile-2user me-2"></i><i
                                            class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);"
                                            class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    <h5 class="text-primary text-nowrap me-2">$500 <span
                                            class="fs-14 fw-normal text-default">/ day</span></h5>

                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <a href="cruise-details.html">
                                    <img src="assets/img/cruise/cruise-10.jpg" class="img-fluid" alt="img">
                                </a>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="javascript:void(0);"
                                        class="d-flex align-items-center overflow-hidden me-2">
                                        <span class="avatar avatar-md flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-11.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14 text-truncate ">Kenneth Palmer</p>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.3</span>
                                        <p class="fs-14 text-truncate">(380)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Harbor Haven</a></h5>
                                <p class="d-flex align-items-center mb-3"><i
                                        class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                            <span class="text-dark fw-medium">2016</span></p>
                                        <p><i class="isax isax-user me-1"></i>Guests : <span
                                                class="text-dark fw-medium">6</span></p>
                                    </div>
                                    <div>
                                        <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                            <span class="text-dark fw-medium">98.15 m</span></p>
                                        <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                class="text-dark fw-medium">14 Knots</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="d-flex align-items-center"><i
                                            class="isax isax-home-wifi ms-2 me-2"></i><i
                                            class="isax isax-scissor me-2"></i><i
                                            class="isax isax-profile-2user me-2"></i><i
                                            class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);"
                                            class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    <h5 class="text-primary text-nowrap me-2">$300 <span
                                            class="fs-14 fw-normal text-default">/ day</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="cruise-details.html">
                                            <img src="assets/img/cruise/cruise-01.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="cruise-details.html">
                                            <img src="assets/img/cruise/cruise-07.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="cruise-details.html">
                                            <img src="assets/img/cruise/cruise-05.jpg" class="img-fluid"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="javascript:void(0);"
                                        class="d-flex align-items-center overflow-hidden me-2">
                                        <span class="avatar avatar-md flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-12.jpg" class="rounded-circle"
                                                alt="img">
                                        </span>
                                        <p class="fs-14 text-truncate ">Timothy Brewer</p>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.1</span>
                                        <p class="fs-14 text-truncate">(300)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Albert Yacht</a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s
                                    Road, Chelsea</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <p class="mb-1"><i class="isax isax-calendar-2 text-gray-6 me-1"></i>Year :
                                            <span class="text-dark fw-medium">2018</span></p>
                                        <p><i class="isax isax-user me-1"></i>Guests : <span
                                                class="text-dark fw-medium">3</span></p>
                                    </div>
                                    <div>
                                        <p class="mb-1"><i class="isax isax-fatrows text-gray-6 me-1"></i>Width :
                                            <span class="text-dark fw-medium">90.25 m</span></p>
                                        <p><i class="isax isax-flash-1 me-1"></i>Speed : <span
                                                class="text-dark fw-medium">25 Knots</span></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <h6 class="d-flex align-items-center"><i
                                            class="isax isax-home-wifi ms-2 me-2"></i><i
                                            class="isax isax-scissor me-2"></i><i
                                            class="isax isax-profile-2user me-2"></i><i
                                            class="isax isax-wind-2 me-2"></i><a href="javascript:void(0);"
                                            class="fs-14 fw-normal text-default d-inline-block">+2</a></h6>
                                    <h5 class="text-primary text-nowrap me-2">$550 <span
                                            class="fs-14 fw-normal text-default">/ day</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                    </div>

                </div>
                <!-- /Cruise List -->

                <!-- Tour List -->
                <div class="tab-pane fade" id="Tour-list">
                    <div class="owl-carousel place-slider nav-center">

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-07.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-08.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-09.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon selected">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                        <p class="fs-14 text-gray-9">Ecotourism</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">5.0</span>
                                        <p class="fs-14">(105 Reviews)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="tour-details.html">Rainbow Mountain Valley</a>
                                </h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat
                                    Vella, Barcelona</p>
                                <div class="mb-3">
                                    <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From <span
                                            class="ms-1 fs-18 fw-semibold text-primary">$500</span><span
                                            class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$789</span>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <span class="me-1"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                        <p class="fs-14 text-gray-9">4 Day,3 Night</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                            <i class="isax isax-profile-2user me-1"></i>14 Guests
                                        </p>
                                        <a href="javascript:void(0);" class="avatar avatar-sm ms-3">
                                            <img src="assets/img/users/user-08.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-08.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-09.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-10.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                        <p class="fs-14 text-gray-9 text-truncate">Adventure Tour</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.7</span>
                                        <p class="fs-14">(110 Reviews)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="tour-details.html">Mystic Falls</a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford
                                    Street, London</p>
                                <div class="mb-3">
                                    <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From <span
                                            class="ms-1 fs-18 fw-semibold text-primary">$600</span><span
                                            class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$700</span>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <span class="me-1"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                        <p class="fs-14 text-gray-9">3 Day, 2 Night</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                            <i class="isax isax-profile-2user me-1"></i>12 Guests
                                        </p>
                                        <a href="javascript:void(0);" class="avatar avatar-sm ms-3">
                                            <img src="assets/img/users/user-09.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-09.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-10.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-11.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                        <p class="fs-14 text-gray-9 text-truncate">Summer Trip</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.7</span>
                                        <p class="fs-14">(180 Reviews)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="tour-details.html">Crystal Lake</a></h5>
                                <p class="d-flex align-items-center mb-3"><i
                                        class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                <div class="mb-3">
                                    <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From <span
                                            class="ms-1 fs-18 fw-semibold text-primary">$300</span><span
                                            class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$500</span>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <span class="me-1"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                        <p class="fs-14 text-gray-9">5 Day, 4 Night</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                            <i class="isax isax-profile-2user me-1"></i>16 Guests
                                        </p>
                                        <a href="javascript:void(0);" class="avatar avatar-sm ms-3">
                                            <img src="assets/img/users/user-10.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-10.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-11.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-12.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                        <p class="fs-14 text-gray-9 text-truncate">Adventure Tour</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.9</span>
                                        <p class="fs-14">(300 Reviews)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="tour-details.html">Majestic Peaks</a></h5>
                                <p class="d-flex align-items-center mb-3"><i
                                        class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                <div class="mb-3">
                                    <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From <span
                                            class="ms-1 fs-18 fw-semibold text-primary">$400</span><span
                                            class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$480</span>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <span class="me-1"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                        <p class="fs-14 text-gray-9">3 Day, 2 Night</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                            <i class="isax isax-profile-2user me-1"></i>10 Guests
                                        </p>
                                        <a href="javascript:void(0);" class="avatar avatar-sm ms-3">
                                            <img src="assets/img/users/user-11.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                        <!-- Place Item-->
                        <div class="place-item mb-4 flex-fill">
                            <div class="place-img">
                                <div class="img-slider image-slide owl-carousel nav-center">
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-11.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-12.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                    <div class="slide-images">
                                        <a href="tour-details.html">
                                            <img src="assets/img/tours/tours-13.jpg" class="img-fluid" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="fav-item">
                                    <a href="javascript:void(0);" class="fav-icon">
                                        <i class="isax isax-heart5"></i>
                                    </a>
                                    <span class="badge bg-info d-inline-flex align-items-center"><i
                                            class="isax isax-ranking me-1"></i>Trending</span>
                                </div>
                            </div>
                            <div class="place-content">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="me-1"><i class="ti ti-receipt text-primary"></i></span>
                                        <p class="fs-14 text-gray-9 text-truncate">Group Tours</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span
                                            class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-1">4.3</span>
                                        <p class="fs-14">(250 Reviews)</p>
                                    </div>
                                </div>
                                <h5 class="mb-1 text-truncate"><a href="tour-details.html">Enchanted Forest</a></h5>
                                <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s
                                    Road, Chelsea</p>
                                <div class="mb-3">
                                    <h6 class="d-flex align-items-center text-gray-6 fs-14 fw-normal">Starts From <span
                                            class="ms-1 fs-18 fw-semibold text-primary">$550</span><span
                                            class="ms-1 fs-18 fw-semibold text-gray-3 text-decoration-line-through">$600</span>
                                    </h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                    <div class="d-flex flex-wrap align-items-center me-2">
                                        <span class="me-1"><i class="isax isax-calendar-tick text-gray-6"></i></span>
                                        <p class="fs-14 text-gray-9">2 Day, 1 Night</p>
                                    </div>
                                    <span class="d-inline-block border vertical-splits">
                                        <span
                                            class="bg-light text-light d-flex align-items-center justify-content-center"></span>
                                    </span>
                                    <div class="ms-2 d-flex align-items-center">
                                        <p class="fs-14 text-gray-9 mb-0 text-truncate d-flex align-items-center">
                                            <i class="isax isax-profile-2user me-1"></i>17 Guests
                                        </p>
                                        <a href="javascript:void(0);" class="avatar avatar-sm ms-3">
                                            <img src="assets/img/users/user-12.jpg" class="rounded-circle"
                                                alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Place Item-->

                    </div>

                </div>
                <!-- /Tour List -->

            </div>
            <div class="text-center view-all wow fadeInUp">
                <a href="hotel-grid.html" class="btn btn-dark d-inline-flex align-items-center">View All Places<i
                        class="isax isax-arrow-right-3 ms-2"></i></a>
            </div>
        </div>
    </section>
    <!-- /Place Section -->

    <!-- About Section -->
    <section class="section about-section">
        <div class="container">
            <div class="row">
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
                    <div class="about-content">
                        <h6 class="text-primary fs-14 fw-medium mb-2">About DreamsTour</h6>
                        <h2 class="display-6 mb-2">Explore Beyond the Horizon: Discover the World’s Wonders</h2>
                        <p class="mb-4">We pride themselves on offering personalized services for high-end clientele,
                            with a commitment to crafting unique and unforgettable travel experiences​</p>
                        <div class="d-flex align-items-center mb-4">
                            <span class="avatar avatar-xl bg-primary rounded-circle flex-shrink-0 me-3">
                                <i class="isax isax-map5 fs-24"></i>
                            </span>
                            <p>Clients navigate their journeys, whether for travel or educational purposes, primarily in
                                Canada, the U.S., and the U.K</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-xl bg-secondary rounded-circle flex-shrink-0 me-3">
                                <i class="isax isax-trade5 fs-24 text-gray-9"></i>
                            </span>
                            <p>Provides a range of services from immigration advice to study-abroad support and vacation
                                planning.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap about-btn gap-2">
                        <a href="about-us.html" class="btn btn-white d-flex align-items-center">Learn More<i
                                class="isax isax-arrow-circle-right ms-2"></i></a>
                        <div class="avatar-list-stacked avatar-group-md me-2">
                            <span class="avatar avatar-rounded">
                                <img class="border border-white" src="assets/img/users/user-01.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-rounded">
                                <img class="border border-white" src="assets/img/users/user-04.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-rounded">
                                <img src="assets/img/users/user-05.jpg" alt="img">
                            </span>
                            <span class="avatar avatar-rounded">
                                <img src="assets/img/users/user-06.jpg" alt="img">
                            </span>
                        </div>
                        <div>
                            <div class="d-flex align-items-center">
                                <div class="rating d-flex align-items-center me-2">
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <i class="fa-solid fa-star filled me-1"></i>
                                    <span class="text-gray-9 fs-14">5.0</span>
                                </div>
                            </div>
                            <p class="fs-14">2K+ Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="counter-wrap">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-4">
                                    <h6 class="mb-1 d-flex align-items-center justify-content-center text-teal"><i
                                            class="isax isax-global5 me-2"></i>Destinations Worldwide</h6>
                                    <h3 class="display-6"><span class="counter">50</span>+</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-4">
                                    <h6 class="mb-1 d-flex align-items-center justify-content-center text-purple"><i
                                            class="isax isax-calendar-2 me-2"></i>Booking Completed</h6>
                                    <h3 class="display-6"><span class="counter">7000</span>+</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-4">
                                    <h6 class="mb-1 d-flex align-items-center justify-content-center text-pink"><i
                                            class="isax isax-tag-user5 me-2"></i>Client Globally</h6>
                                    <h3 class="display-6"><span class="counter">100</span>+</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-item mb-4">
                                    <h6 class="mb-1 d-flex align-items-center justify-content-center text-info"><i
                                            class="isax isax-status-up5 me-2"></i>Providers Registered</h6>
                                    <h3 class="display-6"><span class="counter">89</span>+</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-bg">
                <img src="assets/img/bg/about-bg.png" alt="img" class="about-bg-01">
                <img src="assets/img/bg/about-bg-01.svg" alt="img" class="about-bg-02">
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <!-- Experts Section -->
    <section class="section experts-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">Our <span class="text-primary  text-decoration-underline">Popular</span>
                            Experts</h2>
                        <p class="sub-title">Here are some famous tourist places around the world that are known for their
                            historical significance,natural beauty, or cultural impact:</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel experts-slider nav-center">

                <!-- Expert Item-->
                <div class="expert-item mb-4">
                    <a href="javascript:void(0);" class="expert-img">
                        <div class="bg-purple-100 position-relative">
                            <img src="assets/img/expert/expert-01.png" alt="img">
                            <span class="bg-info circle-shape"></span>
                        </div>
                    </a>
                    <div class="expert-content">
                        <div class="d-flex align-items-center mb-1">
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                            <p>(499 Reviews)</p>
                        </div>
                        <h5 class="mb-1"><a href="javascript:void(0);">Damien Martien</a></h5>
                        <p class="d-flex align-items-center"><img src="assets/img/flags/brazil.svg" alt="img"
                                class="me-2">Brazil, Rio</p>
                        <div class="d-flex border-top mt-3 pt-3">
                            <div class="flex-fill">
                                <p class="mb-1">Total Listings</p>
                                <h6>14</h6>
                            </div>
                            <div class="flex-fill">
                                <p class="mb-1">Starts From</p>
                                <h6>$452</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Expert Item-->

                <!-- Expert Item-->
                <div class="expert-item mb-4">
                    <a href="javascript:void(0);" class="expert-img">
                        <div class="bg-orange-100 position-relative">
                            <img src="assets/img/expert/expert-02.png" alt="img">
                            <span class="bg-orange circle-shape"></span>
                        </div>
                    </a>
                    <div class="expert-content">
                        <div class="d-flex align-items-center mb-1">
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                            <p>(315 Reviews)</p>
                        </div>
                        <h5 class="mb-1"><a href="javascript:void(0);">Connie Allen</a></h5>
                        <p class="d-flex align-items-center"><img src="assets/img/flags/japan.svg" alt="img"
                                class="me-2">Tokyo, Japan</p>
                        <div class="d-flex border-top mt-3 pt-3">
                            <div class="flex-fill">
                                <p class="mb-1">Total Listings</p>
                                <h6>21</h6>
                            </div>
                            <div class="flex-fill">
                                <p class="mb-1">Starts From</p>
                                <h6>$689</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Expert Item-->

                <!-- Expert Item-->
                <div class="expert-item mb-4">
                    <a href="javascript:void(0);" class="expert-img">
                        <div class="bg-pink-100 position-relative">
                            <img src="assets/img/expert/expert-03.png" alt="img">
                            <span class="bg-pink circle-shape"></span>
                        </div>
                    </a>
                    <div class="expert-content">
                        <div class="d-flex align-items-center mb-1">
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.7</span>
                            <p>(220 Reviews)</p>
                        </div>
                        <h5 class="mb-1"><a href="javascript:void(0);">Ida Olsen</a></h5>
                        <p class="d-flex align-items-center"><img src="assets/img/flags/africa.svg" alt="img"
                                class="me-2">Cape Town, South Africa</p>
                        <div class="d-flex border-top mt-3 pt-3">
                            <div class="flex-fill">
                                <p class="mb-1">Total Listings</p>
                                <h6>15</h6>
                            </div>
                            <div class="flex-fill">
                                <p class="mb-1">Starts From</p>
                                <h6>$230</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Expert Item-->

                <!-- Expert Item-->
                <div class="expert-item mb-4">
                    <a href="javascript:void(0);" class="expert-img">
                        <div class="bg-teal-100 position-relative">
                            <img src="assets/img/expert/expert-04.png" alt="img">
                            <span class="bg-teal circle-shape"></span>
                        </div>
                    </a>
                    <div class="expert-content">
                        <div class="d-flex align-items-center mb-1">
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">5.0</span>
                            <p>(180 Reviews)</p>
                        </div>
                        <h5 class="mb-1"><a href="javascript:void(0);">Damien Martien</a></h5>
                        <p class="d-flex align-items-center"><img src="assets/img/flags/australia.svg" alt="img"
                                class="me-2">Sydney, Australia</p>
                        <div class="d-flex border-top mt-3 pt-3">
                            <div class="flex-fill">
                                <p class="mb-1">Total Listings</p>
                                <h6>15</h6>
                            </div>
                            <div class="flex-fill">
                                <p class="mb-1">Starts From</p>
                                <h6>$563</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Expert Item-->

                <!-- Expert Item-->
                <div class="expert-item mb-4">
                    <a href="javascript:void(0);" class="expert-img">
                        <div class="bg-purple-100 position-relative">
                            <img src="assets/img/expert/expert-05.png" alt="img">
                            <span class="bg-purple circle-shape"></span>
                        </div>
                    </a>
                    <div class="expert-content">
                        <div class="d-flex align-items-center mb-1">
                            <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium me-2">4.9</span>
                            <p>(160 Reviews)</p>
                        </div>
                        <h5 class="mb-1"><a href="javascript:void(0);">Catalina Schmeling</a></h5>
                        <p class="d-flex align-items-center"><img src="assets/img/flags/norway.svg" alt="img"
                                class="me-2">Oslo, Norway</p>
                        <div class="d-flex border-top mt-3 pt-3">
                            <div class="flex-fill">
                                <p class="mb-1">Total Listings</p>
                                <h6>17</h6>
                            </div>
                            <div class="flex-fill">
                                <p class="mb-1">Starts From</p>
                                <h6>$550</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Expert Item-->

            </div>
            <div class="text-center view-all wow fadeInUp">
                <a href="team.html" class="btn btn-dark">View All Experts<i
                        class="isax isax-arrow-right-3 ms-2"></i></a>
            </div>
        </div>
    </section>
    <!-- /Experts Section -->

    <!-- Video Section -->
    <div class="video-wrap">
        <a class="video-btn video-effect" data-fancybox="" href="https://youtu.be/NSAOrGb9orM"><i
                class="isax isax-play5"></i></a>
    </div>
    <!-- /Video Section -->

    <!-- Client Section -->
    <section class="section client-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h6 class="fs-16 fw-medium mb-4">Trusted By 40+ Clients Around the Globe</h6>
                </div>
            </div>
            <div class="owl-carousel client-slider">
                <div class="client-img">
                    <img src="assets/img/clients/client-01.svg" alt="img">
                </div>
                <div class="client-img">
                    <img src="assets/img/clients/client-02.svg" alt="img">
                </div>
                <div class="client-img">
                    <img src="assets/img/clients/client-03.svg" alt="img">
                </div>
                <div class="client-img">
                    <img src="assets/img/clients/client-04.svg" alt="img">
                </div>
                <div class="client-img">
                    <img src="assets/img/clients/client-05.svg" alt="img">
                </div>
                <div class="client-img">
                    <img src="assets/img/clients/client-06.svg" alt="img">
                </div>
                <div class="client-img">
                    <img src="assets/img/clients/client-07.svg" alt="img">
                </div>
                <div class="client-img">
                    <img src="assets/img/clients/client-04.svg" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- /Client Section -->

    <!-- Testimonial Section -->
    <section class="section testimonial-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">What’s Our <span class="text-primary  text-decoration-underline">User</span>
                            Says</h2>
                        <p class="sub-title">DreamsTour, a tour operator specializing in dream destinations, offers a
                            variety of benefits for travelers.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel testimonial-slider">

                <!-- Testimonial Item-->
                <div class="card border-white wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card-body">
                        <h6 class="mb-4">Great Hospitalization</h6>
                        <p class="mb-4">Dream Tours is the only way to go. We had the time of our life on our trip to
                            the Ark. The customer service was wonderful & the staff was very helpful.</p>
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
                        <p class="mb-4">I went on the Gone with the Wind tour, and it was my first multi-day bus tour.
                            The experience was terrific, thanks to the friendly tour guides.</p>
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
                        <p class="mb-4">Thanks for arranging a smooth travel experience for us. Our cab driver was
                            polite, timely, and helpful. The team ensured making it a stress-free trip.</p>
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
                        <h6 class="mb-4">Great Service</h6>
                        <p class="mb-4">We had a fantastic time as a family. There were activities for every age group,
                            and the kids loved the kids’ club, fun activities, good customer service.</p>
                        <div class="border-top pt-4 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-md  flex-shrink-0">
                                    <img src="assets/img/users/user-05.jpg" class="rounded-circle" alt="img">
                                </span>
                                <div class="ms-2">
                                    <h6 class="fs-16 fw-medium">James Andrew</h6>
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
    <!-- /Testimonial Section -->

    <!-- Update Section -->
    <section class="update-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="update-sec">
                        <div class="section-header text-center">
                            <h2 class="mb-1">Stay Updated</h2>
                            <p class="sub-title">Signup for New Offers & Updates from DreamsTour </p>
                        </div>
                        <div class="input-group justify-content-center mx-auto">
                            <span class="input-group-text px-1"><i class="isax isax-message-favorite5"></i></span>
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                        <div class="update-bg">
                            <img src="assets/img/bg/update-bg.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Update Section -->

    <!-- FAQ Section -->
    <section class="faq-section section">
        <div class="container">
            <div class="faq-sec">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="section-header text-center">
                            <h2 class="mb-2">Frequently Asked <span
                                    class="text-primary  text-decoration-underline">Questions</span></h2>
                            <p class="sub-title">DreamsTour, a tour operator specializing in dream destinations, offers a
                                variety of benefits for travelers.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="accordion accordion-flush" id="accordionFaq">
                            <div class="accordion-item show mb-3 pb-3 wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseOne" aria-expanded="false"
                                        aria-controls="faq-collapseOne">
                                        What types of tours do you offer?
                                    </button>
                                </h2>
                                <div id="faq-collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p class="mb-0">We offer a wide range of tours, including cultural, adventure,
                                            luxury, and customized itineraries.</p>
                                        <p>Popular destinations include Europe, Africa (e.g., Morocco), </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 pb-3 wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapsetwo"
                                        aria-expanded="false" aria-controls="faq-collapsetwo">
                                        Are the tours customizable?
                                    </button>
                                </h2>
                                <div id="faq-collapsetwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>We offer a wide range of tours, including cultural, adventure, luxury, and
                                            customized itineraries.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 pb-3 wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapsthree"
                                        aria-expanded="false" aria-controls="faq-collapsthree">
                                        What safety measures do you follow?
                                    </button>
                                </h2>
                                <div id="faq-collapsthree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>We offer a wide range of tours, including cultural, adventure, luxury, and
                                            customized itineraries.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3 pb-3 wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapsefour"
                                        aria-expanded="false" aria-controls="faq-collapsefour">
                                        How far in advance should I book?
                                    </button>
                                </h2>
                                <div id="faq-collapsefour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>We offer a wide range of tours, including cultural, adventure, luxury, and
                                            customized itineraries.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="1.0s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-collapsefive"
                                        aria-expanded="false" aria-controls="faq-collapsefive">
                                        What is your cancellation policy?
                                    </button>
                                </h2>
                                <div id="faq-collapsefive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        <p>We offer a wide range of tours, including cultural, adventure, luxury, and
                                            customized itineraries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQ Section -->

    <!-- Blog Section -->
    <section class="section blog-section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="section-header text-center">
                        <h2 class="mb-2">Recent <span class="text-primary text-decoration-underline">Articles</span>
                        </h2>
                        <p class="sub-title">DreamsTour offers various blog resources that cater to travel enthusiasts,
                            with a focus on adventure, gear reviews, and travel tips.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <!-- Blog Item-->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                        <a href="blog-details.html" class="blog-img">
                            <img src="assets/img/blog/blog-01.jpg" alt="img">
                        </a>
                        <span class="badge bg-primary fs-13 fw-medium">Travel</span>
                        <div class="blog-info text-center">
                            <div class="d-inline-flex align-items-center justify-content-center">
                                <div class="d-inline-flex align-items-center border-end pe-3 me-3 mb-2">
                                    <a href="javascript:void(0);" class="d-flex align-items-center">
                                        <span class="avatar avatar-sm flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-01.jpg"
                                                class="rounded-circle border border-white" alt="img">
                                        </span>
                                        <p>Bryan Bradfield</p>
                                    </a>
                                </div>
                                <p class="d-inline-flex align-items-center text-white mb-2"><i
                                        class="isax isax-calendar-2 me-2"></i>14 May 2025</p>
                            </div>
                            <h5><a href="blog-details.html">Top 10 Hidden Gems places in Central Europe in 2025</a></h5>
                        </div>
                    </div>
                </div>
                <!-- /Blog Item-->

                <!-- Blog Item-->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                        <a href="blog-details.html" class="blog-img">
                            <img src="assets/img/blog/blog-02.jpg" alt="img">
                        </a>
                        <span class="badge bg-primary fs-13 fw-medium">Guide</span>
                        <div class="blog-info text-center">
                            <div class="d-inline-flex align-items-center justify-content-center">
                                <div class="d-inline-flex align-items-center border-end pe-3 me-3 mb-2">
                                    <a href="javascript:void(0);" class="d-flex align-items-center">
                                        <span class="avatar avatar-sm flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-02.jpg"
                                                class="rounded-circle border border-white" alt="img">
                                        </span>
                                        <p>Michell West</p>
                                    </a>
                                </div>
                                <p class="d-inline-flex align-items-center text-white mb-2"><i
                                        class="isax isax-calendar-2 me-2"></i>12 May 2025</p>
                            </div>
                            <h5><a href="blog-details.html">Exploring the World: Your Ultimate Dream Tour Itinerary</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- /Blog Item-->

                <!-- Blog Item-->
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item mb-4 wow fadeInUp" data-wow-delay="0.2s">
                        <a href="blog-details.html" class="blog-img">
                            <img src="assets/img/blog/blog-03.jpg" alt="img">
                        </a>
                        <span class="badge bg-primary fs-13 fw-medium">Rental</span>
                        <div class="blog-info text-center">
                            <div class="d-inline-flex align-items-center justify-content-center">
                                <div class="d-inline-flex align-items-center border-end pe-3 me-3 mb-2">
                                    <a href="javascript:void(0);" class="d-flex align-items-center">
                                        <span class="avatar avatar-sm flex-shrink-0 me-2">
                                            <img src="assets/img/users/user-03.jpg"
                                                class="rounded-circle border border-white" alt="img">
                                        </span>
                                        <p>Patricia Hasbro</p>
                                    </a>
                                </div>
                                <p class="d-inline-flex align-items-center text-white mb-2"><i
                                        class="isax isax-calendar-2 me-2"></i>14 May 2025</p>
                            </div>
                            <h5><a href="blog-details.html">New York City, USA - The City That Never Sleeps</a></h5>
                        </div>
                    </div>
                </div>
                <!-- /Blog Item-->

            </div>
            <div class="text-center view-all wow fadeInUp">
                <a href="blog-grid.html" class="btn btn-dark d-inline-flex align-items-center">View All Articles<i
                        class="isax isax-arrow-right-3 ms-2"></i></a>
            </div>
        </div>
    </section>
    <!-- /Blog Section -->

    <!-- Support Section -->
    <section class="support-section bg-primary">
        <div class="horizontal-slide d-flex" data-direction="left" data-speed="slow">
            <div class="slide-list d-flex">
                <div class="support-item">
                    <h5>Personalized Itineraries</h5>
                </div>
                <div class="support-item">
                    <h5>Comprehensive Planning</h5>
                </div>
                <div class="support-item">
                    <h5>Expert Guidance</h5>
                </div>
                <div class="support-item">
                    <h5>Local Experience</h5>
                </div>
                <div class="support-item">
                    <h5>Customer Support</h5>
                </div>
                <div class="support-item">
                    <h5>Sustainability Efforts</h5>
                </div>
                <div class="support-item">
                    <h5>Multiple Regions</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- /Support Section -->


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
        document.querySelector('form').addEventListener('submit', function (e) {
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
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('flight-form');
    if (!form) return;

    form.addEventListener('submit', function (e) {
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
