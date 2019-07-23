@extends('front-end.master')
@section('body')
<div class="banner1">
  <div class="container">
    <h3><a href="#">User Login/Signup</a></h3>
  </div>
</div>

<div class="content">
      <!--login-->
  <div class="single-wl3">
      <div class="container">
      <div class="row">
        <h4 class="text-center text-success well"></h4><br />
        <div class="col-md-6 well">

          <h3>Register Here!</h3><br />
            {{Form::open(['route'=>'customer-sign-up','method'=>'post'])}}
              <div class="key">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input  type="text" value="First Name" name="firstName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input  type="text" value="Last Name" name="lastName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input  type="text" value="Phone Number" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <i class="fa fa-home" aria-hidden="true"></i>
                <input  type="text" value="Address" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <input type="submit" name="btn" class="form-control btn btn-info btn-block" value="Register"/>
              </div>
            {{Form::close()}}
        </div>
        <div class="col-md-5 well" style="margin-left:20px">
          <h3>Login Here!</h3><br />
          <h3 class="text-center">{{Session::get('message')}}</h3><br />
          {{Form::open(['route'=>'customer-login','method'=>'post'])}}
          <div class="form-group">

            <input type="email" name="email" class="form-control" value="User Email Address"/>

          </div>
          <div class="form-group">

            <input type="password" name="password" class="form-control" value="User Password"/>

          </div>
          <div class="form-group">
            <input type="submit" name="btn" class="form-control btn btn-success btn-block" value="Login"/>
          </div>
          {{Form::close()}}
        </div>
      </div>

    </div>
  </div>
      <!--login-->
</div>
@endsection
