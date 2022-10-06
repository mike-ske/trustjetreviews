<?php $__env->startSection( 'content' ); ?>

<div class="container">
<div class="row">
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
<h2><?php echo e(__('My Embedded Codes')); ?></h2>
<hr>

<div class="row">
<div class="col-xs-12 col-lg-4">
<h4><?php echo e(__('Customize appearance')); ?></h4>
<form method="POST" id="iframe-customizer">
	<?php echo csrf_field(); ?>
	<dl>
		<dt><?php echo e(__('General Background Color')); ?></dt>
		<dd><input type="text" name="generalBG" class="form-control cp" value="<?php echo e(Options::get_option('generalBG_' . $company->id )); ?>"></dd>
		<dt><?php echo e(__('Testimonial Background Color')); ?></dt>
		<dd><input type="text" name="testiGB" class="form-control cp" value="<?php echo e(Options::get_option('testiGB_' . $company->id )); ?>"></dd>
		<dt><?php echo e(__('General Font Color')); ?></dt>
		<dd><input type="text" name="generalFC" class="form-control cp" value="<?php echo e(Options::get_option('generalFC_' . $company->id )); ?>"></dd>
		<dt><?php echo e(__('Testimonial Font Color')); ?></dt>
		<dd><input type="text" name="testiFC" class="form-control cp" value="<?php echo e(Options::get_option('testiFC_' . $company->id )); ?>"></dd>
		<dt><?php echo e(__('URL Font Color')); ?></dt>
		<dd><input type="text" name="urlFC" class="form-control cp" value="<?php echo e(Options::get_option('urlFC_' . $company->id )); ?>"></dd>
	</dl>
</form>
</div><!-- /.col-xs-12 col-lg-6 -->

<div class="col-xs-12 col-lg-8">
<h4><?php echo e(__('Preview')); ?></h4>
<?php echo '<iframe id="preview" src="'.route('embedded', [ 'site' => $company ]).'" frameborder="0" style="width: 100% !important;" height="400" scrolling="no"></iframe>'; ?>

</div><!-- ./preview -->

</div><!-- ./row -->
<br>

<h4><?php echo e(__('My Code')); ?></h4>
<div class="card card-body bg-warning">
	<?php echo e(__('Copy & Paste this code where you want the reviews to show')); ?>

</div><!-- /.well -->
<br>
<textarea class="form-control" rows="3">
<?php echo e('<iframe src="'.route('embedded', [ 'site' => $company ]).'" frameborder="0" width="450" height="350" scrolling="no"></iframe>'); ?>

</textarea>

<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'extraCSS' ); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection( 'extraJS' ); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>

<script>
	$(function() {
		$( '.cp' ).colorpicker();

		$('#iframe-customizer').change(function(el) {

			var inpField = el.target.name;
			var inpValue = el.target.value;
			var token = $( 'input[name=_token]' ).val();

			$.post( '/account/setCompanyWidgetColors', {'field': inpField, 'value':inpValue, '_token': token }, function(resp) {
				
				if( typeof resp.success !== undefined ) {
					$( '#preview' ).attr( 'src', function ( i, val ) { return val; });
				}

				if( resp.error !== undefined ) {
					alert( resp.error );
				}

			});

		});

	});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/account/embedded-codes.blade.php ENDPATH**/ ?>