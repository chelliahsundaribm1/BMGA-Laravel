@extends('layouts.app')

@section('content')


    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-02 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
            <div class="row align-items-center row-gap-4">
                <div class="col-xl-7 col-lg-7">
                    <div class="mb-4 mb-lg-0">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="mb-3">Reach Out to Our Dedicated Support Team</h2>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class="mb-2">Our team is ready to help. Your satisfaction is our priority</h6>
                            <p>Got a question, need advice, or looking for help? Our knowledgeable team is here to assist you every step of the way. We’re just a message or call away, ready to provide the guidance you need.</p>
                        </div>
                        <div class="border-bottom mb-4">
                            <div class="d-flex align-items-center mb-4">
                                <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><i class="isax isax-sms5 fs-24"></i></span>
                                <div>
                                    <p class="fs-14 mb-0">Email Address</p>
                                    <h6 class="text-gray-6"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="12766077737f667d67607b7c747d52776a737f627e773c717d7f">[email&#160;protected]</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-4">
                            <div class="d-flex align-items-center mb-4">
                                <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><i class="isax isax-call-calling5 fs-24"></i></span>
                                <div>
                                    <p class="fs-14 mb-0">Phone Number</p>
                                    <h6 class="text-gray-6">+1 81649 48103</h6>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-lg rounded-circle bg-light  text-gray-6 me-2"><i class="isax isax-map-15 fs-24"></i></span>
                                <div>
                                    <p class="fs-14 mb-0">Our Location</p>
                                    <h6 class="text-gray-6">2077 Chicago Avenue Orosi, CA 93647</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="card bg-light-200 shadow-none mb-0">
                        <div class="card-body">
                            <div class="mb-3">
                                <h2 class="mb-1">Get in Touch</h2>
                                <p class="text-gray-6 mb-1">How we can help you? Please write down your query</p>
                            </div>
                            <form action="contact-us.html">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Message <span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-grid">
                <iframe class="w-100" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection