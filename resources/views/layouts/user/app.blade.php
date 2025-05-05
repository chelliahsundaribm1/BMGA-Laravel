<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <meta name="description"
        content="DreamsTour - A premium Bootstrap 5 template crafted for travel and tour booking. Tailored for travel agencies and booking platforms, it features flight, hotel, and tour reservations, and holiday packages.">
    <meta name="keywords"
        content="travel booking template, tour booking, Bootstrap 5 travel template, DreamsTour, hotel booking, flights booking, holiday packages, tour agency website, travel agency template, travel HTML template, booking system, responsive travel template, Bootstrap travel website">
    <meta name="author" content="Dreams Technologies">
    <meta name="robots" content="index, follow">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <!-- Theme Settings Js -->
    <script src="{{ asset('assets/js/theme-script.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Main.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tabler-icons/tabler-icons.css') }}">

    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">

    <!-- Owlcarousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.css') }}">

    <!-- Iconsax CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/iconsax.css') }}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    @include('layouts.user.loader')

    <div class="main-header">

        @include('layouts.user.topbar')
        @include('layouts.user.header')

    </div>


    @yield('content')


    <!-- Modals -->

    @include('layouts.user.footer')
    @include('layouts.user.modal.login')
    @include('layouts.user.modal.register')
    @include('layouts.user.modal.cpassword')
    @include('layouts.user.modal.fpassword')

    <!-- Cursor -->
    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
    <!-- /Cursor -->

    <div class="back-to-top">
        <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top"><i
                class="fa-solid fa-arrow-up"></i></a>
    </div>

    <!-- Jquery JS -->
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- MeanMenu Js -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- Swiper Js -->
    <script src="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- Fancybox JS -->
    <script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- Counter JS -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- cursor JS -->
    <script src="{{ asset('assets/js/cursor.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <!-- Script JS -->
    <script src="{{ asset('assets/js/script.js') }}" type="7c03e3945cd2a023479ef779-text/javascript"></script>

    <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="7c03e3945cd2a023479ef779-|49" defer=""></script>
</body>

</html>
