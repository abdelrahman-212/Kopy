@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Media</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.media.index')}}">Back</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Media Details</h3>
                </div>
                <form action="{{ route('admin.media.update' , $media->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <iframe id="video" class="w-100" height="330"
                                        src="{{asset($media->url)}}">
                                </iframe>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <input type="hidden" name="id" value="{{$media->id}}">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title_en">Title English</label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="title_en" placeholder="Enter Title" value="{{$media->title_en}}" name="title_en" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title_ar">Title Arabic</label>
                                            <input type="text"
                                                   class="form-control "
                                                   id="title_ar" placeholder="Enter Title" value="{{$media->title_ar}}" name="title_ar" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="author">Author</label>
                                            <input type="text"
                                                   class="form-control"
                                                   id="author" placeholder="Enter Author Name" value="{{$media->author}}" name="author" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Video</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input id="fileimage" type="file" class="custom-file-input {!! $errors->first('url', 'is-invalid') !!}" name="url">
                                                    <label class="custom-file-label">Choose Video</label>
                                                </div>
                                            </div>
                                            {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
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
        $(document).ready(function() {
            $('#fileimage').change(function(){
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0]&& (ext == "mp4" || ext == "ogx" || ext == "oga" || ext == "ogv" || ext == "ogg" || ext == "webm" || ext == "wmv" || ext == "flv"))
                {
                    var $source = $('#video');
                    $source[0].src = URL.createObjectURL(input.files[0]);
                    $source.parent()[0].load();
                    URL.revokeObjectURL($source[0].src);
                }
                else
                {
                    $('#fileimage').html('You can upload video only')
                }
            });
        });
    </script>
@endpush
