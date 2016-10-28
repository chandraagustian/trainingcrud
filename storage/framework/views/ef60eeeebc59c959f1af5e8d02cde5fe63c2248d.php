<?php $__env->startSection("content"); ?>

  <article class="row">

    <h2><?php echo $article->title; ?></h2>

    <div><?php echo $article->content; ?></div>

  </article>

  <div>

  <?php echo Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')); ?>


    <?php echo link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']); ?>


   <?php echo link_to(route('articles.edit', $article->id), 'Edit', ['class' => 'btn btn-raised btn-warning']); ?>


   <?php echo Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', "onclick" => "return confirm('are you sure?')")); ?>


  <?php echo Form::close(); ?>


  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.application", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>