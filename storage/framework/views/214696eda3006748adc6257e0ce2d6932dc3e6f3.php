<?php $__env->startSection("content"); ?>
<div class="form">
<h1>page uploads</h1>


<?php echo e(Form::open(array('route' => 'upload.store', 'class' => 'form',  'files'=>true, 'enctype' => 'multipart/form-data','class'=>'form-horizontal'))); ?>




  <div class="row">

    <div class="col-md-4">

      <br/>

      <?php echo Form::text('deskripsi', null,array('class' => 'form-control','placeholder'=>'Add Title','required')); ?>


    </div>

    <div class="col-md-12">

      <br/>

      <?php echo Form::file('foto', array('class' => 'foto','required')); ?>



    </div>

    <div class="col-md-12">

      <br/>

     <?php echo Form::submit('Save', array('class' => 'btn btn-raised btn-primary')); ?>



    </div>

  </div>

 
<?php echo Form::close(); ?>


<?php echo link_to(route('upload.index'), "Back");; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.application", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>