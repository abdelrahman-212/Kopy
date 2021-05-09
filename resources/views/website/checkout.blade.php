@extends('layouts.website.app')

@section('title') Checkout @endsection

@section('styles')@endsection

@section('pageName')
    <body class="page-article dm-light"> @endsection

    @section('content')
        <main class="page-main">
            <div class="page-content">

                <div class="uk-margin-small-top uk-container">

                    @if(Session::has('success'))
                        <div class="row mr-2 ml-2">
                            <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                                    id="type-error">{{Session::get('success')}}
                            </button>
                            {{session()->forget('success')}}
                        </div>
                    @endif
                    <div class="position-relative">
                        <div class="py-5 row">
                            <div class="col-md-8 mb-3">
                                <div>
                                    <div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
                                        <div class="osahan-cart-item-profile bg-white p-3">
                                            <div class="d-flex flex-column">
                                                <h4 class="mb-3 font-weight-bold">Receive Your Order From</h4>
                                                <div class="row">
                                                    @if(isset($branch))
                                                        <div
                                                            class="custom-control text-center col-lg-12 custom-radio mb-3 position-relative border-custom-radio">
                                                            <input type="radio" id="customRadioInline1"
                                                                   name="customRadioInline1"
                                                                   class="custom-control-input" checked>
                                                            <label class="custom-control-label w-100"
                                                                   for="customRadioInline1">
                                                                <div>
                                                                    <div class="p-3 bg-white rounded shadow-sm w-100">
                                                                        <div class="d-flex align-items-center mb-2">
                                                                        </div>
                                                                        <p class="small text m-0">{{$branch->address_description}}</p>
                                                                        <p class="small text m-0">{{$branch->address_description_en}}</p>
                                                                        <h6 class="mb-0">Working Hours</h6>


                                                                        @if(isset($work_hours))
                                                                            @foreach($work_hours as $h)
                                                                                <p class="small text-muted m-0">From
                                                                                    : {{$h->time_from }} To
                                                                                    :{{$h->time_to}}</p>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                    {{--                                                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-block btn-light border-top">Edit</a>--}}
                                                                </div>
                                                            </label>
                                                        </div>
                                                    @endif
                                                    {{--                                                <div class="custom-control col-lg-6 custom-radio position-relative border-custom-radio">--}}
                                                    {{--                                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">--}}
                                                    {{--                                                    <label class="custom-control-label w-100" for="customRadioInline2">--}}
                                                    {{--                                                        <div>--}}
                                                    {{--                                                            <div class="p-3 rounded bg-white shadow-sm w-100">--}}
                                                    {{--                                                                <div class="d-flex align-items-center mb-2">--}}
                                                    {{--                                                                    <h6 class="mb-0">Work</h6>--}}
                                                    {{--                                                                    <p class="mb-0 badge badge-light ml-auto"><i class="icofont-check-circled"></i> Select</p>--}}
                                                    {{--                                                                </div>--}}
                                                    {{--                                                                <p class="small text-muted m-0">Model Town, Ludhiana</p>--}}
                                                    {{--                                                                <p class="small text-muted m-0">Punjab 141002, India</p>--}}
                                                    {{--                                                            </div>--}}
                                                    {{--                                                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-block btn-light border-top">Edit</a>--}}
                                                    {{--                                                        </div>--}}
                                                    {{--                                                    </label>--}}
                                                    {{--                                                </div>--}}
                                                </div>
                                                {{--                                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal"> ADD NEW ADDRESS </a>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                                    <div class="bg-white p-3 clearfix border-bottom">
                                        <p class="mb-1">Full name<span
                                                class="float-right text-dark">{{auth()->user()->name}}</span></p>
                                        <p class="mb-1">Phone<span
                                                class="float-right text-dark">{{auth()->user()->first_phone}}</span></p>
                                        <p class="mb-1">Email<span
                                                class="float-right text-dark">{{auth()->user()->email}}</span></p>

                                        <form method="post" action="{{route('make_order')}}">
                                            @csrf


                                            @if(isset($request))
                                                <p class="mb-1">Sub Total<span class="float-right text-dark">{{$request->subtotal}} SR</span>
                                                    <input id="subtotalinput" hidden name="subtotal"
                                                           value="{{$request->subtotal}} "/>

                                                </p>
                                                <p class="mb-1">Tax<span class="float-right text-dark">{{$request->taxes}} SR</span>
                                                    <input id="taxesinput" hidden name="taxes"
                                                           value="{{$request->taxes}}"/>

                                                </p>
                                                <p class="mb-1">Delivery Fees<span

                                                        class="float-right text-dark">{{$request->delivery_fees}} SR</span>

                                                    <input id="delivery_feesnput" hidden name="delivery_fees"
                                                           value="{{$request->delivery_fees}}"/>
                                                </p>
                                                @if($request->has('points_paid'))
                                                    <p class="mb-1">Loyality Points<span
                                                            class="float-right text-dark">- {{$request->points_paid}} SR</span>
                                                        <input id="pointsinput" hidden name="points_paid"
                                                               value="{{$request->points_paid}}"/>

                                                    </p>
                                                @endif
                                                @if($request->has('branch_id'))
                                                    <input hidden name="branch_id" value="{{$request->branch_id}}"/>


                                                @endif
                                                @if($request->has('address_id'))
                                                    <input id="pointsinput" hidden name="address_id"
                                                           value="{{$request->address_id}}"/>


                                                @endif
                                                @if($request->has('service_type'))
                                                    <input id="pointsinput" hidden name="service_type"
                                                           value="{{$request->service_type}}"/>


                                                @endif
                                            @auth()
                                                <input id="pointsinput" hidden name="customer_id"
                                                       value="{{auth()->user()->id}}"/>
                                                @endauth
                                                    <hr>

                                                <h5 class="font-weight-bold mb-0 text-success">TO PAY <span
                                                        class="float-right">{{$request->total}} SR</span>
                                                    <input id="delivery_feesnput" hidden name="total"
                                                           value="{{$request->total}}"/>

                                                </h5>
                                    </div>
                                    <div class="p-3">
                                        <button class="btn btn-success btn-block btn-lg" type="submit">Confirm
                                            Order<i
                                                class="feather-arrow-right"></i></button>
                                    </div>
                                    @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>

@endsection

@section('scripts')@endsection
