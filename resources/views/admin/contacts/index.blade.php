@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contacts </h1>
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
                                <th>Subject</th>
                                <th>Body</th>
                                <th>Customer Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->body }}</td>
                                <td>{{ $contact->customer->name }}</td>
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

        function deleteCategory(id) {
            event.preventDefault();
            swal({
                title: 'Are you sure to delete this banner ?',
                text: 'Once the banner has been deleted you cannot retrieve its data',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $('#' + id).submit();
                    swal('Category successfully deleted', {
                        icon: 'success',
                    });
                } else {
                    swal('Category undeleted');
                }
            });
        }

    </script>
    @endpush
