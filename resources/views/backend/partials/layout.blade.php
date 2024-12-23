<!doctype html>
<html lang="ar" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>
            @yield('title')
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Platinum Dashboard" name="description" />
        <meta content="YOUSSEF AHMED" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico')}}">

        <!-- plugin css -->
        <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/preloader-rtl.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        @yield('css')

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper-rtl">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href={{route('backend.index')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo.png')}}" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/logo.png')}}" alt="" height="24"> <span class="logo-txt">PLATINUM</span>
                                </span>
                            </a>

                            <a href="{{route('backend.index')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo.png')}}" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/logo.png')}}" alt="" height="24"> <span class="logo-txt">PLATINUM</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>


                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('backend/assets/images/logo.png')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Admin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">القائمة</li>

                            <li>
                                <a href="{{route('backend.index')}}">
                                    <i data-feather="sliders"></i>
                                    <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span>
                                    <span data-key="t-dashboard">لوحة التحكم</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-apps">الصفحات</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="home"></i>
                                    <span data-key="t-home">الصفحة الرئيسية</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.slider-Ar')}}" key="t-slider">الاسليدر</a></li>
                                    {{-- <li><a href="" data-key="">العناصر</a></li> --}}
                                    <li><a href="{{route('admin.homeabout-Ar')}}" data-key="about">من نحن</a></li>
                                    {{-- <li><a href="" data-key="">الانجازات</a></li> --}}
                                    <li><a href="{{route('admin.partiners')}}" data-key="t-partiners">الشركاء</a></li>
                                     <li><a href="{{route('admin.whyus-Ar')}}" data-key="t-whyus">لماذا نحن</a></li>
                                    <li><a href="{{route('admin.testimonial-Ar')}}" data-key="t-testimonial">التوصيات</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="flag"></i>
                                    <span data-key="t-aboutus">من نحن</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.about-us-Ar')}}" data-key="t-aboutus-hero">قسم من نحن</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="{{route('admin.category')}}">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-category">الفئات</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="briefcase"></i>
                                    <span data-key="t-contacts">المنتجات</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.products-Ar')}}" data-key="t-products">اضافة منتج</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('admin.blogs-Ar')}}">
                                    <i data-feather="align-right"></i>
                                    <span data-key="t-blog">المقالات</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="sidebar"></i>
                                    <span data-key="t-projects">المشاريع</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.projects-Ar')}}" key="t-projects-add">اضافة مشروع</a></li>
                                    <li><a href="{{route('admin.project-images')}}" key="t-projects-images">اضافة صور المشروع</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="trello"></i>
                                    <span data-key="t-quote">طلبات التواصل</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.quote-requests-show')}}" key="t-quote-TrainingSupervision"> طلبات تدريب واشراف</a></li>
                                    <li><a href="{{route('admin.purchasing-materials-show')}}" key="t-quote-PurchasingMaterials">طلبات شراء مواد</a></li>
                                    <li><a href="{{route('admin.ImplementationofWorks-show')}}" key="t-quote-ImplementationofWorks">طلبات تنفيذ مشاريع</a></li>
                                    <li><a href="{{route('admin.AuthorizedDistributor-show')}}" key="t-quote-AuthorizedDistributor">طلبات موزع معتمد</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" data-key="t-pages">اعدادات عامة</li>
                            {{-- <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="file-text"></i>
                                    <span data-key="t-pages">المستخدمين</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                    <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                    <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                                    <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                                    <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                                    <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                                    <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="file-text"></i>
                                    <span data-key="t-gs">اعدادات التواصل</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('settings-contactinfos')}}" data-key="t-gs-contact">بيانات التواصل</a></li>
                                    <li><a href="{{route('settings-socialmedia')}}" data-key="t-gs-socialmedia">السوشيال ميديا</a></li>
                                    <li><a href="{{route('settings-ConversionsAPIs')}}" data-key="t-gs-ConversionsAPIs">ConversionsAPIs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="file-text"></i>
                                    <span data-key="t-seo">محركات البحث (SEO)</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('seo-homepage')}}" data-key="t-seo-home">الصفحة الرئيسية</a></li>
                                    <li><a href="{{route('seo-aboutpage')}}" data-key="t-seo-about">من نحن</a></li>
                                    <li><a href="{{route('seo-productspage')}}" data-key="t-seo-products">المنتجات</a></li>
                                    <li><a href="{{route('seo-projectspage')}}" data-key="t-seo-projects">المشاريع</a></li>
                                    <li><a href="{{route('seo-blogpage')}}" data-key="t-seo-blog">المقالات</a></li>
                                    
                                </ul>
                            </li>
                        </ul>


                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            @yield('page-content')


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © PLATINUM.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="https://youssefahmed.com/"  target="_blank" class="text-decoration-underline">YOUSSEF AHMED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->






    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js')}}"></script>
    <!-- pace js -->
    <script src="{{ asset('backend/assets/libs/pace-js/pace.min.js')}}"></script>


    <!-- apexcharts -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

    <script src="{{ asset('backend/assets/js/pages/allchart.js')}}"></script>
    <!-- dashboard init -->
    <script src="{{ asset('backend/assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{ asset('backend/assets/js/app.js')}}"></script>

    @yield('js')

</body>

</html>
