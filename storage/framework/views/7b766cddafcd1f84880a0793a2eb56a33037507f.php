<?php $__env->startSection("content"); ?>
<h3>Edit a Picture</h3>



  <?php echo Form::model($picture, ['route' => ['upload.update', $picture->id], 'method' => 'put', 'class' => 'form-horizontal', 'files'=>true,'role' => 'form']); ?>


    <div class="row">

    <div class="col-md-4">

      <br/>

      <?php echo Form::text('deskripsi', null,array('class' => 'form-control','placeholder'=>'Add Title')); ?>

      <?php echo $errors->first('deskripsi'); ?>


    </div>

    <div class="col-md-12">

      <br/>

      <?php echo Form::file('foto', array('class' => 'foto')); ?>

<?php echo $errors->first('foto'); ?>


    </div>

    <div class="col-md-12">

      <br/>

     <?php echo Form::submit('Save', array('class' => 'btn btn-raised btn-primary')); ?>


<?php echo link_to(route('upload.index'), "Back", ['class' => 'btn btn-raised btn-info']); ?>

    </div>

  </div>


  <?php echo Form::close(); ?>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.application", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>