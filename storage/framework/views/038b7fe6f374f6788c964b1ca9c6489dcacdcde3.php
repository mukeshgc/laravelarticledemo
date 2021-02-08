<?php $__env->startSection('bg-img',asset('user/img/home-bg.jpg')); ?>

<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('user/css/prism.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title',$post->title); ?>
<?php $__env->startSection('sub-heading',$post->subtitle); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Post Content -->

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <small>Created at<?php echo e($post->created_at); ?> and posted by <b><i><?php echo e($post->user->name); ?></i></b></small>
			<br><br>
                             
                <?php echo htmlspecialchars_decode($post->body); ?>


                
                <h3>Tags </h3>
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('tag',$tag->slug)); ?>">
					<small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">  
						<?php echo e($tag->name); ?>

					</small>
				</a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
        </div>
    </div>
</article>

<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script src="<?php echo e(asset('user/js/prism.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mukesh\blog\resources\views/user/post.blade.php ENDPATH**/ ?>