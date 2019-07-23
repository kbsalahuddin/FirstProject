<?php $__env->startSection('body'); ?>
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
          Dear <b><i><?php echo e(Session::get('customerName')); ?></i></b>, Please give us your shipping/mailing address for delivery
        </div>
        <h4 class="text-center text-success well"></h4><br />
        <div class="col-md-6 col-md-offset-3 well">

          <h3>Delivery Form</h3><br />
            <?php echo e(Form::open(['route'=>'new-shipping', 'method'=>'POST'])); ?>

              <div class="key">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input  type="text" value="<?php echo e($customer->firstName.' '.$customer->lastName); ?>" name="fullName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" required="">
                <div class="clearfix"></div>
              </div>

              <div class="key">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input  type="text" value="<?php echo e($customer->email); ?>" name="emailAddress" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <div class="clearfix"></div>
              </div>

              <div class="key">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input  type="text" value="<?php echo e($customer->phone); ?>" name="phoneNumber" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <i class="fa fa-home" aria-hidden="true"></i>
                <input  type="text" value="<?php echo e($customer->address); ?>" name="shipAddress" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
                <div class="clearfix"></div>
              </div>
              <div class="key">
                <input type="submit" name="btn" class="form-control btn btn-info btn-block" value="Confirm Info"/>
              </div>
            <?php echo e(Form::close()); ?>

        </div>

      </div>

    </div>
  </div>
      <!--login-->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/front-end/checkout/shipping.blade.php ENDPATH**/ ?>