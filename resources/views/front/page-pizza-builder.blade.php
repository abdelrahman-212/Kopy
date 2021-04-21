

@extends('layouts.front.app')
@section('content')
<body class="page-pizza-builder dm-dark">

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
              <h2 class="first-screen__title">Pizza Builder</h2>
              <div class="first-screen__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li> <a href="page-catalog.html">Pizza</a></li>
                  <li> <span>Build Your Pizza</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-margin-large-top uk-container">
          <div class="pizza-builder">
            <div class="uk-grid" data-uk-grid>
              <div class="uk-width-2-3@m">
                <div class="pizza-builder-steps">
                  <div class="pizza-builder-step">
                    <div class="pizza-builder-step__title">
                      <div class="pizza-builder-step__numb">1</div>
                      <h3 class="uk-h3">Choose Your Crust</h3>
                    </div>
                    <div class="pizza-builder-step__content">
                      <div class="pizza-builder-size-pizza">
                        <ul class="size-pizza-list">
                          <li class="size-pizza-item"><label class="size-pizza-item__box"><input type="radio" name="size"><span class="size-pizza-item__content"><span class="size-pizza-item__circle small"><span>9”</span></span><span class="size-pizza-item__title">Small</span></span></label></li>
                          <li class="size-pizza-item"><label class="size-pizza-item__box"><input type="radio" name="size"><span class="size-pizza-item__content"><span class="size-pizza-item__circle medium"><span>12”</span></span><span class="size-pizza-item__title">Medium</span></span></label></li>
                          <li class="size-pizza-item"><label class="size-pizza-item__box"><input type="radio" name="size" checked><span class="size-pizza-item__content"><span class="size-pizza-item__circle large"><span>14”</span></span><span class="size-pizza-item__title">Large</span></span></label></li>
                          <li class="size-pizza-item"><label class="size-pizza-item__box"><input type="radio" name="size"><span class="size-pizza-item__content"><span class="size-pizza-item__circle jumbo"><span>16”</span></span><span class="size-pizza-item__title">Jumbo</span></span></label></li>
                          <li class="size-pizza-item"><label class="size-pizza-item__box"><input type="radio" name="size"><span class="size-pizza-item__content"><span class="size-pizza-item__circle party"><span>18”</span></span><span class="size-pizza-item__title">Party Size</span></span></label></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="pizza-builder-step">
                    <div class="pizza-builder-step__title">
                      <div class="pizza-builder-step__numb">2</div>
                      <h3 class="uk-h3">Select Your Sauce</h3>
                    </div>
                    <div class="pizza-builder-step__content">
                      <div class="pizza-builder-sause">
                        <div class="js-hidden-box sause-list uk-grid uk-child-width-1-3@s uk-child-width-1-2" data-uk-grid>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-1.jpg" alt="souse"></span><span class="sause-item__title">Ranch</span><span class="sause-item__desc">A cool, perfect blend of herbs and spices.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-2.jpg" alt="souse"></span><span class="sause-item__title">Blue Cheese</span><span class="sause-item__desc">Creamy blue cheese packed with flavor in every dip.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-3.jpg" alt="souse"></span><span class="sause-item__title">Marinara</span><span class="sause-item__desc">All the flavor of Italian pizza sauce for dipping.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-4.jpg" alt="souse"></span><span class="sause-item__title">Garlic</span><span class="sause-item__desc">A cool, perfect blend of herbs and spices.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-5.jpg" alt="souse"></span><span class="sause-item__title">Barbeque</span><span class="sause-item__desc">Creamy blue cheese packed with flavor in every dip.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-6.jpg" alt="souse"></span><span class="sause-item__title">Cheese</span><span class="sause-item__desc">All the flavor of Italian pizza sauce for dipping.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-1.jpg" alt="souse"></span><span class="sause-item__title">Ranch</span><span class="sause-item__desc">A cool, perfect blend of herbs and spices.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-2.jpg" alt="souse"></span><span class="sause-item__title">Blue Cheese</span><span class="sause-item__desc">Creamy blue cheese packed with flavor in every dip.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-3.jpg" alt="souse"></span><span class="sause-item__title">Marinara</span><span class="sause-item__desc">All the flavor of Italian pizza sauce for dipping.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-4.jpg" alt="souse"></span><span class="sause-item__title">Garlic</span><span class="sause-item__desc">A cool, perfect blend of herbs and spices.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-5.jpg" alt="souse"></span><span class="sause-item__title">Barbeque</span><span class="sause-item__desc">Creamy blue cheese packed with flavor in every dip.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="sause-item">
                              <div class="js-checkbox sause-item__box"><span class="sause-item__content"><span class="sause-item__media"><img src="assets/img/pages/builder/souse-6.jpg" alt="souse"></span><span class="sause-item__title">Cheese</span><span class="sause-item__desc">All the flavor of Italian pizza sauce for dipping.</span><span class="sause-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="js-hidden-btn uk-text-center uk-margin-medium-top"><button class="btn-more" type="button">View More Options</button></div>
                      </div>
                    </div>
                  </div>
                  <div class="pizza-builder-step">
                    <div class="pizza-builder-step__title">
                      <div class="pizza-builder-step__numb">3</div>
                      <h3 class="uk-h3">Add Extra Cheese</h3>
                    </div>
                    <div class="pizza-builder-step__content">
                      <div class="pizza-builder-cheese">
                        <div class="cheese-list uk-grid uk-child-width-1-3@s uk-child-width-1-2" data-uk-grid>
                          <div>
                            <div class="cheese-item">
                              <div class="js-checkbox cheese-item__box"><span class="cheese-item__content"><span class="cheese-item__media"><img src="assets/img/pages/builder/cheese-1.jpg" alt="cheese"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="cheese-item__title">Garlic Cheese</span><span class="cheese-item__desc">Garlic Cheese 80g</span><span class="cheese-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="cheese-item">
                              <div class="js-checkbox cheese-item__box"><span class="cheese-item__content"><span class="cheese-item__media"><img src="assets/img/pages/builder/cheese-2.jpg" alt="cheese"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="cheese-item__title">Apple Cheese</span><span class="cheese-item__desc">Apple Cheese 50g</span><span class="cheese-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pizza-builder-step">
                    <div class="pizza-builder-step__title">
                      <div class="pizza-builder-step__numb">4</div>
                      <h3 class="uk-h3">Choose Your Toppings</h3>
                    </div>
                    <div class="pizza-builder-step__content">
                      <p>You can select upto 3 toppings for your order.</p>
                      <div class="pizza-builder-toppings">
                        <div class="js-hidden-box toppings-list uk-grid uk-child-width-1-3@s uk-child-width-1-2" data-uk-grid>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-1.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Pineapple</span><span class="toppings-item__desc">Pineapple 80g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-2.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Mushrooms</span><span class="toppings-item__desc">Mushrooms 50g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-3.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Hot Chillies</span><span class="toppings-item__desc">Hot Chillies 10g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-4.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Aubergines</span><span class="toppings-item__desc">Aubergines 50g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-5.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Peppers</span><span class="toppings-item__desc">Peppers 5g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-2.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Sweet Corn</span><span class="toppings-item__desc">Sweet Corn 80g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-1.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Pineapple</span><span class="toppings-item__desc">Pineapple 80g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-2.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Mushrooms</span><span class="toppings-item__desc">Mushrooms 50g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-3.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Hot Chillies</span><span class="toppings-item__desc">Hot Chillies 10g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-4.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Aubergines</span><span class="toppings-item__desc">Aubergines 50g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-5.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Peppers</span><span class="toppings-item__desc">Peppers 5g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                          <div>
                            <div class="toppings-item">
                              <div class="js-checkbox toppings-item__box"><span class="toppings-item__content"><span class="toppings-item__media"><img src="assets/img/pages/builder/toppings-2.jpg" alt="toppings"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></span><span class="toppings-item__title">Sweet Corn</span><span class="toppings-item__desc">Sweet Corn 80g</span><span class="toppings-item__price">$5.50</span></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="js-hidden-btn uk-text-center uk-margin-medium-top"><button class="btn-more" type="button">View More Options</button></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="uk-width-1-3@m uk-flex-first@m">
                <div class="pizza-builder-order">
                  <div class="pizza-builder-order__title">Your Order</div>
                  <div class="pizza-builder-order__rows">
                    <div class="pizza-builder-order__row pizza-builder-order__row-title"> <span>Product</span><span>Total</span></div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Meat Board</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">20 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Pineapples</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">35 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Sweet Pepper</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">40 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Mushroom Mix</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">20 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Sausage Salami</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">35 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Fine Becon</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">40 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Sauce "City Pizza"</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">20 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Meat Board</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">20 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Pineapples</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">35 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Sweet Pepper</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">40 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Mushroom Mix</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">20 s</div>
                    </div>
                    <div class="pizza-builder-order__row">
                      <div class="pizza-builder-order__row-name">Fine Susage</div>
                      <div class="pizza-builder-order__row-col"><span class="counter"><span class="minus">-</span><input type="text" value="1" /><span class="plus">+</span></span></div>
                      <div class="pizza-builder-order__row-price">55 s</div>
                    </div>
                  </div>
                  <div class="pizza-builder-order__info"> <span>Pizza Size:  14” Large</span><span>$6.70</span></div>
                  <div class="pizza-builder-order__total"><span>Order Total</span><span>$25.38</span></div>
                  <div class="pizza-builder-order__btns"> <button class="uk-button uk-width-1-1" type="button"><span>Add to Cart</span><span data-uk-icon="cart"></span></button><button class="uk-button uk-button-default uk-width-1-1" type="button"><span>Add / Create another pizza</span></button></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="page-footer">
      <div class="page-footer__top">
        <div class="uk-container">
          <div class="page-footer__logo">
            <div class="logo"> <a class="logo__link" href="index.html"><img class="logo__img" src="assets/img/logo-white.png" alt="logo"></a></div>
          </div>
          <div class="page-footer__contacts">
            <div class="contact-item-box">
              <div class="contact-item-box__title">Our Address </div>
              <div class="contact-item-box__value">430 Barfield Lane, Indianapolis,<br> CA 46278, USA</div>
            </div>
            <div class="contact-item-box">
              <div class="contact-item-box__title">Opening Hours</div>
              <div class="contact-item-box__value">Mon – Sat: 10:00 AM – 11:30 PM<br> Sun: 9:00 AM – 4:00 PM</div>
            </div>
            <div class="contact-item-box">
              <div class="contact-item-box__title">Contact us</div>
              <div class="contact-item-box__value">Email: <a href="mailto:food@our-example.com">food@our-example.com</a><br> Phone: <a href="tel:3205448749">320-544-8749</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-footer__middle">
        <div class="uk-container">
          <ul class="uk-navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="page-catalog-sidebar.html">Our Menu</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="page-404.html">404</a></li>
            <li><a href="page-wishlist.html">Wishlist</a></li>
            <li><a href="page-blog.html">News</a></li>
            <li><a href="page-contacts.html">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="page-footer__bottom">
        <div class="uk-container">
          <div class="page-footer__social">
            <ul class="social">
              <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-twitter"></i></a></li>
              <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
              <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-google-plus-g"></i></a></li>
              <li class="social-item"><a class="social-link" href="#!"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
          <div class="page-footer__copy"><span>© Copyrights 2020 Spedito. All rights reserved.</span><a href="#!">Terms and Conditions</a></div>
        </div>
      </div>
      <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
          <div class="uk-margin-top">
            <ul class="uk-nav">
              <li><a href="/">Home</a></li>
              <li><a href="page-blog-article.html">About Spedito</a></li>
              <li><a href="page-catalog-sidebar.html">Order Online</a></li>
              <li><a href="page-catalog.html">Our Menu</a></li>
              <li><a href="page-blog.html">Latest News</a></li>
              <li><a href="page-contacts.html">Contact us</a></li>
            </ul>
          </div>
          <hr class="uk-margin">
          <ul class="uk-nav uk-nav-parent-icon" data-uk-nav>
            <li><a href="page-catalog.html">Burgers</a></li>
            <li class="uk-parent"><a href="page-catalog.html">Pizzas </a>
              <ul class="uk-nav-sub">
                <li><a href="page-product.html">Sriracha Beef</a></li>
                <li><a href="page-product.html">Garlic Prawn Pizza</a></li>
                <li><a href="page-product.html">Classic Pepproni</a></li>
                <li><a href="page-product.html">Pizza Margherita</a></li>
                <li><a href="page-product.html">Hot n Spicy Pizza</a></li>
              </ul>
            </li>
            <li><a href="page-catalog.html">Noodles</a></li>
            <li><a href="page-catalog.html">Sushi</a></li>
            <li><a href="page-catalog.html">Desserts</a></li>
            <li><a href="page-catalog.html">Salads</a></li>
            <li><a href="page-catalog.html">Drinks</a></li>
          </ul>
          <hr class="uk-margin">
          <div class="uk-margin-bottom">
            <div class="block-with-phone"><img src="assets/img/icons/delivery.svg" alt="delivery" data-uk-svg>
              <div> <span>For Delivery, Call us</span><a href="tel:13205448749">1-320-544-8749</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="uk-flex-top" id="callback" data-uk-modal="">
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close=""></button>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="uk-modal-full uk-modal" id="modal-full" data-uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport><button class="uk-modal-close-full" type="button" data-uk-close></button>
          <form class="uk-search uk-search-large"><input class="uk-search-input uk-text-center" type="search" placeholder="Search..." autofocus></form>
        </div>
      </div>
    </footer>
  </div>

</body>

@endsection

@push('js')

@endpush