@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit AboutUS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.aboutUS.index')}}">Back</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">AboutUS Details</h3>
                </div>
                <form action="{{ route('admin.aboutUS.update' , $about->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_en">Title English</label>
                                    <input type="text"
                                           class="form-control"
                                           id="title_en" placeholder="Enter Title" value="{{$about->title_en}}" name="title_en" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_ar">Title Arabic</label>
                                    <input type="text"
                                           class="form-control "
                                           id="title_ar" placeholder="Enter Title" value="{{$about->title_ar}}" name="title_ar" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description_en">Description English</label>
                                    <textarea rows="5" class="form-control p-1" id="description_en" placeholder="Enter Description" name="description_en" required>
                                        {{$about->description_en}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description_ar">Description Arabic</label>
                                    <textarea rows="5" class="form-control p-0 rtl text-right" id="description_ar" placeholder="Enter Description" name="description_ar" required>
                                        {{$about->description_ar}}
                                    </textarea>
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
