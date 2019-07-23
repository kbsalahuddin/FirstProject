<?php $__env->startSection('content'); ?>

<hr/>
  <!--<div>-->
  <div class="container" style="margin-top: 10px;">
    <div class="row">
				<div class="col-md-8">
          <h3 class="text-center text-successs"><?php echo e(Session::get('message')); ?></h3>
          <br/>
          <div class="card">
            <div class="card-body">

							<!--<form action="" method="POST">-->
              <?php echo e(Form::open(['url'=>'/product/update-product', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data','name'=>'editProdForm'] )); ?>

								<div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Product Name</label>
								    <div class="col-sm-9">
								    	<input type="text" class="form-control" name="productName" value="<?php echo e($edit->productName); ?>">
                      <input type="hidden" class="form-control" name="id" value="<?php echo e($edit->id); ?>">
                      <span class="text-danger"><?php echo e($errors->has('productName')? $errors->first('productName'): ''); ?></span>
                    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Category Name</label>
								    <div class="col-sm-9">
                      <select class="form-control" name="categoryId">
                        <option>Select Category<!--<?php echo e($edit->categoryName); ?>--></option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->categoryName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Manufacturer Name</label>
								    <div class="col-sm-9">
                      <select class="form-control" name="manufacturerId">
                        <option>Select Manufacturer<?php echo e($edit->manufacturerName); ?></option>
                        <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->manufacturerName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Product Price</label>
								    <div class="col-sm-9">
								    	<input type="number" class="form-control" name="productPrice" value="<?php echo e($edit->productPrice); ?>">
                      <span class="text-danger"><?php echo e($errors->has('productPrice')? $errors->first('productPrice'): ''); ?></span>
                    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Product Quantity</label>
								    <div class="col-sm-9">
								    	<input type="number" class="form-control" name="productQuantity"  value="<?php echo e($edit->productQuantity); ?>">
                      <span class="text-danger"><?php echo e($errors->has('productQuantity')? $errors->first('productQuantity'): ''); ?></span>
                    </div>
								</div>

								<div class="form-group">
								    <label for="abc1" class="col-sm-3 col-form-label" >Product Short Description</label>
								    <div class="col-sm-9">
								    	<textarea class="form-control" name="productShortDescription"><?php echo e($edit->productShortDescription); ?></textarea>
                      <span class="text-danger"><?php echo e($errors->has('productShortDescription')? $errors->first('productShortDescription'): ''); ?></span>
								    </div>
								</div>

                <div class="form-group">
								    <label for="abc1" class="col-sm-3 col-form-label" >Product Long Description</label>
								    <div class="col-sm-9">
								    	<textarea class="form-control" name="productLongDescription" rows="7"><?php echo e($edit->productLongDescription); ?></textarea>
                      <span class="text-danger"><?php echo e($errors->has('productLongDescription')? $errors->first('productLongDescription'): ''); ?></span>
								    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Product Image</label>
								    <div class="col-sm-9">
								    	<input type="file"  name="productImage" accept="image/*">
                      <img src="<?php echo e(asset($edit->productImage)); ?>" alt="<?php echo e($edit->productName); ?>"/>
                      <span class="text-danger"><?php echo e($errors->has('productImage')? $errors->first('productImage'): ''); ?></span>
                    </div>
								</div>

								<div class="form-group">
								    <label for="abc2" class="col-sm-3 col-form-label">Product Status</label>
								    <div class="col-sm-9">
                      <select class="form-control" name="productStatus">
                        <option>Selected-<?php echo e($edit->productStatus=='published' ? 'Published':'Unpublished'); ?></option>

                        <option value="published">Published</option>
                        <option value="unpublished">Unpublished</option>

                      </select>
								    </div>
								</div>
                <div class="form-group">
								    <div class="col-sm-3"></div>
								    <div class="col-sm-9">
								      	<button type="submit" class="btn btn-success btn-block" name="btn" >Update Product Info</button>
								    </div>
								</div>

              <!--</form>-->
              <?php echo e(Form::close()); ?>

						</div>
					</div>
				</div>
			</div>
  </div>
  <script>
    document.forms['editProdForm'].elements['categoryId'].value=<?php echo e($edit->categoryId); ?>

    document.forms['editProdForm'].elements['manufacturerId'].value=<?php echo e($edit->manufacturerId); ?>

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/product/editProduct.blade.php ENDPATH**/ ?>