@extends('layouts.website.app')

@section('title') Menu @endsection

@section('styles')@endsection

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
                        <h2 class="first-screen__title">Menu</h2>
                        <p class="first-screen__desc">Delicious & Tasty Pastries By Expert Chefs</p>
                        <div class="first-screen__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="{{route('home.page')}}">Home</a></li>
                                <li><span>Menu</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content mt-5">
            <div class="uk-container">
                <div data-uk-filter="target: .js-filter">
                    <div class="catalog-filter-row uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>
                        <ul class="uk-subnav uk-slider-items uk-child-width-1-6 uk-grid">
                            @foreach($menu['categories'] as $index => $category)
                                <li data-uk-filter-control="[data-tags='{{$category->name_en}}']" style="width: 10%">
                                    <a class="uk-panel w-100 h-100" style="background:none; border: none;" href="#">
                                        <div class="text-center w-100 h-75">
                                            <img src="{{$category->image}}" class="img-thumbnail rounded w-100 h-100" alt="">
                                            <h4 class="m-1">{{(app()->getLocale() == 'ar')? $category->name_ar : $category->name_en}}</h4>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l" data-uk-grid>
                        @foreach($menu['categories'] as $index => $category)
                            @php
                                $request = new \Illuminate\Http\Request();
                                $request->branch_id = (session()->has('branch_id'))? session()->get('branch_id'): 0 ;//det branch_id
                                $items = (app(\App\Http\Controllers\Api\MenuController::class)->getItems($request,$category))->getOriginalContent();
                            @endphp
                            @foreach($items['data'] as $item)
                                @if($item->is_hidden == false)

                            <li data-tags="{{$category->name_en}}">
                                <div class="product-item">
                                    <div class="product-item__box">
                                        <div class="product-item__intro">
                                            <div class="product-item__not-active">
                                                <div class="product-item__media">
                                                    <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><a href="{{asset($item->image)}}" class="w-100 h-100"><img class="w-100 h-100" src="{{asset($item->image)}}" alt="{{(app()->getLocale() == 'ar')? $item->name_ar : $item->name_en}}" />
                                                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary"></div>
                                                            <div class="uk-position-center"><span class="uk-transition-fade" data-uk-icon="icon: search;"></span></div>
                                                        </a></div>
                                                    <div class="product-item__whish"><i class="fas fa-heart"></i></div>
                                                    <div class="product-item__tooltip" data-uk-tooltip="title: {{(app()->getLocale() == 'ar')? $item->name_ar : $item->name_en}}; pos: bottom-right"><i class="fas fa-info-circle"></i></div>
                                                </div>
                                                <div class="product-item__title uk-text-truncate"><a href="#">{{(app()->getLocale() == 'ar')? $item->name_ar : $item->name_en}}</a></div>
                                                <div class="product-item__desc">{{(app()->getLocale() == 'ar')? $item->description_ar : $item->description_en}}</div>
                                                <div class="product-item__price">Calories: {{$item->calories}}</div>

                                                <div class="product-item__select">
                                                    <div class="select-box select-box--thickness">
                                                        <ul>
                                                            @foreach($item->dough_type as $index => $dough)
                                                                <li><label><input type="radio" name="thickness-{{$item->id}}" @if($index == 0) checked="checked" @endif /><span>{{(app()->getLocale() == 'ar')? $dough->name_ar : $dough->name_en}}</span></label></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-item__info">
                                            <div class="product-item__price">
                                                <span>Price: </span><span class="value" @if($item['offer']) style="text-decoration: line-through;font-size: 20px;" @endif > {{$item->price}} </span>
                                                @if($item['offer']) <span style="font-size: 26px;color:#6dc405;text-decoration: none"> {{$item['offer']['offer_price']}} </span> @endif
                                            </div>
                                            <div class="product-item__addcart"> <a data-toggle="modal" data-target="#service-modal" class="uk-button uk-button-default cart" href="{{route('item.page',[$category->id,$item->id])}}">Add to Cart<span data-uk-icon="cart"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                                @endif
                            @endforeach
                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')@endsection
