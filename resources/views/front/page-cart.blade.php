@extends('layouts.front.app')
@section('content')




    <body class="page-cart dm-dark">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <div class="page-wrapper">
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
                            <h2 class="first-screen__title">Cart Details</h2>
                            <div class="first-screen__breadcrumb">
                                <ul class="uk-breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li> <span>My Cart</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-margin-large-top uk-container uk-container-small"><img class="page-cart__img" src="assets/img/pages/cart/img-cart.png" alt="">
                    <div class="page-cart__box">
                        <div class="page-cart__title">Your cart is currently empty.</div><a class="uk-button" href="page-catalog.html">Return to Shop</a>
                    </div>
                </div>
            </div>
            <div class="section-recommend-products">
                <div class="uk-section uk-container">
                    <div class="section-title section-title--center wave burger">
                        <h3 class="uk-h3">You May Like To Order</h3>
                    </div>
                    <div class="section-content">
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
                                    </ul>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
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
