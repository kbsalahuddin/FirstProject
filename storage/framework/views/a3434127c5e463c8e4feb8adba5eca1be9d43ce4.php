<?php $__env->startSection('content'); ?>
<br />
<br />
<hr/>
  <!--<div>-->
  <h3 style="text-align: center">Admin Edit Panel</h3>
  <div class="container" style="margin-top: 10px;">
    <div class="row">
				<div class="col-md-8">
          <!--<h3 class="text-center text-successs"><?php echo e(Session::get('message')); ?></h3>-->
          <br/>

          <div class="card">
            <div class="card-body">

							<!--<form action="" method="POST">-->
              <?php echo e(Form::open(['url'=>'manufacturer/update-manu', 'method'=>'POST', 'class'=>'form-horizontal', 'name'=>'editManuForm'])); ?>

								<div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Manufacturer Name</label>
								    <div class="col-sm-9">
								    	<input type="text" value="<?php echo e($manuById->manufacturerName); ?>" class="form-control" name="manufacturerName">
                      <input type="hidden" value="<?php echo e($manuById->id); ?>" class="form-control" name="id">
								    </div>
								</div>
								<div class="form-group">
								    <label for="abc1" class="col-sm-3 col-form-label">Manufacturer Description</label>
								    <div class="col-sm-9">
								    	<textarea class="form-control" value=""name="manufacturerDescription" ><?php echo e($manuById->manufacturerDescription); ?></textarea>
								    </div>
								</div>
								<div class="form-group">
								    <label for="abc2" class="col-sm-3 col-form-label">Manufacturer Status</label>
								    <div class="col-sm-9">
                      <select class="form-control" name="manufacturerStatus">
                        <option value="published">Published</option>
  								    	<option value="unpublished">Unpublished</option>
                      </select>

								    </div>
								</div>
                <div class="form-group">
								    <div class="col-sm-3"></div>
								    <div class="col-sm-9">
								      	<button type="submit" class="btn btn-success btn-block" name="btn" >Update Manufacturer Info</button>
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
    document.forms['editManuForm'].elements['manufacturerStatus'].value=<?php echo e($manuById->manufacturerStatus); ?>

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/manufacturer/editManu.blade.php ENDPATH**/ ?>