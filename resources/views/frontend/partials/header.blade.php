 <!-- start header area -->
 <header class="header-area header-two">
    <!-- start top header area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                @foreach($socialmediaData as $socialmedia)
                <div class="col-lg-3 col-md-12">
                    <div class="social-link">
                        <a href="{{$socialmedia->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{$socialmedia->tiktok}}" target="_blank"><i class="fab fa-tiktok"></i></a>
                        <a href="{{$socialmedia->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{$socialmedia->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-9 col-md-12 p-0">
                    @foreach($contactData as $contact)
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-sm-4 p-0">
                            <div class="contact-info">
                                <div class="contact-info-content">
                                    <p>@lang('messages.callus'):</p>
                                    <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 p-0">
                            <div class="contact-info">
                                <div class="contact-info-content">
                                    <p>@lang('messages.mailus'):</p>
                                    <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end top header area -->

    <!-- start navbar area -->
    <div class="main-navbar-area">
        <div class="constik-responsive-nav">
            <div class="container">
                <div class="constik-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src={{ asset("frontend/assets/img/gd-logo.png")}} class="logo1" alt="logo">
                            <img src={{ asset("frontend/assets/img/gd-logo.png")}} class="logo2" alt="logo">
                        </a>
                    </div>
                    <div class="side-option-responsive">
                        <div class="item">
                            <div class="language">
                                <a href="#language" class="language-link">
                                    @lang('messages.Languages') <i class="fas fa-sort-down"></i></a>
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="locale/en" class="menu-link {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                                                <img src={{ asset("frontend/assets/img/flag-uk.png")}} alt="flag"> English
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="locale/ar" class="menu-link {{ app()->getLocale() === 'ar' ? 'active' : '' }}">
                                                <img src={{ asset("frontend/assets/img/flag-jordan.png")}} alt="flag"> العربية
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
    
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="constik-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse mean-menu">
                        <a href="{{route('home')}}" class="navbar-brand">
                            <img src={{ asset("frontend/assets/img/g-logo.png")}} alt="Logo">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">@lang('messages.Home')</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('about-us')}}" class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}">@lang('messages.About')</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('services')}}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">@lang('messages.Services')</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('projects')}}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">@lang('messages.Projects')</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('products')}}" class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">@lang('messages.Products')</a>
                            </li>

                            <li class="nav-item"><a href="{{route('blog')}}" class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">@lang('messages.Blog')</a>
                               
                            </li>

                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">@lang('messages.Contact')</a>
                            </li>
                        </ul>

                        <div class="side-option ml-auto">
                            <div class="item">
                                <div class="language">
                                    <a href="#language" class="language-link">
                                        {{ app()->getLocale() === 'en' ? 'العربية' : 'English' }}
                                        <i class="fas fa-sort-down"></i>
                                    </a>
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="{{ url('/locale/en') }}" class="menu-link {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                                                <img src={{ asset("frontend/assets/img/flag-uk.png")}} alt="flag"> English
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ url('/locale/ar') }}" class="menu-link {{ app()->getLocale() === 'ar' ? 'active' : '' }}">
                                                <img src={{ asset("frontend/assets/img/flag-jordan.png")}} alt="flag"> العربية
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            

                            <div class="item">
                                <div class="cta-btn">
                                    <a href="{{route('contact')}}" class="primary-btn">@lang('messages.RequestQuote')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- end navbar area -->
</header>
<!-- end header area -->