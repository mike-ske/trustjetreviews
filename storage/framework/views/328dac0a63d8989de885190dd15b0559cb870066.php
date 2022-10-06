<?php $__env->startSection( 'content' ); ?>

<div class="container card">
	<h4><?php echo e(__( 'We sent you an email to: ' )); ?><em><?php echo e($sendToEmail); ?></em></h4>
	<?php echo e(__( 'Please check your email for the ownership validation link.' )); ?>

</div><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/verify-ownership-message.blade.php ENDPATH**/ ?>