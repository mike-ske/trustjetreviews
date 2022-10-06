<?php $__env->startSection('section_title'); ?>
<strong>Pages Manager</strong>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_body'); ?>
<table class="table dataTable">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Updated At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo $p->id; ?></td>
<td><a href="<?php echo e(App\Page::slug($p)); ?>" target="_blank"><?php echo e($p->page_title); ?></a></td>
<td><?php echo $p->updated_at; ?></td>
<td>
	<a href="/admin/cms-edit/<?php echo $p->id; ?>"><i class="glyphicon glyphicon-edit"></i></a> 
	<a href="/admin/cms-delete/<?php echo $p->id; ?>" data-method="delete" data-confirm="Are you sure?"><i class="glyphicon glyphicon-remove"></i></a> 
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_bottom'); ?>
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="box">
<div class="box-header with-border"><strong>Create Page</strong></div>
<div class="box-body">
<form method="POST">
<?php echo csrf_field(); ?>

<dl>
<dt>Page Title</dt>
<dd><input type="text" name="page_title" class="form-control" required="required" value="<?php echo e(old('page_title')); ?>"></dd>
<dt>Page Content</dt>
<dd><textarea name="page_content" class="textarea form-control" rows="8"><?php echo e(old('page_content')); ?></textarea></dd>
<dt>&nbsp;</dt>
<dd><input type="submit" name="sb_page" class="btn btn-primary" value="Save"></dd>
</dl>
</form>
</div>
<div class="box-footer"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/admin/pages.blade.php ENDPATH**/ ?>