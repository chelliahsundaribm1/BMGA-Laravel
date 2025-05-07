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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="isax isax-grid-55"></i></a></li>
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
                        <div class="card-body pb-3">
                            <div class="settings-link d-flex align-items-center flex-wrap">
                           @include('admin.settingslink')
                            </div>

                            <!-- Settings Content -->
                       <form action="agent-settings.html">
                            <!-- Basic Information -->
                            <div class="settings-content mb-4">
                                <h6 class="fs-16 mb-3">Basic Information</h6>
                                <div class="row gy-3">
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/img/users/user-lg-26.jpg" alt="Profile Image" class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3">
                                            <div>
                                                <p class="fs-14 text-gray-6 mb-2">Recommended dimensions are 400 x 400 pixels.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <label class="upload-btn" for="fileUpload">Upload</label>
                                                        <input type="file" id="fileUpload" hidden>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-md">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control">
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <div class="settings-content">
                                <h6 class="fs-16 mb-3">Address Information</h6>
                                <div class="row gy-3">
                                    <div class="col-lg-12">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label">Country</label>
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label">State</label>
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>California</option>
                                            <option>Texas</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label">City</label>
                                        <select class="form-select">
                                            <option>Select</option>
                                            <option>New York</option>
                                            <option>Tokyo</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label">Postal Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex justify-content-end mt-4">
                                <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                            <!-- /Settings Content-->

                        </div>
                    </div>
                </div>
                <!-- /Profile Settings -->
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection 