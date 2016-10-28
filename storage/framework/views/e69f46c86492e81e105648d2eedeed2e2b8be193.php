<?php $__env->startSection("content"); ?>

 
  <h1>Photo Galery</h1> 
<?php echo link_to(route('upload.create'), '+add Picture');; ?>  

<div class="container">
<div class="row">
   
<div class=''>
<div id="gambar">
  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
  
  
 
  <div class="item">
  <p>Deskripsi:<?php echo $page->deskripsi; ?></p>
   <img src="<?php echo '/upload_gambar/'. $page->id . '/thumb_' . $page->foto; ?>" />
    <?php echo link_to(route('upload.edit', $page->id), 'Edit', ['class' => 'btn btn-raised btn-warning']); ?>

    <?php echo link_to(route('upload.destroy', $page->id), 'Delete', ['class' => 'btn btn-raised btn-warning']); ?>

  </div>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
 </div>
 </div>

<div class="row">
  
</div> 
<script src="assets/js/masonry/masonry.js"></script>
<script src="assets/js/masonry/masonry.pkgd.min.js"></script>
<script src="assets/js/masonry/masonry.pkgd.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.application", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>