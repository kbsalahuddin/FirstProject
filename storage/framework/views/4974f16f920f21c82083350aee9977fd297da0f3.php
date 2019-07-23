<?php $__env->startSection('body'); ?>
<div class="banner1">
  <div class="container">
    <h3><a href="#">User Payment Info</a></h3>
  </div>
</div>

<div class="content">
      <!--login-->
  <div class="single-wl3">
      <div class="container">
      <div class="row">
        <div class="col-md-12 text-center text-success well">
          Dear <b><i><?php echo e(Session::get('customerName')); ?></i></b>, Please give us your payment details
        </div>
        <h4 class="text-center text-success well"></h4><br />
        <div class="col-md-6 col-md-offset-3 well">

          <h3 style="text-align:center">Payment Form</h3><br />
            <?php echo e(Form::open(['route'=>'new-order','method'=>'POST'])); ?>

              <table class="table table-bordered ">
                <tr>
                  <th>Cash on Delivery</th>
                  <td><input type="radio" name="paymentType" value="Cash"/>Cash On Delivery</td>
                </tr>
                <tr>
                  <th>Paypal</th>
                  <td><input type="radio" name="paymentType" value="Paypal"/>Paypal</td>
                </tr>
                <tr>
                  <th>BKash</th>
                  <td><input type="radio" name="paymentType" value="BKash"/>BKash</td>
                </tr>
                <tr>
                  <th></th>
                  <td><input type="submit" name="btn" value="Confirm Payment & back to Home"/></td>
                </tr>
              </table>


            <?php echo e(Form::close()); ?>

        </div>

      </div>

    </div>
  </div>
      <!--login-->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/front-end/checkout/payment.blade.php ENDPATH**/ ?>