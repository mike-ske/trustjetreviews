<?php $__env->startSection('section_title'); ?>
<strong>Payments Configuration</strong>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section_body'); ?>

<form method="POST" enctype="multipart/form-data">

<div class="row">
	<div class="col-xs-6">
		<strong class="text-danger text-lg">PLEASE NOTE: THESE MUST MATCH YOUR PRICES ON PADDLE</strong>
	<dl>
		<dt>Monthly Plan Price</dt>
		<dd>
			<input type="number" name="monthlyPrice" value="<?php echo e(Options::get_option('monthlyPrice')); ?>" class="form-control">
		</dd>
		
		<dt>Yearly Plan Price</dt>
		<dd>
			<input type="number" name="yearlyPrice" value="<?php echo e(Options::get_option('yearlyPrice')); ?>" class="form-control">
		</dd>
	</dl>
	</div>
	<div class="col-xs-6">
	<dl>
		<dt>Currency Symbol</dt>
		<dd>
			<input type="text" name="currency_symbol" value="<?php echo e(Options::get_option('currency_symbol')); ?>" class="form-control">
		</dd>

		<dt>Currency ISO Code <small><a href="https://www.xe.com/iso4217.php" target="_blank">ISO List</a></small></dt>
		<dd>
			<input type="text" name="currency_code" value="<?php echo e(Options::get_option('currency_code')); ?>" class="form-control">
		</dd>
		<br>
		
	</dl>
	</div>
</div>

	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra_bottom'); ?>

<div class="row">
	<?php echo csrf_field(); ?>

	
	<div class="col-xs-12 col-md-12">
		<div class="box">
			<div class="box-header with-border"><strong>Google Maps (Places API KEY)</strong></div>
			<div class="box-body">
			<dl>
			<dt>GMAPS Places API KEY</dt>
			<dd><input type="text" name="mapsApiKey" value="<?php echo e(Options::get_option('mapsApiKey')); ?>" class="form-control"></dd>
			</dl>
			</div>
		</div>
	</div>

</div>

<div class="row">
	<div class="col-xs-12 col-md-6">
		<div class="box">
			<div class="box-header with-border"><strong>SEO Configuration</strong></div>
			<div class="box-body">
			<dl>
			<dt>SEO Title Tag</dt>
			<dd><input type="text" name="seo_title" value="<?php echo e(Options::get_option('seo_title')); ?>" class="form-control"></dd>
			<dt>SEO Description Tag</dt>
			<dd><input type="text" name="seo_desc" value="<?php echo e(Options::get_option('seo_desc')); ?>" class="form-control"></dd>
			<dt>SEO Keywords</dt>
			<dd><input type="text" name="seo_keys" value="<?php echo e(Options::get_option('seo_keys')); ?>" class="form-control"></dd>
			<dt>Extra Javascript (added before closing <?php echo e('<head>'); ?> tag. Ie. Analytics,etc.)</dt>
			<dd><textarea name="extra_js" class="form-control" rows="5"><?php echo e(Options::get_option('extra_js')); ?></textarea></dd>
			</dl>
			</div>
		</div>
	</div><!-- col-md<->xs -->

	<div class="col-xs-12 col-md-6">
		<div class="box">
			<div class="box-header with-border"><strong>Site Configuration</strong></div>
			<div class="box-body">
			<dl>
				<dt>Admin Email</dt>
				<dd>
					<input type="text" name="adminEmail" value="<?php echo e(Options::get_option('adminEmail')); ?>" class="form-control">
				</dd>
				<dt>Site Title (appears in navigation bar)</dt>
				<dd><input type="text" name="site_title" value="<?php echo e(Options::get_option('site_title')); ?>" class="form-control"></dd>
				<dt>Homepage Headline</dt>
				<dd><input type="text" name="site.description" value="<?php echo e(Options::get_option('site_description')); ?>" class="form-control"></dd>
				<dt>Homepage SubHeadline</dt>
				<dd><input type="text" name="site.belowDescription" value="<?php echo e(Options::get_option('site_belowDescription')); ?>" class="form-control"></dd>
				<dt>Homepage Header Image</dt>
				<dd><input type="file" name="homepage_header_image" class="form-control"></dd>
				<dt>Logo Image <small>(Recommended size: 45x45px, can be any size as long as height is 45px)</small></dt>
				<dd><input type="file" name="logo_image" class="form-control"></dd>
				<dt>
					Keep Site Title After Logo? 
					<small>(selecting No, will only show logo without text)</small>
				</dt>
				<dd>
					<select name="enableSiteTitle">
						<option value="Yes" <?php if(Options::get_option('enableSiteTitle') == 'Yes'): ?> selected <?php endif; ?>>Yes</option>
						<option value="No" <?php if(Options::get_option('enableSiteTitle') == 'No'): ?> selected <?php endif; ?>>No</option>
					</select>
				</dd>
			</dl>
			</div><!-- BODY FONT_COLOR -->
		</div>
	</div><!-- color setup -->

	<div class="col-xs-6">
		<input type="submit" name="sb_settings" value="Save" class="btn btn-block btn-primary">	
	</div>

	</form>

</div><!-- ./row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/admin/configuration.blade.php ENDPATH**/ ?>