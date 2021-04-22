@extends('layouts.website.app')

@section('title') Contacts @endsection

@section('styles')@endsection

@section('pageName') <body class="page-contacts dm-dark"> @endsection

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
                        <h2 class="first-screen__title">Contact Us</h2>
                        <div class="first-screen__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li><span>Contact Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-contacts-form">
            <div class="uk-section uk-container">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="section-title burger wave">
                            <h3 class="uk-h3">Contact Details</h3>
                        </div>
                        <div class="section-content">
                            <p class="uk-text-large">Spedito Fast Foods</p>
                            <p>740 Davidson Avenue, Harley Street,<br> Melbourne, VIC 3000 -  Australia</p>
                            <ul class="contacts-list">
                                <li><span>Phone: </span><a href="tel:02138372990">021 383 72990</a></li>
                                <li><span>Email: </span><a href="mailto:fast.food@spedito.com">fast.food@spedito.com</a></li>
                            </ul>
                            <hr class="uk-margin">
                            <div class="block-with-phone"><img src="{{asset('website-assets/img/icons/delivery.svg')}}" alt="delivery" data-uk-svg>
                                <div> <span>For Delivery, Call us</span><a href="tel:13205448749">1-320-544-8749</a></div>
                            </div>
                            <hr class="uk-margin">
                            <div class="block-with-phone"><img src="{{asset('website-assets/img/icons/delivery.svg')}}" alt="delivery" data-uk-svg>
                                <div> <b>Delivery Hours</b>
                                    <div>Mon to Fri: 09:30am – 10:30pm<br> Saturday: 10:15am – 8:00pm<br> Sun.: 12:00pm – 7:00pm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-2-3@m">
                        <div class="section-title burger wave">
                            <h3 class="uk-h3">Send us a Message</h3>
                        </div>
                        <div class="section-content">
                            <form action="#!">
                                <div class="uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                                    <div><input class="uk-input" type="text" placeholder="Your Name"></div>
                                    <div><input class="uk-input" type="text" placeholder="Email"></div>
                                    <div><input class="uk-input" type="text" placeholder="Phone"></div>
                                    <div><input class="uk-input" type="text" placeholder="Subject"></div>
                                    <div class="uk-width-1-1"><textarea class="uk-textarea" name="message" placeholder="Message"></textarea></div>
                                    <div><input class="uk-button" type="submit" value="Send message"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12608.379772232503!2d144.9543961954268!3d-37.811245073691154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2z0JzQtdC70YzQsdGD0YDQvSDQktC40LrRgtC-0YDQuNGPIDMwMDAsINCQ0LLRgdGC0YDQsNC70LjRjw!5e0!3m2!1sru!2sua!4v1610389687424!5m2!1sru!2sua"></iframe></div>
    </main>
@endsection

@section('scripts')@endsection
