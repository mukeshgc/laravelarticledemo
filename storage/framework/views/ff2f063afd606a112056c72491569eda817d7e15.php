<?php $__env->startSection('bg-img',asset('user/img/home-bg.jpg')); ?>
<?php $__env->startSection('title','Articles'); ?>
<?php $__env->startSection('sub-heading',''); ?>
<?php $__env->startSection('head'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<style>
		.fa-thumbs-up:hover{
			color:#f41115;
		}
	</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
	<!-- Main Content -->
	<div class="container">
	    <div class="row" id="app">
	        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<table id="example1" class="">
	            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr> <td><a href="<?php echo e(route('article',$post->id)); ?>"><h3><?php echo e($post->title); ?></h3></a></td> </tr>
				 <tr> <td><?php echo e($post->subtitle); ?></td> </tr>
                 

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>

	            <hr>
	            <!-- Pager -->
	            <ul class="pager">
	                <li class="next">
	                	<?php echo e($posts->links()); ?>

	                </li>
	            </ul>
	        </div>
	    </div>
	</div>

	<hr>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mukesh\blog\resources\views/user/blog.blade.php ENDPATH**/ ?>