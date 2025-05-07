<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <meta name="description" content="DreamsTour - A premium Bootstrap 5 travel and tour booking template.">
    <meta name="keywords" content="travel, booking, Bootstrap 5, DreamsTour, tour agency, hotel, flight, holiday">
    <meta name="author" content="Dreams Technologies">
    <meta name="robots" content="index, follow">

    <!-- Favicon & Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iconsax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tabler-icons/tabler-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
</head>

<body>
    @include('layouts.loader')

    <div class="main-header">
        @include('layouts.topbar')
        @include('layouts.header')
    </div>

    @yield('content')

    @include('layouts.footer')

    <!-- Modals -->
    @include('layouts.modal.login')
    @include('layouts.modal.register')
    @include('layouts.modal.cpassword')
    @include('layouts.modal.fpassword')

    <!-- Cursor -->
    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>

    <!-- Back to Top -->
    <div class="back-to-top">
        <a href="#top" class="back-to-top-icon d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>

    <!-- JS Libraries -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/cursor.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>

    <!-- Map Scripts -->
    <script src="{{ asset('assets/js/map-car.js') }}"></script>
    <script src="{{ asset('assets/js/map-cruise.js') }}"></script>
    <script src="{{ asset('assets/js/map-grid.js') }}"></script>
    <script src="{{ asset('assets/js/map-tour.js') }}"></script>

    <!-- RTL Script -->
    <script src="{{ asset('assets/js/script-rtl.js') }}"></script>

    <!-- Theme / App Script -->
    <script src="{{ asset('assets/js/theme-script.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Optional (Cloudflare/Email protection) -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script defer src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="rocket-loader" ></script>
</body>

</html>
