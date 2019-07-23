<?php $__env->startSection('content'); ?>
<hr />
<h3 class="text-center text-success"><?php echo e(Session::get('message')); ?></h3>
<br />
<table class="table table-bordered table-hover">
  <tr>
    <th>Product ID</th><th><?php echo e($product->id); ?></th>
  </tr>
  <tr>
    <th>Product Name</th><th><?php echo e($product->productName); ?></th>
  </tr>
  <tr>
    <th>Category Name</th><th><?php echo e($product->categoryName); ?></th>
  </tr>
  <tr>
    <th>Manufacturer Name</th><th><?php echo e($product->manufacturerName); ?></th>
  </tr>
  <tr>
    <th>Product Price</th><th><?php echo e($product->productPrice); ?></th>
  </tr>
  <tr>
    <th>Product Quantity</th><th><?php echo e($product->productQuantity); ?></th>
  </tr>
  <tr>
    <th>Product Short Description</th><th><?php echo e($product->productShortDescription); ?></th>
  </tr>
  <tr>
    <th>Product Long Description</th><th><?php echo e($product->productLongDescription); ?></th>
  </tr>
  <tr>
    <th>Product Image</th><th><img src="<?php echo e(asset($product->productImage)); ?>" alt="<?php echo e($product->productName); ?>"/></th>
  </tr><!--because productImage aleardy has the path in DB-->
  <tr>
    <th>Product Status</th><th><?php echo e($product->productStatus=='published' ? 'Published':'Unpublished'); ?></th>
  </tr>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/product/viewProduct.blade.php ENDPATH**/ ?>