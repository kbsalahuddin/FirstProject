<?php


?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin-Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo e(asset('/')); ?>/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo e(asset('/')); ?>/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <!--<form role="form" method="POST" action="<?php echo e(route('login')); ?>">-->
                        <?php echo Form::open( [ 'url' => '/login', 'method' => 'POST' ] ); ?>

                            <!--<?php echo csrf_field(); ?>-->
                            <div class="form-group">

                                <?php echo e(Form::email ('email', null, ['class'=>'form-control  <?php if ($errors->has("email")) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first("email"); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>', 'placeholder'=>'enter your email'] )); ?>


                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                            </div>
                            <div class="form-group">

                                <?php echo e(Form::password ('password', ['class'=>'form-control  <?php if ($errors->has("password")) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first("password"); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>', 'placeholder'=>'enter your password'] )); ?>


                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                            </div>
                            <div class="checkbox">
                                <label><?php echo e(Form::checkbox ( 'name', 'rememberMe' )); ?>Remember me</label>
                            </div>
                            <div class="form-group">
                                <?php echo e(Form::submit ('Login', ['class'=>'btn btn-success btn-block', 'name'=>'btn'] )); ?>

                            </div>
                        <!--</form>-->
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo e(asset('/')); ?>/admin/js/jquery-1.10.2.js"></script>
    <script src="<?php echo e(asset('/')); ?>/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo e(asset('/')); ?>/admin/js/sb-admin.js"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/login/login.blade.php ENDPATH**/ ?>