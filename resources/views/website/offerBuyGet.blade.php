@extends('layouts.website.app')

@section('title') Offer @endsection

@section('styles')@endsection

@section('pageName') <body class="page-catalog dm-dark"> @endsection

@section('content')
    <main class="page-main">
        <div class="page-content">
            <div class="uk-container">
                <div>
                    <div class="py-2">
                        <h2 class="mb-3 mt-0">Offer Menu</h2>
                        <div class="row">
                            <div class="product-full-card__tabs w-100 mt-0">

                                <div class="row">
                                    @if($offers['details']['buy_items']->count() > 0)
                                        <div class="col-sm-11 m-auto">
                                            <h3 class="mb-4 mt-3 col-md-12">Buy <small class="h6 text-black-50">  {{$offers['details']['buy_quantity']}}</small></h3>
                                            <div class="col-md-12">
                                                <div class="rounded border" style="background-color: #f5f5f5!important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);">
                                                    @foreach($offers['details']['buy_items'] as $buyItem)
                                                        <div class="gold-members p-3 border-bottom">
                                                            <a class="btn btn-outline-secondary btn-sm float-right btnAdd" href="#">Buy</a>
                                                            <div class="media d-flex">
                                                                <div class="mr-3 col-4"><input type="checkbox" value="{{$buyItem['id']}}" name="buy_items[]" class="d-none checkItem">
                                                                    <img class="img-thumbnail rounded" src="{{$buyItem->image}}" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="m-0" style="font-size: 14px;line-height: 1.8;">{{(app()->getLocale() == 'ar')? $buyItem['name_ar'] : $buyItem['name_en'] }}</h6>
                                                                    <p class="text-gray m-0" style="font-size: 11px;">Price: {{$buyItem['price']}} SR)</p>
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
                                            <h3 class="mb-4 mt-3 col-md-12">Get <small class="h6 text-black-50">  {{$offers['details']['get_quantity']}}</small></h3>
                                            <div class="col-md-12">
                                                <div class="rounded border" style="background-color: #f5f5f5!important;box-shadow: 0.1rem 0rem 1.5rem rgb(0 0 0 / 20%);">
                                                    @foreach($offers['details']['get_items'] as $getItem)
                                                        <div class="gold-members p-3 border-bottom">
                                                            <a class="btn btn-outline-secondary btn-sm float-right btnAdd" href="#">Buy</a>
                                                            <div class="media d-flex">
                                                                <div class="mr-3 col-4"><input type="checkbox" value="{{$getItem['id']}}" name="get_items[]" class="d-none checkItem">
                                                                    <img class="img-thumbnail rounded" src="{{$getItem->image}}" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="m-0" style="font-size: 14px;line-height: 1.8;">{{(app()->getLocale() == 'ar')? $getItem['name_ar'] : $getItem['name_en'] }}</h6>
                                                                    <p class="text-gray m-0" style="font-size: 11px;">Price: {{$getItem['price']}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                        <div class="col-sm-3 mt-4 offset-9">
                                            <a class="uk-button" style="margin-left: 50px;" href="#"> <span>Confirm Offer</span></a>
                                        </div>
                                </div>

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

            $('.btnAdd').click(function (e) {
                e.preventDefault();
                let selectele = $(this);
                if(selectele.next().find('.food-item').hasClass('text-danger')){
                    selectele.next().find('.food-item').removeClass('text-danger').addClass('text-success');
                    selectele.next().find('.checkExtra').attr('checked','checked');
                }
                else if (selectele.next().find('.food-item').hasClass('text-success')) {
                    selectele.next().find('.food-item').removeClass('text-success').addClass('text-danger');
                    selectele.next().find('.checkExtra').attr('checked','');
                }
            });

        };
    </script>
@endsection
