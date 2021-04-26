@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.news.index')}}">Back</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">News Details</h3>
                    </div>
                    <form action="{{ route('admin.news.update' , $blog->id) }}" method="POST"
                          enctype="multipart/form-data" id="add-category">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputArabicName">Arabic Title</label>
                                        <input type="text" class="form-control" id="exampleInputArabicName"
                                               placeholder="Enter Arabic Name" name="title_ar" value="{{$blog->title_ar}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEnglishName">English Title</label>
                                        <input type="text" class="form-control" id="exampleInputEnglishName"
                                               placeholder="Enter English Name" name="title_en" value="{{$blog->title_en}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputArabicDescription"> Author </label>
                                        <textarea class="form-control" id="exampleInputArabicDescription"
                                                  placeholder="Enter Author"
                                                  name="author">{{$blog->author}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputArabicDescription">Arabic Description</label>
                                        <textarea class="form-control" id="exampleInputArabicDescription"
                                                  placeholder="Enter Arabic Description"
                                                  name="description_ar">{{$blog->description_ar}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEnglishDescription">English Description</label>
                                        <textarea class="form-control" id="exampleInputEnglishDescription"
                                                  placeholder="Enter English Description"
                                                  name="description_en">{{$blog->description_en}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="col-md-6">
                                            <img id="image" src="{{asset($blog->image)}}" class="img-thumbnail w-100 p-3" style="height: 250px;">
                                        </div>                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input id="fileimage" type="file" class="custom-file-input {!! $errors->first('image', 'is-invalid') !!}" name="image" >
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
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
        $(document).ready(function() {
            $('#fileimage').change(function(){
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0]&& (ext == "mp4" || ext == "ogx" || ext == "oga" || ext == "ogv" || ext == "ogg" || ext == "webm" || ext == "wmv" || ext == "flv"))
                {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#image').attr('src',e.target.result);
                        $('source').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
                else
                {
                    $('#fileimage').html('You can upload images only')
                }
            });
        });
    </script>
@endpush
