@extends('layouts.website.app')

@section('title') Profile @endsection

@section('styles')@endsection

@section('pageName') <body class="page-article dm-light"> @endsection

@section('content')
    <main class="page-main">
        <div class="page-content">

            <div class="uk-container">

                <div class="osahan-profile">

                    <div class=" position-relative">
                        <div class="pt-5 osahan-profile row">
                            <div class="col-md-4 mb-3">
                                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden" style="box-shadow: 0 .125rem .25rem rgba(0,0,0,.25)!important;">
                                    <a href="profile.html" class="">
                                        <div class="d-flex align-items-center p-3">
                                            <div class="left mr-3">
                                                <img alt="#" src="{{asset('website2-assets/img/user1.jpg')}}" class="rounded-circle">
                                            </div>
                                            <div class="right">
                                                <h6 class="mb-1 font-weight-bold">Gurdeep Singh <i
                                                        class="feather-check-circle text-success"></i></h6>
                                                <p class="text-muted m-0 small"><span class="__cf_email__"
                                                                                      data-cfemail="ea838b8785998b828b84aa8d878b8386c4898587">[email&#160;protected]</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                                        <p class="m-0">Account Points</p>
                                        <h5 class="m-0 ml-auto text-primary">100</h5>
                                    </div>

                                    <div class="bg-white profile-details">

                                        <a class="d-flex w-100 align-items-center border-bottom p-3">
                                            <div class="left mr-3">
                                                <h6 class="font-weight-bold mb-1 text-dark">My Orders</h6>
                                                <p class="small text-muted m-0">show an order or reorder</p>
                                            </div>
                                        </a>
                                        <a class="d-flex w-100 align-items-center border-bottom p-3">
                                            <div class="left mr-3">
                                                <h6 class="font-weight-bold mb-1 text-dark">My Addresses</h6>
                                                <p class="small text-muted m-0">Add or remove a delivery address</p>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <div class="rounded shadow-sm p-4 bg-white" style="background-color: #e6e6e68c!important;box-shadow: 0 .125rem 0.25rem rgba(0,0,0,.25)!important;">
                                    <h5 class="mb-4">My account</h5>
                                    <div id="edit_profile">
                                        <div>
                                            <form action="my_account.html">
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Name <span class="text-info">Hint:Name should be "first last"</span></label>
                                                    <input type="text" class="form-control" id="exampleInputName1d" placeholder="Gurdeep Gurdeep">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputNumber1">Mobile Number</label>
                                                    <input type="number" class="form-control" id="exampleInputNumber1"
                                                           value="1234567890">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                           value="iamosahan@gmail.com">
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="uk-button btn-block">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="additional">
                                            <div class="change_password my-3">
                                                <a href="forgot_password.html"
                                                   class="p-3 border rounded bg-white btn d-flex align-items-center">Change Password
                                                    <i class="feather-arrow-right ml-auto"></i></a>
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

    <div class="modal fade" id="paycard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Credit/Debit Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="m-0">Add new card</h6>
                    <p class="small">WE ACCEPT <span class="osahan-card ml-2 font-weight-bold">( Master Card / Visa Card / Rupay )</span>
                    </p>
                    <form>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label class="form-label font-weight-bold small">Card number</label>
                                <div class="input-group">
                                    <input placeholder="Card number" type="number" class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary"><i
                                                class="feather-credit-card"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 form-group"><label class="form-label font-weight-bold small">Valid
                                    through(MM/YY)</label><input placeholder="Enter Valid through(MM/YY)" type="number"
                                                                 class="form-control"></div>
                            <div class="col-md-4 form-group"><label
                                    class="form-label font-weight-bold small">CVV</label><input
                                    placeholder="Enter CVV Number" type="number" class="form-control"></div>
                            <div class="col-md-12 form-group"><label class="form-label font-weight-bold small">Name on
                                    card</label><input placeholder="Enter Card number" type="text" class="form-control"></div>
                            <div class="col-md-12 form-group mb-0">
                                <div class="custom-control custom-checkbox"><input type="checkbox" id="custom-checkbox1"
                                                                                   class="custom-control-input"><label
                                        title="" type="checkbox" for="custom-checkbox1"
                                        class="custom-control-label small pt-1">Securely save this card for a faster
                                        checkout next time.</label></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Delivery Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label class="form-label">Delivery Area</label>
                                <div class="input-group">
                                    <input placeholder="Delivery Area" type="text" class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary"><i
                                                class="feather-map-pin"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group"><label class="form-label">Complete Address</label><input
                                    placeholder="Complete Address e.g. house number, street name, landmark" type="text"
                                    class="form-control"></div>
                            <div class="col-md-12 form-group"><label class="form-label">Delivery Instructions</label><input
                                    placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall" type="text"
                                    class="form-control"></div>
                            <div class="mb-0 col-md-12 form-group">
                                <label class="form-label">Nickname</label>
                                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio" name="options" id="option1" checked> Home
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="options" id="option2"> Work
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="options" id="option3"> Other
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="inviteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title font-weight-bold text-dark">Invite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <button class="btn btn-light text-primary btn-sm"><i class="feather-plus"></i></button>
                    <span class="ml-2 smal text-primary">Send an invite to a friend</span>
                    <p class="mt-3 small">Invited friends (2)</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="mr-3"><img alt="#" src="{{asset('website2-assets/img/user1.jpg')}}" class="img-fluid rounded-circle"></div>
                        <div>
                            <p class="small font-weight-bold text-dark mb-0">Kate Simpson</p>
                            <P class="mb-0 small"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                     data-cfemail="1d767c69786e74706d6e72735d7268697f727276337e7270">[email&#160;protected]</a>
                            </P>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="mr-3"><img alt="#" src="{{asset('website2-assets/img/user2.png')}}" class="img-fluid rounded-circle"></div>
                        <div>
                            <p class="small font-weight-bold text-dark mb-0">Andrew Smith</p>
                            <P class="mb-0 small"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                     data-cfemail="73121d17011604001e1a071b33061a4b5d101c1e">[email&#160;protected]</a>
                            </P>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')@endsection
