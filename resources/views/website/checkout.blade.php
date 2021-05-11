@extends('layouts.website.app')

@section('title') Checkout @endsection

@section('styles')@endsection

@section('pageName')
    <body class="page-article dm-light"> @endsection

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
                                                <div class="row">
                                                    @if(isset($branch))

                                                        <div
                                                            class="custom-control text-center col-lg-12 custom-radio mb-3 position-relative border-custom-radio">
                                                            <input type="radio" id="customRadioInline1"
                                                                   class="custom-control-input" checked>
                                                            <label class="custom-control-label w-100"
                                                                   for="customRadioInline1">
                                                                <div>
                                                                    <div class="p-3 bg-white rounded shadow-sm w-100">
                                                                        <div class="d-flex align-items-center mb-2">
                                                                        </div>
                                                                        <h4 class="mb-3 mt-2 font-weight-bold">Receive
                                                                            Your Order From</h4>
                                                                        <p class="small text m-0 font-weight-bold">{{(app()->getLocale() == 'ar')? $branch->name_ar : $branch->name_en }}</p>
                                                                        <p class="small text m-0">
                                                                            {{(app()->getLocale() == 'ar')? $branch->address_description_ar .' '. $branch->city->name_ar .' '. $branch->area->name_ar : $branch->address_description_en .' '. $branch->city->name_en .' '. $branch->area->name_en }}
                                                                        </p>
                                                                        <h6 class="mb-0">Working Hours</h6>

                                                                        @if(isset($work_hours))
                                                                            @foreach($work_hours as $h)
                                                                                <p class="small text-muted m-0">From
                                                                                    : {{$h->time_from }} To
                                                                                    :{{$h->time_to}}</p>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>

                                                    @endif
                                                    @if(isset($address))

                                                        <div
                                                            class="custom-control text-center col-lg-12 custom-radio mb-3 position-relative border-custom-radio">
                                                            <input type="radio" id="customRadioInline1"
                                                                   class="custom-control-input" checked>
                                                            <label class="custom-control-label w-100"
                                                                   for="customRadioInline1">
                                                                <div>
                                                                    <div class="p-3 bg-white rounded shadow-sm w-100">
                                                                        <div class="d-flex align-items-center mb-2">
                                                                        </div>
                                                                        <h4 class="mb-3 mt-2 font-weight-bold">We will
                                                                            deliver your address to</h4>
                                                                        <p class="small text m-0">{{$address ->name}}
                                                                            , {{(app()->getLocale() == 'ar') ?$address->city->name_ar:$address->city->name_en}}
                                                                            , {{(app()->getLocale() == 'ar') ?$address->area->name_ar:$address->area->name_en}}</p>
                                                                        <p class="small text m-0">{{$address-> street}}
                                                                            , BuildNo: {{$address-> building_number}}
                                                                            , FloorNo: {{ $address-> floor_number}}
                                                                            , Landmark: {{$address-> landmark}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>

                                                    @endif
                                                </div>
                                                <a class="btn btn-primary" href="#" data-toggle="modal"
                                                   data-target="#service-modal"> Change ServiceType </a>
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
