<?php $__env->startSection('content'); ?>
<div class="container add-paddings">
<div class="card">
        <h3 class="heading"><i class="glyphicon glyphicon-lock"></i> <?php echo e(__('Login')); ?></h3>
        
        <?php echo $message; ?>


		<form method="POST" action="/admin/login">
		    <?php echo csrf_field(); ?>


		    <div>
		        <?php echo e(__('User')); ?>

		        <input type="text" name="ausername" class="form-control">
		    </div>

		    <div>
		        <?php echo e(__('Password')); ?>

		        <input type="password" name="apassword" class="form-control">
		    </div>

		    <div>
		    	<br />
		        <button type="submit" class="btn btn-primary"><?php echo e(__('Login')); ?></button>
		    </div>
		</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/admin-login.blade.php ENDPATH**/ ?>