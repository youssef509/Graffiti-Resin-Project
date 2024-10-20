<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Author: HiBootstrap, Category: Construction, Multipurpose, HTML, SASS, Bootstrap" />
        <!-- title -->
        <title>@yield('title')</title>


        @if (App::getLocale() === 'en')
        <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="frontend/assets/css/style.css">
        @else
        <link rel="stylesheet" href="frontend/assets/css/bootstrap.rtl.min.css" />
        <link rel="stylesheet" href="frontend/assets/css/rtl.css" />
        @endif
        <!-- fontawesome CSS -->
        <link rel="stylesheet" href="frontend/assets/css/fontawesome.min.css" />
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="frontend/assets/css/flaticon.css" />
        <!-- animate CSS -->
        <link rel="stylesheet" href="frontend/assets/css/animate.min.css" />
        <!-- nice select CSS -->
        <link rel="stylesheet" href="frontend/assets/css/nice-select.css">
        <!-- magnific popup CSS -->
        <link rel="stylesheet" href="frontend/assets/css/magnific-popup.min.css" />
        <!-- owl-carousel CSS -->
		<link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css" />
        <!-- mean-menu CSS -->
        <link rel="stylesheet" href="frontend/assets/css/meanmenu.min.css" />
        <!-- main style CSS -->
        <link rel="stylesheet" href="frontend/assets/css/style.css" />
        <!-- responsive CSS -->
        <link rel="stylesheet" href="frontend/assets/css/responsive.css" />
        <!-- favicon -->
        <link rel="icon" href="frontend/assets/img/favicon.png" type="image/png"/>
    </head>
    <body>
        <!-- start preloader area-->
        <div class="preloader-main">
            <span class="loader"> </span>
        </div>
        <!--end preloader area -->

        @include('frontend.partials.header')

        @yield('page-content')

    </footer>
    <!-- end footer area -->

    <!-- start copy right area -->
    <div class="copy-right-area">
        <div class="container">
            <div class="copy-right-content">
                <p>© Constik is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrp</a></p>
            </div>
        </div>
    </div>
    <!-- end copy right area-->
    <!-- jquery JS -->
    <script src="frontend/assets/js/jquery.min.js"></script>
     <!-- bootstrap bundle JS -->
    <script src="frontend/assets/js/bootstrap.bundle.min.js"></script>
    <!-- nice select JS -->
    <script src="frontend/assets/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup JS -->
    <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- waypoints js -->
    <script src="frontend/assets/js/jquery.waypoints.js"></script>
    <!-- counter js -->
    <script src="frontend/assets/js/counter-up.js"></script>
    <!-- owl carousel JS -->
    <script src="frontend/assets/js/owl.carousel.min.js"></script>
    <!-- mean menu JS -->
    <script src="frontend/assets/js/meanmenu.min.js"></script>
    <!-- form validator -->
    <script src="frontend/assets/js/form-validator.min.js"></script>
    <!-- contact form JS -->
    <script src="frontend/assets/js/contact-form-script.js"></script>
    <!-- ajax chimp JS -->
    <script src="frontend/assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- script JS -->
    <script src="frontend/assets/js/script.js"></script>
</body>