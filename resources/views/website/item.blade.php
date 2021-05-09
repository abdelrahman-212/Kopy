@extends('layouts.website.app')

@section('title') Item @endsection

@section('styles')
    <style>
        .text-danger {
            color: #f32129;
        }
        .food-item {
            border: 1px solid;
            border-radius: 2px;
            display: inline-block;
            font-size: 8px;
            height: 13px;
            line-height: 11px;
            text-align: center;
            width: 13px;
        }

        [class*=" icofont-"], [class^=icofont-] {
            font-family: IcoFont!important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: "liga";
            -webkit-font-smoothing: antialiased;
        }
        h6 {
            font-family: inherit;
            font-weight: 600;
        }
    </style>
@endsection

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
                        <h2 class="first-screen__title">{{(app()->getLocale() == 'ar')? $item['name_ar'] : $item['name_en'] }}</h2>
                        <div class="first-screen__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="{{route('home.page')}}">Home</a></li>
                                <li><a href="{{route('menu.page')}}">{{(app()->getLocale() == 'ar')? $item['category']['name_ar'] : $item['category']['name_en'] }}</a></li>
                                <li><span>{{(app()->getLocale() == 'ar')? $item['name_ar'] : $item['name_en'] }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="uk-margin-large-top uk-container">
                <form id="addToCard" action="{{route('add.cart')}}" method="POST">
                    @csrf

                    <input type="hidden" name="item_id" value="{{$item['id']}}">
                    <input type="hidden" name="offer_id" value="{{$item['offer']['id']}}">
                    <div class="product-full-card">
                        <div class="uk-grid uk-grid-large uk-child-width-1-2@m" data-uk-grid="">
                            <div class="uk-first-column">
                                <div class="product-full-card__gallery">
                                    <div data-uk-slideshow="ratio: 1:1; animation: slide" class="uk-slideshow">
                                        <div class="product-full-card__gallery-box">
                                            <ul class="uk-slideshow-items uk-child-width-1-1" style="height: 500px;">
                                                <li class="uk-flex uk-flex-center uk-flex-middle uk-active uk-transition-active" style=""><img class="h-100 w-100" src="{{asset($item->image)}}" alt="pizza-big"></li>
                                            </ul>
                                            <div class="product-full-card__whish"><svg class="svg-inline--fa fa-heart fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg></div>
                                            <div class="product-full-card__tooltip" data-uk-tooltip="title: {{(app()->getLocale() == 'ar')? $item['name_ar'] : $item['name_en'] }}; pos: bottom-right" title="" aria-expanded="false" tabindex="0"><svg class="svg-inline--fa fa-info-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-full-card__content mb-5">
                                    <div class="product-full-card__not-active">
                                        <div class="product-full-card__title">{{(app()->getLocale() == 'ar')? $item['name_ar'] : $item['name_en'] }}</div>
                                        <div class="product-full-card__desc">{{(app()->getLocale() == 'ar')? $item['description_ar'] : $item['description_en'] }}</div>
                                        <div class="product-full-card__select">
                                            <div class="select-box select-box--thickness">
                                                <ul>
                                                    @foreach($item['dough_type'] as $dough)
                                                    <li><label class="mb-0"><input type="radio" name="dough_type" checked value="{{$dough['name_ar']}},{{$dough['name_en']}}" ><span>{{(app()->getLocale() == 'ar')? $dough->name_ar : $dough->name_en}}</span></label></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-full-card__category"><span>Category:  </span><a href="{{route('menu.page')}}">{{(app()->getLocale() == 'ar')? $item['category']['name_ar'] : $item['category']['name_en'] }}</a></div>
                                <div class="product-full-card__category"><span>Calories:  {{$item->calories}}</span></div>

                                <div class="product-full-card__info mt-5">
                                    <div class="product-full-card__price">
                                        <span>Price: </span><span class="value" @if($item['offer']) style="text-decoration: line-through;font-size: 20px;" @endif > {{$item->price}} </span>
                                        @if($item['offer']) <span style="font-size: 26px;color:#6dc405;text-decoration: none"> {{$item['offer']['offer_price']}} </span> @endif
                                    </div>
                                    <div class="product-full-card__btns"><span class="counter"><span class="minus">-</span><input type="text" name="quantity" value="1"><span class="plus">+</span></span><button class="uk-button" type="submit">Add to Cart<span data-uk-icon="cart" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="cart"><circle cx="7.3" cy="17.3" r="1.4"></circle><circle cx="13.3" cy="17.3" r="1.4"></circle><polyline fill="none" stroke="#000" points="0 2 3.2 4 5.3 12.5 16 12.5 18 6.5 8 6.5"></polyline></svg></span></button></div>
                                </div>
                            </div>
                        </div>
                        @if($item['category']['extras']->count() > 0 || $item['category']['withouts']->count() > 0)
                        <div class="product-full-card__tabs">
                            <div class="row">
                                @if($item['category']['extras']->count() > 0)
                                <div class="col-sm-6">
                                    <h5 class="mb-4 mt-3 col-md-12">Extra <small class="h6 text-black-50"> Extra per quantity:1</small>
                                    </h5>
                                    <div class="col-md-12">
                                        <div class="rounded border" style="background-color: #f5f5f5!important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);">
                                            @foreach($item['category']['extras'] as $extra)
                                                <div class="gold-members p-3 border-bottom">
                                                    <a class="btn btn-outline-secondary btn-sm float-right btnAdd" href="#">ADD</a>
                                                    <div class="media d-flex">
                                                        <div class="mr-3"><input type="checkbox" value="{{$extra['id']}}" name="extras[]" class="d-none checkExtra">
                                                            <i class="icofont-ui-press text-danger food-item"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="m-0" style="font-size: 14px;line-height: 1.8;">{{(app()->getLocale() == 'ar')? $extra['name_ar'] : $extra['name_en'] }}</h6>
                                                            <p class="text-gray m-0" style="font-size: 11px;">Calories: {{$extra['calories']}} " ({{$extra['price']}} SR)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($item['category']['withouts']->count() > 0)
                                <div class="col-sm-6">
                                    <h5 class="mb-4 mt-3 col-md-12">Without <small class="h6 text-black-50"> Without per quantity:1</small>
                                    </h5>
                                    <div class="col-md-12">
                                        <div class="rounded border" style="background-color: #f5f5f5!important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);">
                                            @foreach($item['category']['withouts'] as $without)
                                                <div class="gold-members p-3 border-bottom">
                                                    <a class="btn btn-outline-secondary btn-sm float-right btnAdd" href="#">ADD</a>
                                                    <div class="media d-flex">
                                                        <div class="mr-3"><input type="checkbox" value="{{$without['id']}}" name="withouts[]" class="d-none checkExtra">
                                                            <i class="icofont-ui-press text-danger food-item"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="m-0" style="font-size: 14px;line-height: 1.8;">{{(app()->getLocale() == 'ar')? $without['name_ar'] : $without['name_en'] }}</h6>
                                                            <p class="text-gray m-0" style="font-size: 11px;">Calories: {{$without['calories']}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>

                </form>
            </div>
        </div>

    </main>
@endsection

@section('scripts')
    <script>
        window.onload = function () {

            $('.btnAdd').click(function (e) {
                e.preventDefault();
                let selectele = $(this);
                if(selectele.next().find('.food-item').hasClass('text-danger')){
                    selectele.next().find('.food-item').removeClass('text-danger').addClass('text-success');
                    selectele.next().find('.checkExtra').attr('checked','checked');
                }
                else if (selectele.next().find('.food-item').hasClass('text-success')) {
                    selectele.next().find('.food-item').removeClass('text-success').addClass('text-danger');
                    selectele.next().find('.checkExtra').attr('checked','');
                }
            });

        };
    </script>
@endsection
