@extends('layouts.website.app')

@section('title') Payment @endsection

@section('styles')
    <style>
        .card {
            max-width: 800px;
            border: 0;
        }

        .card-top {
            padding: 0.7rem 5rem
        }

        .card-top a {
            float: left;
            margin-top: 0.7rem
        }

        #logo {
            font-family: 'Dancing Script';
            font-weight: bold;
            font-size: 1.6rem
        }

        .card-body {
            padding: 0 5rem 5rem 5rem;
            background-image: url("https://i.imgur.com/4bg1e6u.jpg");
            background-size: cover;
            background-repeat: no-repeat
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 0 1rem 1rem 1rem;
                background-image: url("https://i.imgur.com/4bg1e6u.jpg");
                background-size: cover;
                background-repeat: no-repeat
            }

            .card-top {
                padding: 0.7rem 1rem
            }
        }

        .row {
            margin: 0
        }

        .upper {
            padding: 1rem 0;
            justify-content: space-evenly
        }

        #three {
            border-radius: 1rem;
            width: 22px;
            height: 22px;
            margin-right: 3px;
            border: 1px solid blue;
            text-align: center;
            display: inline-block
        }

        #payment {
            margin: 0;
            color: blue
        }

        .icons {
            margin-left: auto
        }

        form span {
            color: rgb(179, 179, 179)
        }

        form {
            padding: 2vh 0
        }

        input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247)
        }

        input:focus::-webkit-input-placeholder {
            color: transparent
        }

        .header {
            font-size: 1.5rem
        }

        .left {
            background-color: #ffffff;
            padding: 2vh
        }

        .left img {
            width: 2rem
        }

        .left .col-4 {
            padding-left: 0
        }

        .right .item {
            padding: 0.3rem 0
        }

        .right {
            background-color: #ffffff;
            padding: 2vh
        }

        .col-8 {
            padding: 0 1vh
        }

        .lower {
            line-height: 2
        }

        .btn {
            background-color: rgb(23, 4, 189);
            border-color: rgb(23, 4, 189);
            color: white;
            width: 100%;
            font-size: 0.7rem;
            margin: 4vh 0 1.5vh 0;
            padding: 1.5vh;
            border-radius: 0
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none
        }

        .btn:hover {
            color: white
        }

        a {
            color: black
        }

        a:hover {
            color: black;
            text-decoration: none
        }

        input[type=checkbox] {
            width: unset;
            margin-bottom: unset
        }

        #cvv {
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0.575), rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center
        }

        #cvv:hover {
        }
    </style>
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
                                <input type="text" name="source[name]" />

                                <span>Card Number:</span>
                                <input type="text" name="source[number]" />

                                <div class="row">
                                    <div class="col-12">
                                        <span>Expiry date</span>
                                        <div class="row d-flex">
                                            <div class="col-6">
                                                <span>Month:</span>
                                                <input type="text" name="source[month]" />
                                            </div>
                                            <div class="col-6">
                                                <span>Year:</span>
                                                <input type="text" name="source[year]" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4"><span>CVC:</span>
                                        <input type="text" name="source[cvc]" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">Purchase</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div></div>
        </div>


@endsection

@section('scripts')@endsection
