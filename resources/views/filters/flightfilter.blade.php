         <div class="col-xl-3 col-lg-4 theiaStickySidebar">
             <div class="card filter-sidebar mb-4 mb-lg-0">
                 <div class="card-header d-flex align-items-center justify-content-between">
                     <h5>Filters</h5>
                     <a href="javascript:void(0);" class="fs-14 link-primary">Reset</a>
                 </div>
                 <div class="card-body p-0">
                     <form action="search.html">

                         <div class="accordion accordion-list">
                             <!-- Price -->

                             @php
                                 $prices = collect($faresets)->pluck('fF');
                                 $minPrice = $prices->min();
                                 $maxPrice = $prices->max();
                             @endphp

                             <div class="accordion-item border-bottom p-3">
                                 <div class="accordion-header">
                                     <div class="accordion-button p-0" data-bs-toggle="collapse"
                                         data-bs-target="#accordion-popular">
                                         <i class="isax isax-coin me-2 text-primary"></i>Price Per Flights
                                     </div>
                                 </div>
                                 <div id="accordion-popular" class="accordion-collapse collapse show">
                                     <div class="accordion-body">
                                         <div class="filter-range">
                                             <input type="text" id="range_03" name="price_range"
                                                 data-min="{{ $minPrice }}" data-max="{{ $maxPrice }}"
                                                 data-from="{{ $minPrice }}" data-to="{{ $maxPrice }}">
                                         </div>
                                         <div class="filter-range-amount">
                                             <p class="fs-14">Range:
                                                 <span class="text-gray-9 fw-medium">
                                                     ₹{{ number_format($minPrice) }} - ₹{{ number_format($maxPrice) }}
                                                 </span>
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- Stops -->

                             <div class="accordion-item border-bottom p-3">
                                 <div class="accordion-header">
                                     <div class="accordion-button p-0" data-bs-toggle="collapse"
                                         data-bs-target="#accordion-stops" aria-expanded="true"
                                         aria-controls="accordion-stops" role="button">
                                         <i class="isax isax-route-square me-2 text-primary"></i>Number of Stops
                                     </div>
                                 </div>
                                 <div id="accordion-stops" class="accordion-collapse collapse show">
                                     <div class="accordion-body">
                                         @foreach (['Non-stop' => 0, '1 Stop' => 1, '2+ Stops' => 2] as $label => $value)
                                             <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                 <input class="form-check-input ms-0 mt-0" name="stops[]"
                                                     type="checkbox" value="{{ $value }}"
                                                     id="stops_{{ $value }}">
                                                 <label class="form-check-label ms-2"
                                                     for="stops_{{ $value }}">{{ $label }}</label>
                                             </div>
                                         @endforeach
                                     </div>
                                 </div>
                             </div>
                             <!-- Airline -->

                             <div class="accordion-item border-bottom p-3">
                                 <div class="accordion-header">
                                     <div class="accordion-button p-0" data-bs-toggle="collapse"
                                         data-bs-target="#accordion-flight" aria-expanded="true"
                                         aria-controls="accordion-flight" role="button">
                                         <i class="isax isax-airplane4 me-2 text-primary"></i>Airline Names
                                     </div>
                                 </div>
                                 <div id="accordion-flight" class="accordion-collapse collapse show">
                                     <div class="accordion-body">
                                         <div class="more-content">
                                             @foreach ($airlineFlightCounts as $airline)
                                                 <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                     <input class="form-check-input ms-0 mt-0" name="airlines[]"
                                                         type="checkbox" id="airline_{{ $airline['code'] }}"
                                                         value="{{ $airline['code'] }}">
                                                     <label class="form-check-label ms-2"
                                                         for="airline_{{ $airline['code'] }}">
                                                         {{ $airline['name'] }}
                                                     </label>
                                                 </div>
                                             @endforeach

                                         </div>
                                         @if (count($airlineFlightCounts) > 5)
                                             <a href="javascript:void(0);" class="more-view fw-medium fs-14">Show
                                                 More</a>
                                         @endif
                                     </div>

                                 </div>
                             </div>

                             <!-- Departure Time -->
                             <div class="accordion-item border-bottom p-3">
                                 <div class="accordion-header">
                                 
                                     <div class="accordion-button p-0" data-bs-toggle="collapse"
                                         data-bs-target="#accordion-departure">
                                         <i class="isax isax-clock me-2 text-primary"></i>Departure Time
                                     </div>
                                 </div>
                                 <div id="accordion-departure" class="accordion-collapse collapse show">
                                     <div class="accordion-body">
                                         <input type="text" class="form-control time-range" name="departure_time"
                                             id="departure_time">
                                     </div>
                                 </div>
                             </div>

                             <!-- Cabin -->

                             <div class="accordion-item border-bottom p-3">
                                 <div class="accordion-header">
                                     <div class="accordion-button p-0" data-bs-toggle="collapse"
                                         data-bs-target="#accordion-cabin" aria-expanded="true"
                                         aria-controls="accordion-cabin" role="button">
                                         <i class="isax isax-home-2 me-2 text-primary"></i>Cabin Class
                                     </div>
                                 </div>
                                 <div id="accordion-cabin" class="accordion-collapse collapse show">
                                     <div class="accordion-body">
                                         <div class="more-content">
                                             @foreach ($cabinClasses as $cabin)
                                                 <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                     <input class="form-check-input ms-0 mt-0" name="cabins[]"
                                                         type="checkbox" id="cabin_{{ $cabin['id'] }}"
                                                         value="{{ $cabin['id'] }}">
                                                     <label class="form-check-label ms-2"
                                                         for="cabin_{{ $cabin['id'] }}">
                                                         {{ $cabin['name'] }}
                                                     </label>
                                                 </div>
                                             @endforeach

                                         </div>
                                         <a href="javascript:void(0);" class="more-view fw-medium fs-14">Show
                                             More</a>
                                     </div>
                                 </div>
                             </div>

                             <!-- Refund -->

                             <div class="accordion-item border-bottom p-3">
                                 <div class="accordion-header">
                                     <div class="accordion-button p-0" data-bs-toggle="collapse"
                                         data-bs-target="#accordion-refund" aria-expanded="true"
                                         aria-controls="accordion-refund" role="button">
                                         <i class="isax isax-shield-check me-2 text-primary"></i>Refundable
                                     </div>
                                 </div>
                                 <div id="accordion-refund" class="accordion-collapse collapse show">
                                     <div class="accordion-body pt-2">
                                         <div class="form-check d-flex align-items-center ps-0 mb-2">
                                             <input class="form-check-input ms-0 mt-0" name="refundable"
                                                 type="checkbox" id="refundable">
                                             <label class="form-check-label ms-2" for="refundable">Only show
                                                 refundable</label>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- Fare Type -->
                             @php
                                 $fareTypes = collect($faresets)
                                     ->pluck('fareIdentifier.name')
                                     ->unique()
                                     ->filter() // remove nulls or empty values
                                     ->values();
                             @endphp

                             <div class="accordion-item border-bottom p-3">
                                 <div class="accordion-header">
                                     <div class="accordion-button p-0" data-bs-toggle="collapse"
                                         data-bs-target="#accordion-fare">
                                         <i class="isax isax-ticket-star me-2 text-primary"></i>Fare Type
                                     </div>
                                 </div>
                                 <div id="accordion-fare" class="accordion-collapse collapse show">
                                     <div class="accordion-body">
                                         @foreach ($fareTypes as $fareType)
                                             <div class="form-check">
                                                 <input class="form-check-input" type="checkbox" name="fare_types[]"
                                                     value="{{ strtolower($fareType) }}">
                                                 <label class="form-check-label">{{ $fareType }}</label>
                                             </div>
                                         @endforeach
                                     </div>
                                 </div>
                             </div>

                             <!-- Reviews -->

                             <div class="accordion-item border-bottom p-3">
                                 <div class="accordion-header">
                                     <div class="accordion-button p-0" data-bs-toggle="collapse"
                                         data-bs-target="#accordion-brand" aria-expanded="true"
                                         aria-controls="accordion-brand" role="button">
                                         <i class="isax isax-discount-shape me-2 text-primary"></i>Reviews
                                     </div>
                                 </div>
                                 <div id="accordion-brand" class="accordion-collapse collapse show">
                                     <div class="accordion-body">
                                         <div class="form-check d-flex align-items-center ps-0 mb-2">
                                             <input class="form-check-input ms-0 mt-0" name="review1" type="checkbox"
                                                 id="review1">
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
                                             <input class="form-check-input ms-0 mt-0" name="review2" type="checkbox"
                                                 id="review2">
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
                                             <input class="form-check-input ms-0 mt-0" name="review3" type="checkbox"
                                                 id="review3">
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
                                             <input class="form-check-input ms-0 mt-0" name="review4" type="checkbox"
                                                 id="review4">
                                             <label class="form-check-label ms-2" for="review4">
                                                 <span class="rating d-flex align-items-center">
                                                     <i class="fas fa-star filled text-primary me-1"></i>
                                                     <i class="fas fa-star filled text-primary"></i>
                                                     <span class="ms-2">2 Star</span>
                                                 </span>
                                             </label>
                                         </div>
                                         <div class="form-check d-flex align-items-center ps-0 mb-0">
                                             <input class="form-check-input ms-0 mt-0" name="review5" type="checkbox"
                                                 id="review5">
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

         <script>
             $(document).ready(function() {
                 let $range = $("#range_03");
                 $range.ionRangeSlider({
                     type: "double",
                     min: $range.data('min'),
                     max: $range.data('max'),
                     from: $range.data('from'),
                     to: $range.data('to'),
                     prefix: "₹"
                 });
             });
         </script>

