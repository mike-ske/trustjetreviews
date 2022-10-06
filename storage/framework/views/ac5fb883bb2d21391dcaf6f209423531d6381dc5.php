<?php $__env->startSection( 'content' ); ?>

	<div class="container">
		<div class="row">

		<div class="col-xs-12">
		 	<?php echo Options::get_option( 'catAd' ); ?>

		 	<hr>
		 </div>

		<div class="col-md-12 col-xs-12">
			<div class="card">
				<h5><?php echo e(__( 'Categories' )); ?></h5>
				<ul class="list-categories">
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>
						<a href="<?php echo e(route('browse-category', ['slug' => $c->slug])); ?>">
							<?php echo e($c->name); ?> (<?php echo e($c->sites()->wherePublish('Yes')->count()); ?>)
						</a>
					</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div><!-- /.col-md-4 col-xs-12 -->
		
		</div>
	</div><!-- /.container card -->
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/browse-categories.blade.php ENDPATH**/ ?>