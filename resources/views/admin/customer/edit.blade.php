@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Customer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.customer.index')}}">Back</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Personal information</h3>
                    </div>
                    <form action="{{ route('admin.customer.update' , $customer->id) }}" method="POST"
                          enctype="multipart/form-data" id="add-customer">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFirstName">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputFirstName"
                                               placeholder="Enter First Name" name="first_name"
                                               value="{{$customer->first_name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputMiddleName">Middle Name</label>
                                        <input type="text" class="form-control" id="exampleInputMiddleName"
                                               placeholder="Enter Middle Name" name="middle_name"
                                               value="{{$customer->middle_name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputLastName">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputLastName"
                                               placeholder="Enter Last Name" name="last_name"
                                               value="{{$customer->last_name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail"
                                               placeholder="Enter email" name="email" value="{{$customer->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_phone">Primary Phone</label>
                                        <input type="text" class="form-control" id="first_phone"
                                               placeholder="Enter First Phone" name="first_phone"
                                               value="{{$customer->first_phone}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="socond_phone">Secondary Phone</label>
                                        <input type="text" class="form-control" id="socond_phone"
                                               placeholder="Enter Second Phone" name="second_phone"
                                               value="{{$customer->second_phone}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        @if ($customer->image)
                                            <img src="{{ $customer->image }}" class="img-thumbnail "
                                                 style="width: 120px"/>
                                        @endif
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                                   name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Address Details</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="accordion">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h4 class="card-title"><a data-toggle="collapse"
                                                                                  data-parent="#accordion"
                                                                                  href="#collapseOne"
                                                                                  class="collapsed"
                                                                                  aria-expanded="false">Add Address
                                                                Details</a></h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse in collapse" style="">
                                                        <div class="newAddress"></div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a style="float: right;" href="javascript:void(0);"
                                                                   class="btn btn-primary block" id="add_new_address"><i
                                                                        class="fas fa-plus mr-2"></i>Add Address</a>
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
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script>
        var i = 1;
        var rmoveID = 0;
        $(document).ready(function () {
            init();
            $('#add-customer').validate({
                rules: {
                    first_name: "required",
                    last_name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 4
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 4,
                        equalTo: "#password"
                    }
                }
            });
            $("#add_new_address").click(function (event) {
                var append = '<div class="container" id="block_' + rmoveID + '">';
                append += '<h3 class="card-title">Address #' + i + '</h3>';
                append += '<div class="card-body">';
                append += '<div class="row container-fluid">';

                append += '<div class="col-md-4">';
                append += '<div class="form-group">';
                append += '<label>Name' + i + '</label>';
                append += '<input type="text" class="form-control" placeholder="Enter Street" name="Address[' + rmoveID + '][name]">';
                append += '</div>';
                append += '</div>';

                append += '<div class="col-md-4">';
                append += '<div class="form-group">';
                append += '<label>City' + i + '</label>';
                append += '<select id="city' + i + '" onclick="selectCity(' + i + ')" class="form-control" name="Address[' + rmoveID + '][city_id]" required>';
                append += '<option value="">Select City</option>';
                @foreach($cities as $city)
                    append += '<option value="{{$city->id}}">{{$city->name_ar}}</option>';
                @endforeach
                    append += '</select>';
                append += '</div>';
                append += '</div>';
                append += '<div class="col-md-4">';
                append += '<div class="form-group">';
                append += '<label>Area' + i + '</label>';
                append += '<select id="area' + i + '" class="form-control" name="Address[' + rmoveID + '][area_id]" required>';
                append += '</select>';
                append += '</div>';
                append += '</div>';
                append += '</div>';
                append += '<div class="row">';
                append += '<div class="col-md-6">';
                append += '<div class="form-group">';
                append += '<label>Street' + i + '</label>';
                append += '<input type="text" class="form-control" placeholder="Enter Street" name="Address[' + rmoveID + '][street]">';
                append += '</div>';
                append += '</div>';
                append += '<div class="col-md-6">';
                append += '<div class="form-group">';
                append += '<label>Building Number' + i + '</label>';
                append += '<input type="text" class="form-control" placeholder="Enter Building Number" name="Address[' + rmoveID + '][building_number]">';
                append += '</div>';
                append += '</div>';
                append += '</div>';

                append += '<div class="row">';
                append += '<div class="col-md-6">';
                append += '<div class="form-group">';
                append += '<label>Floor Number' + i + '</label>';
                append += '<input type="text" class="form-control" placeholder="Enter Floor Number" name="Address[' + rmoveID + '][floor_number]">';
                append += '</div>';
                append += '</div>';
                append += '<div class="col-md-6">';
                append += '<div class="form-group">';
                append += '<label>Landmark' + i + '</label>';
                append += '<input type="text" class="form-control" placeholder="Enter Special Marque" name="Address[' + rmoveID + '][landmark]">';
                append += '</div>';
                append += '</div>';
                append += '</div>';

                append += '<div class="row" id="removeBtn_' + rmoveID + '">';
                append += '<div class="col-md-6">';
                append += '<a style="float: right;" href="javascript:void(0);" class="btn btn-danger block" onclick="removeBlock(' + rmoveID + ')"><i class="fas fa-trash-alt mr-2"></i>Delete Address</a>';
                append += '</div>';
                append += '</div>';
                append += '<hr style="border-top: 1px solid #343a40;">';

                rmoveID++;
                $(".newAddress").last().append(append);
                i++;
            });
        });

        function selectCity(id) {
            let app_url = '{{ url('/') }}';

            var city_id = $("#city" + id).val();

            var endpoint = app_url + "/api/cities/" + city_id + "/areas";

            var section = $('#area' + id);

            if (city_id) {
                $.ajax({
                    url: app_url + "/api/cities/" + city_id + "/areas",
                    type: 'get',
                    success: function (data) {
                        console.log(data);
                        if (data) {
                            $("#area" + id).empty();
                            console.log("#area" + id);
                            $("#area" + id).append('<option selected value="">Choose Area</option>');
                            $.each(data, function (index, area) {
                                $("#area" + id).append('<option value="' + area.id + '">' + area.name_ar + '</option>');
                            });
                        }
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        alert(errorMessage);
                    }
                });
            } else {
                $("#area" + id).empty();
                $("#area" + id).append('<option value="">Choose Area</option>');
            }
        }

        function removeBlock(id) {
            $("#block_" + id).remove();
            i--;
        }

        function removeBtn(id) {
            id = id - 2;
            $("#removeBtn_" + id).remove();
        }

        function init() {
            @foreach($addresses as $address)
            var append = '<div class="container" id="block_' + rmoveID + '">';
            append += '<h3 class="card-title">Address #' + i + '</h3>';
            append += '<div class="card-body">';
            append += '<div class="row container-fluid">';

            append += '<div class="col-md-4">';
            append += '<div class="form-group">';
            append += '<label>Name' + i + '</label>';
            append += '<input type="text" class="form-control" placeholder="Enter Street" name="Address[' + rmoveID + '][name]" value="{{$address->name}}">';
            append += '</div>';
            append += '</div>';

            append += '<div class="col-md-4">';
            append += '<div class="form-group">';
            append += '<label>City' + i + '</label>';
            append += '<select id="city' + i + '" onclick="selectCity(' + i + ')" class="form-control" name="Address[' + rmoveID + '][city_id]" required>';
            append += '<option value="">Select City</option>';
            @foreach($cities as $city)
                append += '<option @if($address->city->id == $city->id) selected @endif  value="{{$city->id}}">{{$city->name_ar}}</option>';
            @endforeach
                append += '</select>';
            append += '</div>';
            append += '</div>';
            append += '<div class="col-md-4">';
            append += '<div class="form-group">';
            append += '<label>Area' + i + '</label>';
            append += '<select id="area' + i + '" class="form-control" name="Address[' + rmoveID + '][area_id]" required>';
            append += '<option value="">Select Area</option>';
            @foreach($areas as $area)
                append += '<option @if($address->area->id == $area->id) selected @endif value="{{$area->id}}" >{{$area->name_ar}}</option>';
            @endforeach
                append += '</select>';
            append += '</div>';
            append += '</div>';
            append += '</div>';
            append += '<div class="row">';
            append += '<div class="col-md-6">';
            append += '<div class="form-group">';
            append += '<label>Street' + i + '</label>';
            append += '<input type="text" class="form-control" placeholder="Enter Street" name="Address[' + rmoveID + '][street]" value="{{$address->street}}">';
            append += '</div>';
            append += '</div>';
            append += '<div class="col-md-6">';
            append += '<div class="form-group">';
            append += '<label>Building Number' + i + '</label>';
            append += '<input type="text" class="form-control" placeholder="Enter Building Number" name="Address[' + rmoveID + '][building_number]" value="{{$address->building_number}}">';
            append += '</div>';
            append += '</div>';
            append += '</div>';

            append += '<div class="row">';
            append += '<div class="col-md-6">';
            append += '<div class="form-group">';
            append += '<label>Floor Number' + i + '</label>';
            append += '<input type="text" class="form-control" placeholder="Enter Floor Number" name="Address[' + rmoveID + '][floor_number]" value="{{$address->floor_number}}">';
            append += '</div>';
            append += '</div>';
            append += '<div class="col-md-6">';
            append += '<div class="form-group">';
            append += '<label>Landmark' + i + '</label>';
            append += '<input type="text" class="form-control" placeholder="Enter Special Marque" name="Address[' + rmoveID + '][landmark]" value="{{$address->landmark}}">';
            append += '</div>';
            append += '</div>';
            append += '</div>';

            append += '<div class="row" id="removeBtn_' + rmoveID + '">';
            append += '<div class="col-md-6">';
            append += '<a style="float: right;" href="javascript:void(0);" class="btn btn-danger block" onclick="removeBlock(' + rmoveID + ')"><i class="fas fa-trash-alt mr-2"></i>Delete Address</a>';
            append += '</div>';
            append += '</div>';
            append += '<hr style="border-top: 1px solid #343a40;">';

            rmoveID++;

            $(".newAddress").last().append(append);

            i++;

            @endforeach
        }


        $('.custom-file-input').on('change', function () {
            // get the file name
            var fileName = $(this).val();
            // replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })

        $('input').change(function (e) {
            // Warning
            $(window).on('beforeunload', function () {
                return "Are you sure you want to navigate away from this page?";
            });

            // Form Submit
            $(document).on("submit", "form", function (event) {
                // disable unload warning
                $(window).off('beforeunload');
            });

        });

    </script>
@endpush
