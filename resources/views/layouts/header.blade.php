     <header>
            <div class="container">
                <div class="offcanvas-info">
                    <div class="offcanvas-wrap">
                        <div class="offcanvas-detail">
                            <div class="offcanvas-head">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href="{{ route('home') }}" class="black-logo-responsive">
                                        <img src="assets/img/logo-dark.svg" alt="logo-img">
                                    </a>
                                    <a href="{{ route('home') }}" class="white-logo-responsive">
                                        <img src="assets/img/logo.svg" alt="logo-img">
                                    </a>
                                    <div class="offcanvas-close">
                                        <i class="ti ti-x"></i>
                                    </div>
                                </div>
                        
                            </div>
                            <div class="mobile-menu fix mb-3"></div>
                            <div class="offcanvas__contact">
                                <div class="mt-4">
                                    <div class="header-dropdown d-flex flex-fill">
                                        <div class="w-100">
                                            <div class="dropdown flag-dropdown mb-2">
                                                <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="assets/img/flags/us-flag.svg" class="me-2" alt="flag">ENG
                                                </a>
                                                <ul class="dropdown-menu p-2">
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                            <img src="assets/img/flags/us-flag.svg" class="me-2" alt="flag">ENG
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                            <img src="assets/img/flags/arab-flag.svg" class="me-2" alt="flag">ARA
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                            <img src="assets/img/flags/france-flag.svg" class="me-2" alt="flag">FRE
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
													USD
												</a>
                                                <ul class="dropdown-menu p-2">
                                                    <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                                    <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                                    <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a href="javascript:void(0);" class="text-white btn btn-dark w-100 mb-3" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></div>
                                    <div><a href="javascript:void(0);" class="text-white btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-overlay"></div>
                <div class="header-nav">
                    <div class="main-menu-wrapper">
                        <div class="navbar-logo">
                            <a class="logo-white header-logo" href="{{ route('home') }}">
                                <img src="assets/img/logo.svg" class="logo" alt="Logo">
                            </a>
                            <a class="logo-dark header-logo" href="{{ route('home') }}">
                                <img src="assets/img/logo-dark.svg" class="logo" alt="Logo">
                            </a>
                        </div>
                        <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="has-submenu megamenu {{ Route::is('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Route::is('aboutus') ? 'active' : '' }}">
                                <a href="{{ route('aboutus') }}">About Us</a>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Route::is('flight') ? 'active' : '' }}">
                                <a href="{{ route('flight') }}">Flight</a>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Route::is('hotel') ? 'active' : '' }}">
                                <a href="{{ route('hotel') }}">Hotel</a>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Route::is('car') ? 'active' : (Route::is('comingsoon') ? 'active' : '') }}">
                                <a href="{{ route('comingsoon') }}">Car</a>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Route::is('cruise') ? 'active' : (Route::is('comingsoon') ? 'active' : '') }}">
                                <a href="{{ route('comingsoon') }}">Cruise</a>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Route::is('tour') ? 'active' : (Route::is('comingsoon') ? 'active' : '') }}">
                                <a href="{{ route('comingsoon') }}">Tour</a>
                            </li>
                            <li class="has-submenu mega-innermenu {{ Route::is('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>

                        </nav>
                        <div class="header-btn d-flex align-items-center">
                            <div class="me-3">
                                <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-moon"></i>
                                </a>
                                <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                    <i class="isax isax-sun-1"></i>
                                </a>
                            </div>
                            @auth

                                <div class="dropdown profile-dropdown">
                                <a href="javascript:void(0);" class="d-flex align-items-center" data-bs-toggle="dropdown">
                                    <span class="avatar avatar-md">
									<img src="assets/img/users/user-05.jpg" alt="Img" class="img-fluid rounded-circle border border-white border-4">
								</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="{{ route('dashboard') }}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="agent-hotel-booking.html">My Booking</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="agent-listings.html">Listings</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider my-2">
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="agent-settings.html">Settings</a>
                                    </li>
                                </ul>
                            </div>

                                <div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-white me-3">Logout</button>
                                    </form>
                                </div>
                            @else
                            <div><a href="javascript:void(0);" class="btn btn-white me-3" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a></div>
                            <div><a href="javascript:void(0);" class="btn btn-primary me-0" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></div>
                            @endauth
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar-menu">
                                    <i class="isax isax-menu5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
