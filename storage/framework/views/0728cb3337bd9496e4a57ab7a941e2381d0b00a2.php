 <!DOCTYPE html>

  <html>

    <head>

      <meta charset="utf-8">

      <meta httpequiv="XUACompatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Upload Page</title>

      <link href="/assets/css/bootstrap/bootstrap.css" rel="stylesheet" />

      <link href="/assets/css/material-design/bootstrap-material-design.css" rel="stylesheet" />

      <link href="/assets/css/material-design/ripples.css" rel="stylesheet" />

      <link href="/assets/css/custom/layout.css" rel="stylesheet" />

      <script src="/assets/js/jquery/jquery-2.2.4.js"></script>

      <script src="/assets/js/bootstrap/bootstrap.js"></script>

      <script src="/assets/js/material-design/material.js"></script>

      <script src="/assets/js/material-design/ripples.js"></script>

    </head>

    <body style="padding-top:60px;">

      <!--bagian navigation-->

      <?php echo $__env->make("shared.head_nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Bagian Content -->

      <div class="container clearfix">

        <div class="row row-offcanvas row-offcanvas-left ">

          <!--Bagian Kiri-->

         <?php echo $__env->make("shared.left_nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 


          <!--Bagian Kanan-->

          <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">

            <div class="panel-body">

              <?php if(Session::has('error')): ?>

                <div class="session-flash alert-danger">

                    <?php echo e(Session::get('error')); ?>


                </div>

              <?php endif; ?>

              <?php if(Session::has('notice')): ?>

                <div class="session-flash alert-info">

                    <?php echo e(Session::get('notice')); ?>


                </div>

              <?php endif; ?>

              <?php echo $__env->yieldContent("content"); ?>

            </div>

          </div>

        </div>

      </div>

      

      <script src="/assets/js/custom/layout.js"></script>      

    </body>

  </html>
