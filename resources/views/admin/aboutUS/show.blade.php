@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>AboutUS: {{ $about->title_en }}</h1>
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

          <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="title_en">Title English</label>
                          <input type="text"
                                 class="form-control"
                                 id="title_en" disabled placeholder="Enter Title" value="{{$about->title_en}}">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="title_ar">Title Arabic</label>
                          <input type="text"
                                 class="form-control "
                                 id="title_ar" placeholder="Enter Title" value="{{$about->title_ar}}">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="description_en">Description English</label>
                          <textarea rows="5" class="form-control p-1" id="description_en" placeholder="Enter Description">
                              {{$about->description_en}}
                          </textarea>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="description_ar">Description Arabic</label>
                          <textarea rows="5" class="form-control p-0 rtl text-right" id="description_ar" placeholder="Enter Description">
                              {{$about->description_ar}}
                          </textarea>
                      </div>
                  </div>
              </div>
          </div>

      </div>
    </div>
  </section>
</div>
@endsection
