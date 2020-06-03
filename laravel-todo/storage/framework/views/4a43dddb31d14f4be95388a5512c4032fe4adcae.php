<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="brick entry format-standard animate-this margin-top">

    <div class="entry-text">
        <div class="entry-header">
            <h5 class="entry-title"><a href="#"><?php echo e($task->task); ?></a> <span class="red">(<?php echo e($task->user->name); ?>)</span></h5>
        </div>
        <h3>date <span class="blue">create <?php echo e($task->datecreate); ?></span></h3>
        <h3>date <span class="red">result <?php echo e($task->dateresult); ?></span></h3>
        <div class="entry-excerpt">
            <?php echo e($task->task); ?>

        </div>
    </div>

</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/html/laravel-todo/resources/views/front-standard.blade.php ENDPATH**/ ?>