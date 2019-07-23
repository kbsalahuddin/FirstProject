@extends('front-end.master')
@section('body')
<div class="banner1">
  <div class="container">
    <h3><a href="#">User Shipping Info</a></h3>
  </div>
</div>

<div class="content">
      <!--login-->
  <div class="single-wl3">
      <div class="container">
      <div class="row">
        <div class="col-md-12 text-center text-success well">
          Dear <b><i>{{ Session::get('customerName') }}</i></b>, Please give us your shipping/mailing address for delivery
        </div>
        <h4 class="text-center text-success well"></h4><br />
        <div class="col-md-6 col-md-offset-3 well">

          <h3>Delivery Form</h3><br />
            {{Form::open(['route'=>'new-shipping', 'method'=>'POST'])}}
              <div class="key">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input  type="text" value="{{$customer->firstName.' '.$customer->lastName}}" name="fullName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" required="">
                <div class="clearfix"></div>
              </div>

              <div class="key">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input  type="text" value="{{$customer->email}}" name="emailAddress" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <div class="clearfix"></div>
              </div>

              <div class="key">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input  type="text" value="{{$customer->phone}}" name="phoneNumber" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <i class="fa fa-home" aria-hidden="true"></i>
                <input  type="text" value="{{$customer->address}}" name="shipAddress" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <input type="submit" name="btn" class="form-control btn btn-info btn-block" value="Confirm Info"/>
              </div>
            {{Form::close()}}
        </div>

      </div>

    </div>
  </div>
      <!--login-->
</div>
@endsection
