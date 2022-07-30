<header class="header-area">
    <!-- start top header area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="contact-info">
                        <div class="content">
                            <i class='bx bx-phone'></i>
                            <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                        </div>
                        <div class="content">
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                        </div>
                        <div class="content">


                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="side-option">
                        <div class="item">
                            <div class="language">
                                <a href="#language" id="languageButton" class="btn-secondary">
                                    {{ trans('app.lang') }} <i class='bx bxs-chevron-down'></i>
                                </a>
                                <ul class="menu">
                                    <li class="menu-item">
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode =>
                                        $properties)
                                            <a class="dropdown-item text-center" rel="alternate"
                                               hreflang="{{ $localeCode }}"
                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                @if ($properties['native'] == 'English')
                                                    <img src="{{ asset('front/assets/img/flag-uk.png') }}" alt="flag">
                                                @elseif($properties['native'] == 'العربية')
                                                    <img src="{{ asset('front/assets/img/flag-jordan.png') }}" alt="flag">
                                                @elseif($properties['native'] == 'Deutsch')
                                                    <img src="{{ asset('front/assets/img/flag-germany.png') }}" alt="flag">
                                                @elseif($properties['native'] == 'italiano')
                                                    <img src="{{ asset('front/assets/img/Flag_of_Italy.png') }}" alt="flag">
                                                @elseif($properties['native'] == 'русский')
                                                    <img src="{{ asset('front/assets/img/download2.png') }}" alt="flag">
                                                @endif
                                                {{ $properties['native'] }}
                                            </a>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="item">
                            <a href="{{route('login')}}" class="btn-secondary">
                                {{trans('app.login')}} <i class='bx bx-log-in-circle'></i>
                            </a>
                        </div>

                        <div class="item">
                            <a href="#searchBox" id="searchButton" class="btn-search" data-effect="mfp-zoom-in">
                                <i class='bx bx-search-alt'></i>
                            </a>
                            <div id="searchBox" class="search-box mfp-with-anim mfp-hide">
                                <form class="search-form">
                                    <input class="search-input" name="search" placeholder="Search" type="text">
                                    <button class="btn-search">
                                        <i class='bx bx-search-alt'></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end top header area -->

    <!-- start navbar area -->
    <div class="main-navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('front/assets/img/logo1..png')}}" class="logo1" alt="Logo">
                            <img src="{{asset('front/assets/img/logo2..png')}}" class="logo2" alt="Logo">
                        </a>
                    </div>
                    <div class="cart responsive">
                        <a href="cart.html" class="cart-btn"><i class='bx bx-cart'></i>
                            <span class="badge">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('upload/setting/'.$setting->logo)}}" class="logo1" alt="Logo">
                        <img src="{{asset('upload/setting/'.$setting->logo)}}" class="logo2" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">{{ trans('app.home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user_trips') }}" class="nav-link">{{ trans('app.trips') }}</a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('user_offer') }}" class="nav-link">{{ trans('app.package') }}</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">{{ trans('app.about') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user_blog') }}" class="nav-link">{{trans('app.blog')}}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('user_transfer')}}" class="nav-link">{{ trans('app.transfer') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link">{{ trans('app.contact') }}</a>
                            </li>
                        </ul>
                        <div class="cart">
                            <a href="cart.html" class="cart-btn"><i class='bx bx-cart'></i>
                                <span class="badge">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- end navbar area -->
</header>
