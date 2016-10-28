 

  <div class="col-md-12">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th>No</th>
            <th>title</th>
            <th>content</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
        <td><?php echo e($article->id); ?></td>
        <td><?php echo e($article->title); ?></td>
        <td><?php echo e($article->content); ?> 

       <?php echo str_limit($article->content, 250); ?>


       <?php echo link_to(route('articles.show', $article->id), 'Read More'); ?>



        </td>

       

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </tbody>
        <tfoot></tfoot>
        </table>
       
</div>  