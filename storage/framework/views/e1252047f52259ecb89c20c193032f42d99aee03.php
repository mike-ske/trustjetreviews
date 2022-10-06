<?php $__env->startSection( 'content' ); ?>

<div class="container" id="logincont">
<div class="row" id="rowlog">
<div class="col-10 mx-auto">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="<?php echo e(route( 'myaccount' )); ?>"><?php echo e(__('My Reviews')); ?></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route( 'myprofile' )); ?>"><?php echo e(__('My Profile')); ?></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route( 'mycompany' )); ?>"><?php echo e(__('My Company')); ?></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route( 'mybilling' )); ?>"><?php echo e(__('My Billing')); ?></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route( 'logout' )); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><?php echo e(__('Log Out')); ?></a>
  </li>
</ul>
</div><!-- /.col-10 card -->

<div class="col-10 mx-auto">
<div class="card">
<h2><?php echo e(__('My Reviews')); ?></h2>

<?php if( $myreviews->count() ): ?>

<div class="table-responsive">
<table class="table table-alt">
<thead>
	<tr>
		<th><?php echo e(__('Company')); ?></th>
		<th><?php echo e(__('Review Title')); ?></th>
		<th><?php echo e(__('Rating')); ?></th>
		<th><?php echo e(__('Review Date')); ?></th>
		<th><?php echo e(__('Edit')); ?></th>
		<th><?php echo e(__('Delete')); ?></th>
	</tr>
</thead>
	<?php $__currentLoopData = $myreviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	
	
	<tr>
		<td>
			<a href="<?php echo e(route('reviewsForSite', $p->site->url ?? 'No url set')); ?>">
				<?php echo e($p->site->business_name ?? 'No business name'); ?><br>
				<small><?php echo e($p->site->url ?? 'No url set'); ?></small>
			</a>
		</td>
		<td>
			<?php echo e($p->review_title); ?>

		</td>
		<td>
			<?php echo str_repeat('<i class="fa fa-star"></i>', $p->rating); ?>

			<br>
			<small class="text-muted">
				<?php echo e(number_format($p->rating,2)); ?>/5.00
			</small>
		</td>
		<td>
			<?php echo e($p->created_at); ?><br>
			<?php if( $p->publish == 'Yes' ): ?>
				<small class="text-success"><?php echo e(__( 'Published' )); ?></small>
			<?php else: ?>
				<small class="text-danger"><?php echo e(__( 'Pending Review' )); ?></small>
			<?php endif; ?>
		</td>
		<td>
			<a href="<?php echo e(route('updateReview', ['reviewId' => $p->id])); ?>">
				<i class="fa fa-edit"></i>
			</a>
		</td>
		<td>
			<a href="<?php echo e(route('deleteReview', ['reviewId' => $p->id])); ?>" onclick="return confirm('<?php echo e(__("Are you sure?")); ?>')">
				<i class="fa fa-trash"></i>
			</a>
		</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div><!-- /.table-responsive -->
<?php else: ?>
	<div class="jumbotron">
		<h4><?php echo e(__("You didn't post any reviews yet.")); ?></h4>
	</div>
<?php endif; ?>
</div><!-- /.card -->
</div><!-- /.col-10 -->


</div><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/account/my-reviews.blade.php ENDPATH**/ ?>