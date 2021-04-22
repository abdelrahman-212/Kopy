@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.gallery.index')}}">Back</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Gallery Details</h3>
                </div>
                <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_en">Title English</label>
                                    <input type="text"
                                        class="form-control"
                                        id="title_en" placeholder="Enter Title" name="title_en" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_ar">Title Arabic</label>
                                    <input type="text"
                                           class="form-control "
                                           id="title_ar" placeholder="Enter Title" name="title_ar" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input {!! $errors->first('url', 'is-invalid') !!}" name="url" required>
                                            <label class="custom-file-label">Choose image</label>
                                        </div>
                                    </div>
                                    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
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
