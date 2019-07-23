@extends('admin.master')
@section('content')
<br />
<br />
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
          <h3 class="text-center text-success">Customer</h3>
          <br />

            <table style="text-align:center" class="table table-hover table-bordered">
              <tr>
                <th>Customer Name</th>
                <td>{{$customer->firstName.' '.$customer->lastName}}</td>
              </tr>
              <tr>
                <th>Customer Phone</th>
                <td>{{$customer->phone}}</td>
              </tr>
              <tr>
                <th>Customer Address</th>
                <td>{{$customer->address}}</td>
              </tr>
              <tr>
                <th>Customer Email</th>
                <td>{{$customer->email}}</td>
              </tr>
            </table>
        </div>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3 class="text-center text-success">Order Deatils</h3>
        <br />
        <table style="text-align:center" class="table table-hover table-bordered">
          <tr>
            <th>Order Id</th>
            <th>Produbt Id</th>
            <th>Prodt Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>

          </tr>
          @foreach($detail as $d)
          <tr>
            <td>{{$d->orderId}}</td>
            <td>{{$d->productId}}</td>
            <td>{{$d->productName}}</td>
            <td>BDT. {{$d->productPrice}}</td>
            <td>{{$d->productQuantity}}</td>
            <td>BDT. {{$d->productPrice * $d->productQuantity}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
          <h3 class="text-center text-success">Order Summary</h3>
          <br />

            <table style="text-align:center" class="table table-hover table-bordered">
              <tr>
                <th>Order Id</th>
                <td>{{$order->id}}</td>
              </tr>
              <tr>
                <th>Order total</th>
                <td>{{$order->orderTotal}}</td>
              </tr>
              <tr>
                <th>Order status</th>
                <td>{{$order->orderStatus}}</td>
              </tr>
              <tr>
                <th>Order Date</th>
                <td>{{$order->created_at}}</td>
              </tr>
            </table>
        </div>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3 class="text-center text-success">Shipping</h3>
        <br />
        <table style="text-align:center" class="table table-hover table-bordered">
          <tr>
            <th>Shipping To</th>
            <td>{{$shipping->fullName}}</td>
          </tr>
          <tr>
            <th>Shipping Phone</th>
            <td>{{$shipping->phoneNumber}}</td>
          </tr>
          <tr>
            <th>Shipping Address</th>
            <td>{{$shipping->shipAddress}}</td>
          </tr>
          <tr>
            <th>Shipping Email</th>
            <td>{{$shipping->emailAddress}}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3 class="text-center text-success">Payment</h3>
        <br />
        <table style="text-align:center" class="table table-hover table-bordered">
          <tr>
            <th>Payment Type</th>
            <td>{{$payment->paymentType}}</td>
          </tr>
          <tr>
            <th>Payment Status</th>
            <td>{{$payment->paymentStatus}}</td>
          </tr>

        </table>
      </div>
    </div>
  </div>
</div>

@endsection
