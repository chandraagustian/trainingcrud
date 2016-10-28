<?php $__env->startSection("content"); ?>
 <h3>Create a Article</h3>

  <?php echo Form::open(['route' => 'articles.store', 'class' => 'form-horizontal', 'role' => 'form']); ?>


    <?php echo $__env->make('articles.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.application", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>