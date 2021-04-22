@extends('layouts.website.app')

@section('title') Product @endsection

@section('styles')@endsection

@section('pageName') <body class="page-product dm-dark"> @endsection

@section('content')
    <main class="page-main">
        <div class="section-first-screen">
            <div class="first-screen__bg" style="background-image: url({{asset('website-assets/img/pages/contacts/bg-first-screen.jpg')}})"></div>
            <div class="first-screen__content">
                <div class="uk-container">
                    <nav class="category-nav">
                        <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                            <ul class="uk-navbar-nav">
                                <li><a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="{{asset('website-assets/img/icons/menu/burgers-big.svg')}}" alt="burgers" data-uk-svg></span><span class="nav-item__text">burgers</span></div>
                                    </a></li>
                                <li><a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="{{asset('website-assets/img/icons/menu/pizzas-big.svg')}}" alt="pizzas" data-uk-svg></span><span class="nav-item__text">pizzas </span></div>
                                    </a>
                                    <div class="uk-navbar-dropdown" data-uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;">
                                        <div class="uk-navbar-dropdown-grid uk-grid-small" data-uk-grid>
                                            <div class="uk-width-1-5">
                                                <div class="product-card-menu"><a class="product-card-menu__link" href="page-product.html">
                                                        <div class="product-card-menu__media"><img src="{{asset('website-assets/img/products-menu/pizza-1.jpg')}}" alt></div>
                                                        <div class="product-card-menu__body">
                                                            <div class="product-card-menu__title">Creamy Melt Pizza</div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="uk-width-1-5">
                                                <div class="product-card-menu"><a class="product-card-menu__link" href="page-product.html">
                                                        <div class="product-card-menu__media"><img src="{{asset('website-assets/img/products-menu/pizza-2.jpg')}}" alt></div>
                                                        <div class="product-card-menu__body">
                                                            <div class="product-card-menu__title">Neapolitan Pizza </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="uk-width-1-5">
                                                <div class="product-card-menu"><a class="product-card-menu__link" href="page-product.html">
                                                        <div class="product-card-menu__media"><img src="{{asset('website-assets/img/products-menu/pizza-3.jpg')}}" alt></div>
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
                                        <div class="nav-item"><span class="nav-item__icon"><img src="{{asset('website-assets/img/icons/menu/noodles-big.svg')}}" alt="noodles" data-uk-svg></span><span class="nav-item__text">noodles</span></div>
                                    </a></li>
                                <li><a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="{{asset('website-assets/img/icons/menu/sushi-big.svg')}}" alt="sushi" data-uk-svg></span><span class="nav-item__text">sushi</span></div>
                                    </a></li>
                                <li><a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="{{asset('website-assets/img/icons/menu/desserts-big.svg')}}" alt="desserts" data-uk-svg></span><span class="nav-item__text">desserts</span></div>
                                    </a></li>
                                <li><a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="{{asset('website-assets/img/icons/menu/salads-big.svg')}}" alt="salads" data-uk-svg></span><span class="nav-item__text">salads</span></div>
                                    </a></li>
                                <li><a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="{{asset('website-assets/img/icons/menu/drinks-big.svg')}}" alt="drinks" data-uk-svg></span><span class="nav-item__text">drinks</span></div>
                                    </a></li>
                            </ul>
                        </nav>
                    </nav>
                    <div class="first-screen__box">
                        <h2 class="first-screen__title">Spinach Alfredo</h2>
                        <div class="first-screen__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li><a href="page-catalog.html">Pizza</a></li>
                                <li><span>Spinach Alfredo Pizza</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="uk-margin-large-top uk-container">
                <div class="product-full-card">
                    <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                        <div>
                            <div class="product-full-card__gallery">
                                <div data-uk-slideshow="ratio: 1:1; animation: slide">
                                    <div class="product-full-card__gallery-box">
                                        <ul class="uk-slideshow-items uk-child-width-1-1">
                                            <li class="uk-flex uk-flex-center uk-flex-middle"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></li>
                                            <li class="uk-flex uk-flex-center uk-flex-middle"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></li>
                                            <li class="uk-flex uk-flex-center uk-flex-middle"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></li>
                                            <li class="uk-flex uk-flex-center uk-flex-middle"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></li>
                                            <li class="uk-flex uk-flex-center uk-flex-middle"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></li>
                                        </ul>
                                        <div class="product-full-card__whish"><i class="fas fa-heart"></i></div>
                                        <div class="product-full-card__type spicy"></div>
                                        <div class="product-full-card__tooltip" data-uk-tooltip="title: pizza; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                    </div>
                                    <div class="uk-margin-top" data-uk-slider="finite: true">
                                        <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-3 uk-child-width-1-4@l">
                                            <li data-uk-slideshow-item="0"><a href="#"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></a></li>
                                            <li data-uk-slideshow-item="1"><a href="#"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></a></li>
                                            <li data-uk-slideshow-item="2"><a href="#"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></a></li>
                                            <li data-uk-slideshow-item="3"><a href="#"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></a></li>
                                            <li data-uk-slideshow-item="4"><a href="#"><img src="{{asset('website-assets/img/products/pizza-big.png')}}" alt="pizza-big"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-full-card__content">
                                <div class="product-full-card__not-active">
                                    <div class="product-full-card__title">Spinach Alfredo Pizza</div>
                                    <div class="product-full-card__desc">Creamy Alfredo Sauce with Olive Oil & Roasted Garlic, Fresh Spinach, Chopped Onions, and Mushrooms, Baked with Mozzarella, Feta, and Parmesan Cheeses. Topped with Sliced, Toasted Almonds.</div>
                                    <div class="product-full-card__select">
                                        <div class="select-box select-box--thickness">
                                            <ul>
                                                <li><label><input type="radio" name="thickness" checked><span>Thin</span></label></li>
                                                <li><label><input type="radio" name="thickness"><span>Normal</span></label></li>
                                                <li><label><input type="radio" name="thickness"><span>Thick</span></label></li>
                                            </ul>
                                        </div>
                                        <div class="select-box select-box--size">
                                            <ul>
                                                <li><label><input type="radio" name="size"><span>7 “</span></label></li>
                                                <li><label><input type="radio" name="size"><span>9 “</span></label></li>
                                                <li><label><input type="radio" name="size" checked><span>11 “</span></label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-full-card__active">
                                    <div class="title">Add Ingredients</div>
                                    <div class="product-full-card__rows">
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
                            </div>
                            <div class="product-full-card__toggle"> <button type="button"> <span>Additional Ingredients</span></button></div>
                            <div class="product-full-card__info">
                                <div class="product-full-card__price"> <span>Price: </span><span class="value">$14.99</span></div>
                                <div class="product-full-card__btns"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span><a class="uk-button" href="#!">Add to Cart<span data-uk-icon="cart"></span></a></div>
                            </div>
                            <div class="product-full-card__category"><span>Category:  </span><a href="#!">Pizza</a></div>
                            <div class="product-full-card__share"><span>Share This:</span>
                                <ul>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-full-card__tabs">
                        <ul class="uk-subnav" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                            <li><a href="#">Description</a></li>
                            <li><a href="#">Additional information</a></li>
                            <li><a href="#">Reviews (2)</a></li>
                        </ul>
                        <ul class="uk-switcher uk-margin">
                            <li>
                                <p>Cupidatat non proident, suntin culp quiofc deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p>Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                <ul class="product-full-card__info-list">
                                    <li><strong>Energy</strong><span>450 calories</span></li>
                                    <li><strong>Total Fats</strong><span>10 g (saturated 26%)</span></li>
                                    <li><strong>Carbohydrates</strong><span>21 g (Total Sugars 4g)</span></li>
                                    <li><strong>Protein</strong><span> 38 g</span></li>
                                </ul>
                                <p>Cupidatat non proident, suntin culp quiofc deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p>Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            </li>
                            <li>
                                <p>Cupidatat non proident, suntin culp quiofc deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p>Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                <ul class="product-full-card__info-list">
                                    <li><strong>Energy</strong><span>450 calories</span></li>
                                    <li><strong>Total Fats</strong><span>10 g (saturated 26%)</span></li>
                                    <li><strong>Carbohydrates</strong><span>21 g (Total Sugars 4g)</span></li>
                                    <li><strong>Protein</strong><span> 38 g</span></li>
                                </ul>
                                <p>Cupidatat non proident, suntin culp quiofc deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                <p>Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            </li>
                            <li>
                                <div class="section-title">
                                    <div class="uk-h2">Reviews</div>
                                </div>
                                <ul class="uk-comment-list">
                                    <li>
                                        <article class="uk-comment">
                                            <header class="uk-comment-header">
                                                <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                                                    <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./{{asset('website-assets/img/blog/img-reviews-1.png')}}" alt></div>
                                                    <div class="uk-width-expand@s">
                                                        <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                                            <h4 class="uk-comment-title uk-margin-remove">Michael Shaw</h4><span class="uk-text-meta uk-margin-small-left">August 20, 2020</span>
                                                        </div>
                                                        <div class="uk-comment-body">
                                                            <p>Incididunt ut labore et dolore magna aliqua enim ad minim veniam quisya nos ullamco laboris nisi ut aliquip ex ea com labmodo.</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </article>
                                        <ul>
                                            <li>
                                                <article class="uk-comment">
                                                    <header class="uk-comment-header">
                                                        <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                                                            <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./{{asset('website-assets/img/blog/img-reviews-2.png')}}" alt></div>
                                                            <div class="uk-width-expand@s">
                                                                <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                                                    <h4 class="uk-comment-title uk-margin-remove">Tom Butler</h4><span class="uk-text-meta uk-margin-small-left">August 20, 2020</span>
                                                                </div>
                                                                <div class="uk-comment-body">
                                                                    <p>Incididunt ut labore et dolore magna aliqua enim minim veniam ullamco laboris nisi ut aliquip ex ea com.</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </header>
                                                </article>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <article class="uk-comment">
                                            <header class="uk-comment-header">
                                                <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                                                    <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./{{asset('website-assets/img/blog/img-reviews-3.png')}}" alt></div>
                                                    <div class="uk-width-expand@s">
                                                        <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                                            <h4 class="uk-comment-title uk-margin-remove">Jasmine Hold</h4><span class="uk-text-meta uk-margin-small-left">August 20, 2020</span>
                                                        </div>
                                                        <div class="uk-comment-body">
                                                            <p>Incididunt ut labore et dolore magna aliqua enim ad minim veniam quisya nos ullamco laboris nisi ut aliquip ex ea com labmodo.</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </article>
                                    </li>
                                </ul>
                                <div class="block-form uk-margin-medium-top">
                                    <div class="section-title">
                                        <div class="uk-h2">Leave a Reply</div>
                                    </div>
                                    <div class="section-content">
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <form action="#!">
                                            <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                                                <div><input class="uk-input uk-form-large" type="text" placeholder="Your Name *"></div>
                                                <div><input class="uk-input uk-form-large" type="text" placeholder="Email *"></div>
                                                <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Reviews *"></textarea></div>
                                                <div><button class="uk-button uk-button-large" type="submit">Post Review</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-recommend-products">
            <div class="uk-section uk-container">
                <div class="section-title section-title--center wave french-fries">
                    <h3 class="uk-h3">Many Pizzas You'll Love</h3>
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
                                                            <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="{{asset('website-assets/img/products/pizza-1.png')}}"><img src="{{asset('website-assets/img/products/pizza-1.png')}}" alt="Creamy Melt Pizza" />
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
                                                            <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="{{asset('website-assets/img/products/pizza-2.png')}}"><img src="{{asset('website-assets/img/products/pizza-2.png')}}" alt="Neapolitan Pizza" />
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
                                                            <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="{{asset('website-assets/img/products/pizza-3.png')}}"><img src="{{asset('website-assets/img/products/pizza-3.png')}}" alt="Hot n Spicy Pizza" />
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
                                                            <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="{{asset('website-assets/img/products/pizza-4.png')}}"><img src="{{asset('website-assets/img/products/pizza-4.png')}}" alt="Chees’on Pizza" />
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
@endsection

@section('scripts')@endsection
