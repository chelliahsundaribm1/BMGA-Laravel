@extends('layouts.app')
@section('content')

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Settings</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-grid-55"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
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

                <!-- Profile Settings -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card settings mb-0">
                        <div class="card-header">
                            <h6>Settings</h6>
                        </div>
                        <div class="card-body">
                            <div class="settings-link d-flex align-items-center flex-wrap">
                                                           @include('admin.settingslink')

                            </div>

                            <div>
                                <div>
                                    <h6 class="mb-3">Plans & Billing</h6>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 d-flex">
                                        <div class="card shadow-none bg-gray-transparent flex-fill">
                                            <div class="card-body">
                                                <div class="border-bottom d-flex align-items-center justify-content-between mb-3 pb-3">
                                                    <h6 class="fw-medium">Active Plan</h6>
                                                    <a href="#" class="btn btn-light btn-sm">Download PDF</a>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between border-bottom mb-4 pb-4">
                                                    <div>
                                                        <h5 class="mb-1 fs-18">Standard Plan</h5>
                                                        <p class="fs-14">Valid till: May 2025 - Jun 2025</p>
                                                    </div>
                                                    <div>
                                                        <h4>$199</h4>
                                                        <span class="d-block fs-14">per year</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <a href="#" class="btn btn-light btn-sm me-2">Cancel Subscription</a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#price_plane" class="btn btn-primary btn-sm">Update Plan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 d-flex">
                                        <div class="card shadow-none bg-gray-transparent flex-fill">
                                            <div class="card-body">
                                                <div class="border-bottom d-flex align-items-center justify-content-between mb-3 pb-3">
                                                    <h6 class="fw-medium">Saved Cards</h6>
                                                    <a href="#" class="btn btn-light btn-sm d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_card"><i class="isax isax-add me-1"></i>Add New Card</a>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col-md-6">
                                                        <div class="card mb-0">
                                                            <div class="card-body p-3">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <span class="payment-img d-flex align-items-center justify-content-center flex-shrink-0 rounded border me-2">
                                                                        <img src="assets/img/icons/visa-3.svg" alt="">
                                                                    </span>
                                                                    <div>
                                                                        <span class="fs-14 mb-1 d-block">Credit Card</span>
                                                                        <h6 class="fs-14 fw-medium text-truncate">Visa •••• 1568</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <a href="#" class="btn btn-primary btn-sm">Default</a>
                                                                    <div class="d-flex align-items-center edit-delete-icon">
                                                                        <a href="#" class="avatar rounded-circle border me-2" data-bs-toggle="modal" data-bs-target="#edit_card">
                                                                            <i class="isax isax-edit fs-14"></i>
                                                                        </a>
                                                                        <a href="#" class="avatar rounded-circle border" data-bs-toggle="modal" data-bs-target="#delete-list">
                                                                            <i class="isax isax-trash fs-14"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card mb-0">
                                                            <div class="card-body p-3">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <span class="payment-img d-flex align-items-center justify-content-center flex-shrink-0 rounded border me-2">
                                                                        <img src="assets/img/icons/visa-2.svg" alt="">
                                                                    </span>
                                                                    <div>
                                                                        <span class="fs-14 mb-1 d-block">Debit Card</span>
                                                                        <h6 class="fs-14 fw-medium text-truncate">Mastercard •••• 1279</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <a href="#" class="text-primary text-decoration-underline fs-14">Set as Default</a>
                                                                    <div class="d-flex align-items-center edit-delete-icon">
                                                                        <a href="#" class="avatar rounded-circle border me-2" data-bs-toggle="modal" data-bs-target="#edit_card">
                                                                            <i class="isax isax-edit fs-14"></i>
                                                                        </a>
                                                                        <a href="#" class="avatar rounded-circle border" data-bs-toggle="modal" data-bs-target="#delete-list">
                                                                            <i class="isax isax-trash fs-14"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card hotel-list mb-0">
                                    <div class="card-body p-0">
                                        <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                            <h6>Transaction History</h6>
                                            <div class="d-flex align-items-center flex-wrap">
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Status
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Paid</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Cancelled</a>
                                                        </li>
                                                    </ul>
                                                </div>                                            
                                            </div>
                                        </div>
    
                                        <div class="custom-datatable-filter table-responsive">
                                            <table class="table datatable">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Plan Name</th>
                                                        <th>Payment Method</th>
                                                        <th>Subscribed On</th>
                                                        <th>Last Date</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-1245</a></td>  
                                                        <td><h6 class="fs-14 fw-medium">Standard Plan</h6></td>                                              
                                                        <td>Credit Card</td>
                                                        <td>15 May 2025</td>
                                                        <td>14 Jun 2025</td>
                                                        <td>$199</td>
                                                        <td>
                                                            <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                                <a href="#"><i class="isax isax-document-download"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-3215</a></td>  
                                                        <td><h6 class="fs-14 fw-medium">Basic Plan</h6></td>                                              
                                                        <td>Debit Card</td>
                                                        <td>15 Apr 2025</td>
                                                        <td>14 May 2025</td>
                                                        <td>$99</td>
                                                        <td>
                                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                                <a href="#"><i class="isax isax-document-download"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-4581</a></td>  
                                                        <td><h6 class="fs-14 fw-medium">Premium Plan</h6></td>                                              
                                                        <td>Paypal</td>
                                                        <td>15 Mar 2025</td>
                                                        <td>14 Apr 2025</td>
                                                        <td>$299</td>
                                                        <td>
                                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                                <a href="#"><i class="isax isax-document-download"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-6545</a></td>  
                                                        <td><h6 class="fs-14 fw-medium">Basic Plan</h6></td>                                              
                                                        <td>Debit Card</td>
                                                        <td>15 Feb 2025</td>
                                                        <td>14 Mar 2025</td>
                                                        <td>$99</td>
                                                        <td>
                                                            <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                                <a href="#"><i class="isax isax-document-download"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#transaction_detail">#IN-5769</a></td>  
                                                        <td><h6 class="fs-14 fw-medium">Standard Plan</h6></td>                                              
                                                        <td>Stripe</td>
                                                        <td>15 Jan 2025</td>
                                                        <td>14 Feb 2025</td>
                                                        <td>$99</td>
                                                        <td>
                                                            <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Paid</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#transaction_detail" class="me-2"><i class="isax isax-eye"></i></a>
                                                                <a href="#"><i class="isax isax-document-download"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Profile Settings -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection 