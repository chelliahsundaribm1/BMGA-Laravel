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
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                        class="isax isax-grid-55"></i></a></li>
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
                            <form action="{{ route('admin.company.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Basic Information -->
                                <div class="settings-content mb-4">
                                    <h6 class="fs-16 mb-3">Company Information</h6>
                                    <div class="row gy-3">
                                        <!-- Website Logo -->
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">

                                                <img src="{{ $company && $company->icon ? asset($company->icon) : asset('assets/default/tempLogo.png') }}"
                                                    alt="Website Logo"
                                                    class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3">

                                                <div>
                                                    <p class="fs-14 text-gray-6 mb-2">Website Logo</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <label class="upload-btn" for="iconUpload">Upload</label>
                                                            <input type="file" name="icon" id="iconUpload" hidden>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-light btn-md">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Website Favicon -->
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ $company && $company->favicon ? asset($company->favicon) : asset('assets/default/tempLogo.png') }}"
                                                    alt="Website Logo"
                                                    class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3">
                                                <div>
                                                    <p class="fs-14 text-gray-6 mb-2">Website Favicon</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2">
                                                            <label class="upload-btn" for="faviconUpload">Upload</label>
                                                            <input type="file" name="favicon" id="faviconUpload" hidden>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-light btn-md">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Company Name -->
                                        <div class="col-lg-12">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $company->name ?? '' }}">
                                        </div>

                                        <!-- Email -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $company->email ?? '' }}">
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control"
                                                value="{{ $company->phone ?? '' }}">
                                        </div>
                                    </div>
                                </div>

                                <!-- Address Information -->
                                <div class="settings-content mb-4">
                                    <h6 class="fs-16 mb-3">Address Information</h6>
                                    <div class="row gy-3">
                                        <!-- Address -->
                                        <div class="col-lg-12">
                                            <label class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $company->address }}">
                                        </div>

                                        <!-- Website -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Website</label>
                                            <input type="text" name="website" class="form-control"
                                                value="{{ $company->website }}">
                                        </div>

                                        <!-- Postal Code -->
                                        <div class="col-lg-6">
                                            <label class="form-label">Postal Code</label>
                                            <input type="text" name="postal_code" class="form-control"
                                                value="{{ $company->postal_code }}">
                                        </div>
                                    </div>
                                </div>


                                <!-- Action Buttons -->
                                <div class="d-flex justify-content-end mt-4">
                                    <a href="{{ url()->previous() }}" class="btn btn-light me-2">Cancel</a>
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
