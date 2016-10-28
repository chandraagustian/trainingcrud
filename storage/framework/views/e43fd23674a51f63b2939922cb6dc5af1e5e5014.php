<div class="form-group">

  <?php echo Form::label('title', 'Title', array('class' => 'col-lg-3 control-label')); ?>


  <div class="col-lg-9">

    <?php echo Form::text('title', null, array('class' => 'form-control', 'autofocus' => 'true')); ?>


    <div class="text-danger"><?php echo $errors->first('title'); ?></div>

  </div>

  <div class="clear"></div>

</div>


<div class="form-group">

  <?php echo Form::label('content', 'Content', array('class' => 'col-lg-3 control-label')); ?>


  <div class="col-lg-9">

    <?php echo Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10)); ?>


    <div class="text-danger"><?php echo $errors->first('content'); ?></div>

  </div>

<div class="form-group">

  <?php echo Form::label('publish', 'publish', array('class' => 'col-lg-3 control-label')); ?>


  <div class="col-lg-9">

    <?php echo Form::text('publish', null, array('class' => 'form-control', 'autofocus' => 'true')); ?>


    <div class="text-danger"><?php echo $errors->first('title'); ?></div>

  </div>



  <div class="clear"></div>

</div>


<div class="form-group">

  <div class="col-lg-3"></div>

  <div class="col-lg-9">

    <?php echo Form::submit('Save', array('class' => 'btn btn-raised btn-primary')); ?>


    <?php echo link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']); ?>


  </div>

  <div class="clear"></div>

</div>

