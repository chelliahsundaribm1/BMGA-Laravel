@extends('layouts.app')

@section('content')


    <!-- Main Wrapper -->
    <div class="main-wrapper coming-soon-wrapper">
        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                    <div class="col-md-5 mx-auto">
                        <div class="comming-soon-pg">
                            <div class="p-4 text-center">
                                <img src="assets/img/logo-dark.svg" alt="logo" class="img-fluid">
                            </div>
                            <div class="text-center">
                                <h1>Coming Soon</h1>
                                <ul class="d-inline-flex align-items-center justify-content-center counting-box">
                                    <li>
                                        <div class="counts-card">
                                            <h3 class="days">48</h3>
                                            <p>Days</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counts-card">
                                            <h3 class="hours">5</h3>
                                            <p>Hours</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counts-card">
                                            <h3 class="minutes">48</h3>
                                            <p>Minutes</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counts-card">
                                            <h3 class="seconds">23</h3>
                                            <p>Seconds</p>
                                        </div>
                                    </li>
                                </ul>
                                <p class="text-white">We’re working on something exciting to elevate your experience. Stay tuned for our upcoming launch!</p>
                                <div>
                                    <div class="subscribe-form">
                                        <div class="mb-3 position-relative">
                                            <h6 class="text-center text-white mb-3">Subscribe to get notified</h6>
                                            <div class="bg-transparent border  p-2 d-flex align-items-center rounded-pill ps-0">
                                                <input type="email" class="form-control bg-transparent border-0" placeholder="Enter Your Email">
                                                <a href="javascript:void(0);" class="btn btn-primary">Subscribe</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-center align-items-center pb-4">
                                        <a href="javascript:void(0);" class="btn btn-primary rounded-circle btn-icon btn-sm me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-primary rounded-circle btn-icon btn-sm me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-primary rounded-circle btn-icon btn-sm me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-primary rounded-circle btn-icon btn-sm d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-linkedin"></i>
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
    <!-- /Main Wrapper -->

@endsection