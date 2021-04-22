@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Media</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.media.create')}}">Add New Media</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card-body">
        <table class="table table-bordered table-striped dataTable">
          <thead>
            <tr>
              <th>#ID</th>
              <th>Title_en</th>
              <th>Title_ar</th>
              <th>Author</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($medias as $media)
            <tr>
                <td><a href="{{ route('admin.media.show', $media->id) }}">{{ $media->id }}</a></td>
              <td>{{$media->title_en}}</td>
              <td>{{$media->title_ar}}</td>
              <td>{{$media->author}}</td>
              <td>
                  <a href="{{ route('admin.media.edit', $media->id) }}" class="btn btn-primary btn-circle btn-sm" title="edit"><i class="fa fa-edit"></i></a>
                  <a onclick="deleteOffer('{{ 'delete-offer-' . $media->id }}')"
                     href="#" class="btn btn-danger btn-circle btn-sm"
                     title="delete">
                      <i class="fas fa-trash"></i>
                  </a>
                  <!-- Form Delete offer -->
                  <form
                      action="{{ route('admin.media.destroy', $media->id) }}"
                      method="POST"
                      id="{{ 'delete-offer-' . $media->id }}">
                      @csrf
                      @method('DELETE')
                  </form>
                  <!-- End Delete offer -->
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@endsection
@push('js')
<script type="text/javascript">
  function deleteOffer(id) {
    event.preventDefault();
    swal({
        title: 'Are you sure to delete this media ?',
        text: 'Once the media has been deleted you cannot retrieve its data',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $('#' + id).submit();
            swal('media successfully deleted', {
                icon: 'success',
            });
        } else {
            swal('media undeleted');
        }
    });
  }
</script>
@endpush
