<?php ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin-Dashboard</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo e(asset('/')); ?>/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?php echo e(asset('/')); ?>/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>/admin/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo e(asset('/')); ?>/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <?php echo $__env->make('admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <?php echo $__env->make('admin.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo e(asset('/')); ?>/admin/js/jquery-1.10.2.js"></script>

    <script src="<?php echo e(asset('/')); ?>/admin/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>/admin/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});
    </script>

    <script src="<?php echo e(asset('/')); ?>/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?php echo e(asset('/')); ?>/admin/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>/admin/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo e(asset('/')); ?>/admin/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="<?php echo e(asset('/')); ?>/admin/js/demo/dashboard-demo.js"></script>




</body>

</html>
<?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/master.blade.php ENDPATH**/ ?>