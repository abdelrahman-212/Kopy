@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Order / Customer</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card-body">
        <form method="get">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                  <label>Select Customer</label>
                  <select class="form-control" name="customer">
                    <option>All</option>
                    @foreach($customers as $customer)
                      <option value="{{ $customer->id }}" @if(request('customer') == $customer->id) selected @endif>
                        {{ $customer->name }}
                      </option>
                    @endforeach
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>From</label>
                <input type="date" class="form-control" name="from" value="{{ request('from') }}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>From</label>
                <input type="date" class="form-control" name="to" value="{{ request('to') }}">
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label class="form-label" style="width: 100%;"></label>
                <div class="input-group pull-right">
                    <button type="submit" class="btn btn-primary" style="margin-top: 6px; height: 35px;width: 80%;">Go</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  @if(!is_null($orders))
    <section class="content">
      <div class="container-fluid">
        <div class="card-body">
          <table class="table table-bordered table-striped dataTable">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>order ID</th>
                <th>Date</th>
                <th>Total</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order)
                <tr>
                  <td>{{$order->customer->name}}</td>
                  <td>{{$order->id}}</td>
                  <td>{{$order->created_at}}</td>
                  <td>{{$order->total}}</td>
                  <td>{{$order->state}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
  @endif
</div>
@endsection
