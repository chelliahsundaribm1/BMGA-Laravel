@extends('layouts.app')

@section('content')

 <!-- Breadcrumb -->
 <div class="breadcrumb-bar breadcrumb-bg-01 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Wallet</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wallet</li>
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

                <!-- Wallet -->
                <div class="col-xl-9 col-lg-8">
                    <div class="row">

                        <!-- Wallet List -->
                        <div class="col-xl-5 col-lg-12 d-flex">
                            <div class="row flex-fill">
                                <div class="col-xl-6 col-lg-6 col-md-6  d-flex">
                                    <div class="card shadow-none mb-4 flex-fill">
                                        <div class="card-body">
                                            <span class="avatar avatar-lg rounded-circle bg-primary mb-3"><i class="isax isax-calendar-15 text-white"></i></span>
                                            <div class="mb-3">
                                                <p class="mb-0 text-truncate line-ellipsis-2">Wallet Balance</p>
                                                <h4>$4596</h4>
                                            </div>
                                            <p class="fs-14"><span class="text-teal fw-medium">+8%</span> last Month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6  d-flex">
                                    <div class="card shadow-none mb-4 flex-fill">
                                        <div class="card-body">
                                            <span class="avatar avatar-lg rounded-circle bg-secondary mb-3"><i class="isax isax-money-send5 text-white"></i></span>
                                            <div class="mb-3">
                                                <p class="mb-0 text-truncate line-ellipsis-2">Total Credit</p>
                                                <h4>$15659</h4>
                                            </div>
                                            <p class="fs-14"><span class="text-danger fw-medium">-6%</span> last Month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6  d-flex">
                                    <div class="card shadow-none mb-4 flex-fill">
                                        <div class="card-body">
                                            <span class="avatar avatar-lg rounded-circle bg-purple mb-3"><i class="isax isax-money-time5 text-white"></i></span>
                                            <div class="mb-3">
                                                <h4>$16598</h4>
                                                <p class="mb-0">Total Debit</p>
                                            </div>
                                            <p class="fs-14"><span class="text-teal fw-medium">+9%</span> last Month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6  d-flex">
                                    <div class="card shadow-none mb-4 flex-fill">
                                        <div class="card-body">
                                            <span class="avatar avatar-lg rounded-circle bg-teal mb-3"><i class="isax isax-money-time5 text-white"></i></span>
                                            <div class="mb-3">
                                                <h4>60</h4>
                                                <p class="mb-0">Transactions</p>
                                            </div>
                                            <p class="fs-14"><span class="text-teal fw-medium">+7%</span> last Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Wallet List -->

                        <!-- Wallet -->
                        <div class="col-xl-7 col-lg-12 d-flex">
                            <div class="card payment-details flex-fill mb-4">
                                <div class="card-header">
                                    <h5>Wallet</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Add Amount</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="tab-pane fade active show" id="wallet">
                                        <div class="d-flex align-items-center  flex-wrap mb-1">
                                            <h6 class="fs-16 me-3 mb-2">Payment Type</h6>
                                            <div class="d-flex align-items-center flex-wrap payment-form">
                                                <div class="form-check d-flex align-items-center me-3 mb-2">
                                                    <input class="form-check-input mt-0" type="radio" name="Radio" id="credit-card" value="credit-card" checked="">
                                                    <label class="form-check-label fs-14 ms-2" for="credit-card">
                                                        Credit / Debit Card
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center me-3 mb-2">
                                                    <input class="form-check-input mt-0" type="radio" name="Radio" id="paypal" value="paypal">
                                                    <label class="form-check-label fs-14 ms-2" for="paypal">
                                                        Paypal
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center me-0 mb-2">
                                                    <input class="form-check-input mt-0" type="radio" name="Radio" id="stripe" value="stripe">
                                                    <label class="form-check-label fs-14 ms-2" for="stripe">
                                                        Stripe
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="credit-card-details ">
                                            <div class="card-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-2">
                                                            <label class="form-label">Card Holder Name</label>
                                                            <div class="user-icon">
                                                                <span class="input-icon fs-14"><i class="isax isax-user"></i></span>
                                                                <input type="email" class="form-control ">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-2">
                                                            <label class="form-label">Card Number</label>
                                                            <div class="user-icon">
                                                                <span class="input-icon fs-14"><i class="isax isax-card-tick"></i></span>
                                                                <input type="email" class="form-control ">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Expire Date</label>
                                                            <div class="user-icon">
                                                                <span class="input-icon fs-14"><i class="isax isax-calendar-2"></i></span>
                                                                <input type="email" class="form-control datetimepicker">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">CVV</label>
                                                            <div class="user-icon">
                                                                <span class="input-icon fs-14"><i class="isax isax-check"></i></span>
                                                                <input type="email" class="form-control ">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Paypal -->
                                        <div class="paypal-details">
                                            <div class="mb-3">
                                                <h6 class="fs-16 ">Payment With Paypal</h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email Address</label>
                                                        <div class="user-icon">
                                                            <span class="input-icon fs-14"><i class="isax isax-sms"></i></span>
                                                            <input type="email" class="form-control ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <div class="user-icon">
                                                            <span class="input-icon fs-14"><i class="isax isax-lock"></i></span>
                                                            <input type="password" class="form-control pass-input">
                                                            <span class="input-icon toggle-password fs-14"><i class="isax isax-eye-slash"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Paypal -->

                                        <!-- Stripe -->
                                        <div class="stripe-details">
                                            <div class="mb-3">
                                                <h6 class="fs-16">Payment With Stripe</h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email Address</label>
                                                        <div class="user-icon">
                                                            <span class="input-icon fs-14"><i class="isax isax-sms"></i></span>
                                                            <input type="email" class="form-control ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <div class="user-icon">
                                                            <span class="input-icon fs-14"><i class="isax isax-lock"></i></span>
                                                            <input type="password" class="form-control pass-input">
                                                            <span class="input-icon toggle-password fs-14"><i class="isax isax-eye-slash"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Stripe -->
                                        
                                        <div class="d-flex align-items-center justify-content-end">
                                            <a href="javascript:void(0);" class="btn btn-primary">Add Payment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Wallet -->

                    </div>

                    <!-- Transactions -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                                <div>
                                    <h6>Transactions</h6>
                                    <p class="fs-14">No of Transactions : 60</p>
                                </div>
                                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
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
                    <!-- /Transactions -->

                    <!-- Transactions List -->
                    <div class="card hotel-list mb-0">
                        <div class="card-body p-0">
                            <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                                <h6>Transactions List</h6>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="input-icon-start  me-2 position-relative">
                                        <span class="icon-addon">
										<i class="isax isax-search-normal-1 fs-14"></i>
									</span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <div class="dropdown me-3">
                                        <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
										Status
									</a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Payment Type</th>
                                            <th>Credit / Debit</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-gray-9 fw-medium">Card</td>
                                            <td>Debit</td>
                                            <td>15 May 2025, 10:00 AM</td>
                                            <td><span class="text-danger">-$256</span></td>
                                            <td>$11,569</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-9 fw-medium">Paypal</td>
                                            <td>Credit</td>
                                            <td>20 May 2025, 11:20 AM</td>
                                            <td><span class="text-success">+$3000</span></td>
                                            <td>$11,569</td>
                                            <td>
                                                <span class="badge badge-secondary rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-9 fw-medium">Stripe</td>
                                            <td>Credit</td>
                                            <td>22 May 2025, 02:40 PM</td>
                                            <td><span class="text-success">+$4000</span></td>
                                            <td>$12,497</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-9 fw-medium">Card</td>
                                            <td>Debit</td>
                                            <td>12 Jun 2025, 05:15 PM</td>
                                            <td><span class="text-danger">-$600</span></td>
                                            <td>$14,284</td>
                                            <td>
                                                <span class="badge badge-danger rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Cancelled</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-9 fw-medium">Card</td>
                                            <td>Debit</td>
                                            <td>17 Jun 2025, 09:30 AM</td>
                                            <td><span class="text-success">+$11,569</span></td>
                                            <td>$13,025</td>
                                            <td>
                                                <span class="badge badge-success rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Completed</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Transactions List -->

                </div>
                <!-- /Wallet -->

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
    
@endsection