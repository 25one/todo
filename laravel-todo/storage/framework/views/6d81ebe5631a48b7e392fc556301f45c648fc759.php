<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<?php
//print_r($tasks);
?>

<!-- brick-wrapper -->
<div class="bricks-wrapper">

    <div id="pannel">
       <?php echo $__env->make('front-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>   

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('public/js/mine.js')); ?>"></script>
<script>
   $(document).ready(function(){
      //...
   });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-todo/resources/views/index.blade.php ENDPATH**/ ?>