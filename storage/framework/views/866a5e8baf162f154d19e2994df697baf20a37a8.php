<?php $__env->startSection('content'); ?>

<hr/>
  <!--<div>-->
  <br />
  <br />
  <h3 class="text-center text-success"><?php echo e(Session::get('message')); ?></h3>
  <br />
  <ul>
    <table style="text-align:center" class="table table-hover table-bordered">
      <thead>
        <tr>
          <th style="text-align:center" scope="col">SL NO.</th>
          <th style="text-align:center" scope="col">Product Name</th>
          <th style="text-align:center" scope="col">Category Name</th>
          <th style="text-align:center" scope="col">Manufacturer Name</th>
          <th style="text-align:center" scope="col">Product Price</th>
          <th style="text-align:center" scope="col">Product Quantity</th>
          <th style="text-align:center" scope="col">Product Status</th>
          <th style="text-align:center" scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
                <!--<?php //while($manageCat=mysqli_fetch_assoc($showCatInfo)){ ?>-->
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?php echo e($product->id); ?></th>
          <td><?php echo e($product->productName); ?></td>
          <td><?php echo e($product->categoryName); ?></td>
          <td><?php echo e($product->manufacturerName); ?></td>
          <td>bdt. <?php echo e($product->productPrice); ?></td>
          <td><?php echo e($product->productQuantity); ?></td>
          <td><?php echo e($product->productStatus == 'published'? 'Published': 'Unpublished'); ?></td>
          <td>


              <a style="color:black;  text-decoration:none" title="Product View" href="<?php echo e(url('/product/view-product/'.$product->id)); ?>">
                <span class="fa fa-search fa-2x"></span>
              </a>

              <a style="color:green;  text-decoration:none" title="Product Edit" href="<?php echo e(url('/product/edit-product/'.$product->id)); ?>">
                <span class="fa fa-edit fa-2x"></span>
              </a>

              <a style="color:red;  text-decoration:none" title="Product Delete"
                href="<?php echo e(url('/product/delete-product/'.$product->id)); ?>" onclick="return confirm('Are you sure you want to delete this row of records?');">
                <span class="fa fa-times-circle fa-2x"></span>
              </a>
            <!--</button>-->
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/product/manageProduct.blade.php ENDPATH**/ ?>