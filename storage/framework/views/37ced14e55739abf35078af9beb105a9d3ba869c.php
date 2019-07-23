<?php $__env->startSection('content'); ?>
<br />
<br />
<h3 class="text-center text-success">Customer Invoice Document</h3>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">


            <table style="text-align:center" class="table table-hover table-bordered">
              <tr>
                <th>Customer Name</th>
                <td><?php echo e($customer->firstName.' '.$customer->lastName); ?></td>
              </tr>
              <tr>
                <th>Customer Phone</th>
                <td><?php echo e($customer->phone); ?></td>
              </tr>
              <tr>
                <th>Customer Address</th>
                <td><?php echo e($customer->address); ?></td>
              </tr>
              <tr>
                <th>Customer Email</th>
                <td><?php echo e($customer->email); ?></td>
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
          <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($d->orderId); ?></td>
            <td><?php echo e($d->productId); ?></td>
            <td><?php echo e($d->productName); ?></td>
            <td>BDT. <?php echo e($d->productPrice); ?></td>
            <td><?php echo e($d->productQuantity); ?></td>
            <td>BDT. <?php echo e($d->productPrice * $d->productQuantity); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <td><?php echo e($order->id); ?></td>
              </tr>
              <tr>
                <th>Order total</th>
                <td><?php echo e($order->orderTotal); ?></td>
              </tr>
              <tr>
                <th>Order status</th>
                <td><?php echo e($order->orderStatus); ?></td>
              </tr>
              <tr>
                <th>Order Date</th>
                <td><?php echo e($order->created_at); ?></td>
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
            <td><?php echo e($shipping->fullName); ?></td>
          </tr>
          <tr>
            <th>Shipping Phone</th>
            <td><?php echo e($shipping->phoneNumber); ?></td>
          </tr>
          <tr>
            <th>Shipping Address</th>
            <td><?php echo e($shipping->shipAddress); ?></td>
          </tr>
          <tr>
            <th>Shipping Email</th>
            <td><?php echo e($shipping->emailAddress); ?></td>
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
            <td><?php echo e($payment->paymentType); ?></td>
          </tr>
          <tr>
            <th>Payment Status</th>
            <td><?php echo e($payment->paymentStatus); ?></td>
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
        <h3 class="text-center text-danger">!!!Sign Here!!!</h3>
        <br />
        <table style="text-align:center" class="table table-hover table-bordered">
          <tr>
            <th>Please Sign here (with date) to claim of the delivery</th>
            
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/order/order-invoice.blade.php ENDPATH**/ ?>