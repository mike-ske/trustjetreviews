<?php $__env->startSection('section_title'); ?>
	<strong>Approved Reviews</strong>
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'extra_top' ); ?>

<div class="box">
<div class="box-header with-border"><strong>Pending Approval</strong></div>
<div class="box-body">


<?php if($pending_reviews): ?>
	<table class="table table-striped table-bordered table-responsive dataTable">
	<thead>
	<tr>
		<th>ID</th>
		<th>Reviewed Item</th>
		<th>Reviewed By</th>
		<th>Title</th>
		<th>Content</th>
		<th>Date</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $pending_reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>
				<?php echo $r->id; ?>

			</td>
			<td>
				<?php echo e($r->site->url); ?><br>
				<a href="<?php echo e(route('reviewsForSite', ['site' => $r->site->url])); ?>" target="_blank">View Listing</a>
			</td>
			<td>
				<?php echo e($r->user->name ?? 'No name set'); ?><br>
				<?php echo e($r->user->email ?? 'No email set'); ?>

			</td>
			<td>
				<?php echo str_repeat('<i class="fa fa-star"></i>', $r->rating); ?>

				<br>
				<?php echo e($r->review_title); ?>

			</td>
			<td>
				<?php echo e($r->review_content); ?>

			</td>
			<td>
				<?php echo e($r->created_at); ?>

			</td>
			<td>
				<a href="/admin/reviews/approve/<?php echo e($r->id); ?>">Approve</a>
				<br>
				<a href="/admin/reviews/edit/<?php echo e($r->id); ?>">Edit</a>
				<br>
				<a href="/admin/reviews/delete/<?php echo e($r->id); ?>" onclick="return confirm('Are you sure?')">
					Delete
				</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	</table>
<?php else: ?>
	No pending reviews in database.
<?php endif; ?>
	
</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_body'); ?>

<?php if($reviews): ?>
	<table class="table table-striped table-bordered table-responsive dataTable">
	<thead>
	<tr>
		<th>ID</th>
		<th>Reviewed Item</th>
		<th>Reviewed By</th>
		<th>Title</th>
		<th>Content</th>
		<th>Date</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>
				<?php echo $r->id; ?>

			</td>
			<td>
				<?php echo e(@$r->site->url); ?><br>
				<a href="<?php echo e(route('reviewsForSite', ['site' => @$r->site->url])); ?>" target="_blank">View Listing</a>
			</td>
			<td>
				<?php echo e($r->user->name ?? 'No name set'); ?><br>
				<?php echo e($r->user->email ?? 'No email set'); ?>

			</td>
			<td>
				<?php echo str_repeat('<i class="fa fa-star"></i>', $r->rating); ?>

				<br>
				<?php echo e($r->review_title); ?>

			</td>
			<td>
				<?php echo e($r->review_content); ?>

			</td>
			<td>
				<?php echo e($r->created_at); ?>

			</td>
			<td>
				<br>
				<a href="/admin/reviews/edit/<?php echo e($r->id); ?>">Edit</a>
				<br>
				<a href="/admin/reviews/delete/<?php echo e($r->id); ?>" onclick="return confirm('Are you sure?')">
					Delete
				</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	</table>
<?php else: ?>
	No pending reviews in database.
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/admin/reviews.blade.php ENDPATH**/ ?>