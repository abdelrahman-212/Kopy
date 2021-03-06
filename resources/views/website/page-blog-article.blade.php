@extends('layouts.website.app')

@section('title') Page article @endsection

@section('styles')@endsection

@section('pageName')
    <body class="page-article dm-dark"> @endsection

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
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/burgers-big.svg')}}"
                                                        alt="burgers" data-uk-svg></span><span class="nav-item__text">burgers</span>
                                            </div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
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
                                                                                      href="page-product.html">
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
                                                                                      href="page-product.html">
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
                                                                                      href="page-product.html">
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
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/noodles-big.svg')}}"
                                                        alt="noodles" data-uk-svg></span><span class="nav-item__text">noodles</span>
                                            </div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/sushi-big.svg')}}"
                                                        alt="sushi" data-uk-svg></span><span class="nav-item__text">sushi</span>
                                            </div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/desserts-big.svg')}}"
                                                        alt="desserts" data-uk-svg></span><span class="nav-item__text">desserts</span>
                                            </div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/salads-big.svg')}}"
                                                        alt="salads" data-uk-svg></span><span class="nav-item__text">salads</span>
                                            </div>
                                        </a></li>
                                    <li><a href="page-catalog.html">
                                            <div class="nav-item"><span class="nav-item__icon"><img
                                                        src="{{asset('website-assets/img/icons/menu/drinks-big.svg')}}"
                                                        alt="drinks" data-uk-svg></span><span class="nav-item__text">drinks</span>
                                            </div>
                                        </a></li>
                                </ul>
                            </nav>
                        </nav>
                        <div class="first-screen__box">
                            <h2 class="first-screen__title">{{__('general.Blog')}}</h2>
                            <div class="first-screen__breadcrumb">
                                <ul class="uk-breadcrumb">
                                    <li><a href="/">{{__('menu.Home')}}</a></li>
                                    <li><a href="{{route('news.all')}}">{{__('general.News Blog')}}</a></li>
                                    <li><span>{{__('general.Full Blog')}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">
                <div class="uk-margin-large-top uk-container uk-container-small">
                    <article class="article-full">
                        @if(isset($article))

                            @if(app()->getLocale() == 'ar')
                                <div class="article-full__info">
                                    <div class="article-full__author"><i
                                            class="fas fa-user"></i><span>{{$article->auther}}</span></div>
                                    <div class="article-full__date"><i
                                            class="fas fa-calendar-alt"></i><span>{{$article->created_at}}</span></div>
                                    {{--                        <div class="article-full__comments"><i class="fas fa-comment"></i><span>210</span></div>--}}
                                </div>

                                <div class="article-full__image"><a href="/page-blog-article.html"><img
                                            src="{{$article->image}}" alt="img-article"></a></div>
                                <div class="article-full__content text-center">
                                    <h3> {{$article ->title_ar}}</h3>
                                    <p> {{$article->description_ar}}</p>


                                    @else
                                        <div class="article-full__info">
                                            <div class="article-full__author"><i
                                                    class="fas fa-user"></i><span>{{$article->author}}</span></div>
                                            <div class="article-full__date"><i
                                                    class="fas fa-calendar-alt"></i><span>{{$article->created_at}}</span>
                                            </div>
                                            {{--                        <div class="article-full__comments"><i class="fas fa-comment"></i><span>210</span></div>--}}
                                        </div>

                                        <div class="article-full__image"><a href="/page-blog-article.html"><img
                                                    src="{{$article->image}}" alt="img-article"></a></div>
                                        <div class="article-full__content article-full__nav text-center">

                                            <h2 class="article-intro__title">           {{(app()->getLocale() == 'ar') ?$article -> title_ar:$article->title_en}}</h2>
                                            <div class="article-intro__content">
                                                <p>            {{(app()->getLocale() == 'ar') ?$article->description_ar:$article->description_en}} </p>
                                            </div>
                                            {{--                        <div class="uk-grid uk-child-width-1-2@s" data-uk-grid>--}}
                                            {{--                            <div><img class="uk-width-1-1" src="{{asset('website-assets/img/blog/img-article-1.jpg')}}" alt="article"></div>--}}
                                            {{--                            <div><img class="uk-width-1-1" src="{{asset('website-assets/img/blog/img-article-2.jpg')}}" alt="article"></div>--}}
                                            {{--                  </div>--}}
                                            {{--                                <h3>Juicy White Meat, Light Bread With Lettuce</h3>--}}
                                            {{--                                <p>Ullamco laboris nisi ut aliquip ex ea com labmodo consequat dhuis irure dolor indy reprehen deritn olupt velit esse fst anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doney eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Laboris nisi ut aliquip ex ea aute irure dolor reprehenderit voluptate esse.</p>--}}
                                            {{--                                <blockquote>Exercitation ullamco laboris nisi ut aliquip ex ea com labmodo consequat Incididunt ut labore et dolore magna aliqua enim veniam.</blockquote>--}}
                                            {{--                                <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur sed ipsum.</p>--}}
                                            {{--                                <div class="article-full__bottom">--}}
                                            {{--                                <div class="article-full__tags">--}}
                                            {{--                                <div> <i class="fas fa-tags"></i><strong>Related Tags</strong></div><span>cheese, Pizza, Cookies, Bake</span>--}}
                                            {{--                            </div>--}}
                                            {{--                            <div class="article-full__share">--}}
                                            {{--                                <div> <strong>Share This</strong><i class="fas fa-share-alt"></i></div>--}}
                                            {{--                                <ul>--}}
                                            {{--                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>--}}
                                            {{--                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>--}}
                                            {{--                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>--}}
                                            {{--                                    <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>--}}
                                            {{--                                </ul>--}}
                                            {{--                            </div>--}}
                                            {{--                        </div>--}}
                                            {{--                                            <div class="article-full__nav">--}}
                                            {{--                                                <ul class="articles-nav-list">--}}
                                            {{--                                                    <li class="articles-nav-item"><a class="articles-nav-item__link"--}}
                                            {{--                                                                                     href="{{route('get.new',($article->id)-1)}}">--}}
                                            {{--                                                                                                    <div class="articles-nav-item__img"><img src="{{asset('website-assets/img/blog/img-article-thumb-1.jpg')}}" alt="article-thumb"></div>--}}
                                            {{--                                                                                                    <div class="articles-nav-item__info">--}}
                                            {{--                                                                                                        <div class="articles-nav-item__title">The Ultimate King: Chicken-Eggs Burger</div>--}}
                                            {{--                                                                                                        <div class="articles-nav-item__user"> <i class="fas fa-user"></i><span>By Sam Joseph</span></div>--}}
                                            {{--                                                                                                    </div>--}}
                                            {{--                                                            <div class="articles-nav-item__label">Prev Blog</div>--}}

                                            {{--                                                        </a>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                    <li class="articles-nav-item"><a class="articles-nav-item__link"--}}
                                            {{--                                                                                     href="{{route('get.new',($article->id)+1)}}">--}}
                                            {{--                                                                                                    <div class="articles-nav-item__img"><img src="{{asset('website-assets/img/blog/img-article-thumb-2.jpg')}}" alt="article-thumb"></div>--}}
                                            {{--                                                                                                    <div class="articles-nav-item__info">--}}
                                            {{--                                                                                                        <div class="articles-nav-item__title">Top 10 Recipes of 2020 With Chef Kim</div>--}}
                                            {{--                                                                                                        <div class="articles-nav-item__user"> <i class="fas fa-user"></i><span>By Sam Joseph</span></div>--}}
                                            {{--                                                                                                    </div>--}}

                                            {{--                                                            <div class="articles-nav-item__label">Next Blog</div>--}}
                                            {{--                                                        </a>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                </ul>--}}
                                            {{--                                            </div>--}}
                                            @endif


                                            @endif

                                            {{--                        <div class="section-article-reviews">--}}
                                            {{--                            <div class="section-title">--}}
                                            {{--                                <div class="uk-h2">Comments (3)</div>--}}
                                            {{--                            </div>--}}
                                            {{--                            <div class="section-content">--}}
                                            {{--                                <ul class="uk-comment-list">--}}
                                            {{--                                    <li>--}}
                                            {{--                                        <article class="uk-comment">--}}
                                            {{--                                            <header class="uk-comment-header">--}}
                                            {{--                                                <div class="uk-grid-small uk-grid-divider" data-uk-grid>--}}
                                            {{--                                                    <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./{{asset('website-assets/img/blog/img-reviews-1.png')}}" alt></div>--}}
                                            {{--                                                    <div class="uk-width-expand@s">--}}
                                            {{--                                                        <div class="uk-flex uk-flex-middle uk-margin-small-bottom">--}}
                                            {{--                                                            <h4 class="uk-comment-title uk-margin-remove">Michael Shaw</h4><span class="uk-text-meta uk-margin-small-left">August 20, 2020</span>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="uk-comment-body">--}}
                                            {{--                                                            <p>Incididunt ut labore et dolore magna aliqua enim ad minim veniam quisya nos ullamco laboris nisi ut aliquip ex ea com labmodo.</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </header>--}}
                                            {{--                                        </article>--}}
                                            {{--                                        <ul>--}}
                                            {{--                                            <li>--}}
                                            {{--                                                <article class="uk-comment">--}}
                                            {{--                                                    <header class="uk-comment-header">--}}
                                            {{--                                                        <div class="uk-grid-small uk-grid-divider" data-uk-grid>--}}
                                            {{--                                                            <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./{{asset('website-assets/img/blog/img-reviews-2.png')}}" alt></div>--}}
                                            {{--                                                            <div class="uk-width-expand@s">--}}
                                            {{--                                                                <div class="uk-flex uk-flex-middle uk-margin-small-bottom">--}}
                                            {{--                                                                    <h4 class="uk-comment-title uk-margin-remove">Tom Butler</h4><span class="uk-text-meta uk-margin-small-left">August 20, 2020</span>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                                <div class="uk-comment-body">--}}
                                            {{--                                                                    <p>Incididunt ut labore et dolore magna aliqua enim minim veniam ullamco laboris nisi ut aliquip ex ea com.</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>--}}
                                            {{--                                                                </div>--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </header>--}}
                                            {{--                                                </article>--}}
                                            {{--                                            </li>--}}
                                            {{--                                        </ul>--}}
                                            {{--                                    </li>--}}
                                            {{--                                    <li>--}}
                                            {{--                                        <article class="uk-comment">--}}
                                            {{--                                            <header class="uk-comment-header">--}}
                                            {{--                                                <div class="uk-grid-small uk-grid-divider" data-uk-grid>--}}
                                            {{--                                                    <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./{{asset('website-assets/img/blog/img-reviews-3.png')}}" alt></div>--}}
                                            {{--                                                    <div class="uk-width-expand@s">--}}
                                            {{--                                                        <div class="uk-flex uk-flex-middle uk-margin-small-bottom">--}}
                                            {{--                                                            <h4 class="uk-comment-title uk-margin-remove">Jasmine Hold</h4><span class="uk-text-meta uk-margin-small-left">August 20, 2020</span>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="uk-comment-body">--}}
                                            {{--                                                            <p>Incididunt ut labore et dolore magna aliqua enim ad minim veniam quisya nos ullamco laboris nisi ut aliquip ex ea com labmodo.</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </header>--}}
                                            {{--                                        </article>--}}
                                            {{--                                    </li>--}}
                                            {{--                                </ul>--}}
                                            {{--                                <div class="block-form">--}}
                                            {{--                                    <div class="section-title">--}}
                                            {{--                                        <div class="uk-h2">Leave a Reply</div>--}}
                                            {{--                                    </div>--}}
                                            {{--                                    <div class="section-content">--}}
                                            {{--                                        <p>Your email address will not be published. Required fields are marked *</p>--}}
                                            {{--                                        <form action="#!">--}}
                                            {{--                                            <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>--}}
                                            {{--                                                <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Message *"></textarea></div>--}}
                                            {{--                                                <div><input class="uk-input uk-form-large" type="text" placeholder="Your Name *"></div>--}}
                                            {{--                                                <div><input class="uk-input uk-form-large" type="text" placeholder="Email *"></div>--}}
                                            {{--                                                <div class="uk-width-1-1"><input class="uk-input uk-form-large" type="text" placeholder="Website"></div>--}}
                                            {{--                                                <div><button class="uk-button uk-button-large" type="submit">Post comment</button></div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </form>--}}
                                            {{--                                    </div>--}}
                                            {{--                                </div>--}}
                                            {{--                            </div>--}}
                                            {{--                        </div>--}}
                                        </div>
                    </article>
                </div>
            </div>
        </main>
@endsection
@section('scripts')@endsection
