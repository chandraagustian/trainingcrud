<?php $__env->startSection("content"); ?>

  <div class="row">

    <h2 class="pull-left">List Articles</h2>


    <?php echo link_to(view("imports.export"), "Export", ["class"=>"pull-right btn btn-raised btn-primary"]); ?>

    <?php echo link_to(view("imports.import"), "Import", ["class"=>"pull-right btn btn-raised btn-primary"]); ?>


  <?php echo link_to(route("articles.create"), "Create", ["class"=>"pull-right btn btn-raised btn-primary"]); ?>


  </div>

  <?php echo $__env->make('articles.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.application", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>