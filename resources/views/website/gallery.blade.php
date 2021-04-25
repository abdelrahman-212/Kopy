@extends('layouts.website.app')

@section('title') Gallery @endsection

@section('styles')
    <style>
        .page-item.active .page-link {
            z-index: 1;
            border-color: #6dc405;
            background: #6dc405;
            color: #ffffff;
        }
        .page-item.disabled .page-link {
            color: #ffffff;
            pointer-events: none;
            cursor: auto;
            background-color: inherit;
            border-color: #dee2e6;
        }
        .page-link {
            background-color: inherit;
        }
    </style>
@endsection

@section('pageName') <body class="page-catalog dm-dark"> @endsection

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
                        <h2 class="first-screen__title">Gallery</h2>
                        <p class="first-screen__desc">Pictures of pastries kingdom products</p>
                        <div class="first-screen__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li><span>Gallery</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="uk-container">
                <div class="mt-5" data-uk-filter="target: .js-filter">
                    <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l" data-uk-grid>
                        @foreach($galleries as $gallery)
                        <li data-tags="spicy">
                            <div class="product-item">
                                <div class="product-item__box">
                                    <div class="product-item__intro">
                                        <div class="product-item__not-active">
                                            <div class="product-item__media">
                                                <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="{{asset($gallery->url)}}"><img class="h-100 w-100" src="{{asset($gallery->url)}}" alt="Creamy Melt Pizza" />
                                                        <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                        <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                    </a></div>
                                                <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                <div class="product-item__tooltip" data-uk-tooltip="title: {{(app()->getLocale() == 'ar')? $gallery->title_ar : $gallery->title_en}} ; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                            </div>
                                            <div class="product-item__title text-center" style="padding: 10px 20px 10px;"><a style="cursor: default">{{(app()->getLocale() == 'ar')? $gallery->title_ar : $gallery->title_en}}</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')@endsection
