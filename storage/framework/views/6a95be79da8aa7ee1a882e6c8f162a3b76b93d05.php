<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\FirstProject\resources\views/admin/order/download-invoice.blade.php ENDPATH**/ ?>