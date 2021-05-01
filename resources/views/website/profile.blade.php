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
                                                    <p class="text-muted m-0 small"><span class="__cf_email__">{{auth()->user()->email}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                                            <p class="m-0">Account Points</p>
                                            <h5 class="m-0 ml-auto text-primary">100</h5>
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
                                         style="background-color: #e6e6e68c!important;box-shadow: 0 .125rem 0.25rem rgba(0,0,0,.25)!important;">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="account" role="tabpanel"
                                                 aria-labelledby="account-tab">
                                                <h4 class="font-weight-bold mt-0 mb-4">Manage account</h4>
                                                <div id="edit_profile">
                                                    <div>
                                                        <form action="my_account.html">
                                                            <div class="form-group">
                                                                <label for="exampleInputName1">Name <span
                                                                        class="text-info">Hint:Name should be "first last"</span></label>
                                                                <input type="text" class="form-control"
                                                                       id="exampleInputName1d"
                                                                       placeholder="Gurdeep Gurdeep">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputNumber1">Mobile Number</label>
                                                                <input type="number" class="form-control"
                                                                       id="exampleInputNumber1"
                                                                       value="1234567890">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email</label>
                                                                <input type="email" class="form-control"
                                                                       id="exampleInputEmail1"
                                                                       value="iamosahan@gmail.com">
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit" class="uk-button btn-block">Save
                                                                    Changes
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="additional">
                                                        <div class="change_password my-3">
                                                            <a href="forgot_password.html"
                                                               class="p-3 border rounded bg-white btn d-flex align-items-center">Change
                                                                Password
                                                                <i class="feather-arrow-right ml-auto"></i></a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="addresses" role="tabpanel"
                                                 aria-labelledby="addresses-tab">
                                                <h4 class="font-weight-bold mt-0 mb-4">Manage Addresses</h4>
                                                <div class="row">
                                                    @foreach($addresses as $address)

                                                        <div class="col-md-6">
                                                            <div class="bg-white card addresses-item mb-4 shadow">
                                                                <div class="gold-members p-4">
                                                                    <div class="media">
                                                                        <div class="mr-3"><i class="icofont-ui-home icofont-3x"></i></div>
                                                                        <div class="media-body">
                                                                            <h6 class="mb-1 text-secondary">{{$address ->
                                                                            name}}</h6>
                                                                            <p class="text-black"> {{$address->city->name_ar}}
                                                                                ,{{$address->area->name_ar}}
                                                                                , {{$address-> street}}
                                                                                , {{$address-> building_number}}
                                                                                ,{{ $address-> floor_number}}
                                                                                ,{{$address-> landmark}}
                                                                            </p>
                                                                            <p class="mb-0 text-black font-weight-bold">
                                                                                <a
                                                                                    class="text-primary mr-3"
                                                                                    data-toggle="modal"
                                                                                    data-target="#add-address-modal{{$address->id}}"
                                                                                    href="#"><i
                                                                                        class="icofont-ui-edit"></i>
                                                                                    EDIT</a> <a class="text-danger"
                                                                                                data-toggle="modal"
                                                                                                data-target="#delete-address-modal{{$address->id}}"
                                                                                                href="{{route('delete_address',$address->id)}}"><i
                                                                                        class="icofont-ui-delete"></i>
                                                                                    DELETE</a></p>
                                                                        </div>

                                                                        <div class="modal fade" id="add-address-modal{{$address->id}}"
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
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form>
                                                                                            <div class="form-row">
                                                                                                <div
                                                                                                    class="form-group col-md-12">
                                                                                                    <label
                                                                                                        for="inputPassword4">Address
                                                                                                        Name</label>
                                                                                                    <div
                                                                                                        class="input-group">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Delivery Area"
                                                                                                            name="name"
                                                                                                            value="{{$address->name}}">
                                                                                                        <div
                                                                                                            class="input-group-append">
                                                                                                            <button
                                                                                                                class="btn btn-outline-secondary"
                                                                                                                type="button"
                                                                                                            >
                                                                                                                <i
                                                                                                                    class="icofont-ui-pointer"></i>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
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
                                                                                                            name="Address['+rmoveID+'][city_id]"
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
                                                                                                                <option @if($address->city_id == $city->id) selected @endif
                                                                                                                    value="{{$city->id}}">
                                                                                                                    {{$city->name_ar}}
                                                                                                                </option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="input-group-append">
                                                                                                            <button
                                                                                                                class="btn "
                                                                                                                type="button"
                                                                                                            >
                                                                                                            </button>
                                                                                                        </div>

                                                                                                    </div>
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
                                                                                                            name="Address[' + rmoveID + '][area_id]"
                                                                                                            required>
                                                                                                            <option
                                                                                                                value="">
                                                                                                                Select
                                                                                                                Area
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        <div
                                                                                                            class="input-group-append">
                                                                                                            <button
                                                                                                                class="btn "
                                                                                                                type="button"
                                                                                                            >
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>


                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer d-flex">
                                                                                        <button type="button"
                                                                                                class="btn text-center btn-outline-primary"
                                                                                                data-dismiss="modal" style="width: 48%!important;">
                                                                                            CANCEL
                                                                                        </button>
                                                                                        <button type="button"
                                                                                                class="btn text-center btn-outline-primary" style="width: 48%!important;">
                                                                                            SUBMIT
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="modal fade"
                                                                             id="delete-address-modal{{$address->id}}" tabindex="-1"
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
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <p class="mb-0 text-black">Are
                                                                                            you sure you want to delete
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
            window.onload = function() {

                    //$(document).on("change", "select.city", function () {
                    $('.city').change(function(){
                        let app_url = '{{ url('/') }}';
                        let city_id = $(this).val();
                        let selectele = $(this);
                        $.ajax({
                            type:'get',
                            url: app_url + "/api/cities/" + city_id + "/areas",
                            data:{},
                            success:function (data){
                                if (data) {
                                    selectele.parent().parent().next().first().find('.area').html('');
                                    selectele.parent().parent().next().first().find('.area').append('<option selected value="">Choose Area</option>');
                                    $.each(data, function (index, area) {
                                        selectele.parent().parent().next().first().find('.area').append('<option value="' + area.id + '">' + area.name_ar + '</option>');
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
