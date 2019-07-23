<?php $__env->startSection('content'); ?>
<br />
<br />
<h3 class="text-center text-success"><?php echo e(Session::get('message')); ?></h3>
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
      <?php ($i=1); ?>
      <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td scope="row"><?php echo e($i++); ?></td>
        <td><?php echo e($order->firstName.' '.$order->lastName); ?></td>
        <td><?php echo e($order->orderTotal); ?></td>
        <td><?php echo e($order->created_at); ?></td>
        <td><?php echo e($order->orderStatus); ?></td>
        <td><?php echo e($order->paymentType); ?></td>
        <td><?php echo e($order->paymentStatus); ?></td>
        <td>

          <a href="<?php echo e(url('/order/view-order-detail/'.$order->id)); ?>" class="btn btn-info btn-xs" title="View Details">
            <i class="fa fa-search"></i>
          </a>
          <a href="<?php echo e(url('/order/order-invoice/'.$order->id)); ?>" class="btn btn-default btn-xs" title="Invoice">
            <i class="fa fa-envelope"></i>
          </a>
          <a href="<?php echo e(url('/order/order-invoice-dwnld/'.$order->id)); ?>" class="btn btn-warning btn-xs" title="Download Invoice">
            <i class="fa fa-download"></i>
          </a>
          <a href="<?php echo e(url('/category/edit-category/'.$order->id)); ?>"  class="btn btn-success btn-xs" title="Edit">
            <i class="fa fa-edit"></i>
          </a>
          <a href="<?php echo e(url('/'.$order->id)); ?>" class="btn btn-danger btn-xs"  title="Delete">
            <i class="fa fa-ban"></i>
          </a>

        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/order/manage-order.blade.php ENDPATH**/ ?>