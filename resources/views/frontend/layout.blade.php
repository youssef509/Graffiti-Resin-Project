<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Author: HiBootstrap, Category: Construction, Multipurpose, HTML, SASS, Bootstrap" />
        <!-- title -->
        <title>@yield('title')</title>


        @if (App::getLocale() === 'en')
        <!-- bootstrap css -->
        <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css" />
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
        <!-- theme dark CSS -->
        <link rel="stylesheet" href="frontend/assets/css/theme-dark.css" />
        <!-- favicon -->
        <link rel="icon" href="frontend/assets/img/g-logo.png" type="image/png"/>
        @else
        <!-- bootstrap css -->
        <link rel="stylesheet" href="frontend/assets/css/bootstrap.rtl.min.css" />
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
        <!-- theme dark CSS -->
        <link rel="stylesheet" href="frontend/assets/css/theme-dark.css" />
        <!-- rtl CSS -->
        <link rel="stylesheet" href="frontend/assets/css/rtl.css" />

        <!-- favicon -->
        <link rel="icon" href="frontend/assets/img/gr.png" type="image/png"/>
        @endif
        @yield('css')
    </head>
    <body>

        @include('frontend.partials.header')

        @yield('page-content')

    <!-- start footer area -->
    <footer class="footer-area pt-100 pb-70 bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                       <div class="navbar-brand">
                            <a href="index.html">
                                <img src="frontend/assets/img/gd-logo.png" class="footer-logo1" alt="Logo" />
                                <img src="frontend/assets/img/gd-logo.png" class="footer-logo2" alt="Logo" />
                            </a>
                        </div>
                        <p>You can dream, create, design, and build the most wonderful place in the world.</p>
                        <div class="social-link">
                            <a href="https://www.facebook.com/login/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/i/flow/login" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.tumblr.com/" target="_blank">
                                <i class="fab fa-tumblr"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5>@lang('messages.QuickLinks')</h5>
                        <ul class="footer-links">
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="about-us.html">@lang('messages.About')</a>
                            </li>
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="services-grid.html">@lang('messages.Services')</a>
                            </li>
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="projects.html">@lang('messages.Projects')</a>
                            </li>
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="services-details.html">@lang('messages.FAQ')</a>
                            </li>
                            <li>
                                <i class="flaticon-play-button"></i>
                                <a href="terms-of-service.html">@lang('messages.PrivacyPolicy')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5>@lang('messages.RecentNews')</h5>
                        <ul class="footer-news">
                            <li class="content">
                                <div class="img">
                                    <a href="blog-details.html"><img src="frontend/assets/img/footer-news-2.png" alt="Demo Image"></a>
                                </div>
                                <span><a href="blog-details.html">How Difficult The Road Construction</a></span>
                            </li>
                            <li class="content">
                                <div class="img">
                                    <a href="blog-details.html"><img src="frontend/assets/img/footer-news-1.png" alt="Demo Image"></a>
                                </div>
                                <span><a href="blog-details.html">How To Manage The Construction Works</a></span>
                            </li>
                            <li class="content">
                                <div class="img">
                                    <a href="blog-details.html"><img src="frontend/assets/img/footer-news-3.png" alt="Demo Image"></a>
                                </div>
                                <span><a href="blog-details.html">Designing Is A Key For Construction</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5>@lang('messages.Contacts')</h5>
                        <ul class="contact-info">
                            <li class="content">
                                <span class="tag">A</span>
                                <span>32, Wales Street, <br> New York, USA</span>
                            </li>
                            <li class="content">
                                <span class="tag">P</span>
                                <span>
                                    <a href="tel:(009)01361246725">(009)01361246725</a>
                                    <a href="tel:(009)01361246116">(009)01361246116</a>
                                </span>
                            </li>
                            <li class="content">
                                <span class="tag">E</span>
                                <span>
                                    <a href="mailTo:hello@Constik.com">hello@constik.com</a>
                                    <a href="mailTo:info@Constik.com">info@constik.com</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- end footer area -->

    <!-- start copy right area -->
    <div class="copy-right-area">
        <div class="container">
            <div class="copy-right-content">
               <p>.Graffiti Resin &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
                <p>.Graffiti Resin is Proudly Developed by <a href="https://youssefahmed.com/" target="_blank">Youssef Ahmed</a></p>
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
        @yield('js')
</body>
