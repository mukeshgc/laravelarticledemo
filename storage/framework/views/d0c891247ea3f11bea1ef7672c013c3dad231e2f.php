<?php $__env->startSection('bg-img',asset('user/img/contact-bg.jpg')); ?>
<?php $__env->startSection('head'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('sub-heading',''); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
           Welcome to Article management demo website
        </div>
    </div>
</article>

<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mukesh\blog\resources\views/home.blade.php ENDPATH**/ ?>