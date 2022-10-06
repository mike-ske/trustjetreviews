<?php $__env->startSection('section_title'); ?>
	<strong>Approved Companies</strong>
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'extra_top' ); ?>

<div class="box">
<div class="box-header with-border"><strong>Pending Approval</strong></div>
<div class="box-body">


<?php if($pending_companies): ?>
	<table class="table table-striped table-bordered table-responsive dataTable">
	<thead>
	<tr>
		<th>ID</th>
		<th>URL</th>
		<th>Name</th>
		<th>Submitted By</th>
		<th>Location</th>
		<th>Date</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $pending_companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>
				<?php echo $c->id; ?>

			</td>
			<td>
				<?php echo e($c->url); ?><br>
				<a href="http://<?php echo e($c->url); ?>" target="_blank">View Site</a> | 
				<a href="<?php echo e(route('reviewsForSite', ['site' => $c->id])); ?>" target="_blank">View Listing</a>
			</td>
			<td>
				<?php echo e($c->business_name); ?><br>
				Category: <?php echo e($c->category->name); ?>

			</td>
			<td>
				<?php echo e($c->submitter->name); ?><br>
				<?php echo e($c->submitter->email); ?>

			</td>
			<td>
				<?php echo e($c->location); ?>

			</td>
			<td>
				<?php echo e($c->created_at); ?>

			</td>
			<td>
				<a href="/admin/companies/approve/<?php echo e($c->id); ?>">Approve</a>
				<br>
				<a href="/admin/companies/delete/<?php echo e($c->id); ?>" onclick="return confirm('Are you sure?')">
					Delete
				</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	</table>
<?php else: ?>
	No pending companies in database.
<?php endif; ?>
	
</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_body'); ?>

<?php if($companies): ?>
	<table class="table table-striped table-bordered table-responsive dataTable">
	<thead>
	<tr>
		<th>ID</th>
		<th>URL</th>
		<th>Name</th>
		<th>Claimed</th>
		<th>Location</th>
		<th>Date</th>
		<th>Actions</th>
	</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td>
				<?php echo $c->id; ?>

			</td>
			<td>
				<?php echo e($c->url); ?><br>
				<a href="http://<?php echo e($c->url); ?>" target="_blank">View Site</a> | 
				<a href="<?php echo e(route('reviewsForSite', ['site' => $c->url])); ?>" target="_blank">View Listing</a>
			</td>
			<td>
				<?php echo e($c->business_name); ?><br>
				Category: <?php echo e($c->category->name); ?>

			</td>
			<td>
				<?php if( $c->claimer()->exists() ): ?>
				<?php echo e($c->claimer->name); ?><br>
				<?php echo e($c->claimer->email); ?>

				<?php else: ?>
				Not Claimed
				<?php endif; ?>
			</td>
			<td>
				<?php echo e($c->location); ?>

			</td>
			<td>
				<?php echo e($c->created_at); ?>

			</td>
			<td>
				<a href="/admin/companies/edit/<?php echo e($c->id); ?>">Edit</a>
				<br>
				<a href="/admin/companies/delete/<?php echo e($c->id); ?>" onclick="return confirm('Are you sure you want to remove this company and all its reviews?')">Delete</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	</table>
<?php else: ?>
	No approved companies in database.
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/admin/companies.blade.php ENDPATH**/ ?>