@extends('layouts.front.app')
@section('content')


    <body class="page-home dm-dark">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <div class="page-wrapper">
        <main class="page-main">
            <div class="section-first-screen">
                <div class="first-screen__slideshow">
                    <div data-uk-slideshow="min-height: 400; max-height: 785; autoplay: true">
                        <div class="uk-position-relative" tabindex="-1">
                            <ul class="uk-slideshow-items">
                                <li>
                                    <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="assets/img/pages/home/slider-1.jpg" alt="slider-1" data-uk-cover></div>
                                </li>
                                <li>
                                    <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="assets/img/pages/home/slider-2.jpg" alt="slider-2" data-uk-cover></div>
                                </li>
                                <li>
                                    <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="assets/img/pages/home/slider-3.jpg" alt="slider-3" data-uk-cover></div>
                                </li>
                            </ul>
                        </div>
                        <div class="slideshow-dotnav uk-position-bottom-center">
                            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center"></ul>
                        </div>
                    </div>
                </div>
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
                            <h2 class="first-screen__title">Order Today, While It’s Hot!</h2>
                            <p class="first-screen__desc">Eat Delicious & Tasty Fast-Foods With Real Flavours</p><a class="uk-button" href="page-catalog-sidebar.html">View Our Menu</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-about">
                <div class="uk-section uk-container">
                    <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                        <div class="uk-text-center"><img src="assets/img/pages/home/img-about.png" alt=""></div>
                        <div>
                            <div class="section-title burger wave">
                                <h3 class="uk-h3">Cooking With Passion</h3>
                            </div>
                            <div class="section-content">
                                <p>Incididunt ut labore et dolore magna aliqua enim ad minim veniam quisya nostrud exercitation ullamco laboris nisi ut aliquip ex ea com labmodo consequat dhuis aute irure dolor in reprehen deritn volupta velit esse id est anim laborum. </p>
                                <p>Cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupida non oident sunt in culpa qui officia deserunt mollit.</p>
                                <div class="uk-margin-medium-top"><a class="uk-button" href="page-blog-article.html"><span>Read More</span><img class="uk-margin-small-left" src="assets/img/icons/ice-cream.svg" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-features">
                <div class="uk-section uk-container">
                    <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                        <div>
                            <div class="feature-item">
                                <div class="feature-item__icon"><img src="assets/img/icons/feature-1.svg" alt="feature"></div>
                                <div class="feature-item__title">Fresh Ingredients</div>
                                <div class="feature-item__desc">Magna aliqua enim minim veniam quisya nost exercitation ullamco sed laboris nisy.</div>
                            </div>
                        </div>
                        <div>
                            <div class="feature-item">
                                <div class="feature-item__icon"><img src="assets/img/icons/feature-2.svg" alt="feature"></div>
                                <div class="feature-item__title">The Certified Chefs</div>
                                <div class="feature-item__desc">Magna aliqua enim minim veniam quisya nost exercitation ullamco sed laboris nisy.</div>
                            </div>
                        </div>
                        <div>
                            <div class="feature-item">
                                <div class="feature-item__icon"><img src="assets/img/icons/feature-3.svg" alt="feature"></div>
                                <div class="feature-item__title">30 Mins Delivery</div>
                                <div class="feature-item__desc">Magna aliqua enim minim veniam quisya nost exercitation ullamco sed laboris nisy.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-special-deals">
                <div class="uk-section uk-container">
                    <div class="section-title section-title--center wave french-fries">
                        <h3 class="uk-h3">Our Special Deals</h3>
                    </div>
                    <div class="section-content">
                        <ul class="uk-subnav uk-flex-center" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; swiping: false; active: 1">
                            <li><a href="#">Burgers</a></li>
                            <li><a href="#">Pizzas</a></li>
                            <li><a href="#">Noodles</a></li>
                            <li><a href="#">Drinks</a></li>
                            <li><a href="#">Salads</a></li>
                        </ul>
                        <ul class="uk-switcher">
                            <li>
                                <div data-uk-slider>
                                    <div class="uk-position-relative">
                                        <div class="uk-slider-container uk-light">
                                            <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="uk-visible@l"><a class="uk-position-top-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-top-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a></div>
                                        <div class="uk-hidden@l">
                                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-uk-slider>
                                    <div class="uk-position-relative">
                                        <div class="uk-slider-container uk-light">
                                            <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="uk-visible@l"><a class="uk-position-top-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-top-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a></div>
                                        <div class="uk-hidden@l">
                                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-uk-slider>
                                    <div class="uk-position-relative">
                                        <div class="uk-slider-container uk-light">
                                            <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="uk-visible@l"><a class="uk-position-top-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-top-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a></div>
                                        <div class="uk-hidden@l">
                                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-uk-slider>
                                    <div class="uk-position-relative">
                                        <div class="uk-slider-container uk-light">
                                            <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="uk-visible@l"><a class="uk-position-top-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-top-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a></div>
                                        <div class="uk-hidden@l">
                                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div data-uk-slider>
                                    <div class="uk-position-relative">
                                        <div class="uk-slider-container uk-light">
                                            <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l">
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-1.png"><img src="assets/img/products/pizza-1.png" alt="Creamy Melt Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Creamy Melt Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-1" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-1" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-1" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-1" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-2.png"><img src="assets/img/products/pizza-2.png" alt="Neapolitan Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Neapolitan Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-2" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-2" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-2" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-2" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$15.30</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-3.png"><img src="assets/img/products/pizza-3.png" alt="Hot n Spicy Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type vegetarian"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: vegetarian pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Hot n Spicy Pizza</a></div>
                                                                    <div class="product-item__desc">Spicy Cheese pizza with topping of beef pepperoni &amp; sauce</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-3" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-3" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-3" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-3" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$9.50</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-item">
                                                        <div class="product-item__box">
                                                            <div class="product-item__intro">
                                                                <div class="product-item__not-active">
                                                                    <div class="product-item__media">
                                                                        <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="assets/img/products/pizza-4.png"><img src="assets/img/products/pizza-4.png" alt="Chees’on Pizza" />
                                                                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                                                <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                                            </a></div>
                                                                        <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                                        <div class="product-item__type spicy"></div>
                                                                        <div class="product-item__tooltip" data-uk-tooltip="title: spicy pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                                    </div>
                                                                    <div class="product-item__title"><a href="page-product.html">Chees’on Pizza</a></div>
                                                                    <div class="product-item__desc">Pizza topped with ringed shap chicken slices &amp; tomytos</div>
                                                                    <div class="product-item__select">
                                                                        <div class="select-box select-box--thickness">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="thickness-4" checked="checked" /><span>Thin</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Normal</span></label></li>
                                                                                <li><label><input type="radio" name="thickness-4" /><span>Thick</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="select-box select-box--size">
                                                                            <ul>
                                                                                <li><label><input type="radio" name="size-4" /><span>7 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" /><span>9 “</span></label></li>
                                                                                <li><label><input type="radio" name="size-4" checked="checked" /><span>11 “</span></label></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-item__active">
                                                                    <div class="title">Add Ingredients</div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sausage Salami</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Becon</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sauce "City Pizza"</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Meat Board</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Pineapples</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">35 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Sweet Pepper</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">40 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Mushroom Mix</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">20 s</div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="name">Fine Susage</div>
                                                                        <div class="col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                                                                        <div class="price">55 s</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-item__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                                                            <div class="product-item__info">
                                                                <div class="product-item__price"> <span>Price: </span><span class="value">$20.45</span></div>
                                                                <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="uk-visible@l"><a class="uk-position-top-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-top-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a></div>
                                        <div class="uk-hidden@l">
                                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-steps">
                <div class="uk-section">
                    <div class="uk-container">
                        <div class="section-title"> <span>Order Your Own Tasty Food</span>
                            <h3 class="uk-h3">It Takes 2 Minutes To Make Your<br> Own Tasty Pizza And Order From Us</h3>
                        </div>
                    </div>
                    <div class="uk-container-expand">
                        <div class="section-content">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-1-3@m"><img src="assets/img/pages/home/img-steps.png" alt=""></div>
                                <div class="uk-width-2-3@m">
                                    <div data-uk-slider="finite: true">
                                        <div class="uk-position-relative">
                                            <div class="uk-slider-container">
                                                <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l uk-child-width-1-4@xl">
                                                    <li>
                                                        <div class="step-item step-item--1">
                                                            <div class="step-item__icon"><img src="assets/img/pages/home/step-1.png" alt="img-step"></div>
                                                            <div class="step-item__numb">Step 1</div>
                                                            <div class="step-item__title">Choose the Crust</div>
                                                            <div class="step-item__desc">Magna aliqua enim miniy veniam quisya nostr exercitation ullamco laboris nisiut sed ipsum.</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="step-item step-item--2">
                                                            <div class="step-item__icon"><img src="assets/img/pages/home/step-2.png" alt="img-step"></div>
                                                            <div class="step-item__numb">Step 2</div>
                                                            <div class="step-item__title">Select your Sauce</div>
                                                            <div class="step-item__desc">Magna aliqua enim miniy veniam quisya nostr exercitation ullamco laboris nisiut sed ipsum.</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="step-item step-item--3">
                                                            <div class="step-item__icon"><img src="assets/img/pages/home/step-3.png" alt="img-step"></div>
                                                            <div class="step-item__numb">Step 3</div>
                                                            <div class="step-item__title">Add some Cheese</div>
                                                            <div class="step-item__desc">Magna aliqua enim miniy veniam quisya nostr exercitation ullamco laboris nisiut sed ipsum.</div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="step-item step-item--4">
                                                            <div class="step-item__icon"><img src="assets/img/pages/home/step-4.png" alt="img-step"></div>
                                                            <div class="step-item__numb">Step 4</div>
                                                            <div class="step-item__title">Extra Toppings</div>
                                                            <div class="step-item__desc">Magna aliqua enim miniy veniam quisya nostr exercitation ullamco laboris nisiut sed ipsum.</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin-medium-top uk-text-center"> <a class="uk-button" href="page-pizza-builder.html"><span>Create & Order Now!</span><img class="uk-margin-small-left" src="assets/img/icons/ice-cream.svg" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-recommend">
                <div class="uk-section uk-container">
                    <div class="section-title section-title--center wave french-fries">
                        <h3 class="uk-h3">Recommend Tasty Food</h3>
                    </div>
                    <div class="section-content">
                        <div class="uk-margin-medium-top" data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container">
                                    <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@xl uk-child-width-1-3@xl" data-uk-height-match=".product-card__intro">
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__media"> <a href="page-product.html"><img class="uk-width-1-1" src="assets/img/products/recommend-1.jpg" alt="The Spruce Burger" /></a></div>
                                                <div class="product-card__body">
                                                    <div class="product-card__title"> <a href="page-product.html">The Spruce Burger</a></div>
                                                    <div class="product-card__stars">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-card__intro">
                                                        <p>A blend of brisket, short rib, and sirloin on a housemade English muffin bun.</p>
                                                    </div>
                                                    <div class="product-card__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                    <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__media"> <a href="page-product.html"><img class="uk-width-1-1" src="assets/img/products/recommend-2.jpg" alt="Samurai Liza Sushi" /></a></div>
                                                <div class="product-card__body">
                                                    <div class="product-card__title"> <a href="page-product.html">Samurai Liza Sushi</a></div>
                                                    <div class="product-card__stars">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-card__intro">
                                                        <p>Shrimp tempura, Avocado, cucumber, Eel, cream cheese, Spicy crab topped with tuna.</p>
                                                    </div>
                                                    <div class="product-card__price"> <span>Price: </span><span class="value">$12.50</span></div>
                                                    <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__media"> <a href="page-product.html"><img class="uk-width-1-1" src="assets/img/products/recommend-3.jpg" alt="Tempura Ice Cream" /></a></div>
                                                <div class="product-card__body">
                                                    <div class="product-card__title"> <a href="page-product.html">Tempura Ice Cream</a></div>
                                                    <div class="product-card__stars">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-card__intro">
                                                        <p>Your choice of ice cream warapped in pound cake and fried in tempura batter topped.</p>
                                                    </div>
                                                    <div class="product-card__price"> <span>Price: </span><span class="value">$8.50</span></div>
                                                    <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__media"> <a href="page-product.html"><img class="uk-width-1-1" src="assets/img/products/recommend-1.jpg" alt="The Spruce Burger" /></a></div>
                                                <div class="product-card__body">
                                                    <div class="product-card__title"> <a href="page-product.html">The Spruce Burger</a></div>
                                                    <div class="product-card__stars">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-card__intro">
                                                        <p>A blend of brisket, short rib, and sirloin on a housemade English muffin bun.</p>
                                                    </div>
                                                    <div class="product-card__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                                    <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__media"> <a href="page-product.html"><img class="uk-width-1-1" src="assets/img/products/recommend-2.jpg" alt="Samurai Liza Sushi" /></a></div>
                                                <div class="product-card__body">
                                                    <div class="product-card__title"> <a href="page-product.html">Samurai Liza Sushi</a></div>
                                                    <div class="product-card__stars">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-card__intro">
                                                        <p>Shrimp tempura, Avocado, cucumber, Eel, cream cheese, Spicy crab topped with tuna.</p>
                                                    </div>
                                                    <div class="product-card__price"> <span>Price: </span><span class="value">$12.50</span></div>
                                                    <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="product-card__media"> <a href="page-product.html"><img class="uk-width-1-1" src="assets/img/products/recommend-3.jpg" alt="Tempura Ice Cream" /></a></div>
                                                <div class="product-card__body">
                                                    <div class="product-card__title"> <a href="page-product.html">Tempura Ice Cream</a></div>
                                                    <div class="product-card__stars">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-card__intro">
                                                        <p>Your choice of ice cream warapped in pound cake and fried in tempura batter topped.</p>
                                                    </div>
                                                    <div class="product-card__price"> <span>Price: </span><span class="value">$8.50</span></div>
                                                    <div class="product-card__addcart"> <a class="uk-button uk-button-default uk-width-1-1" href="page-product.html">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="uk-visible@l"><a class="uk-position-top-left-out" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a><a class="uk-position-top-right-out" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a></div>
                                <div>
                                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-large-top">
                            <div class="uk-grid uk-grid-medium uk-child-width-1-2@m" data-uk-grid>
                                <div>
                                    <div class="banner-card">
                                        <div class="banner-card__bg" style="background-image: url(assets/img/banners/1.jpg)"></div>
                                        <div class="banner-card__box"> <a class="banner-card__category" href="#!">Spedito’s new</a>
                                            <h4 class="banner-card__title">Healthy Food Choices<br> For Everyome</h4><a class="banner-card__btn" href="page-catalog-sidebar.html">Start Your Order</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="banner-card">
                                        <div class="banner-card__bg" style="background-image: url(assets/img/banners/2.jpg)"></div>
                                        <div class="banner-card__box"> <a class="banner-card__category" href="#!">INTRODUCING</a>
                                            <h4 class="banner-card__title">We Made Truly<br> Crayved Chickens</h4><a class="banner-card__btn" href="page-blog.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-deal-of-the-week">
                <div class="uk-section uk-container">
                    <div class="section-deal-of-the-week__box">
                        <div class="section-deal-of-the-week__content">
                            <div class="section-title"><span>Deal of the Week</span>
                                <h3 class="uk-h3">Parmesan Caesar Chicken Salad</h3>
                            </div>
                            <div class="section-content">
                                <p>Made with fresh romaine lettuce, grilled chicken breast, grape tomatoes, Italian cheeses, crunchy Parmesan crisps, and creamy Caesar dressing & excellent taste of which one bite will tell you why it’s the only king of more than just the Salads.</p>
                                <div class="price-item"> <span>Per Serving </span><span class="value">$8.50</span></div>
                                <div class="uk-margin-medium-top"><a class="uk-button" href="page-cart.html"><span>Order Now!</span><img class="uk-margin-small-left" src="assets/img/icons/ice-cream.svg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="section-deal-of-the-week__media"> <img src="assets/img/pages/home/img-deal-of-the-week.png" alt="deal-of-the-week"></div>
                    </div>
                </div>
            </div>
            <div class="section-video">
                <div class="uk-section uk-container">
                    <div class="section-title section-title--center wave french-fries">
                        <h3 class="uk-h3">We Value Our Food<br> Only Familits & Communities</h3>
                    </div>
                    <div class="section-content">
                        <p class="uk-text-large uk-text-center">We're always think about serving up better fast-food. Here's how we actually do it.</p>
                        <div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div>
                                <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde omnis iste.</p>
                            </div>
                        </div>
                        <div class="video-box">
                            <div class="video-column video-column--center">
                                <div class="video-img">
                                    <div data-uk-lightbox="video-autoplay: true"><a href="https://www.youtube.com/watch?v=IUYs3mYgEPI" data-attrs="width: 1280; height: 720;"><img src="assets/img/pages/home/img-video.png" alt="img-video"></a></div>
                                </div>
                            </div>
                            <div class="video-column video-column--left">
                                <div class="video-item">
                                    <div class="video-item__icon"><img src="assets/img/icons/video-1.svg" alt="icon-video"></div>
                                    <div class="video-item__title">Certified Pure Oil</div>
                                    <div class="video-item__text">Adipisicing elit sed eiusmod tempor incidid unt ut labore dolore magna aliqua.</div>
                                </div>
                                <div class="video-item">
                                    <div class="video-item__icon"><img src="assets/img/icons/video-2.svg" alt="icon-video"></div>
                                    <div class="video-item__title">Reduce Antibiotics</div>
                                    <div class="video-item__text">Adipisicing elit sed eiusmod tempor incidid unt ut labore dolore magna aliqua.</div>
                                </div>
                            </div>
                            <div class="video-column video-column--right">
                                <div class="video-item">
                                    <div class="video-item__icon"><img src="assets/img/icons/video-3.svg" alt="icon-video"></div>
                                    <div class="video-item__title">Best Taste Pizzas</div>
                                    <div class="video-item__text">Adipisicing elit sed eiusmod tempor incidid unt ut labore dolore magna aliqua.</div>
                                </div>
                                <div class="video-item">
                                    <div class="video-item__icon"><img src="assets/img/icons/video-4.svg" alt="icon-video"></div>
                                    <div class="video-item__title">Bake Fresh Potatos</div>
                                    <div class="video-item__text">Adipisicing elit sed eiusmod tempor incidid unt ut labore dolore magna aliqua.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-subscribe">
                <div class="uk-section uk-container">
                    <div class="section-title section-title--center wave">
                        <h3 class="uk-h3">Subscribe for Promos, Discounts & Deals</h3>
                    </div>
                    <div class="section-content">
                        <div class="subscribe-form">
                            <form action="#!">
                                <div class="subscribe-form__box"><input type="email" placeholder="Enter your email address ..."><input class="uk-button" type="submit" value="Subscribe Now!"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-featured-deals">
                <div class="uk-container-expand">
                    <div data-uk-slider>
                        <div class="uk-position-relative">
                            <div class="uk-slider-container uk-light">
                                <ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l uk-child-width-1-3@xl">
                                    <li>
                                        <div class="featured-deal-item">
                                            <div class="uk-width-1-1 uk-inline-clip uk-transition-toggle" tabindex="0"><img class="uk-width-1-1" src="assets/img/pages/home/featured-deal-1.jpg" alt="featured-deal"><a class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-primary uk-flex uk-flex-column uk-flex-center uk-flex-middle" href="page-product.html">
                                                    <div class="featured-deal-item__title">Crispy Chicken Sandwich</div>
                                                    <div class="featured-deal-item__stars"> <img src="assets/img/decor/stars.png" alt="stars"></div>
                                                    <div class="featured-deal-item__price"> <span>Price: </span><span class="value">$12.50</span></div>
                                                </a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featured-deal-item">
                                            <div class="uk-width-1-1 uk-inline-clip uk-transition-toggle" tabindex="0"><img class="uk-width-1-1" src="assets/img/pages/home/featured-deal-2.jpg" alt="featured-deal"><a class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-primary uk-flex uk-flex-column uk-flex-center uk-flex-middle" href="page-product.html">
                                                    <div class="featured-deal-item__title">Crispy Chicken Sandwich</div>
                                                    <div class="featured-deal-item__stars"> <img src="assets/img/decor/stars.png" alt="stars"></div>
                                                    <div class="featured-deal-item__price"> <span>Price: </span><span class="value">$12.50</span></div>
                                                </a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="featured-deal-item">
                                            <div class="uk-width-1-1 uk-inline-clip uk-transition-toggle" tabindex="0"><img class="uk-width-1-1" src="assets/img/pages/home/featured-deal-3.jpg" alt="featured-deal"><a class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-primary uk-flex uk-flex-column uk-flex-center uk-flex-middle" href="page-product.html">
                                                    <div class="featured-deal-item__title">Crispy Chicken Sandwich</div>
                                                    <div class="featured-deal-item__stars"> <img src="assets/img/decor/stars.png" alt="stars"></div>
                                                    <div class="featured-deal-item__price"> <span>Price: </span><span class="value">$12.50</span></div>
                                                </a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-blog">
                <div class="uk-section uk-container">
                    <div class="section-title section-title--center wave burger">
                        <h3 class="uk-h3">News Blog Articles</h3>
                    </div>
                    <div class="section-content">
                        <div class="uk-margin-medium-top" data-uk-slider>
                            <div class="uk-position-relative">
                                <div class="uk-slider-container">
                                    <ul class="uk-slider-items uk-grid uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@xl uk-child-width-1-3@xl">
                                        <li>
                                            <div class="article-card">
                                                <div class="article-card__media"><a href="page-blog-article.html"><img src="assets/img/blog/1.jpg" alt="Soft &amp; fresh-baked chocolate cookie with chunks"></a></div>
                                                <div class="article-card__body">
                                                    <div class="article-card__info"><span class="article-card__date">July 31, 2020</span><span class="article-card__comments">210 </span></div>
                                                    <div class="article-card__title"><a href="page-blog-article.html">Soft &amp; fresh-baked chocolate cookie with chunks</a></div>
                                                    <div class="article-card__intro">
                                                        <p>Velit esse cillum doloreu fugiat nul pariat cupidatat non proident, suntin culp quioc deserunt mollit anim id est </p>
                                                    </div>
                                                    <div class="article-card__more"> <a class="uk-button-link" href="page-blog-article.html" data-uk-icon="arrow-right">Read more</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="article-card">
                                                <div class="article-card__media"><a href="page-blog-article.html"><img src="assets/img/blog/2.jpg" alt="Juicy white meat light bread topped with crisp lettuce"></a></div>
                                                <div class="article-card__body">
                                                    <div class="article-card__info"><span class="article-card__date">July 31, 2020</span><span class="article-card__comments">210 </span></div>
                                                    <div class="article-card__title"><a href="page-blog-article.html">Juicy white meat light bread topped with crisp lettuce</a></div>
                                                    <div class="article-card__intro">
                                                        <p>Velit esse cillum doloreu fugiat nul pariat cupidatat non proident, suntin culp quioc deserunt mollit anim id est </p>
                                                    </div>
                                                    <div class="article-card__more"> <a class="uk-button-link" href="page-blog-article.html" data-uk-icon="arrow-right">Read more</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="article-card">
                                                <div class="article-card__media"><a href="page-blog-article.html"><img src="assets/img/blog/3.jpg" alt="Marzetti for mixed greens, cheese any tomatos"></a></div>
                                                <div class="article-card__body">
                                                    <div class="article-card__info"><span class="article-card__date">July 31, 2020</span><span class="article-card__comments">210 </span></div>
                                                    <div class="article-card__title"><a href="page-blog-article.html">Marzetti for mixed greens, cheese any tomatos</a></div>
                                                    <div class="article-card__intro">
                                                        <p>Velit esse cillum doloreu fugiat nul pariat cupidatat non proident, suntin culp quioc deserunt mollit anim id est </p>
                                                    </div>
                                                    <div class="article-card__more"> <a class="uk-button-link" href="page-blog-article.html" data-uk-icon="arrow-right">Read more</a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-instagram">
                <div class="uk-container">
                    <div class="section-title section-title--center wave">
                        <h3 class="uk-h3">Folow us on Instagram</h3>
                    </div>
                </div>
                <div class="uk-container-expand">
                    <div class="uk-margin-medium-top" data-uk-slider>
                        <div class="uk-position-relative">
                            <div class="uk-slider-container uk-light">
                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-child-width-1-6@xl">
                                    <li><a href="#" target="_blank"><img class="uk-width-1-1" src="assets/img/pages/home/instagram-1.jpg" alt="instagram"></a></li>
                                    <li><a href="#" target="_blank"><img class="uk-width-1-1" src="assets/img/pages/home/instagram-2.jpg" alt="instagram"></a></li>
                                    <li><a href="#" target="_blank"><img class="uk-width-1-1" src="assets/img/pages/home/instagram-3.jpg" alt="instagram"></a></li>
                                    <li><a href="#" target="_blank"><img class="uk-width-1-1" src="assets/img/pages/home/instagram-4.jpg" alt="instagram"></a></li>
                                    <li><a href="#" target="_blank"><img class="uk-width-1-1" src="assets/img/pages/home/instagram-5.jpg" alt="instagram"></a></li>
                                    <li><a href="#" target="_blank"><img class="uk-width-1-1" src="assets/img/pages/home/instagram-6.jpg" alt="instagram"></a></li>
                                </ul>
                            </div>
                            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
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