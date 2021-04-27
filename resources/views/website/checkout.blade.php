@extends('layouts.website.app')

@section('title') Checkout @endsection

@section('styles')@endsection

@section('pageName') <body class="page-article dm-light"> @endsection

@section('content')
    <main class="page-main">
        <div class="page-content">

            <div class="uk-margin-small-top uk-container">

                <div class="position-relative">
                    <div class="py-5 row">
                        <div class="col-md-8 mb-3">
                            <div>
                                <div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
                                    <div class="osahan-cart-item-profile bg-white p-3">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-3 font-weight-bold">Delivery Address</h6>
                                            <div class="row">
                                                <div class="custom-control col-lg-6 custom-radio mb-3 position-relative border-custom-radio">
                                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                                                    <label class="custom-control-label w-100" for="customRadioInline1">
                                                        <div>
                                                            <div class="p-3 bg-white rounded shadow-sm w-100">
                                                                <div class="d-flex align-items-center mb-2">
                                                                    <h6 class="mb-0">Home</h6>
                                                                    <p class="mb-0 badge badge-success ml-auto"><i class="icofont-check-circled"></i> Default</p>
                                                                </div>
                                                                <p class="small text-muted m-0">1001 Veterans Blvd</p>
                                                                <p class="small text-muted m-0">Redwood City, CA 94063</p>
                                                            </div>
                                                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-block btn-light border-top">Edit</a>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="custom-control col-lg-6 custom-radio position-relative border-custom-radio">
                                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                    <label class="custom-control-label w-100" for="customRadioInline2">
                                                        <div>
                                                            <div class="p-3 rounded bg-white shadow-sm w-100">
                                                                <div class="d-flex align-items-center mb-2">
                                                                    <h6 class="mb-0">Work</h6>
                                                                    <p class="mb-0 badge badge-light ml-auto"><i class="icofont-check-circled"></i> Select</p>
                                                                </div>
                                                                <p class="small text-muted m-0">Model Town, Ludhiana</p>
                                                                <p class="small text-muted m-0">Punjab 141002, India</p>
                                                            </div>
                                                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-block btn-light border-top">Edit</a>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal"> ADD NEW ADDRESS </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                                <div class="bg-white p-3 clearfix border-bottom">
                                    <p class="mb-1">Full name<span class="float-right text-dark">Mohamed Hassan</span></p>
                                    <p class="mb-1">Phone<span class="float-right text-dark">05512345678</span></p>
                                    <p class="mb-1">Email<span class="float-right text-dark">abdosrs@yahoo.com</span></p>
                                    <p class="mb-1">Sub Total<span class="float-right text-dark">55.9 SR</span></p>
                                    <p class="mb-1">Tax<span class="float-right text-dark">55.9 SR</span></p>
                                    <p class="mb-1">Delivery Fees<span class="float-right text-dark">10 SR</span></p>
                                    <hr>
                                    <h5 class="font-weight-bold mb-0 text-success">TO PAY <span class="float-right">55.9 SR</span></h5>
                                </div>
                                <div class="p-3">
                                    <a class="btn btn-success btn-block btn-lg" href="successful.html">Confirm Order<i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

@endsection

@section('scripts')@endsection
