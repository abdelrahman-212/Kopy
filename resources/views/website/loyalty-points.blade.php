@extends('layouts.website.app')

@section('title')  Loyalty Points @endsection

@section('styles')
    <style type="text/css">

        .numberCircle {
            display: inline-block;

            border-radius: 50%;
            border: 2px solid;

            font-size: 32px;
        }

        .numberCircle:before,
        .numberCircle:after {
            content: '\200B';
            display: inline-block;
            line-height: 0px;

            padding-top: 50%;
            padding-bottom: 50%;
        }

        .numberCircle:before {
            padding-left: 8px;
        }

        .numberCircle:after {
            padding-right: 8px;
        }
    </style>
@endsection

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
                            <h2 class="first-screen__title">
                                @if(app()->getLocale() == 'ar')
                                    Loyalty Points
                                @else
                                    Loyalty Points

                                @endif
                            </h2>
                            <div class="first-screen__breadcrumb">
                                <ul class="uk-breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li> <span>


                                    </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content">

                <div class="uk-margin-large-top uk-container uk-container-small">

                    @if(app()->getLocale() == 'ar')

                    @else
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-0">
                                    <div class="bg-white card addresses-item mb-4 shadow">
                                        <div class="gold-members p-4">
                                            <div class="media">

                                                <div class="media-body ">

                                                    <p class="mb-0 text-black font-weight-bold">
                                                        <button

                                                            data-toggle="modal"
                                                            data-target="#add-address-modal "
                                                            href="#" type="button"

                                                            class="btn btn-primary btn-floating">
                                                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                                                        </button>
                                                        To Know How To Use Points Please Click Here!
                                                    </p>
                                                </div>

                                                <div class="modal fade"
                                                     id="add-address-modal"
                                                     tabindex="-1" role="dialog"
                                                     aria-labelledby="add-address"
                                                     aria-hidden="true">
                                                    <div
                                                        class="modal-dialog modal-dialog-centered"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="add-address">Loyalty Program</h5>
                                                                <button type="button"
                                                                        class="close"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>1) Buy using the ap to collect points.</p>
                                                                <p>2) for each 10 SR you pay you will get 1 point. </p>
                                                                <p>3) you can replace each 50 points with 10 SR
                                                                    purchase</p>
                                                                <p>4) you can benefit from the points for one year of
                                                                    getting the points </p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <span class="numberCircle">@if(isset($points))

                                        {{$points['user_points']}}

                                    @endif</span>

                            </div>
                            <div class="row justify-content-center">


                                <div class="table-responsive offset-top-10" style="border-radius: 10px;">
                                    <table class="table table-shopping-cart mt-4">
                                        <tbody>

                                        <tr style="height: 30px"></tr> @for ($i = 1; $i < ($points['user_points']/100); $i++)
                                            <tr style="  !important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);border-radius: 5px; margin-bottom: 10px">

                                                <td class="p-4" style="width: 170px;height: 170px">
                                                    <div class="">
                                                        <div class="product-image"><img
                                                                src="{{asset('points/points.jpeg')}}"
                                                                class="img-thumbnail"
                                                                style="border-radius: 10px;" width="100%" height="100%"
                                                                alt=""></div>
                                                    </div>
                                                </td>
                                                <td style="min-width: 340px;">
                                                    <div class="text-left"><span
                                                            class="h5 text-sbold product-brand text-italic"
                                                            style="font-size: 25px;">Points</span>
                                                        <div class="offset-top-0">Exchange 100 Points
                                                            for {{$points['points_value']}} SR
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="inset-left-20" style="padding-top:20px"><a href="{{route('exchange.points')}}"
                                                                                                           style="font-size: 20px;"
                                                                                                           class="btn btn-outline-danger link-gray-lightest text-danger"><i
                                                                class="fa fa-exchange" aria-hidden="true"></i>
                                                            Exchange </a></div>
                                                </td>
                                            </tr>
                                            <tr style="height: 30px"></tr>

                                        @endfor


                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                    @endif

                </div>

            </div>
        </main>
@endsection

@section('scripts')@endsection

