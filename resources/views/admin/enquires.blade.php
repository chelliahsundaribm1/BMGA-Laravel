@extends('layouts.app')
@section('content')

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Enquiries</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Enquiries</li>
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
                    <!-- Booking Header -->
                    <div class="card booking-header">
                        <div class="card-body header-content d-flex align-items-center justify-content-between flex-wrap ">
                            <div>
                                <h6>Enquiries</h6>
                                <p class="fs-14 text-gray-6 fw-normal">No of  Enquiries : 200</p>
                            </div>

                            <div class="d-flex align-items-center flex-wrap">
                                <div class="input-icon-start position-relative">
                                    <span class="icon-addon">
										<i class="isax isax-calendar-edit fs-14"></i>
									</span>
                                    <input type="text" class="form-control date-range bookingrange" placeholder="Select" value="Academic Year : 2024 / 2025">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking Header -->

                    <!-- Hotel-Booking List -->
                    <div class="card hotel-list">
                        <div class="card-body p-0">
                            <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                <h6 class="">Enquiries List</h6>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="input-icon-start position-relative">
                                        <span class="icon-addon">
                                            <i class="isax isax-search-normal-1 fs-14"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>

                            <!-- Hotel List -->
                            <div class="custom-datatable-filter table-responsive">
                                <table class="table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Type</th>
                                            <th>Enquiry for</th>
                                            <th>Customer Info</th>
                                            <th>Status</th>
                                            <th>Inquired On</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Hotel</a></td>
                                            <td>
                                               <h6 class="fs-14">Vivanta</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Adrian Markel</p>
                                                <a href="agent-enquiry-details.html" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="agent-enquiry-details.html"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Cars</a></td>
                                            <td>
                                               <h6 class="fs-14">Toyota Camry SE 400</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Timothy Brewer</p>
                                                <a href="agent-enquiry-details.html" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="agent-enquiry-details.html"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Flight</a></td>
                                            <td>
                                               <h6 class="fs-14">SkyBound 102</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Mark Arrington</p>
                                                <a href="agent-enquiry-details.html" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="agent-enquiry-details.html"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Cruise</a></td>
                                            <td>
                                               <h6 class="fs-14">Super Aquamarine</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Kenneth Palmer</p>
                                                <a href="agent-enquiry-details.html" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="agent-enquiry-details.html"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0);" class="link-primary fw-medium">Tours</a></td>
                                            <td>
                                               <h6 class="fs-14">PlayPalooza Part</h6>
                                            </td>
                                            <td>
                                                <p class="fs-14 fw-n mb-1">Ronald Moultrie</p>
                                                <a href="agent-enquiry-details.html" class="link-primary">View Details</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                            <td>15 May 2025</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="agent-enquiry-details.html"><i class="isax isax-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /Hotel List -->

                        </div>
                    </div>
                    <!-- /Hotel-Booking List -->

                   
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->


@endsection