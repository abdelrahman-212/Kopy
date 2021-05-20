@extends('layouts.website.app')

@section('title') Payment @endsection

@section('styles')
    <link href="{{asset('website-assets/css/payment.css')}}" rel="stylesheet" />
@endsection

@section('pageName')
    <body class="page-article dm-dark"> @endsection

    @section('content')
        <div class="card mr-auto ml-auto mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="left border">
                            <div class="row"><span class="header">Payment</span>
                                <div class="icons"><img src="https://img.icons8.com/color/48/000000/visa.png"/> <img
                                        src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/> <img
                                        src="https://img.icons8.com/color/48/000000/maestro.png"/></div>
                            </div>
                            <form action="{{route('do.payment')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="callback_url" value="{{route('make-order.payment')}}">
                                <input type="hidden" name="publishable_api_key" value="pk_test_PVAhCbyVsgq5GjTukpHGvHa5J85ofUWPWFnkASEi">
                                <input type="hidden" name="amount" value="10000">
                                <input type="hidden" name="source[type]" value="creditcard">
                                <input type="hidden" name="description" value="Order id 1234 by guest">

                                <span>Cardholder's name:</span>
                                <input type="text" name="source[name]" @if(isset($errorarray['source[name]'])) class="mb-0" @endif/>
                                @if(isset($errorarray['source[name]']))
                                    <p style="color: red" class="mt-0">{{$errorarray['source[name]']}}</p>
                                @endif

                                <span>Card Number:</span>
                                <input type="text" name="source[number]" @if(isset($errorarray['source[number]'])) class="mb-0" @endif/>
                                @if(isset($errorarray['source[number]']))
                                    <p style="color: red" class="mt-0">{{$errorarray['source[number]']}}</p>
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <span>Expiry date</span>
                                        <div class="row d-flex">
                                            <div class="col-6">
                                                <span>Month:</span>
                                                <input type="text" name="source[month]" @if(isset($errorarray['source[month]'])) class="mb-0" @endif/>
                                                @if(isset($errorarray['source[month]']))
                                                    <p style="color: red" class="mt-0">{{$errorarray['source[month]']}}</p>
                                                @endif
                                            </div>
                                            <div class="col-6">
                                                <span>Year:</span>
                                                <input type="text" name="source[year]" @if(isset($errorarray['source[year]'])) class="mb-0" @endif/>
                                                @if(isset($errorarray['source[year]']))
                                                    <p style="color: red" class="mt-0">{{$errorarray['source[year]']}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12"><span>CVC:</span>
                                        <input type="text" name="source[cvc]" @if(isset($errorarray['source[cvc]'])) class="mb-0" @endif/>
                                        @if(isset($errorarray['source[cvc]']))
                                            <p style="color: red" class="mt-0">{{$errorarray['source[cvc]']}}</p>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="uk-button btn w-100">Purchase</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div></div>
        </div>


@endsection

@section('scripts')@endsection
