@extends('layouts.website.app')

@section('title') Careers @endsection

@section('styles')@endsection

@section('pageName')
    <body class="page-404 dm-dark"> @endsection

    @section('content')
        <main class="page-main">
            <div class="section-first-screen">
                <div class="first-screen__bg"
                     style="background-image: url({{asset('website-assets/img/pages/contacts/bg-first-screen.jpg')}})"></div>
                <div class="first-screen__content">
                    <div class="uk-container">
                        <nav class="category-nav">
                            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                                <ul class="uk-navbar-nav">
                                    <li><a href="#">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/burgers-big.svg')}}"
                                                        alt="burgers" data-uk-svg></span><span class="nav-item__text">burgers</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/pizzas-big.svg')}}"
                                                        alt="pizzas" data-uk-svg></span><span class="nav-item__text">pizzas </span>
                                            </div>
                                        </a>
                                        <div class="uk-navbar-dropdown"
                                             data-uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;">
                                            <div class="uk-navbar-dropdown-grid uk-grid-small" data-uk-grid>
                                                <div class="uk-width-1-5">
                                                    <div class="product-card-menu"><a class="product-card-menu__link"
                                                                                      href="#">
                                                            <div class="product-card-menu__media"><img
                                                                    src="{{asset('website-assets/img/products-menu/pizza-1.jpg')}}"
                                                                    alt></div>
                                                            <div class="product-card-menu__body">
                                                                <div class="product-card-menu__title">Creamy Melt
                                                                    Pizza
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="uk-width-1-5">
                                                    <div class="product-card-menu"><a class="product-card-menu__link"
                                                                                      href="#">
                                                            <div class="product-card-menu__media"><img
                                                                    src="{{asset('website-assets/img/products-menu/pizza-2.jpg')}}"
                                                                    alt></div>
                                                            <div class="product-card-menu__body">
                                                                <div class="product-card-menu__title">Neapolitan Pizza
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="uk-width-1-5">
                                                    <div class="product-card-menu"><a class="product-card-menu__link"
                                                                                      href="#">
                                                            <div class="product-card-menu__media"><img
                                                                    src="{{asset('website-assets/img/products-menu/pizza-3.jpg')}}"
                                                                    alt></div>
                                                            <div class="product-card-menu__body">
                                                                <div class="product-card-menu__title">Hot n Spicy
                                                                    Pizza
                                                                </div>
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div class="uk-width-2-5">
                                                    <ul class="uk-nav">
                                                        <li class="uk-nav-header">More Pizzas</li>
                                                        <li><a href="#">Sriracha Beef</a></li>
                                                        <li><a href="#">Garlic Prawn Pizza</a></li>
                                                        <li><a href="#">Classic Pepproni</a></li>
                                                        <li><a href="#">Pizza Margherita</a></li>
                                                        <li><a href="#">Hot n Spicy Pizza</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/noodles-big.svg')}}"
                                                        alt="noodles" data-uk-svg></span><span class="nav-item__text">noodles</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/sushi-big.svg')}}"
                                                        alt="sushi" data-uk-svg></span><span class="nav-item__text">sushi</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/desserts-big.svg')}}"
                                                        alt="desserts" data-uk-svg></span><span class="nav-item__text">desserts</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/salads-big.svg')}}"
                                                        alt="salads" data-uk-svg></span><span class="nav-item__text">salads</span>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/drinks-big.svg')}}"
                                                        alt="drinks" data-uk-svg></span><span class="nav-item__text">drinks</span>
                                            </div>
                                        </a></li>
                                </ul>
                            </nav>
                        </nav>
                        <div class="first-screen__box">
                            <h2 class="first-screen__title">Careers</h2>
                            <div class="first-screen__breadcrumb">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <div class="uk-section uk-container uk-container-small">

                    @if(isset($jobs))

                        @foreach($jobs as $job)
                            @if(app()->getLocale() == 'ar')
                                <div class="article-full__info">
                                    {{--                            <div class="article-full__author"><i class="fas fa-user"></i><span>{{$article->auther}}</span></div>--}}
                                    {{--                        <div class="article-full__comments"><i class="fas fa-comment"></i><span>210</span></div>--}}
                                </div>

                                {{--                        <div class="article-full__image"><a href="/page-blog-article.html"><img src="{{$article->image}}" alt="img-article"></a></div>--}}
                                <div class="article-full__content">

                                    <article class="article-intro">

                                        <div class="article-intro__body">
                                            <div class="article-intro__info">

                                                {{--                                    <div class="article-intro__category"><i class="fas fa-folder-open"></i><span>Posted in FOOD</span></div>--}}
                                                <div class="article-intro__date"><i
                                                        class="fas fa-calendar-alt"></i><span>{{$job->created_at}}</span>
                                                </div>
                                                {{--                                    <div class="article-intro__comments"><i class="fas fa-comment"></i><span>210</span></div>--}}
                                            </div>
                                            <h2 class="article-intro__title">{{$job -> title_ar}}</h2>
                                            <div class="article-intro__content">
                                                <p> {{$job -> brief_description_ar}} </p>
                                            </div>
                                            <div class="article-intro__bottom row justify-content-center">
                                                {{--                                    <div class="article-intro__tags"><i class="fas fa-tags"></i><span>cheese, Pizza, Cookies, Bake</span></div>--}}
                                                <div class="article-intro__more"><a class="uk-button"
                                                                                    href="{{route('get.career',$job->id)}}">Read
                                                        More</a></div>
                                            </div>
                                        </div>
                                    </article>


                                    <div class="btn btn-link btn-dark"><a href="{{route('get.career',$job->id)}}"> مزيد
                                            من التفاصيل </a></div>
                                    @else
                                        <div class="article-full__info">
                                            {{--                                    <div class="article-full__author"><i class="fas fa-user"></i><span>{{$article->auther}}</span></div>--}}
                                            {{--                        <div class="article-full__comments"><i class="fas fa-comment"></i><span>210</span></div>--}}
                                        </div>

                                        {{--                                <div class="article-full__image"><a href="/page-blog-article.html"><img src="{{$article->image}}" alt="img-article"></a></div>--}}
                                        <div class="article-full__content">
                                            <article class="article-intro">

                                                <div class="article-intro__body">
                                                    <div class="article-intro__info">

                                                        {{--                                    <div class="article-intro__category"><i class="fas fa-folder-open"></i><span>Posted in FOOD</span></div>--}}
                                                        <div class="article-intro__date"><i
                                                                class="fas fa-calendar-alt"></i><span>{{$job->created_at}}</span>
                                                        </div>
                                                        {{--                                    <div class="article-intro__comments"><i class="fas fa-comment"></i><span>210</span></div>--}}
                                                    </div>
                                                    <h2 class="article-intro__title">           {{(app()->getLocale() == 'ar') ?$job -> title_ar:$job->title_en}}</h2>
                                                    <div class="article-intro__content">
                                                        <p>            {{(app()->getLocale() == 'ar') ?$job -> brief_description_ar:$job->brief_description_en}} </p>
                                                    </div>
                                                    <div class="article-intro__bottom row justify-content-center">
                                                        {{--                                    <div class="article-intro__tags"><i class="fas fa-tags"></i><span>cheese, Pizza, Cookies, Bake</span></div>--}}
                                                        <div class="article-intro__more "><a class="uk-button"
                                                                                             href="{{route('get.career',$job->id)}}">Read
                                                                More</a></div>
                                                    </div>
                                                </div>
                                            </article>
                                            @endif

                                            @endforeach
                                            @endif

                                        </div>
                                </div>

                </div>
            </div>
        </main>
@endsection

@section('scripts')

@endsection

