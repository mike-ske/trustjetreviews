<?php $__env->startSection( 'content' ); ?>

<div class="container card">
	<h4><?php echo e(__( 'Companies Plans' )); ?></h4>
	
	<?php echo e(__( 'Show that you care about your customers. Subscribe as a premium company and claim your page to take advantage of the membership.' )); ?>

	
	<div class="text-inline">
	<?php echo __( sprintf('In order to %s signup %s simply find your company on our site and click on Claim Company', '<strong>', '</strong>' )); ?>

	</div>
	
	<hr >

    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo e(__('Monthly')); ?></h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>
                            <?php echo e(Options::get_option('currency_symbol')); ?><?php echo e(Options::get_option( 'monthlyPrice' )); ?><span class="subscript">/<?php echo e(__('month')); ?></span></h1>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                <?php echo e(__('Manage One Company')); ?>

                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <?php echo e(__('Email Notifications when someone posts a new review to your company')); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo e(__('Add your own company description')); ?>

                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <?php echo e(__('No ADS on your company page')); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo e(__('Premium Company Listing')); ?>

                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <?php echo e(__('Reply to reviews in the name of your company')); ?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer text-center">
                    <?php if( request()->has( 'company' ) ): ?>
                        <a href="<?php echo e(route('companyClaim', [ 'site' => request()->company, 'plan' => 'monthly' ])); ?>" class="btn btn-success"><?php echo e(__( 'Select Monthly Plan' )); ?></a>
                    <?php endif; ?>
				</div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo e(__('Yearly')); ?></h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1><?php echo e(Options::get_option('currency_symbol')); ?><?php echo e(Options::get_option( 'yearlyPrice' )); ?><span class="subscript">/<?php echo e(__('year')); ?></span></h1>
                    </div>
                    <table class="table">
                        <tr>
                            <td>
                                <?php echo e(__('Manage One Company')); ?>

                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <?php echo e(__('Email Notifications when someone posts a new review to your company')); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo e(__('Add your own company description')); ?>

                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <?php echo e(__('No ADS on your company page')); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo e(__('Premium Company Listing')); ?>

                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <?php echo e(__('Reply to reviews in the name of your company')); ?>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <?php if( request()->has( 'company' ) ): ?>
                        <a href="<?php echo e(route('companyClaim', [ 'site' => request()->company, 'plan' => 'yearly' ])); ?>" class="btn btn-success"><?php echo e(__( 'Select Yearly Plan' )); ?></a>
                    <?php else: ?>
                        <i class="fa fa-exclamation-triangle"></i> <?php echo e(__('Browse our site and find your company to claim and get any plan')); ?>

                    <?php endif; ?>
                 </div>
            </div>
        </div>
        
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/companies-plans.blade.php ENDPATH**/ ?>