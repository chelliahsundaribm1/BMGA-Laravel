    <div class="header-topbar text-center bg-transparent">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <p class="d-flex align-items-center fw-medium fs-14 mb-2"><i class="isax isax-call5 me-2"></i>Call Us :
                    {{ $company->phone }}</p>
                <div class="d-flex align-items-center">
                    @if (!empty($company->email))
                        <p class="mb-2 me-3 d-flex align-items-center fw-medium fs-14">
                            <i class="isax isax-message-text-15 me-2"></i>Email: <a href="mailto:{{ $company->email }}"style="color: white;">{{ $company->email }}</a>
                        </p>
                    @endif
                    <div class="dropdown flag-dropdown mb-2 me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle d-inline-flex align-items-center"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/flags/us-flag.svg" class="me-2" alt="flag">ENG
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
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
                    <div class="dropdown mb-2 me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            USD
                        </a>
                        <ul class="dropdown-menu p-2 mt-2">
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                            <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                        </ul>
                    </div>
                    <div class="fav-dropdown mb-2">
                        <a href="wishlist.html" class="position-relative">
                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
