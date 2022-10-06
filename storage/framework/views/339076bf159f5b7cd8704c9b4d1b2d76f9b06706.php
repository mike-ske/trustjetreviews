<?php $__env->startSection( 'content' ); ?>

<div class="container card">
	<h4><?php echo e(__( 'Verify ownership of' )); ?> <?php echo e($company->business_name); ?></h4>
	
	<?php echo e(__( 'In order to validate ownership of this company, we will send an email to your selected email')); ?>

	<?php echo e('****@' . str_ireplace('www', '', $company->url)); ?>


	<div class="row">
		<div class="col-md-6">
		<form method="POST" action="<?php echo e(route('verifyOwnershipForm', [ 'site' => $company->url ])); ?>">
			<?php echo csrf_field(); ?>
			<br>
			<?php echo e(__( 'Enter email for this domain: ' )); ?>

			<br>

			<input type="hidden" name="plan" value="<?php echo e($plan); ?>">

			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="<?php echo e(__("Recipient's username")); ?>" aria-label="Recipient's username" aria-describedby="basic-addon2" required="required" name="username">
			  <div class="input-group-append">
			    <span class="input-group-text" id="basic-addon2"><?php echo e('@'. $company->url); ?></span>
			  </div>
			</div>

			<input type="submit" name="sb" value="<?php echo e(__('Send Verification Email')); ?>" class="btn btn-primary">
		</form>
	</div><!-- /.col-md-6 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/verify-ownership.blade.php ENDPATH**/ ?>