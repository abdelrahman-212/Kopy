@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Offer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.offer.index')}}">Back</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Offer Details</h3>
                </div>
                <form action="{{ route('admin.offer.store') }}" method="POST" enctype="multipart/form-data"
                    id="add-offer"
                      novalidate>
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title English</label>
                                    <input type="text"
                                        class="form-control {!! $errors->first('title', 'is-invalid') !!}"
                                        id="exampleInputTitle" placeholder="Enter Title" name="title">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputService">Service</label>
                                    <select class="form-control {!! $errors->first('service_type', 'is-invalid') !!}"
                                        id="exampleInputService" name="service_type">
                                        <option value="">Select Service</option>
                                        <option value="delivery">Delivery</option>
                                        <option value="takeaway">Takeaway</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputTitle1">Title Arabic</label>
                                    <input type="text"
                                        class="form-control {!! $errors->first('title_ar', 'is-invalid') !!}"
                                        id="exampleInputTitle1" placeholder="Enter Title" name="title_ar">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date From</label>
                                    <input type="datetime-local"
                                        class="form-control {!! $errors->first('date_from', 'is-invalid') !!}"
                                        name="date_from">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date To</label>
                                    <input type="datetime-local"
                                        class="form-control {!! $errors->first('date_to', 'is-invalid') !!}"
                                        name="date_to">
                                </div>
                            </div>



                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="offerDescription">Description English</label>
                                    <textarea class="form-control {!! $errors->first('description', 'is-invalid') !!}"
                                        name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="offerDescription1">Description Arabic</label>
                                    <textarea
                                        class="form-control {!! $errors->first('description_ar', 'is-invalid') !!}"
                                        name="description_ar"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input {!! $errors->first('image', 'is-invalid') !!}"
                                            id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="exampleInputOfferType">Offer Type</label>
                                    <select class="form-control {!! $errors->first('offer_type', 'is-invalid') !!}"
                                        id="exampleInputOfferType" onchange="selectOfferType(this)" name="offer_type">
                                        <option value="">Select Offer Type</option>
                                        <option value="buy-get">Buy / Get</option>
                                        <option value="discount">Discount</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="card card-primary" id="buy-get" style="display: none">
                            <div class="card-header">
                                <h3 class="card-title">Buy</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputQuauntity">Quauntity</label>
                                            <input type="number"
                                                class="form-control {!! $errors->first('buy_quantity', 'is-invalid') !!}"
                                                id="exampleInputQuauntity" placeholder="Enter Quauntity"
                                                name="buy_quantity">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputCategory">Category</label>
                                            <select
                                                class="form-control category-select {!! $errors->first('buy_items', 'is-invalid') !!}"
                                                id="exampleInputCategory3" name="buy_category_id"
                                                data-target='buy_items'>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name_ar }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Items</label>
                                            <select id="items3"
                                                class="select2 item-select {!! $errors->first('buy_items', 'is-invalid') !!}" required
                                                multiple="multiple" data-placeholder="Select a Item"
                                                style="width: 100%;" name="buy_items[]">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h3 class="card-title">Get</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputQuauntity">Quauntity</label>
                                        <input type="number"
                                            class="form-control {!! $errors->first('get_quantity', 'is-invalid') !!}"
                                            id="exampleInputQuauntity" placeholder="Enter Quauntity"
                                            name="get_quantity">
                                    </div>
                                    {{-- todo --}}

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputCategory2">Category</label>
                                        <select
                                            class="form-control category-select {!! $errors->first('get_category_id', 'is-invalid') !!}"
                                            id="exampleInputCategory2" name="get_category_id" data-target='get_items'>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name_ar }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Items</label>
                                        <select id="items2"
                                            class="select2 item-select {!! $errors->first('get_items', 'is-invalid') !!}" required
                                            multiple="multiple" data-placeholder="Select a Item" style="width: 100%;"
                                            name="get_items[]">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleInputOfferPrice">Offer Price</label>
                                        <select class="form-control {!! $errors->first('offer_price', 'is-invalid') !!}" required
                                            id="exampleInputOfferPrice" name="offer_price">
                                            <option value="100">Free</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary" id="discount" style="display: none">
                            <div class="card-header">
                                <h3 class="card-title">Discount</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputQuauntity">Quauntity</label>
                                            <input type="number"
                                                class="form-control {!! $errors->first('discount_quantity', 'is-invalid') !!}"
                                                id="exampleInputQuauntity" placeholder="Enter Quauntity"
                                                name="discount_quantity">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputCategory">Category</label>
                                            <select
                                                class="form-control category-select {!! $errors->first('category_id', 'is-invalid') !!}"
                                                id="exampleInputCategory1" name="category_id" data-target='items'>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name_ar }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Items</label>
                                            <select id="items1"
                                                class="select2 item_select {!! $errors->first('items', 'is-invalid') !!}"
                                                multiple="multiple" data-placeholder="Select a Item"
                                                style="width: 100%;" name="items[]">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputDiscountType">Discount Type</label>
                                            <select
                                                class="form-control {!! $errors->first('discount_type', 'is-invalid') !!}"
                                                id="exampleInputDiscountType" name="discount_type">
                                                <option>Select Discount Type</option>
                                                <option value="1">percentage</option>
                                                <option value="2">Amount</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputValue">Value</label>
                                            <input type="number"
                                                class="form-control {!! $errors->first('discount_value', 'is-invalid') !!}"
                                                name="discount_value">
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
    $("#exampleInputCategory1").click(function(e){
    e.preventDefault();

    var category_id = $("#exampleInputCategory1").val();
    if(category_id)
    {
      $.ajax({
        url : "{{url('/categories/ ')}}"+category_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {
            $("#items1").empty();
            $("#items1").append('<option value="">Choose Item</option>');
            $.each(data.data, function(index, item){
              $("#items1").append('<option value="'+item.id+'">'+item.name_ar+'</option>');
            });
          }
        },
        error: function (jqXhr, textStatus, errorMessage){
          alert(errorMessage);
        }
      });
    }
    else
    {
      $("#items1").empty();
      $("#items1").append('<option value="">Choose Item</option>');
    }
  });
