@extends('layouts.app')

@section('content')


    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Notifications</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Notifications</li>
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
                         @include('user.sidebar')

                <!-- /Sidebar -->

                <!-- Notifications -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card shadow-none mb-0">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <h6>Notifications</h6>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="btn btn-light btn-sm d-flex align-items-center me-2"><i class="isax isax-tick-square me-2"></i>Mark all as Read</a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete All</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card notification-card">
                                <div class="card-body d-sm-flex align-items-center">
                                    <span class="avatar avatar-lg rounded-circle bg-teal flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
										<i class="isax isax-calendar-edit5"></i>
									</span>
                                    <div class="flex-fill">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="fs-16">Booking Confirmation</h6>
                                            <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </div>
                                        <p class=" mb-1">
                                            Your booking for the <span class="text-gray-9 fw-medium mx-1"> Super Aquamarine</span> is confirmed! Departure on <span class="text-gray-9 fw-medium mx-1"> 03 Oct 2024</span> from
                                            <span class="text-gray-9 fw-medium ms-1"> Barcelona</span> . <i class="ti ti-point-filled text-primary"></i>
                                        </p>
                                        <p class="text-gray-9">2 mins ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card notification-card">
                                <div class="card-body d-sm-flex align-items-center">
                                    <span class="avatar avatar-lg rounded-circle bg-pink flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
										<i class="isax isax-note-26"></i>
									</span>
                                    <div class="flex-fill">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="fs-16">Thank You Post-Trip</h6>
                                            <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </div>
                                        <p class="mb-1">Thank you for traveling with Dream Tour! We hope you enjoyed your trip.</p>
                                        <p class="text-gray-9">10 mins ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card notification-card">
                                <div class="card-body d-sm-flex align-items-center">
                                    <span class="avatar avatar-lg rounded-circle bg-purple flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
										<i class="isax isax-calendar-remove5"></i>
									</span>
                                    <div class="flex-fill">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="fs-16">Rescheduling Notification</h6>
                                            <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </div>
                                        <p class=" mb-1">
                                            Your Hotel booking of <span class="text-gray-9 fw-medium mx-1"> Suite Room</span> on <span class="text-gray-9 fw-medium mx-1"> 15 Jan 2025</span> has been rescheduled to
                                            <span class="text-gray-9 fw-medium ms-1"> 20 May 2025</span>
                                        </p>
                                        <p class="text-gray-9">1 day ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card notification-card mb-0">
                                <div class="card-body d-sm-flex align-items-center">
                                    <span class="avatar avatar-lg rounded-circle bg-primary flex-shrink-0 me-sm-3 mb-3 mb-sm-0">
										<i class="isax isax-info-circle5"></i>
									</span>
                                    <div class="flex-fill">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="fs-16">Pre-Tour Information</h6>
                                            <a href="javascript:void(0);" class="notification-delete-btn btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#delete_modal">Delete</a>
                                        </div>
                                        <p class=" mb-1">
                                            Your<span class="text-gray-9 fw-medium mx-1">Mountain Valley</span> is on <span class="text-gray-9 fw-medium mx-1">15 May 2024.</span> Please arrive at los Angeles
                                        </p>
                                        <p class="text-gray-9">2 mins ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Notifications -->

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

    
@endsection