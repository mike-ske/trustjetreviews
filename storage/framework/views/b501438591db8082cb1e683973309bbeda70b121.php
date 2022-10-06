<?php $__env->startSection( 'content' ); ?>

<div class="container card">
	<h4><?php echo e($title); ?></h4>
	<?php echo $content; ?>

</div><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/page.blade.php ENDPATH**/ ?>