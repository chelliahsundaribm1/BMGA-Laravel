@extends('layouts.app')
@section('content')


    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Listings</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listings</li>
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

            <div class="row">

                <!-- Sidebar -->
                  @include('admin.sidebar')

                <!-- /Sidebar -->

                <div class="col-xl-9 col-lg-8"> 
                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <div class="place-nav listing-nav">
                            <ul class="nav mb-2">
                             
                                <li class="me-2">
                                    <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#Hotels-list">
                                        Hotels
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#flight-list">
                                        Flights
                                    </a>
                                </li>
                                <li class="me-2">
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cars-list">
                                        Cars
                                    </a>
                                </li>
                                <li class="me-2">
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cruise-list">
                                        Cruise
                                    </a>
                                </li>
                                <li class="me-2">
                                    <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Tour-list">
                                        Tour
                                    </a>
                                </li>
                              
                            </ul>
                        </div>
                        <div class="dropdown mb-4">
                            <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                All Listing
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">

                        <!-- Hotels List -->
                        <div class="tab-pane fade active show" id="Hotels-list">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of  Listings : 200</p>
                                    </div>
                                   <div>
                                    <a href="add-hotel.html" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                   </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-01.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">Hotel Plaza Athenee</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$500 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
        
                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-05.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">The Luxe Haven</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$600 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
        
                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-06.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">The Urban Retreat</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$500 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
        
                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-07.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">The Grand Horizon</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$400 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#" class="me-2 d-inline-flex"><i class="isax isax-edit"></i></a>
                                                    <a href="#" class="me-2 d-inline-flex"><i class="isax isax-trash"></i></a>
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
        
                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-08.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">Hotel Evergreen </a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$550 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
        
                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-09.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">Stardust Hotel</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$450 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
        
                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-10.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">Hotel Serene Valley</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$350 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
        
                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-11.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">Hotel Skyline Vista</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Chapel Street, Salford</p> 
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$700 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->
        
                                <!-- Hotel Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="hotel-details.html">
                                                <img src="assets/img/hotels/hotel-12.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-hotel.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="hotel-details.html">Hotel Aurora Bliss</a></h5>
                                            <p class="d-flex align-items-center mb-2"><i class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <h5 class="text-primary text-nowrap me-2">$650 <span class="fs-14 fw-normal text-default">/ Night</span></h5>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Hotel Grid -->

                                <div class="col-md-12">
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
                        <!-- /Hotels List -->
        
                        <!-- Cars List -->
                        <div class="tab-pane fade" id="Cars-list">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of  Listings : 200</p>
                                    </div>
                                   <div>
                                    <a href="add-car.html" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                   </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-06.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">Toyota Camry SE 400</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->
        
                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-07.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">Ford Mustang 4.0 AT</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->
        
                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-08.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">Ferrari 458 MM Special</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->
        
                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-09.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">Mercedes-benz Convertible</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$400 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->
        
                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-10.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">BMW 3.0 Gran Turismo</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>                                        
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$550 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->
        
                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-11.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">Infiniti QX60 </a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->
        
                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-12.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">Toyota 86 Sports</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>                                  
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->
        
                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-13.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">Jeep Wrangler</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->
        
                                <!-- Car Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="car-details.html">
                                                <img src="assets/img/cars/car-14.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-car.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <span class="badge badge-secondary  fs-10 fw-medium me-1">Sedan</span>
                                                </div>
                                            </div>
                                            <h5 class="mb-1 text-truncate"><a href="car-details.html">Jaguar XK</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>                                     
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Car Grid -->

                                <div class="col-md-12">
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
                        <!-- /Cars List -->
        
                        <!-- Cruise List -->
                        <div class="tab-pane fade" id="Cruise-list">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of  Listings : 200</p>
                                    </div>
                                   <div>
                                    <a href="add-cruise.html" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                   </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="cruise-details.html">
                                                <img src="assets/img/cruise/cruise-05.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-cruise.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Super Aquamarine</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->
        
                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/cruise/cruise-12.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-cruise.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Bonnie Yacht</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->
        
                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/cruise/cruise-09.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-cruise.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Coral Cruiser</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->
        
                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/cruise/cruise-09.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="#" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Harbor Haven</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->
        
                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="cruise-details.html">
                                                <img src="assets/img/cruise/cruise-01.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-cruise.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Albert Yacht</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$550 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->
        
                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/cruise/cruise-11.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-cruise.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Shelly Yacht</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->
        
                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="cruise-details.html">
                                                <img src="assets/img/cruise/cruise-07.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-cruise.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Sunny Sailor</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->
        
                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="cruise-details.html">
                                                <img src="assets/img/cruise/cruise-06.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-cruise.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Ocean Voyager</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
        
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->
        
                                <!-- Cruise Grid -->
                                <div class="col-xl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="cruise-details.html">
                                                <img src="assets/img/cruise/cruise-08.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-cruise.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="cruise-details.html">Sailor’s Delight</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cruise Grid -->

                                <div class="col-md-12">
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
                        <!-- /Cruise List -->
        
                        <!-- Tour List -->
                        <div class="tab-pane fade" id="Tour-list">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of  Listings : 200</p>
                                    </div>
                                   <div>
                                    <a href="add-hotel.html" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                   </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-07.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Rainbow Mountain Valley</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Ciutat Vella, Barcelona</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->
        
                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-08.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Mystic Falls</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Oxford Street, London</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->
        
                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-09.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Crystal Lake</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Princes Street, Edinburgh</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->
        
                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-10.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Majestic Peaks</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Deansgate, Manchester</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$400 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->
        
                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-11.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Enchanted Forest</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>King’s Road, Chelsea</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->
        
                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-12.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Serene Bay</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Bold Street, Liverpool</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->
        
                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-13.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Ancient Ruins</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Broad Street, Bristol</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->
        
                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-14.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Mystical Caves</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Chapel Street, Salford</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->
        
                                <!-- Tours Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="tour-details.html">
                                                <img src="assets/img/tours/tours-15.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-tour.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="mb-1 text-truncate"><a href="tour-details.html">Frosted Peaks</a></h5>
                                            <p class="d-flex align-items-center mb-3"><i class="isax isax-location5 me-2"></i>Castle Street, Cambridge</p>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Tours Grid -->

                                <div class="col-md-12">
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
                        <!-- /Tour List -->

                        <!-- Flight List -->
                        <div class="tab-pane fade" id="flight-list">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                    <div>
                                        <h5 class="mb-1">Listings</h5>
                                        <p>No of  Listings : 200</p>
                                    </div>
                                   <div>
                                    <a href="add-flight.html" class="btn btn-primary d-inline-flex align-items-center me-0"><i class="isax isax-add me-1 fs-16"></i>Add Listing</a>
                                   </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-09.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">Antonov An-32</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Texas</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$500 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
        
                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-08.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">SkyBound 102</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Indigo</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Dubai</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$600 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
        
                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-06.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">Nimbus 345</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Indigo</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Dubai</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#active_list" data-bs-toggle="modal" class="d-flex align-items-center text-danger"><i class="isax isax-info-circle me-1"></i>Inactive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
        
                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-01.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">AstraFlight 215</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Indigo</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Frankfurt</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$300 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
        
                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-02.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">Cloudrider 789</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Dallas</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$550 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
        
                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-03.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">Aether Express 901</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Indigo</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Seoul</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$450 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
        
                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-07.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">Voyager 658</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Sydney</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$350 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
        
                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-04.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">Silverwing 505</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at London</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$700 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
        
                                <!-- Flight Grid -->
                                <div class="col-xxl-4 col-md-6 d-flex">
                                    <div class="place-item mb-4 flex-fill">
                                        <div class="place-img">
                                            <a href="flight-details.html">
                                                <img src="assets/img/flight/flight-05.jpg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="edit-delete-item d-flex align-items-center">
                                                <a href="edit-flight.html" class="me-2 d-inline-flex align-items-center justify-content-center"><i class="isax isax-edit"></i></a>
                                                <a href="#" class="d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete-list"><i class="isax isax-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="place-content">
                                            <h5 class="text-truncate mb-1"><a href="flight-details.html">Altair 333</a></h5>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="avatar avatar-sm me-2">
                                                    <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                                                </span>
                                                <p class="fs-14 mb-0 me-2">Air India</p>
                                                <p class="fs-14 mb-0"><i class="ti ti-point-filled text-primary me-2"></i>1-stop at Los Angeles</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                                <div class="d-flex flex-wrap align-items-center me-2">
                                                    <h5 class="text-primary">$650 <span class="fs-14 text-gray-6 fw-normal">/ day</span></h5>
                                                </div>
                                                <div class="d-flex align-items-center lh-1">
                                                    <a href="#inactive_list" data-bs-toggle="modal" class="d-flex align-items-center"><i class="isax isax-info-circle me-1"></i>Active</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Flight Grid -->
                                
                                <div class="col-md-12">
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
                        <!-- /Flight List -->
        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection