<!-- Sidebar -->
<div class="col-xl-3 col-lg-4 theiaStickySidebar">
    <div class="card user-sidebar agent-sidebar mb-4 mb-lg-0">
        <div class="card-header user-sidebar-header text-center bg-gray-transparent">
            <div class="agent-profile d-inline-flex">
                <img src="{{ asset('assets/img/users/user-43.jpg') }}" alt="image" class="img-fluid rounded-circle">
                <a href="{{ route('admin.settings') }}" class="avatar avatar-sm rounded-circle btn btn-primary d-flex align-items-center justify-content-center p-0"><i class="isax isax-edit-2 fs-14"></i></a>
            </div>
            <h6 class="fs-16">Chris Foxy</h6>
            <p class="fs-14 mb-2">Member Since 10 May 2025</p>
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
                <li class="submenu">
                    <a href="javascript:void(0);" class="d-block"><i class="isax isax-calendar-tick5 me-2"></i><span>Bookings</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.bookings.hotel') }}">Hotels</a></li>
                        <li><a href="{{ route('admin.bookings.car') }}">Cars</a></li>
                        <li><a href="{{ route('admin.bookings.cruise') }}">Cruise</a></li>
                        <li><a href="{{ route('admin.bookings.tour') }}">Tour</a></li>
                        <li><a href="{{ route('admin.bookings.flight') }}">Flights</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.enquires') }}" class="d-flex align-items-center">
                        <i class="isax isax-magic-star5 me-2"></i>Enquiries
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.earnings') }}" class="d-flex align-items-center">
                        <i class="isax isax-wallet-add-15 me-2"></i>Earnings
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.reviews') }}" class="d-flex align-items-center">
                        <i class="isax isax-magic-star5 me-2"></i>Reviews
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.settings') }}" class="d-flex align-items-center">
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
