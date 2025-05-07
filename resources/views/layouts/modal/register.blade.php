   <div class="modal fade" id="register-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-end pb-0 border-0">
                    <a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x fs-20"></i></a>
                </div>
                <div class="modal-body p-4 pt-0">
                      <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="text-center border-bottom mb-3">
                            <h5 class="mb-1">Sign Up</h5>
                            <p class="mb-3">Create your DreamsTour Account</p>
                        </div>
                        {{-- <div class="mb-2">
                            <label class="form-label">Name</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
									<i class="isax isax-user"></i> 
                                </span>
                                <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Enter Full Name">
                            </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->get('name') }}</strong>
                                    </span>
                                @enderror
                        </div> --}}
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="isax isax-user"></i> 
                                    </span>
                                    <input type="text" id="first_name" name="first_name" class="form-control form-control-lg" placeholder="First Name">
                                </div>
                                @error('first_name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="isax isax-user"></i> 
                                    </span>
                                    <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" placeholder="Last Name">
                                </div>
                                @error('last_name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
									<i class="isax isax-message"></i>
                                </span>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter Email">
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->get('email') }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Password</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
									<i class="isax isax-lock"></i>
                                </span>
                                <input type="password" id="password" name="password" class="form-control form-control-lg pass-input" placeholder="Enter Password" required autocomplete="new-password">
                                <span class="input-icon-addon toggle-password">
									<i class="isax isax-eye-slash"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->get('password') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Confirm Password</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
									<i class="isax isax-lock"></i>
                                </span>
                                <input for="password_confirmation" type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg pass-input" placeholder="Enter Password" required autocomplete="new-password">
                                <span class="input-icon-addon toggle-password">
									<i class="isax isax-eye-slash"></i>
                                </span>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->get('password_confirmation') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3 mb-3">
                            <div class="d-flex">
                                <div class="form-check d-flex align-items-center mb-2">
                                    <input class="form-check-input mt-0" type="checkbox" value="" id="agree">
                                    <label class="form-check-label ms-2 text-gray-9 fs-14" for="agree">
                                        I agree with the <a href="javascript:void(0);" class="link-primary fw-medium">Terms Of Service.</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">Register<i class="isax isax-arrow-right-3 ms-2"></i></button>
                        </div>
                        <div class="login-or mb-3">
                            <span class="span-or">Or</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center me-2">
                                <img src="assets/img/icons/google-icon.svg" class="me-2" alt="Img">Google
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light flex-fill d-flex align-items-center justify-content-center">
                                <img src="assets/img/icons/fb-icon.svg" class="me-2" alt="Img">Facebook
                            </a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="fs-14">Already have an account? <a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>