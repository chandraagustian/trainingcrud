<div class="row">

    <div class="col-md-4">

      <br/>

      <?php echo Form::text('deskripsi', null,array('class' => 'form-control','placeholder'=>'Add Title')); ?>


    </div>

    <div class="col-md-12">

      <br/>

      <?php echo Form::file('foto', array('class' => 'foto')); ?>



    </div>

    <div class="form-group">

  <div class="col-lg-4"></div>

  <div class="col-lg-12">

    <?php echo Form::submit('Save', array('class' => 'btn btn-raised btn-primary')); ?>


    <?php echo link_to(route('upload.index'), "Back", ['class' => 'btn btn-raised btn-info']); ?>


  </div>

  <div class="clear"></div>
