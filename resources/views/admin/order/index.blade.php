@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Orders</h1>
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
              <th>Order #</th>
              <th>Customer Name</th>
              <th>Branch Name</th>
              <th>Type</th>
              <th>State</th>
              <th>Cancellation Reason</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
              <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer->name }}</td>
                <td>{{ $order->branch->name_en }}</td>
                <td>{{ $order->service_type }}</td>
                <td>{{ $order->state }}</td>
                <td>{{ $order->cancellation_reason? $order->cancellation_reason : "-" }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
@endsection
