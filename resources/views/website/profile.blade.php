@extends('layouts.website.app')

@section('title') Profile @endsection

@section('styles')
    <style>
        h6 {
            font-family: 'sans-serif';
        }
    </style>
    <link rel="icon" type="image/png" href="{{asset('website2-assets/img/favicon.png')}}">

    <link href="{{asset('website2-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('website2-assets/vendor/fontawesome/css/all.min.css')}}" rel="stylesheet">

    <link href="{{asset('website2-assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">

    <link href="{{asset('website2-assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet">

    <link href="{{asset('website2-assets/css/osahan.css')}}" rel="stylesheet">
@endsection

@section('pageName')
    <body class="page-article dm-light"> @endsection

    @section('content')

        <main class="page-main">
            <div class="page-content">
                <div class="uk-container">

                    <div class="osahan-profile">

                        <div class=" position-relative">
                            @if(Session::has('success'))
                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                                            id="type-error">{{Session::get('success')}}
                                    </button>
                                </div>
                            @endif

                            @if(Session::has('error'))
                                <div class="row mr-2 ml-2">
                                    <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                            id="type-error">{{Session::get('error')}}
                                    </button>
                                </div>
                            @endif
                            <div class="pt-5 osahan-profile row">
                                <div class="col-md-3 mb-3">
                                    <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden"
                                         style="box-shadow: 0 .125rem .25rem rgba(0,0,0,.25)!important;">
                                        <a href="profile.html" class="">
                                            <div class="d-flex align-items-center p-3">
                                                <div class="left mr-3">
                                                    <img alt="#" src="{{asset('website2-assets/img/user1.jpg')}}"
                                                         class="rounded-circle">
                                                </div>
                                                <div class="right">
                                                    <h6 class="mb-1 font-weight-bold">{{auth()->user()->name}} <i
                                                            class="feather-check-circle text-success"></i></h6>
                                                    <p class="text-muted m-0 small"><span
                                                            class="__cf_email__">{{auth()->user()->email}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                                            <p class="m-0">Account Points</p>
                                            <h5 class="m-0 ml-auto text-primary">
                                                @if(isset($points))
                                                    {{$points['user_points']}}</h5>

                                            @endif


                                        </div>
                                        <div class="bg-white profile-details">

                                            <ul class="nav   flex-column border-0  " id="myTab"
                                                role="tablist">

                                                <li class="nav-item d-flex w-100 align-items-center border-bottom    ">
                                                    <a class="nav-link" id="account-tab" data-toggle="tab"
                                                       href="#account" role="tab"
                                                       aria-controls="account" aria-selected="false">
                                                        <div class="left mr-3">
                                                            <h6 class="font-weight-bold mb-1 text-dark">
                                                                Account
                                                            </h6>
                                                            <p class="small text-muted m-0">Edit your Account
                                                                Details</p>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class="nav-item d-flex w-100 align-items-center border-bottom ">
                                                    <a class="nav-link" id="addresses-tab" data-toggle="tab"
                                                       href="#addresses" role="tab"
                                                       aria-controls="addresses" aria-selected="false">

                                                        <div class="left mr-3">
                                                            <h6 class="font-weight-bold mb-1 text-dark">
                                                                Addresses
                                                            </h6>
                                                            <p class="small text-muted m-0">Add or remove a delivery
                                                                address</p>
                                                        </div>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-9 mb-3">
                                    <div class="rounded shadow-sm p-4 bg-white"
                                         style="box-shadow: 0 .125rem 0.25rem rgba(0,0,0,.25)!important;"

                                    >
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="account" role="tabpanel"
                                                 aria-labelledby="account-tab">
                                                <h4 class="font-weight-bold mt-0 mb-4">Manage account</h4>
                                                <div id="edit_profile">
                                                    <div>
                                                        @auth()
                                                            <form
                                                                method="post"
                                                                action="{{route('update.profile')}}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputName1">Name <span
                                                                            class="text-info">Hint:Name should be "first last"</span></label>
                                                                    <input type="text" class="form-control"
                                                                           id="exampleInputName1d"
                                                                           placeholder="Name"
                                                                           name="name"
                                                                           value="{{auth()->user()->name}}"
                                                                           disabled>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="exampleInputNumber1">Mobile
                                                                        Number</label>
                                                                    <input type="tel" class="form-control"
                                                                           id="exampleInputNumber1"
                                                                           name="phone"
                                                                           value="{{auth()->user()->first_phone}}"
                                                                           placeholder="Second Phone Number"
                                                                           disabled>


                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email</label>
                                                                    <input type="email" class="form-control"
                                                                           id="exampleInputEmail1"
                                                                           name="email"
                                                                           value="{{auth()->user()->email}}"
                                                                           disabled>

                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="submit" class="uk-button btn-block"
                                                                            disabled>

                                                                        Save
                                                                        Changes
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        @endauth
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="addresses" role="tabpanel"
                                                 aria-labelledby="addresses-tab">
                                                <h4 class="font-weight-bold mt-0 mb-4">Manage Addresses</h4>

                                                <div class="row">
                                                    @if(isset($addresses))
                                                        @foreach($addresses as $address)

                                                            <div class="col-md-6">
                                                                <div class="bg-white card addresses-item mb-4 shadow">
                                                                    <div class="gold-members p-4">
                                                                        <div class="media">
                                                                            <div class="mr-3"><i
                                                                                    class="icofont-ui-home icofont-3x"></i>
                                                                            </div>
                                                                            @if(isset($errorarray))
                                                                                @if(array_key_exists('message', $errorarray))
                                                                                    <span
                                                                                        class="d-block text-danger mb-2 font-weight-bold">{{$errorarray['message']}}</span>
                                                                                @endif
                                                                            @endif

                                                                            <div class="media-body">
                                                                                <h6 class="mb-1 text-secondary">

                                                                                    {{$address ->name}}</h6>
                                                                                <p class="text-black">
                                                                                    {{(app()->getLocale() == 'ar') ?$address->city->name_ar:$address->name_en}}
                                                                                    , {{(app()->getLocale() == 'ar') ?$address->area->name_ar:$address->area->name_en}}
                                                                                    , {{$address-> street}}
                                                                                    , {{$address-> building_number}}
                                                                                    ,{{ $address-> floor_number}}
                                                                                    ,{{$address-> landmark}}
                                                                                </p>
                                                                                <p class="mb-0 text-black font-weight-bold">
                                                                                    <a
                                                                                        class="text-primary mr-3"
                                                                                        data-toggle="modal"
                                                                                        data-target="#edit-address-modal{{$address->id}}"
                                                                                        href="#"><i
                                                                                            class="icofont-ui-edit"></i>
                                                                                        EDIT</a> <a class="text-danger"
                                                                                                    data-toggle="modal"
                                                                                                    data-target="#delete-address-modal{{$address->id}}"
                                                                                                    href="{{route('delete_address',$address->id)}}"><i
                                                                                            class="icofont-ui-delete"></i>
                                                                                        DELETE</a></p>
                                                                            </div>

                                                                            <div class="modal fade"
                                                                                 id="edit-address-modal{{$address->id}}"
                                                                                 tabindex="-1" role="dialog"
                                                                                 aria-labelledby="add-address"
                                                                                 aria-hidden="true">
                                                                                <div
                                                                                    class="modal-dialog modal-dialog-centered"
                                                                                    role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="add-address">Edit
                                                                                                Delivery Address</h5>
                                                                                            <button type="button"
                                                                                                    class="close"
                                                                                                    data-dismiss="modal"
                                                                                                    aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form
                                                                                                action="{{route('update_address',$address->id)}}"
                                                                                                enctype="multipart/form-data">
                                                                                                @csrf
                                                                                                <div class="form-row">
                                                                                                    <div
                                                                                                        class="form-group col-md-12">
                                                                                                        <label
                                                                                                            for="inputPassword4">Delivery
                                                                                                            Area</label>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Address Name"
                                                                                                                name="name"
                                                                                                                value="{{$address->name}}"
                                                                                                                required>
                                                                                                            <div
                                                                                                                class="input-group-append">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        @if(isset($errorarray))
                                                                                                            @if(array_key_exists('name', $errorarray))
                                                                                                                <span
                                                                                                                    class="d-block text-danger mb-2 font-weight-bold">{{$errorarray['name']}}</span>
                                                                                                            @endif
                                                                                                        @endif
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group col-md-12 wrapCity">
                                                                                                        <label
                                                                                                            for="inputPassword4">
                                                                                                            City </label>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <select
                                                                                                                class="form-control city w-100"
                                                                                                                name="city_id"
                                                                                                                required

                                                                                                            >
                                                                                                                <option
                                                                                                                    value="">
                                                                                                                    Select
                                                                                                                    City
                                                                                                                </option>

                                                                                                                @php
                                                                                                                    $cities = (app(\App\Http\Controllers\Api\HelperController::class)->getCities())->getOriginalContent();
                                                                                                                @endphp
                                                                                                                @foreach( $cities ['data']  as $city)
                                                                                                                    <option
                                                                                                                        @if($address->city_id == $city->id) selected
                                                                                                                        @endif
                                                                                                                        value="{{$city->id}}">
                                                                                                                        {{(app()->getLocale() == 'ar') ? $city->name_ar : $city->name_en }}
                                                                                                                    </option>
                                                                                                                @endforeach
                                                                                                            </select>
                                                                                                            <div
                                                                                                                class="input-group-append">

                                                                                                            </div>

                                                                                                        </div>
                                                                                                        @if(isset($errorarray))
                                                                                                            @if(array_key_exists('city_id', $errorarray))
                                                                                                                <span
                                                                                                                    class="d-block text-danger mb-2 font-weight-bold">{{$errorarray['city_id']}}</span>
                                                                                                            @endif
                                                                                                        @endif
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group col-md-12 wrapArea">
                                                                                                        <label
                                                                                                            for="inputPassword4">
                                                                                                            Area </label>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <select
                                                                                                                class="form-control area w-100"
                                                                                                                name="area_id"
                                                                                                                required>
                                                                                                                <option
                                                                                                                    value="{{$address->area->id}}">
                                                                                                                    {{(app()->getLocale() == 'ar') ?$address->area->name_ar:  $address->area->name_en}}
                                                                                                                </option>

                                                                                                            </select>
                                                                                                            <div
                                                                                                                class="input-group-append">
                                                                                                                <button
                                                                                                                    class="btn "
                                                                                                                    type="button"
                                                                                                                >
                                                                                                                </button>
                                                                                                                @if(isset($errorarray))
                                                                                                                    @if(array_key_exists('area_id', $errorarray))
                                                                                                                        <span
                                                                                                                            class="d-block text-danger mb-2 font-weight-bold">{{$errorarray['area_id']}}</span>
                                                                                                                    @endif
                                                                                                                @endif
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group col-md-12">
                                                                                                        <label
                                                                                                            for="inputPassword5">Street
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Delivery Area"
                                                                                                                name="street"
                                                                                                                value="{{$address->street}}">
                                                                                                            <div
                                                                                                                class="input-group-append">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group col-md-12">
                                                                                                        <label
                                                                                                            for="inputPassword5">
                                                                                                            Building No.
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Building No.  "
                                                                                                                name="building_number"
                                                                                                                value="{{$address->building_number}}">
                                                                                                            <div
                                                                                                                class="input-group-append">

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group col-md-12">
                                                                                                        <label
                                                                                                            for="inputPassword5">
                                                                                                            Floor No.
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Floor No."
                                                                                                                name="building_number"
                                                                                                                value="{{$address->floor_number}}">
                                                                                                            <div
                                                                                                                class="input-group-append">

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="form-group col-md-12">
                                                                                                        <label
                                                                                                            for="inputPassword6">
                                                                                                            Landing Mark
                                                                                                        </label>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Landing Mark"
                                                                                                                name="building_number"
                                                                                                                value="{{$address->landmark}}">
                                                                                                            <div
                                                                                                                class="input-group-append">

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                </div>
                                                                                                <div
                                                                                                    class="modal-footer d-flex">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn text-center btn-outline-primary"
                                                                                                        data-dismiss="modal"
                                                                                                        style="width: 48%!important;">
                                                                                                        CANCEL
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="btn text-center btn-outline-primary"
                                                                                                        style="width: 48%!important;">
                                                                                                        SUBMIT
                                                                                                    </button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="modal fade"
                                                                                 id="delete-address-modal{{$address->id}}"
                                                                                 tabindex="-1"
                                                                                 role="dialog"
                                                                                 aria-labelledby="delete-address"
                                                                                 aria-hidden="true">
                                                                                <div
                                                                                    class="modal-dialog modal-sm modal-dialog-centered"
                                                                                    role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="delete-address">
                                                                                                Delete</h5>
                                                                                            <button type="button"
                                                                                                    class="close"
                                                                                                    data-dismiss="modal"
                                                                                                    aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p class="mb-0 text-black">
                                                                                                Are
                                                                                                you sure you want to
                                                                                                delete
                                                                                                this
                                                                                                Address?</p>
                                                                                        </div>
                                                                                        <div class="modal-footer"
                                                                                             style="justify-content:center ">

                                                                                            <button type="button"
                                                                                                    class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                                                                                                    data-dismiss="modal">
                                                                                                CANCEL
                                                                                            </button>
                                                                                            <a href="{{route('delete_address',$address->id)}}">
                                                                                                <button type="button"
                                                                                                        class="btn d-flex w-100 text-center justify-content-center btn-primary">
                                                                                                    DELETE
                                                                                                </button>
                                                                                            </a>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                </div>
                                                <div class="container">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-0">
                                                            <div class="bg-white card addresses-item mb-4 shadow">
                                                                <div class="gold-members p-4">
                                                                    <div class="media">

                                                                        <div class="media-body ">

                                                                            <p class="mb-0 text-black font-weight-bold">
                                                                                <button

                                                                                    data-toggle="modal"
                                                                                    data-target="#add-address-modal "
                                                                                    href="#" type="button"

                                                                                    class="btn btn-primary btn-floating">
                                                                                    <i class="fas fa-plus"></i>
                                                                                </button>

                                                                            </p>
                                                                        </div>

                                                                        <div class="modal fade"
                                                                             id="add-address-modal"
                                                                             tabindex="-1" role="dialog"
                                                                             aria-labelledby="add-address"
                                                                             aria-hidden="true">
                                                                            <div
                                                                                class="modal-dialog modal-dialog-centered"
                                                                                role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="add-address">Add
                                                                                            Delivery Address</h5>
                                                                                        <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form
                                                                                            method="post"
                                                                                            action="{{route('new.address')}}"
                                                                                            enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            <div class="form-row">
                                                                                                <div
                                                                                                    class="form-group col-md-12">
                                                                                                    <label
                                                                                                        for="inputPassword4">Delivery
                                                                                                        Area</label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Address Name"
                                                                                                            name="name"
                                                                                                            value=""
                                                                                                            required>
                                                                                                        <div
                                                                                                            class="input-group-append">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    @if(isset($errorarray))
                                                                                                        @if(array_key_exists('name', $errorarray))
                                                                                                            <span
                                                                                                                class="d-block text-danger mb-2 font-weight-bold">{{$errorarray['name']}}</span>
                                                                                                        @endif
                                                                                                    @endif
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group col-md-12 wrapCity">
                                                                                                    <label
                                                                                                        for="inputPassword4">
                                                                                                        City </label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <select
                                                                                                            class="form-control city w-100"
                                                                                                            name="city_id"
                                                                                                            required

                                                                                                        >
                                                                                                            <option
                                                                                                                value="">
                                                                                                                Select
                                                                                                                City
                                                                                                            </option>

                                                                                                            @php
                                                                                                                $cities = (app(\App\Http\Controllers\Api\HelperController::class)->getCities())->getOriginalContent();
                                                                                                            @endphp
                                                                                                            @foreach( $cities ['data']  as $city)
                                                                                                                <option

                                                                                                                    value="{{$city->id}}">
                                                                                                                    {{(app()->getLocale() == 'ar') ?$city->name_ar:$city->name_en}}
                                                                                                                </option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="input-group-append">

                                                                                                        </div>

                                                                                                    </div>
                                                                                                    @if(isset($errorarray))
                                                                                                        @if(array_key_exists('city_id', $errorarray))
                                                                                                            <span
                                                                                                                class="d-block text-danger mb-2 font-weight-bold">{{$errorarray['city_id']}}</span>
                                                                                                        @endif
                                                                                                    @endif
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group col-md-12 wrapArea">
                                                                                                    <label
                                                                                                        for="inputPassword4">
                                                                                                        Area </label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <select
                                                                                                            class="form-control area w-100"
                                                                                                            name="area_id"
                                                                                                            required>
                                                                                                            <option
                                                                                                                value="">

                                                                                                            </option>

                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="input-group-append">
                                                                                                            <button
                                                                                                                class="btn "
                                                                                                                type="button"
                                                                                                            >
                                                                                                            </button>
                                                                                                            @if(isset($errorarray))
                                                                                                                @if(array_key_exists('area_id', $errorarray))
                                                                                                                    <span
                                                                                                                        class="d-block text-danger mb-2 font-weight-bold">{{$errorarray['area_id']}}</span>
                                                                                                                @endif
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group col-md-12">
                                                                                                    <label
                                                                                                        for="inputPassword5">Street
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Delivery Area"
                                                                                                            name="street"
                                                                                                            value="">
                                                                                                        <div
                                                                                                            class="input-group-append">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group col-md-12">
                                                                                                    <label
                                                                                                        for="inputPassword5">
                                                                                                        Building No.
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Building No.  "
                                                                                                            name="building_number"
                                                                                                            value="">
                                                                                                        <div
                                                                                                            class="input-group-append">

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group col-md-12">
                                                                                                    <label
                                                                                                        for="inputPassword5">
                                                                                                        Floor No.
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Floor No."
                                                                                                            name="building_number"
                                                                                                            value="">
                                                                                                        <div
                                                                                                            class="input-group-append">

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="form-group col-md-12">
                                                                                                    <label
                                                                                                        for="inputPassword6">
                                                                                                        Landing Mark
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Landing Mark"
                                                                                                            name="building_number"
                                                                                                            value="">
                                                                                                        <div
                                                                                                            class="input-group-append">

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>


                                                                                            </div>
                                                                                            <div
                                                                                                class="modal-footer d-flex">
                                                                                                <button type="button"
                                                                                                        class="btn text-center btn-outline-primary"
                                                                                                        data-dismiss="modal"
                                                                                                        style="width: 48%!important;">
                                                                                                    CANCEL
                                                                                                </button>
                                                                                                <button type="submit"
                                                                                                        class="btn text-center btn-outline-primary"
                                                                                                        style="width: 48%!important;">
                                                                                                    SUBMIT
                                                                                                </button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
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

        <script src="{{asset('website2-assets/vendor/select2/js/select2.min.js')}}"
                type="text/javascript"></script>

        <script src="{{asset('website2-assets/js/custom.js')}}"
                type="text/javascript"></script>

        <script>
            window.onload = function () {
                //$(document).on("change", "select.city", function () {
                $('.city').change(function () {
                    let app_url = '{{ url('/') }}';
                    let city_id = $(this).val();
                    let selectele = $(this);
                    $.ajax({
                        type: 'get',
                        url: app_url + "/api/cities/" + city_id + "/areas",
                        data: {},
                        success: function (data) {
                            if (data) {
                                selectele.parent().parent().next().first().find('.area').html('');
                                selectele.parent().parent().next().first().find('.area').append('<option selected value="">Choose Area</option>');
                                $.each(data, function (index, area) {
                                    selectele.parent().parent().next().first().find('.area').append('<option value="' + area.id + '">' + area.name_ar   + '</option>');
                                });
                            }
                        },
                        error: function (jqXhr, textStatus, errorMessage) {

                        }
                    })

                });

            };

        </script>

@endsection
