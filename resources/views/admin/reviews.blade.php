@extends('layouts.app')
@section('content')

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Reviews</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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

                    <!-- Review Title -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <div>
                                    <h6>Reviews</h6>
                                    <p class="fs-14">No of Reviews : 60</p>
                                </div>
                                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                                    <div>
                                        <div class="input-icon-end position-relative">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-calendar-edit"></i>
                                            </span>
                                            <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Review Title -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-22.jpg" alt="user" class="img-fluid rounded-circle">
                                            </span>
                                            <div>
                                                <h6 class="fs-16">Derek Sanchez</h6>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <span class="fs-14 d-flex align-items-center">2 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                    <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.7</span>Fast and Reliable</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Hotel Booking (Hayat Hotel)</p>
                                            <p class="fs-16 mb-0">Booked a last-minute flight with ease, and everything went smoothly from start to finish</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                    </div>
                                </div>
                                <div class="review-reply border-top mt-3 pt-3">
                                    <form action="agent-review.html" class="reply-form">
                                        <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-20.jpg" alt="user" class="img-fluid rounded-circle">
                                            </span>
                                            <div>
                                                <h6 class="fs-16">Shirley Bryant</h6>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <span class="fs-14 d-flex align-items-center">3 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                    <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.2</span>Fantastic Experience</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Cuise Booking (Super Aquamarine)</p>
                                            <p class="fs-16 mb-0">Our first cruise was amazing, with great service, food, and excursions. Can’t wait to go again!</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                    </div>
                                </div>
                                <div class="review-reply border-top mt-3 pt-3">
                                    <form action="agent-review.html" class="reply-form">
                                        <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-04.jpg" alt="user" class="img-fluid rounded-circle">
                                            </span>
                                            <div>
                                                <h6 class="fs-16">James Hobson</h6>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <span class="fs-14 d-flex align-items-center">05 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                    <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.4</span>Amazing Tour</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Tour Booking (Joy Jubilee Jamboree)</p>
                                            <p class="fs-16 mb-0">The tour was well-organized, and the guides were knowledgeable and friendly—an unforgettable experience!</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                    </div>
                                </div>
                                <div class="review-reply border-top mt-3 pt-3">
                                    <form action="agent-review.html" class="reply-form">
                                        <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-28.jpg" alt="user" class="img-fluid rounded-circle">
                                            </span>
                                            <div>
                                                <h6 class="fs-16">Emma Bright</h6>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <span class="fs-14 d-flex align-items-center">08 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                    <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.5</span>Hassle-Free Booking</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Car Booking (Volkswagen Amarok)</p>
                                            <p class="fs-16 mb-0">The booking process was quick, and the car was ready on time with no issues and super convenient</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                    </div>
                                </div>
                                <div class="review-reply border-top mt-3 pt-3">
                                    <form action="agent-review.html" class="reply-form">
                                        <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Reviews -->
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="avatar avatar-lg rounded-circle flex-shrink-0 me-2">
                                                <img src="assets/img/users/user-25.jpg" alt="user" class="img-fluid rounded-circle">
                                            </span>
                                            <div>
                                                <h6 class="fs-16">Michael Cornejo</h6>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <span class="fs-14 d-flex align-items-center">10 days ago<i class="ti ti-point-filled text-gray mx-2"></i></span>
                                                    <p class="fs-14"><span class="badge badge-xs badge-warning text-gray-9 me-2">4.6</span>Perfect for Family</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="fs-14 d-flex align-items-center mb-2"><i class="isax isax-info-circle5 text-gray-9 me-2"></i>Info : Hotel Booking (Hotel Athenee)</p>
                                            <p class="fs-16 mb-0">The hotel was family-friendly, with spacious rooms and activities for the kids—great stay!</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm border add-reply me-2">Reply</a>
                                    </div>
                                </div>
                                <div class="bg-light rounded p-3 mt-3 ms-5">
                                    <p><span class="fw-medium">You Replied : </span> Booked a last-minute flight with ease, and everything went smoothly from start to finish</p>
                                </div>
                                <div class="review-reply border-top mt-3 pt-3">
                                    <form action="agent-review.html" class="reply-form">
                                        <textarea rows="3" class="form-control" placeholder="Add Comment"></textarea>
                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Reviews -->

                    <!-- Pagination -->
                    <nav class="pagination-nav">
                        <ul class="pagination justify-content-center justify-content-sm-end ">
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