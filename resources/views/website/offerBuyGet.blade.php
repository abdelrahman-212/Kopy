@extends('layouts.website.app')

@section('title') Offer @endsection

@section('styles')
    <style>
        .white{
            color:white;
        }
        .btn-primary{
            background: #007bff!important;
            color:white;
            border-color: #007bff!important;
        }
        .btn-outline-primary{
            border-color: #007bff!important;
        }
    </style>
@endsection

@section('pageName') <body class="page-catalog dm-dark"> @endsection

@section('content')
    <main class="page-main">
        <div class="page-content">
            <div class="uk-container">
                <div>
                    <div class="py-2">
                        <h2 class="mb-3 mt-0">{{__('general.Offer Menu')}}</h2>
                        <div class="row">
                            <div class="product-full-card__tabs w-100 mt-0">
                                <form id="addToCard" action="{{route('add.cart')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="offer_id" value="{{$offers['details']['offer_id']}}">
                                    <div class="row">
                                        @if($offers['details']['buy_items']->count() > 0)
                                            <div class="col-sm-11 m-auto">
                                                <h3 class="mb-4 mt-3 col-md-12">{{__('general.Buy')}} <small class="h6 text-black-50">  {{$offers['details']['buy_quantity']}}</small></h3>
                                                <div class="col-md-12">
                                                    <div class="rounded border" style="background-color: #f5f5f5!important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);">
                                                        @foreach($offers['details']['buy_items'] as $buyItem)
                                                            <input type="hidden" name="offer_price[]" value="{{$buyItem['price']}}">
                                                            <div class="gold-members p-3 border-bottom">
                                                                <a class="btn btn-primary float-right buyBtnAdd" href="#">{{__('general.Buy')}}</a>
                                                                <div class="media d-flex">
                                                                    <div class="mr-3 col-3" style="height: 150px"><input type="checkbox" value="{{$buyItem['id']}}" name="buy_items[]" class="d-none checkItem">
                                                                        <img class="img-thumbnail rounded h-100 w-100" src="{{$buyItem->image}}" alt="">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="m-0" style="font-size: 16px;line-height: 1.8;">{{(app()->getLocale() == 'ar')? $buyItem['name_ar'] : $buyItem['name_en'] }}</h4>
                                                                        <p class="text-gray m-0" style="font-size: 12px;">{{__('menu.Price')}}: <span class="text-danger font-weight-bold">{{$buyItem['price']}} {{__('general.SR')}}</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if($offers['details']['get_items']->count() > 0)
                                            <div class="col-sm-11 m-auto">
                                                <h3 class="mb-4 mt-3 col-md-12">{{__('general.Get')}} <small class="h6 text-black-50">  {{$offers['details']['get_quantity']}}</small></h3>
                                                <div class="col-md-12">
                                                    <div class="rounded border" style="background-color: #f5f5f5!important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);">
                                                        @foreach($offers['details']['get_items'] as $getItem)
                                                            <div class="gold-members p-3 border-bottom">
                                                                <a class="btn btn-primary float-right getBtnAdd" href="#">{{__('general.Buy')}}</a>
                                                                <div class="media d-flex">
                                                                    <div class="mr-3 col-3" style="height: 150px"><input type="checkbox" value="{{$getItem['id']}}" name="get_items[]" class="d-none checkItem">
                                                                        <img class="img-thumbnail rounded h-100 w-100" src="{{$getItem->image}}" alt="">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h4 class="m-0" style="font-size: 16px;line-height: 1.8;">{{(app()->getLocale() == 'ar')? $getItem['name_ar'] : $getItem['name_en'] }}</h4>
                                                                        <p class="text-gray m-0 " style="font-size: 12px;">{{__('menu.Price')}}: <span class="text-success font-weight-bold">0 {{__('general.SR')}}</span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                            <div class="col-sm-3 mt-4 offset-9">
                                                <button class="uk-button submitOffer" style="margin-left: 50px;" type="submit"> <span>{{__('general.Confirm Offer')}}</span></button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        window.onload = function () {
            var buy_quantity = parseInt({{$offers['details']['buy_quantity']}});
            var get_quantity = parseInt({{$offers['details']['get_quantity']}});

            var buy_quantity_counter = 0;
            var get_quantity_counter = 0;

            $('.buyBtnAdd').click(function (e) {
                e.preventDefault();
                let selectele = $(this);
                if(buy_quantity_counter < buy_quantity){
                    if(selectele.text() == "{{__('general.Buy')}}"){
                        selectele.text("{{__('general.Cancel')}}");
                        selectele.addClass("btn-success");
                        selectele.removeClass("btn-primary");
                        selectele.next().find('.checkItem').attr('checked','checked');
                        buy_quantity_counter++;
                    }
                    else {
                        selectele.text("{{__('general.Buy')}}");
                        selectele.removeClass("btn-success");
                        selectele.addClass("btn-primary");
                        selectele.next().find('.checkItem').attr('checked','');
                        buy_quantity_counter--;
                    }
                }
                else if(buy_quantity_counter <= buy_quantity){
                    if(selectele.text() == "{{__('general.Cancel')}}"){
                        selectele.text("{{__('general.Buy')}}");
                        selectele.removeClass("btn-success");
                        selectele.addClass("btn-primary");
                        selectele.next().find('.checkItem').attr('checked','');
                        buy_quantity_counter--;
                    }
                    else
                    {
                        alert('{{__('general.you cant choose more than')}}: ' + get_quantity + ' items')
                    }
                }
                else
                {
                    alert('{{__('general.you cant choose more than')}}: ' + buy_quantity + ' items')
                }
            });

            $('.getBtnAdd').click(function (e) {
                e.preventDefault();
                let selectele = $(this);
                if(get_quantity_counter < get_quantity){
                    if(selectele.text() == "{{__('general.Buy')}}"){
                        selectele.text("{{__('general.Cancel')}}");
                        selectele.addClass("btn-success");
                        selectele.removeClass("btn-primary");
                        selectele.next().find('.checkItem').attr('checked','checked');
                        get_quantity_counter++;
                    }
                    else {
                        selectele.text("{{__('general.Buy')}}");
                        selectele.removeClass("btn-success");
                        selectele.addClass("btn-primary");
                        selectele.next().find('.checkItem').attr('checked','');
                        get_quantity_counter--;
                    }
                }
                else if(get_quantity_counter <= get_quantity){
                    if(selectele.text() == "{{__('general.Cancel')}}"){
                        selectele.text("{{__('general.Buy')}}");
                        selectele.removeClass("btn-success");
                        selectele.addClass("btn-primary");
                        selectele.next().find('.checkItem').attr('checked','');
                        get_quantity_counter--;
                    }
                    else
                    {
                        alert('{{__('general.you cant choose more than')}}: ' + get_quantity + ' {{__('general.items')}}')
                    }
                }
                else
                {
                    alert('{{__('general.you cant choose more than')}}: ' + get_quantity + ' {{__('general.items')}}')
                }

            });

            $('.submitOffer').click(function (e){
                e.preventDefault();
                if(get_quantity == get_quantity_counter && buy_quantity == buy_quantity_counter){
                    $('#addToCard').submit();
                }
                else if (buy_quantity > buy_quantity_counter){
                    alert('{{__('general.Please buy')}} {{$offers['details']['buy_quantity']}} {{__('general.at least')}}')
                }
                else if (get_quantity > get_quantity_counter){
                    alert('{{__('general.Please buy')}} {{$offers['details']['get_quantity']}} {{__('general.at least')}}')
                }

            });


        };
    </script>
@endsection
