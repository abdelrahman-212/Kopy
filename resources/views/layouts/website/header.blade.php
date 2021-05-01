<header class="page-header">
    <div class="page-header__top">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
                <div class="uk-navbar-left"><button class="uk-button" type="button" data-target="#offcanvas" data-uk-toggle data-uk-icon="menu"></button>
                    <ul class="uk-navbar-nav">
                        <li><a href="{{route('menu.page')}}">Home</a></li>
                        <li><a href="{{route('aboutUS.page')}}">About us</a></li>
                        @auth()
                        <li><a href="{{route('logout')}}">Log Out </a></li>
                        @endauth
                        <li><a href="#">Order Online</a></li>
                        <li><a href="#">Your Wishlist</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-center">
                    <div class="logo">
                        <div class="logo__box"><a class="logo__link" href="{{route('menu.page')}}"> <img class="logo__img logo__img--full" src="{{asset('website-assets/img/logo.png')}}" alt="logo"><img class="logo__img logo__img-small" src="{{asset('website-assets/img/logo-small.png')}}" alt="logo"></a></div>
                    </div>
                </div>
                <div class="uk-navbar-right"><a class="uk-button" href="#"> <span>Make Your Pizza</span><img class="uk-margin-small-left" src="{{asset('website-assets/img/icons/pizza.png')}}" alt="pizza"></a>
                    <ul class="uk-navbar-nav">
                        <li><a href="#">Our Menu</a></li>
                        <li><a href="{{route('gallery.page')}}">Gallery</a></li>
                        <li><a href="{{route('video.page')}}">Videos</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="{{route('contact.page')}}">Contact us</a></li>
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
                        <div class="block-with-phone"><img src="{{asset('website-assets/img/icons/delivery.svg')}}" alt="delivery" data-uk-svg>
                            <div> <span>For Delivery, Call us</span><a href="tel:13205448749">1-320-544-8749</a></div>
                        </div>
                    </div>
                </div>
                <div class="uk-navbar-center"></div>
                <div class="uk-navbar-right">
                    <div class="other-links">
                        <ul class="other-links-list">
                            <li><a href="#modal-full" data-uk-toggle><span data-uk-icon="search"></span></a></li>
                            <li><a href="#"><span data-uk-icon="user"></span></a></li>
                            <li><a href="#"><span data-uk-icon="cart"></span></a></li>
                        </ul><a class="uk-button" href="#"> <span>Make Your Pizza</span><img class="uk-margin-small-left" src="{{asset('website-assets/img/icons/pizza.png')}}" alt="pizza"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
