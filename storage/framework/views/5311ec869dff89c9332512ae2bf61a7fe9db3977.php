<?php $__env->startSection("content"); ?>

  <div class="row">

    <h2><?php echo $pages->deskripsi; ?></h2>

    <div><img src="<?php echo '/upload_gambar/'. $pages->id . '/thumb_' . $pages->foto; ?>" /></div>
   
</div>
  </div>

  <div>

  
  <?php echo Form::open(array('route' => array('upload.destroy', $pages->id), 'method' => 'delete')); ?>


 

    <?php echo link_to(route('upload.index'), "Back", ['class' => 'btn btn-raised btn-info']); ?>


   <?php echo link_to(route('upload.edit', $pages->id), 'Edit', ['class' => 'btn btn-raised btn-warning']); ?>


   <?php echo Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")); ?>


  <?php echo Form::close(); ?>


  </div>
<script>
function myFunction() {
    location.reload();
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.application", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>