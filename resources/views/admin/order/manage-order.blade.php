@extends('admin.master')
@section('content')
<br />
<br />
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<br />
<ul>
  <table style="text-align:center" class="table table-hover table-bordered">
    <thead>
      <tr>
        <th style="text-align:center" scope="col">SL NO.</th>
        <th style="text-align:center" scope="col">Customer Name</th>
        <th style="text-align:center" scope="col">Order Total</th>
        <th style="text-align:center" scope="col">Order Date</th>
        <th style="text-align:center" scope="col">Order Status</th>
        <th style="text-align:center" scope="col">Payment Type</th>
        <th style="text-align:center" scope="col">Payment Staus</th>
        <th style="text-align:center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
              <!--<?php //while($manageCat=mysqli_fetch_assoc($showCatInfo)){ ?>-->
      @php ($i=1)
      @foreach($orders as $order)
      <tr>
        <td scope="row">{{$i++ }}</td>
        <td>{{$order->firstName.' '.$order->lastName}}</td>
        <td>{{$order->orderTotal}}</td>
        <td>{{$order->created_at}}</td>
        <td>{{$order->orderStatus}}</td>
        <td>{{$order->paymentType}}</td>
        <td>{{$order->paymentStatus}}</td>
        <td>

          <a href="{{ url('/order/view-order-detail/'.$order->id) }}" class="btn btn-info btn-xs" title="View Details">
            <i class="fa fa-search"></i>
          </a>
          <a href="{{ url('/order/order-invoice/'.$order->id) }}" class="btn btn-default btn-xs" title="Invoice">
            <i class="fa fa-envelope"></i>
          </a>
          <a href="{{ url('/order/order-invoice-dwnld/'.$order->id) }}" class="btn btn-warning btn-xs" title="Download Invoice">
            <i class="fa fa-download"></i>
          </a>
          <a href="{{ url('/category/edit-category/'.$order->id) }}"  class="btn btn-success btn-xs" title="Edit">
            <i class="fa fa-edit"></i>
          </a>
          <a href="{{ url('/'.$order->id) }}" class="btn btn-danger btn-xs"  title="Delete">
            <i class="fa fa-ban"></i>
          </a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</ul>

@endsection
