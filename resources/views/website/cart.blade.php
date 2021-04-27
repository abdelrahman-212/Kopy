@extends('layouts.website.app')

@section('title') Cart @endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('website2-assets/css/style2.css')}}">
    <style>
        a:hover, a:focus {
            color: #ff0000;
            text-decoration: none;
        }
    </style>
@endsection

@section('pageName') <body class="page-article dm-light"> @endsection

@section('content')
    <main class="page-main">
        <div class="page-content">

            <div class="uk-margin-large-top uk-container">
                <section class="section-50">
                    <div class="shell">
                        <div class="range">
                            <div class="cell-xs-12">
                                <h4 class="text-left font-default">1 Items in your cart</h4>
                                <div class="table-responsive offset-top-10">
                                    <table class="table table-shopping-cart mt-4">
                                        <tbody>
                                        <tr>
                                            <td style="width: 1px">
                                                <div class="form-group stepper-type-2">
                                                    <input type="number" data-zeros="true" value="1" min="1" max="20" readonly class="form-control text-bold">
                                                </div>
                                            </td>
                                            <td class="p-4" style="width: 170px;height: 170px">
                                                <div class="">
                                                    <div class="product-image"><img src="{{asset('website2-assets/img/user1.jpg')}}" class="img-thumbnail" style="border-radius: 10px;" width="100%" height="100%" alt=""></div>
                                                </div>
                                            </td>
                                            <td style="min-width: 340px;">
                                                <div class="inset-left-30 text-left"><span class="h5 text-sbold product-brand text-italic">Fruits</span>
                                                    <div class="offset-top-0">Dough type:Borr</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="inset-left-20"><span class="h5 text-sbold">Price: 19.6 SR</span></div>
                                            </td>
                                            <td>
                                                <div class="inset-left-20"><a href="#" class="icon icon-sm link-gray-lightest">&#10006;</a></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-5 offset-9 col-xs-3">
                                    <div class="h4 font-default text-bold">
                                        <h5 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Sub Total: </b> <span style="font-size: smaller;">31.1 SR</span></h5>
                                        <h5 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Tax: </b> <span style="font-size: smaller;">31.1 SR</span></h5>
                                        <h5 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Delivery Fees: </b> <span style="font-size: smaller;">31.1 SR</span></h5>
                                        <h5 class="mt-1 mb-2"><b class="inset-right-5 text-gray-light">Total: </b> <span style="font-size: smaller;">31.1 SR</span></h5>
                                    </div>
                                    <a class="uk-button w-100" href="#"> <span>Checkout</span></a>
                                </div>
                            </div>
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
