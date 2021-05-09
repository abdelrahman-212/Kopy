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
                                @if(isset($carts))
                                    <div class="cell-xs-12">
                                        <h4 class="text-left font-default">{{$carts->count()}} Items in your cart</h4>
                                        <div class="table-responsive offset-top-10" style="border-radius: 10px;">
                                            <table class="table table-shopping-cart mt-4">
                                                <tbody>
                                                @foreach($carts as $cart)

                                                    <tr style="height: 10px"></tr>
                                                    <tr style="background-color: #e6e6e68c!important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);border-radius: 5px; margin-bottom: 10px">
                                                        <td style="width: 1px;">
                                                            <div class="form-group stepper-type-2">
                                                                <input type="number" data-zeros="true"
                                                                       value="{{$cart->quantity}}" min="1" max="20"
                                                                       readonly class="form-control text-bold">
                                                            </div>
                                                        </td>
                                                        <td class="p-4" style="width: 170px;height: 170px">
                                                            <div class="">
                                                                <div class="product-image"><img
                                                                        src="{{asset($cart->item->image)}}"
                                                                        class="img-thumbnail"
                                                                        style="border-radius: 10px;" width="100%"
                                                                        height="100%" alt=""></div>
                                                            </div>
                                                        </td>
                                                        <td style="min-width: 340px;">
                                                            <div class="text-left"><span
                                                                    class="h5 text-sbold product-brand text-italic"
                                                                    style="font-size: 25px;">{{(app()->getLocale() == 'ar')? $cart->item->name_ar:$cart->item->name_en}}</span>
                                                                <div
                                                                    class="offset-top-0">{{(app()->getLocale() == 'ar')? $cart->item->description_ar:$cart->item->description_en}}</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="inset-left-20"><span class="h6">Price: {{$cart->item->price}} SR</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="inset-left-20"><a href="#"
                                                                                          style="font-size: 20px;"
                                                                                          class="icon icon-sm link-gray-lightest text-danger"><i
                                                                        class="fas fa-trash"></i></a></div>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 30px"></tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-5 offset-9 col-xs-3">
                                            <div class="h4 font-default text-bold">
                                                <h6 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Sub
                                                        Total: </b> <span style="font-size: smaller;">31.1 SR</span>
                                                </h6>
                                                <h6 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Tax: </b>
                                                    <span style="font-size: smaller;">31.1 SR</span></h6>
                                                <h6 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Delivery
                                                        Fees: </b> <span style="font-size: smaller;">31.1 SR</span></h6>
                                                <h6 class="mt-1 mb-2"><b
                                                        class="inset-right-5 text-gray-light">Total: </b> <span
                                                        style="font-size: smaller;">31.1 SR</span></h6>
                                            </div>
                                            <a class="uk-button w-100" href="#" style="border-radius: 100px;"> <span>Checkout</span></a>
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
@endsection
@push('scripts')


@endpush
