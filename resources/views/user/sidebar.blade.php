<!-- Sidebar -->
<div class="col-xl-3 col-lg-4 theiaStickySidebar">
    <div class="card user-sidebar mb-4">
        <div class="card-header user-sidebar-header">
            <div class="profile-content rounded-pill">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/users/user-01.jpg') }}" alt="image" class="img-fluid avatar avatar-lg rounded-circle me-1">
                        <div>
                            <h6 class="fs-16">{{ Auth::user()->name }}</h6>
                            <span class="fs-14 text-gray-6">Since {{ Auth::user()->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('user.settings') }}" class="p-1 rounded-circle btn btn-light d-flex align-items-center justify-content-center">
                            <i class="isax isax-edit-2 fs-14"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body user-sidebar-body">
            <ul>
                <li><span class="fs-14 text-gray-3 fw-medium mb-2">Main</span></li>
                <li>
                    <a href="{{ route('user.dashboard') }}" class="d-flex align-items-center {{ Request::routeIs('user.dashboard') ? 'active' : '' }}">
                        <i class="isax isax-grid-55"></i> Dashboard
                    </a>
                </li>
                  @php
                    $bookingRoutes = [
                        'user.bookings.hotels*',
                        'user.bookings.cars*',
                        'user.bookings.cruises*',
                        'user.bookings.tours*',
                        'user.bookings.flights*',
                    ];
                @endphp
                <li class="submenu">
                    <a href="javascript:void(0);" class="d-block {{ Route::is($bookingRoutes) ? 'active subdrop' : '' }}"><i class="isax isax-calendar-tick5"></i><span>My Bookings</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('user.bookings.flights') }}" class="fs-14 d-inline-flex align-items-center {{ Route::is('user.bookings.flights') ? 'active' : '' }}">Flights</a></li>
                        <li><a href="{{ route('user.bookings.hotels') }}" class="fs-14 d-inline-flex align-items-center {{ Route::is('user.bookings.hotels') ? 'active' : '' }}">Hotels</a></li>
                        <li><a href="{{ route('user.bookings.cars') }}" class="fs-14 d-inline-flex align-items-center {{ Route::is('user.bookings.cars') ? 'active' : '' }}">Cars</a></li>
                        <li><a href="{{ route('user.bookings.cruises') }}" class="fs-14 d-inline-flex align-items-center {{ Route::is('user.bookings.cruises') ? 'active' : '' }}">Cruise</a></li>
                        <li><a href="{{ route('user.bookings.tours') }}" class="fs-14 d-inline-flex align-items-center {{ Route::is('user.bookings.tours') ? 'active' : '' }}">Tour</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('user.reviews') }}" class="d-flex align-items-center {{ request()->routeIs('user.reviews') ? 'active' : '' }}">
                        <i class="isax isax-magic-star5"></i> My Reviews
                    </a>
                </li>
                <li>
                    <div class="message-content">
                        <a href="{{ route('user.messages') }}" class="d-flex align-items-center {{ request()->routeIs('user.messages') ? 'active' : '' }}">
                            <i class="isax isax-message-square5"></i> Messages
                        </a>
                        <span class="msg-count rounded-circle">02</span>
                    </div>
                </li>
                <li class="mb-2">
                    <a href="{{ route('user.wishlist') }}" class="d-flex align-items-center {{ request()->routeIs('user.wishlist') ? 'active' : '' }}">
                        <i class="isax isax-heart5"></i> Wishlist
                    </a>
                </li>
                <li><span class="fs-14 text-gray-3 fw-medium mb-2">Finance</span></li>
                <li>
                    <a href="{{ route('user.wallet') }}" class="d-flex align-items-center {{ request()->routeIs('user.wallet') ? 'active' : '' }}">
                        <i class="isax isax-wallet-add-15"></i> Wallet
                    </a>
                </li>
                <li class="mb-2">
                    <a href="{{ route('user.payments') }}" class="d-flex align-items-center {{ request()->routeIs('user.payments') ? 'active' : '' }}">
                        <i class="isax isax-money-recive5"></i> Payments
                    </a>
                </li>
                <li><span class="fs-14 text-gray-3 fw-medium mb-2">Account</span></li>
                <li>
                    <a href="{{ route('user.profile') }}" class="d-flex align-items-center {{ request()->routeIs('user.profile') ? 'active' : '' }}">
                        <i class="isax isax-profile-tick5"></i> My Profile
                    </a>
                </li>
                <li>
                    <div class="message-content">
                        <a href="{{ route('user.notifications') }}" class="d-flex align-items-center {{ request()->routeIs('user.notifications') ? 'active' : '' }}">
                            <i class="isax isax-notification-bing5"></i> Notifications
                        </a>
                        <span class="msg-count bg-purple rounded-circle">05</span>
                    </div>
                </li>
                <li>
                    <a href="{{ route('user.settings') }}" class="d-flex align-items-center {{ request()->routeIs('user.settings') ? 'active' : '' }}">
                        <i class="isax isax-setting-25"></i> Settings
                    </a>
                </li>
                <li>
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
