<header class="page-header">
    <div class="page-header__top">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
                <div class="uk-navbar-left">
                    <button class="uk-button" type="button" data-target="#offcanvas" data-uk-toggle
                            data-uk-icon="menu"></button>
                    <ul class="uk-navbar-nav">
                        <li><a href="{{route('menu.page')}}">Menus</a></li>
                        <li><a href="{{route('aboutUS.page')}}">About</a></li>
                        <li><a href="{{route('news.all')}}">What's New</a></li>
                        <li><a href="{{route('takeaway.page')}}">Branches</a></li>
                        <li><a href="{{route('health-infos.all')}}">Health info</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-center">
                    <div class="logo">
                        <div class="logo__box"><a class="logo__link" href="{{route('home.page')}}"> <img class="logo__img logo__img--full" src="{{asset('website-assets/img/logo.png')}}" alt="logo"><img class="logo__img logo__img-small" src="{{asset('website-assets/img/logo-small.png')}}" alt="logo"></a>
                        </div>
                    </div>
                </div>
                <div class="uk-navbar-right "><a class="uk-button" href="#"> <span>Make Your Pizza</span><img
                            class="uk-margin-small-left" src="{{asset('website-assets/img/icons/pizza.png')}}"
                            alt="pizza"></a>
                    <ul class="uk-navbar-nav">
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Media Center
                            </a>
                            <div class="dropdown-menu uk-dropdown-nav" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('video.page')}}">Videos</a>
                                <a class="dropdown-item" href="{{route('gallery.page')}}">Photo Albums</a>
                            </div>
                        </li>
                        <li><a href="{{route('careers.all')}}">Jobs</a></li>
                        <li><a href="{{route('contact.page')}}">Contact Us</a></li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown-flag" href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), null, [], true) }}" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                @if(LaravelLocalization::getCurrentLocaleName() == 'Arabic')
                                    <i class="flag-icon flag-icon-eg"></i> &nbsp;<span> العربية </span>
                                @else
                                    <i class="flag-icon flag-icon-us"></i> &nbsp;<span> English </span>
                                @endif
                            </a>
                            <div class="dropdown-menu uk-dropdown-nav" aria-labelledby="dropdown-flag">
                                @if(LaravelLocalization::getCurrentLocaleName() == 'Arabic')
                                    <a class="dropdown-item" rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                        <i class="flag-icon flag-icon-us"></i> &nbsp;<span> English </span></a>
                                @else
                                    <a class="dropdown-item" rel="alternate" hreflang="ar" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                        <i class="flag-icon flag-icon-eg"></i> &nbsp;<span> العربية </span></a>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="page-header__bottom">
        <div class="uk-container">
            <div class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
                <div class="uk-navbar-left">
                    <div>
                        <div class="block-with-phone"><img src="{{asset('website-assets/img/icons/delivery.svg')}}"
                                                           alt="delivery" data-uk-svg>
                            <div><span>For Delivery, Call us</span><a href="tel:13205448749">1-320-544-8749</a></div>
                        </div>
                    </div>
                </div>
                <div class="uk-navbar-center"></div>
                <div class="uk-navbar-right">
                    <div class="other-links">
                        <ul class="other-links-list">
                            <li><a href="#modal-full" data-uk-toggle><span data-uk-icon="search"></span></a></li>
                            <li><a href="{{route('profile')}}"><span data-uk-icon="user"></span></a></li>
                            <li><a href="#"><span data-uk-icon="cart"></span></a></li>
                        </ul>
                        @if(!auth()->user())
                            <a class="uk-button" href="{{route('get.login')}}"> <span>sign-in / sign-up</span></a>
                        @elseif(auth()->user())
                            <a class="uk-button" href="{{route('signout')}}"> <span>log out</span></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
