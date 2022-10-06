<?php $__env->startSection( 'content' ); ?>

<div class="container" id="logincont">
<div class="row" id="rowlog">
<div class="col-10 mx-auto">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route( 'myaccount' )); ?>"><?php echo e(__('My Reviews')); ?></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route( 'myprofile' )); ?>"><?php echo e(__('My Profile')); ?></a>
  </li>

  <li class="nav-item">
    <a class="nav-link active" href="<?php echo e(route( 'mycompany' )); ?>"><?php echo e(__('My Company')); ?></a>
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
<h2><?php echo e(__('My Company')); ?></h2>
<hr>

<?php if($company): ?>

<table>
	<thead>
		<tr>
			<th><?php echo e(__('URL')); ?></th>
			<th><?php echo e(__('Name')); ?></th>
			<th><?php echo e(__('Location')); ?></th>
			<th><?php echo e(__('Manage')); ?></th>
			<th><?php echo e(__('Embed Reviews')); ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<a href="<?php echo e(route('reviewsForSite', ['site'=> $company->url])); ?>">
					<?php echo e($company->url); ?>

				</a>
			</td>
			<td><strong><?php echo e($company->business_name); ?></strong></td>
			<td><?php echo e($company->location); ?></td>
			<td>
				<a href="<?php echo e(route('manageCompany')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Manage Profile')); ?></a><br>
			</td>
			<td>
				<a href="<?php echo e(route('myEmbeddedCodes')); ?>" class="btn btn-sm btn-warning"><?php echo e(__('Embedded Codes')); ?></a>
			</td>
		</tr>
	</tbody>
</table>

<?php else: ?>
<div class="well">
	<?php echo e(__( 'You did not claim any company.' )); ?>

</div><!-- /.well -->

<?php endif; ?>

</div><!-- /.card -->
</div><!-- /.col-10 -->


</div><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/account/my-company.blade.php ENDPATH**/ ?>