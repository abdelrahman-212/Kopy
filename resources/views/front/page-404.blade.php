@extends('layouts.front.app')
@section('content')


    <body class="page-404 dm-dark">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__top">
                <div class="uk-container">
                    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar="">
                        <div class="uk-navbar-left"><button class="uk-button" type="button" data-target="#offcanvas" data-uk-toggle data-uk-icon="menu"></button>
                            <ul class="uk-navbar-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="page-catalog-sidebar.html">Order Online</a></li>
                                <li><a href="page-blog-article.html">Your Wishlist</a></li>
                            </ul>
                        </div>
                        <div class="uk-navbar-center">
                            <div class="logo">
                                <div class="logo__box"><a class="logo__link" href="index.html"> <img class="logo__img logo__img--full" src="assets/img/logo.png" alt="logo"><img class="logo__img logo__img-small" src="assets/img/logo-small.png" alt="logo"></a></div>
                            </div>
                        </div>
                        <div class="uk-navbar-right"><a class="uk-button" href="page-pizza-builder.html"> <span>Make Your Pizza</span><img class="uk-margin-small-left" src="assets/img/icons/pizza.png" alt="pizza"></a>
                            <ul class="uk-navbar-nav">
                                <li><a href="page-catalog.html">Our Menu</a></li>
                                <li><a href="page-blog.html">Latest News</a></li>
                                <li><a href="page-contacts.html">Contact us</a></li>
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
                                <div class="block-with-phone"><img src="assets/img/icons/delivery.svg" alt="delivery" data-uk-svg>
                                    <div> <span>For Delivery, Call us</span><a href="tel:13205448749">1-320-544-8749</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-center"></div>
                        <div class="uk-navbar-right">
                            <div class="other-links">
                                <ul class="other-links-list">
                                    <li><a href="#modal-full" data-uk-toggle><span data-uk-icon="search"></span></a></li>
                                    <li><a href="#!"><span data-uk-icon="user"></span></a></li>
                                    <li><a href="page-cart.html"><span data-uk-icon="cart"></span></a></li>
                                </ul><a class="uk-button" href="page-pizza-builder.html"> <span>Make Your Pizza</span><img class="uk-margin-small-left" src="assets/img/icons/pizza.png" alt="pizza"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="page-main">
            <div class="section-first-screen">
                <div class="first-screen__bg" style="background-image: url(assets/img/pages/contacts/bg-first-screen.jpg)"></div>
                <div class="first-screen__content">
                    <div class="uk-container">
                        <nav class="category-nav">
                            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                                <ul class="uk-navbar-nav">
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img src="assets/img/icons/menu/burgers-big.svg" alt="burgers" data-uk-svg></span><span class="nav-item__text">burgers</span></div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img src="assets/img/icons/menu/pizzas-big.svg" alt="pizzas" data-uk-svg></span><span class="nav-item__text">pizzas </span></div>
                                        </a>
                                        <div class="uk-navbar-dropdown" data-uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;">
                                            <div class="uk-navbar-dropdown-grid uk-grid-small" data-uk-grid>
                                                <div class="uk-width-1-5">
                                                    <div class="product-card-menu"><a class="product-card-menu__link" href="page-product.html">
                                                            <div class="product-card-menu__media"><img src="assets/img/products-menu/pizza-1.jpg" alt></div>
                                                            <div class="product-card-menu__body">
                                                                <div class="product-card-menu__title">Creamy Melt Pizza</div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="uk-width-1-5">
                                                    <div class="product-card-menu"><a class="product-card-menu__link" href="page-product.html">
                                                            <div class="product-card-menu__media"><img src="assets/img/products-menu/pizza-2.jpg" alt></div>
                                                            <div class="product-card-menu__body">
                                                                <div class="product-card-menu__title">Neapolitan Pizza </div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="uk-width-1-5">
                                                    <div class="product-card-menu"><a class="product-card-menu__link" href="page-product.html">
                                                            <div class="product-card-menu__media"><img src="assets/img/products-menu/pizza-3.jpg" alt></div>
                                                            <div class="product-card-menu__body">
                                                                <div class="product-card-menu__title">Hot n Spicy Pizza</div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="uk-width-2-5">
                                                    <ul class="uk-nav">
                                                        <li class="uk-nav-header">More Pizzas</li>
                                                        <li><a href="page-catalog.html">Sriracha Beef</a></li>
                                                        <li><a href="page-catalog.html">Garlic Prawn Pizza</a></li>
                                                        <li><a href="page-catalog.html">Classic Pepproni</a></li>
                                                        <li><a href="page-catalog.html">Pizza Margherita</a></li>
                                                        <li><a href="page-catalog.html">Hot n Spicy Pizza</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img src="assets/img/icons/menu/noodles-big.svg" alt="noodles" data-uk-svg></span><span class="nav-item__text">noodles</span></div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img src="assets/img/icons/menu/sushi-big.svg" alt="sushi" data-uk-svg></span><span class="nav-item__text">sushi</span></div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img src="assets/img/icons/menu/desserts-big.svg" alt="desserts" data-uk-svg></span><span class="nav-item__text">desserts</span></div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img src="assets/img/icons/menu/salads-big.svg" alt="salads" data-uk-svg></span><span class="nav-item__text">salads</span></div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img src="assets/img/icons/menu/drinks-big.svg" alt="drinks" data-uk-svg></span><span class="nav-item__text">drinks</span></div>
                                        </a></li>
                                </ul>
                            </nav>
                        </nav>
                        <div class="first-screen__box">
                            <h2 class="first-screen__title">Page Not Found</h2>
                            <div class="first-screen__breadcrumb">
                                <ul class="uk-breadcrumb">
                                    <li><a href="/">Back To Home</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-section uk-container uk-container-small">
                    <div class="page-404-error"> <img class="page-404-error__img" src="assets/img/pages/404/404.svg" alt="">
                        <div class="page-404-error__form">
                            <div class="page-404-error__form-title">Sorry, but the page has not found.</div>
                            <div class="page-404-error__form-desc">We are unable to find the page you has requested, try searching below:</div>
                            <div class="page-404-error-form">
                                <form action="#!">
                                    <div class="page-404-error-form__box"><input type="email" placeholder="Type a keyword ..."><input class="uk-button" type="submit" value="Search"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    </body>


@endsection

@push('js')

@endpush
