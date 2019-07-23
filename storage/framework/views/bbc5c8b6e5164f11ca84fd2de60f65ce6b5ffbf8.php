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
        <th style="text-align:center" scope="col">Category Name</th>
        <th style="text-align:center" scope="col">Category Description</th>
        <th style="text-align:center" scope="col">Category Status</th>
        <th style="text-align:center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
              <!--<?php //while($manageCat=mysqli_fetch_assoc($showCatInfo)){ ?>-->
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($category->id); ?></th>
        <td><?php echo e($category->categoryName); ?></td>
        <td><?php echo e($category->categoryDescription); ?></td>
        <td><?php echo e($category->categoryStatus == 'published'? 'Published': 'Unpublished'); ?></td>
        <td>
          <button type="button" class="btn btn-info btn-xs">
            <a style="color:white; text-decoration:none" href="<?php echo e(url('/category/edit-category/'.$category->id)); ?>">Edit
            </a>
          </button>
          <button type="button" class="btn btn-warning btn-xs">
            <a style="color:black; text-decoration:none"
              href="<?php echo e(url('/category/delete-category/'.$category->id)); ?>" onclick="return confirm('Are you sure you want to delete this row of records?');">Delete
            </a>
          </button>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/category/manageCategory.blade.php ENDPATH**/ ?>