</script>

<script>
    $("#exampleInputCategory2").click(function(e){
    e.preventDefault();

    var category_id = $("#exampleInputCategory2").val();
    if(category_id)
    {
      $.ajax({
        url : "{{url('/categories/ ')}}"+category_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {
            $("#items2").empty();
            $("#items2").append('<option value="">Choose Item</option>');
            $.each(data.data, function(index, item){
              $("#items2").append('<option value="'+item.id+'">'+item.name_ar+'</option>');
            });
          }
        },
        error: function (jqXhr, textStatus, errorMessage){
          alert(errorMessage);
        }
      });
    }
    else
    {
      $("#items2").empty();
      $("#items2").append('<option value="">Choose Item</option>');
    }
  });
</script>

<script>
    $("#exampleInputCategory3").click(function(e){
    e.preventDefault();

    var category_id = $("#exampleInputCategory3").val();
    if(category_id)
    {
      $.ajax({
        url : "{{url('/categories/ ')}}"+category_id,
        type : 'get',
        success : function(data){
          if(data.status == 1)
          {
            $("#items3").empty();
            $("#items3").append('<option value="">Choose Item</option>');
            $.each(data.data, function(index, item){
              $("#items3").append('<option value="'+item.id+'">'+item.name_ar+'</option>');
            });
          }
        },
        error: function (jqXhr, textStatus, errorMessage){
          alert(errorMessage);
        }
      });
    }
    else
    {
      $("#items3").empty();
      $("#items3").append('<option value="">Choose Item</option>');
    }
  });
</script>

<script>
    function selectOfferType(select) {
        if (select.value=='buy-get') {
            document.getElementById('buy-get').style.display = "block";
            document.getElementById('discount').style.display = "none";
        } else if (select.value=='discount') {
            document.getElementById('buy-get').style.display = "none";
            document.getElementById('discount').style.display = "block";
        } else {
            document.getElementById('buy-get').style.display = "none";
            document.getElementById('discount').style.display = "none";
        }
    }

    $('.custom-file-input').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
@endpush
