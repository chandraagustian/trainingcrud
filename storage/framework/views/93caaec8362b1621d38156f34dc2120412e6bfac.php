<?php $__env->startSection("content"); ?>
<div class="form">
<h1>Import a Files</h1>


<?php echo e(Form::open(array('route' => 'imports.store', 'class' => 'form',  'files'=>true, 'enctype' => 'multipart/form-data','class'=>'form-horizontal'))); ?>




  <div class="row">

    

      <?php echo Form::file('foto', array('class' => 'foto','required')); ?>



    </div>

    <div class="col-md-12">

      <br/>

     <?php echo Form::submit('Import', array('class' => 'btn btn-raised btn-primary')); ?>

<?php echo link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']); ?>


    </div>

  </div>

 
<?php echo Form::close(); ?>



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.application", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>