@extends('layouts.website.app')

@section('title') My Orders @endsection

@section('styles')
    <style>
        p {
            margin: 0;
        }

        div {
            line-height: 1.5;
        }
    </style>
@endsection

@section('pageName')
    <body class="page-article dm-light"> @endsection

    @section('content')
        <main class="page-main">
            <div class="page-content">

                <div class="uk-margin-small-top uk-container">

                    <section class="py-4 osahan-main-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <ul class="nav nav-tabsa custom-tabsa border-0 flex-column bg-white rounded overflow-hidden shadow-sm p-2 c-t-order"
                                    id="myTab" role="tablist"
                                    style="    box-shadow: 0 .125rem .25rem rgba(0,0,0,.25)!important;">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link border-0 text-dark py-3 active" id="completed-tab"
                                           data-toggle="tab" href="#completed" role="tab" aria-controls="completed"
                                           aria-selected="true">
                                            <i class="feather-check mr-2 text-success mb-0"></i> Completed</a>
                                    </li>
                                    <li class="nav-item border-top" role="presentation">
                                        <a class="nav-link border-0 text-dark py-3" id="progress-tab" data-toggle="tab"
                                           href="#progress" role="tab" aria-controls="progress" aria-selected="false">
                                            <i class="feather-clock mr-2 text-warning mb-0"></i> On Progress</a>
                                    </li>
                                    <li class="nav-item border-top" role="presentation">
                                        <a class="nav-link border-0 text-dark py-3" id="canceled-tab" data-toggle="tab"
                                           href="#canceled" role="tab" aria-controls="canceled" aria-selected="false">
                                            <i class="feather-x-circle mr-2 text-danger mb-0"></i> Canceled</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content col-md-9" id="myTabContent">
                                <div class="tab-pane fade show active" id="completed" role="tabpanel"
                                     aria-labelledby="completed-tab">
                                    @if(isset($completed_orders))
                                        @foreach($completed_orders as $index => $co )
                                            <div class="order-body">

                                                <div class="pb-3">
                                                    <div class="p-3 rounded shadow-sm bg-white"
                                                         style="background-color: #e6e6e68c!important;box-shadow: 0 .125rem 0.25rem rgba(0,0,0,.25)!important;">

                                                        <div class="d-flex border-bottom pb-3">
                                                            <div class="text-muted mr-3"
                                                                 style="width: 110px;height: 110px">
                                                                <img alt="#"
                                                                     src="{{asset('website2-assets/img/user1.jpg')}}"
                                                                     class="w-100 h-100 img-fluid order_img rounded">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-weight-bold">ORDER {{$index +1}}</p>
                                                                <p class="mb-0">{{$co->items->count()}} Orders</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p class="bg-success text-white py-1 px-2 rounded small mb-1">
                                                                    Completed</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex pt-3">
                                                            <div class="text-muted m-0 mr-auto mr-3 small"
                                                                 style="padding: 8px;">Total:
                                                                <span class="text-dark font-weight-bold">{{$co ->total}}SR</span>
                                                            </div>
                                                            <div class="text-right">
                                                                <a href="checkout.html"
                                                                   class="btn btn-primary px-3">Reorder</a>
                                                                <a href="contact-us.html"
                                                                   class="btn btn-outline-primary px-3">Details</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    @endif
                                </div>


                                <div class="tab-pane fade" id="progress" role="tabpanel"
                                     aria-labelledby="progress-tab">
                                    @if(isset($pending_orders))
                                        @foreach($pending_orders as $index => $pe )
                                            <div class="order-body">

                                                <div class="pb-3">

                                                    <div class="p-3 rounded shadow-sm bg-white"
                                                         style="background-color: #e6e6e68c!important;box-shadow: 0 .125rem 0.25rem rgba(0,0,0,.25)!important;">

                                                        <div class="d-flex border-bottom pb-3">
                                                            <div class="text-muted mr-3"
                                                                 style="width: 110px;height: 110px">
                                                                <img alt="#"
                                                                     src="{{asset('website2-assets/img/user1.jpg')}}"
                                                                     class="w-100 h-100 img-fluid order_img rounded">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-weight-bold">
                                                                    ORDER {{$index+1}}</p>
                                                                <p class="mb-0">{{$pe->items->count()}}
                                                                    Orders</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p class="bg-warning text-white py-1 px-2 rounded small mb-1">
                                                                    Pending</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex pt-3">
                                                            <div class="text-muted m-0 mr-auto mr-3 small"
                                                                 style="padding: 8px;">Total:
                                                                <span class="text-dark font-weight-bold">12.74 SR</span>
                                                            </div>
                                                            <div class="text-right">
                                                                <a href="checkout.html"
                                                                   class="btn btn-primary px-3">Reorder</a>
                                                                <a href="contact-us.html"
                                                                   class="btn btn-outline-primary px-3">Details</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="tab-pane fade" id="canceled" role="tabpanel"
                                     aria-labelledby="canceled-tab">

                                    @if(isset($canceled_orders))
                                        @foreach($canceled_orders as  $index => $ca)
                                            <div class="order-body">

                                                <div class="pb-3">
                                                    <div class="p-3 rounded shadow-sm bg-white"
                                                         style="background-color: #e6e6e68c!important;box-shadow: 0 .125rem 0.25rem rgba(0,0,0,.25)!important;">
                                                        <div class="d-flex border-bottom pb-3">
                                                            <div class="text-muted mr-3"
                                                                 style="width: 110px;height: 110px">
                                                                <img alt="#"
                                                                     src="{{asset('website2-assets/img/user1.jpg')}}"
                                                                     class="w-100 h-100 img-fluid order_img rounded">
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-weight-bold">ORDER {{$index +1}}</p>
                                                                <p class="mb-0">{{$ca->items->count()}} Orders</p>
                                                            </div>
                                                            <div class="ml-auto">
                                                                <p class="bg-danger text-white py-1 px-2 rounded small mb-1">
                                                                    Canceled</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex pt-3">
                                                            <div class="text-muted m-0 mr-auto mr-3 small"
                                                                 style="padding: 8px;">Total:
                                                                <span class="text-dark font-weight-bold">{{$ca->total}}SR</span>
                                                            </div>
                                                            <div class="text-right">
                                                                <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                                                <a href="contact-us.html"
                                                                   class="btn btn-outline-primary px-3">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>

                    </section>

                </div>

            </div>
        </main>

@endsection

@section('scripts')@endsection
