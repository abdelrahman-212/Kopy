@extends('layouts.website.app')

@section('title') Cart @endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('website2-assets/css/style2.css')}}">
    <style>
        .page-header__top {
            margin: 20px 0px 30px !important;
        }

        a:hover, a:focus {
            color: #ff0000;
            text-decoration: none;
        }

        .stepper-type-2 .stepper-arrow.up {
            top: 0;
            margin-top: -5px;
        }

        .stepper-type-2 .stepper-arrow.down {
            top: 100%;
            margin-top: -20px;
            font-size: 20px;
        }

        td {
            border: 0 !important;
        }
    </style>
@endsection

@section('pageName')
    <body class="page-article dm-light"> @endsection

    @section('content')
        <main class="page-main">
            <div class="page-content">

                <div class="uk-margin-large-top uk-container uk-container-small">
                    <section class="section-50">
                        <div class="shell">
                            <div class="range">
                                @if($carts->count())
                                    <div class="cell-xs-12">
                                        <h4 class="text-left font-default"><span
                                                id="itemcount">{{$carts->count()}}</span> Items in your cart</h4>
                                        <div class="table-responsive offset-top-10" style="border-radius: 10px;">
                                            <table class="table table-shopping-cart mt-4">
                                                <tbody>
                                                @foreach($carts as $cart)

                                                    <tr class="card1{{$cart->id}}" style="height: 10px"></tr>
                                                    <tr class="cart2{{$cart->id}}"
                                                        style="background-color: #e6e6e68c!important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);border-radius: 5px; margin-bottom: 10px">
                                                        <td style="width: 1px;">
                                                            <div
                                                                class="form-group stepper-type-2 quantity-up-{{$cart->id}}">
                                                                <input type="number" @if($cart->offer_id && !$cart->dough_type_ar) disabled @endif data-zeros="true"
                                                                       value="{{$cart->quantity}}" min="1" max="20"
                                                                       readonl
                                                                       data-id="{{$cart->id}}"
                                                                       data-price="{{($cart->offer_id)? $cart->offer_price : $cart->item->price}}"
                                                                       class="form-control text-bold quantity_ch quantity_change{{$cart->id}}">
                                                            </div>
                                                        </td>
                                                        <td class="p-4 pr-0 pl-0" style="width: 170px;height: 170px">
                                                            <div class="w-100 h-100">
                                                                <div class="product-image w-100 h-100"><img
                                                                        src="{{asset($cart->item->image)}}"
                                                                        class="img-thumbnail w-100 h-100"
                                                                        style="border-radius: 10px;" alt=""></div>
                                                            </div>
                                                        </td>
                                                        <td style="min-width: 340px;">
                                                            <div class="text-left">
                                                                <div class="row w-100 m-0">
                                                                    <div class="col-8">
                                                                        <span
                                                                            class="h5 text-sbold product-brand text-italic"
                                                                            style="font-size: 25px;">{{(app()->getLocale() == 'ar')? $cart->item->name_ar:$cart->item->name_en}}</span>
                                                                        <div class="offset-top-0">
                                                                            {{(app()->getLocale() == 'ar')? $cart->item->description_ar:$cart->item->description_en}}
                                                                            <p> Calories : {{$cart->item->calories}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4 d-flex text-center">
                                                                        <div class="p-2 mr-4"><span class="h6 price-item">Price: {{(($cart->offer_id)? $cart->offer_price : $cart->item->price) * $cart->quantity}} SR</span>
                                                                            @if($cart->offer_id)
                                                                                <i class="fa fa-gift fa-4x text-danger"
                                                                                   aria-hidden="true"></i>

                                                                            @endif
                                                                        </div>
                                                                        <div class="inset-left-20 delete_cart"
                                                                             data-id="{{$cart->id}}"><a
                                                                                href="#"
                                                                                style="font-size: 20px;"
                                                                                class="icon icon-sm link-gray-lightest text-danger"><i
                                                                                    class="fas fa-trash"></i></a></div>
                                                                    </div>
                                                                </div>
                                                                @if(!$cart->offer_id || $cart->dough_type_ar)
                                                                    <div>
                                                                        <div class="row w-100 m-0 mt-4">

                                                                            @foreach($cart->ExtrasObjects as $extra)
                                                                                <div class="col-4">

                                                                                    <p>Extra
                                                                                        : {{(app()->getLocale() == 'ar')? $extra->name_ar:$extra->name_en}} </p>
                                                                                </div>
                                                                                <div class="col-4">
                                                                                    <p> Calories
                                                                                        : {{$extra->calories}}</p>
                                                                                </div>
                                                                                <div class="col-4">
                                                                                    <p> Price : {{$extra->price}}
                                                                                        SR</p>

                                                                                </div>

                                                                            @endforeach


                                                                        </div>
                                                                        <div class="row w-100 m-0 mt-2">

                                                                            @foreach($cart->WithoutsObjects as $without)
                                                                                <div class="col-4">

                                                                                    <p>Without
                                                                                        : {{(app()->getLocale() == 'ar')? $without->name_ar:$without->name_en}} </p>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <p> Calories
                                                                                        : {{$without -> calories}}</p>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                        <div class="row w-100 m-0 mt-3">
                                                                            <div class="col-3">
                                                                                <p>Dough Type
                                                                                    : {{(app()->getLocale() == 'ar')? $cart->dough_type_ar:$cart->dough_type_en}} </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif


                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart3{{$cart->id}}" style="height: 30px">

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <form action="{{route('checkout')}}" method="post"  >

                                            @csrf
                                            <div class="mt-5 offset-9 col-xs-3">
                                                <div class="h4 font-default text-bold" style="width: max-content">
                                                    <h6 class="mt-1 mb-2"><b
                                                            class="inset-right-5 text-gray-light">Sub
                                                            Total: </b> <span id="subtotal" style="font-size: smaller;">{{$arr_check['subtotal']}} SR</span>
                                                  <input id="subtotalinput" hidden    name="subtotal" value="{{$arr_check['subtotal']}}"/>
                                                    </h6>
                                                    <h6 class="mt-1 mb-2"><b

                                                            class="inset-right-5 text-gray-light">Tax: </b>
                                                        <span id="taxes" style="font-size: smaller;">{{$arr_check['taxes']}} SR</span>
                                                        <input id="taxesinput" hidden   name="taxes" value="{{$arr_check['taxes']}}"/>

                                                    </h6>
                                                    <h6 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Delivery
                                                            Fees: </b> <span
                                                            id="delivery_fees" style="font-size: smaller;">{{$arr_check['delivery_fees']}} SR</span>
                                                        <input id="delivery_feesnput"  hidden   name="delivery_fees" value="{{$arr_check['delivery_fees']}}"/>

                                                    </h6>
                                                    @if(isset($arr_check['points']))
                                                        <h6 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Loyality Discount: </b> <span
                                                                id="points" style="font-size: smaller;"> - {{$arr_check['points']}}  SR</span>
                                                            <input id="pointsinput"  hidden   name="points_paid" value="{{$arr_check['points']}}"/>

                                                        </h6>
                                                    @endif

                                                    <h6 class="mt-1 mb-2"><b

                                                            class="inset-right-5 text-gray-light">Total: </b> <span
                                                            style="font-size: smaller;" id="total">{{$arr_check['total']}} SR</span>
                                                        <input id="totalinput"   hidden name="total" value="{{$arr_check['total']}}"/>

                                                    </h6>
                                                </div>
                                                <button type="submit" class="uk-button w-100"  style="border-radius: 100px;"> <span>Checkout</span></button>
                                            </div>

                                        </form>
                                    </div>

                                @else
                                    <div class="uk-container uk-container-small"><img class="page-cart__img" src="{{asset('website-assets/img/pages/cart/img-cart.png')}}" alt="">
                                        <div class="page-cart__box">
                                            <div class="page-cart__title">Your cart is currently empty.</div><a class="uk-button" href="{{route('menu.page')}}">Return to Shop</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    @endsection

    @section('scripts')
        <script src="{{asset('website2-assets/js/core.min.js')}}"></script>
        <script src="{{asset('website2-assets/js/script.js')}}"></script>
        <script>
            window.onload = function () {
                $(document).on('click', '.delete_cart', function (e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id');

                    $.ajax({
                        type: 'post',
                        url: '{{route('delete.cart')}}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'cart_id': id,
                        },
                        success: function (data) {
                            $(`.cart1${id}`).hide();
                            $(`.cart2${id}`).hide();
                            $(`.cart3${id}`).hide();
                            $('#itemcount').text((parseInt($('#itemcount').text())) - 1);

                             $('#subtotal').text(data.subtotal);
                            $('#taxes').text(data.taxes);
                            $('#total').text(data.total);
                            $('#delivery_fees').text(data.delivery_fees);
                            @if(isset($arr_check['points']))
                            $('#points').text(data.points);
                            @endif
                        },
                        error: function (reject) {
                            console.log(reject);
                        }
                    })
                });
                $(".quantity_ch").change(function () {
                    var quantity = $(this).val();
                    var id = $(this).attr('data-id');
                    var price = $(this).attr('data-price');
                    var elem = $(this);

                    $.ajax({
                        type: 'post',
                        url: '{{route('update.quantity')}}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'cart_id': id,
                            'quantity': quantity,
                        },
                        success: function (data) {
                            $('#subtotal').text((data.subtotal).toFixed(2));
                            $('#subtotalinput').val(data.subtotal);

                            $('#taxes').text((data.taxes).toFixed(2));
                            $('#taxesinput').val(data.taxes);

                            $('#total').text((data.total).toFixed(2));
                            $('#totalinput').val(data.total);

                            $('#delivery_fees').text((data.delivery_fees).toFixed(2));
                            $('#delivery_feesinput').val(data.delivery_fees);

                            elem.parent().parent().parent().next().next().find('.price-item').first().html('Price: ' + (quantity * price).toFixed(2) +' SR');

                            @if(isset($arr_check['points']))
                            $('#points').text(data.points);
                            $('#pointsnput').val(data.points);
                            @endif

                         },
                        error: function (reject) {
                            console.log(reject);
                        }
                    })

                });
            }
        </script>

@endsection
@push('scripts')


@endpush
