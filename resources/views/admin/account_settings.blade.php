@extends('layouts.app')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
        <div class="container">
            <h2 class="breadcrumb-title mb-2">Settings</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="isax isax-grid-55"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                </ol>
            </nav>
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

                <!-- Settings Content -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card settings mb-0">
                        <div class="card-header">
                            <h6>Settings</h6>
                        </div>
                        <div class="card-body">
                            <div class="settings-link d-flex align-items-center flex-wrap">
                                @include('admin.settingslink')
                            </div>

                            <form action="{{ route('admin.company.accounts') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <!-- SEO Metadata -->
                                <div class="card shadow-none bg-gray-transparent mb-4">
                                    <div class="card-header">
                                        <h6 class="mb-1 fw-medium">SEO Metadata</h6>
                                        <p class="fs-14">Effortlessly connect meta and SEO</p>
                                    </div>
                                    <div class="card-body link-account">
                                        <div class="row g-3">
                                            <div class="col-sm-6">
                                                <label class="form-label">Meta Keywords</label>
                                                <input type="text" name="meta_title" class="form-control"
                                                    value="{{ $company->meta_title }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Meta Description</label>
                                                <input type="text" name="meta_description" class="form-control"
                                                    value="{{ $company->meta_description }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Media -->
                                <div class="card shadow-none bg-gray-transparent">
                                    <div class="card-header">
                                        <h6 class="mb-1 fw-medium">Social Media Profile</h6>
                                        <p class="fs-14">Effortlessly connect and manage accounts</p>
                                    </div>
                                    @php
                                        $icons = [
                                            'facebook' => 'fab fa-facebook-f',
                                            'twitter' => 'fab fa-x-twitter', 
                                            'instagram' => 'fab fa-instagram',
                                            'youtube' => 'fab fa-youtube',
                                            'linkedin' => 'fab fa-linkedin-in',
                                            'tiktok' => 'fab fa-tiktok',
                                        ];
                                    @endphp

                                    <div class="card-body link-account">
                                        <div class="row g-3">
                                            @foreach (['facebook', 'twitter', 'instagram', 'youtube', 'linkedin', 'tiktok'] as $field)
                                                <div class="col-sm-6">
                                                    <label class="form-label d-flex align-items-center gap-1">
                                                        <i class="{{ $icons[$field] }}"></i>
                                                        @if ($field === 'twitter')
                                                            X <small class="text-muted">(formerly Twitter)</small>
                                                        @else
                                                            {{ ucfirst($field) }}
                                                        @endif
                                                    </label>
                                                    <input type="text" name="{{ $field }}" class="form-control"
                                                        value="{{ $company->$field }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-end mt-4">
                                    <a href="{{ url()->previous() }}" class="btn btn-light me-2">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /Settings Content -->

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
