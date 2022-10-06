<?php $__env->startSection('section_title'); ?>
	<strong>Pages Manager - Page Update</strong>
	<br/>
	<a href="<?php echo route('admin-cms'); ?>">Pages Overview</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_body'); ?>
	
	<form method="POST">
		<?php echo csrf_field(); ?>


		<dl>
		<dt>Page Title</dt>
		<dd><input type="text" name="page_title" class="form-control" value="<?php echo $p->page_title; ?>"></dd>
		<dt>Page Content</dt>
		<dd><textarea name="page_content" class="textarea form-control" rows="8"><?php echo $p->page_content; ?></textarea></dd>
		<dt>&nbsp;</dt>
		<dd><input type="submit" name="sb_page" class="btn btn-primary" value="Save"></dd>
		</dl>

	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/admin/update-page.blade.php ENDPATH**/ ?>