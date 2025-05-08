<!-- Sidebar -->
<div class="col-xl-3 col-lg-4 theiaStickySidebar">
    <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
        <div class="card-header user-sidebar-header text-center bg-gray-transparent">
            <div class="agent-profile d-inline-flex">
                <img src="{{ $company && $company->favicon ? asset($company->favicon) : asset('assets/default/tempLogo.png') }}" alt="image" class="img-fluid rounded-circle">
                <a href="{{ route('admin.settings') }}" class="avatar avatar-sm rounded-circle btn btn-primary d-flex align-items-center justify-content-center p-0"><i class="isax isax-edit-2 fs-14"></i></a>
            </div>
            <h6 class="fs-16">{{ $company->name }}</h6>
            <p class="fs-14 mb-2">{{ $company->email }}</p>
            <div class="d-flex align-items-center justify-content-center notify-item">
                <a href="#" class="rounded-circle btn btn-white d-flex align-items-center justify-content-center p-0 me-2 position-relative">
                    <i class="isax isax-notification-bing5 fs-20"></i>
                    <span class="position-absolute p-1 bg-secondary rounded-circle"></span>
                </a>
                <a href="#" class="rounded-circle btn btn-white d-flex align-items-center justify-content-center p-0 position-relative">
                    <i class="isax isax-message-square5 fs-20"></i>
                    <span class="position-absolute p-1 bg-danger rounded-circle"></span>
                </a>
            </div>
        </div>
        <div class="card-body user-sidebar-body">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="isax isax-grid-55 me-2"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.listing') }}" class="d-flex align-items-center {{ request()->routeIs('admin.listing') ? 'active' : '' }}">
                        <i class="isax isax-menu-14 me-2"></i>Listings
                    </a>
                </li>

                @php
                    $bookingRoutes = [
                        'admin.bookings.hotel*',
                        'admin.bookings.car*',
                        'admin.bookings.cruise*',
                        'admin.bookings.tour*',
                        'admin.bookings.flight*',
                    ];
                @endphp
                <li class="submenu">
                    <a href="javascript:void(0);" class="d-block {{ Route::is($bookingRoutes) ? 'active subdrop' : '' }}"><i class="isax isax-calendar-tick5 me-2"></i><span>Bookings</span><span class="menu-arrow"></span></a>
                    <ul>
                      
                        <li>
                            <a href="{{ route('admin.bookings.hotel') }}" 
                                class="fs-14 d-inline-flex align-items-center {{ Route::is('admin.bookings.hotel') ? 'active' : '' }}">
                                Hotels
                            </a>
                            </li>
                              <li>
                            <a href="{{ route('admin.bookings.flight') }}" 
                                class="fs-14 d-inline-flex align-items-center {{ Route::is('admin.bookings.flight') ? 'active' : '' }}">
                                Flights
                            </a>
                        </li>
                            <li>
                            <a href="{{ route('admin.bookings.car') }}" 
                                class="fs-14 d-inline-flex align-items-center {{ Route::is('admin.bookings.car') ? 'active' : '' }}">
                                Cars
                            </a>
                            </li>
                            <li>
                            <a href="{{ route('admin.bookings.cruise') }}" 
                                class="fs-14 d-inline-flex align-items-center {{ Route::is('admin.bookings.cruise') ? 'active' : '' }}">
                                Cruise
                            </a>
                            </li>
                            <li>
                            <a href="{{ route('admin.bookings.tour') }}" 
                                class="fs-14 d-inline-flex align-items-center {{ Route::is('admin.bookings.tour') ? 'active' : '' }}">
                                Tour
                            </a>
                            </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.enquires') }}" class="d-flex align-items-center {{ request()->routeIs('admin.enquires') ? 'active' : '' }}">
                        <i class="isax isax-magic-star5 me-2"></i>Enquiries
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.earnings') }}" class="d-flex align-items-center {{ request()->routeIs('admin.earnings') ? 'active' : '' }}">
                        <i class="isax isax-wallet-add-15 me-2"></i>Earnings
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.reviews') }}" class="d-flex align-items-center {{ request()->routeIs('admin.reviews') ? 'active' : '' }}">
                        <i class="isax isax-magic-star5 me-2"></i>Reviews
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.settings') }}" class="d-flex align-items-center {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                        <i class="isax isax-setting-25"></i> Settings
                    </a>
                </li>
                <li class="logout-link">
                    <a href="{{ route('logout') }}" class="d-flex align-items-center pb-0"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="isax isax-logout-15"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
