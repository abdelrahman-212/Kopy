@extends('layouts.website.app')

@section('title') Offers @endsection

@section('styles')
<style>
   h6 , h5,h4,h3,h2{
        font-family: inherit;
    }
</style>

@endsection

@section('pageName')
    <body class="page-article dm-light"> @endsection

    @section('content')
        <main>
            <section class="breadcrumb-osahan pt-5 pb-5 bg-dark position-relative text-center">
                <h1 class="text-white">Offers for you</h1>
                <h6 class="text-white-50">Explore top deals and offers exclusively for you!</h6>
            </section>
            <section class="section pt-5 pb-5">
                <div class="container">
                    <div class="row mt-4 pt-2">
                        <div class="col-md-12">
                            <h4 class="font-weight-bold mt-0 mb-3">Available Offers</h4>
                        </div>
                        @if(isset($offers))
                            @foreach($offers as $offer)
                                <div class="col-md-4 mb-3 mt-3" style="padding-right: 15px;padding-left: 15px;">
                                    <div class="card offer-card border-1 shadow-sm rounded">
                                        <div class="card-body">
                                            <h5 class="card-title"><img src="{{$offer->image}}">
                                            </h5>
                                            <h6>{{(app()->getLocale() == 'ar') ?$offer->title_ar:$offer->title}}</h6>

                                            <p style="line-height: 1.3;font-size: 12px;"
                                               class="card-subtitle mb-2 text-muted">
                                                {{(app()->getLocale() == 'ar') ?$offer->description_ar:$offer->description}}
                                            </p>
                                            <h6 style=""
                                                class="card-subtitle mb-2 text-block">
                                                Offer Type:{{$offer->offer_type}}
                                            </h6>
                                            <a href="{{$offer->offer_typ=='discount'?'discount':'get-buy'}}"
                                               class="card-link">Get Offer</a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                    </div>
                </div>
            </section>

        </main>

@endsection

@section('scripts')@endsection
