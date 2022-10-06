<?php $__env->startSection( 'content' ); ?>

<div class="container">
    <p>
        <h3>
        <?php echo e(__('Search Results: ')); ?><span class="text text-success"><em>"<?php echo e(request('searchQuery')); ?>"</em></span>
        </h3>
    </p>

    <div class="row">
    <div class="col-md-8">

    <?php $__empty_1 = true; $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      
      <div class="card">
      <h5><?php echo e($site->business_name); ?></h5>
      <span><i class="fa fa-globe"></i> <?php echo e($site->location); ?></span>
      <div class="row">
        <div class="col-4">
                <h5 class="text-warning">
                    
		            	<?php if( $site->reviews->avg('rating') === 0 ): ?>
                            <img src="/public/star/6.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 1 ): ?>
                            <img src="/public/star/1.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 2 ): ?>
                            <img src="/public/star/2.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 3 ): ?>
                            <img src="/public/star/3.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 4 ): ?>
                            <img src="/public/star/4.svg" width="300"style="width:120px" alt="">
                        <?php elseif( $site->reviews->avg('rating') === 5 ): ?>
                            <img src="/public/star/5.svg" width="300"style="width:120px" alt="">
                        <?php endif; ?>
                        
                  
                    <span class="badge badge-light">
                      <?php echo e(number_format($site->reviews->avg('rating'),2)); ?>/5.00
                  </span>
              </h5>
            </div>
            <div class="col-8">
          <h5 class="text-muted"><?php echo e($site->reviews->count()); ?> <?php echo e(__('reviews')); ?></h5>
        </div>
          </div>
      <hr>
          <div class="row">
      <?php $__empty_2 = true; $__currentLoopData = $site->reviews()->take(2)->orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
        <div class="col-6">
                <h6 class="text-muted"><?php echo e($r->review_title); ?></h6>
                <small><?php echo e(substr( $r->review_content, 0, 70 )); ?>....</small>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
            <h6 class="text-muted">&nbsp;&nbsp;&nbsp; <?php echo e(__( 'No reviews yet' )); ?></h6>
          <?php endif; ?> 
          </div>
      
      <hr>
          <a href="<?php echo e(route( 'reviewsForSite', [ 'site' => $site ] )); ?>" class="text-success"><?php echo e(__('Read all reviews for') . ' ' . $site->url); ?></a>
    </div><!-- ./card -->
    <br>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <span class="text text-success">
              <h5>
                    <?php echo e(__('Sorry, no matching results found')); ?>

              </h5>
          </span>
            <!-- /.col-md-4 -->
    
          <?php $__env->startComponent('components/add-new-site'); ?> <?php echo $__env->renderComponent(); ?>
          <!-- /.well -->
    <?php endif; ?>

    </div>
    </div>
    <!-- /.text-success -->
</div><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/app.local/resources/views/search/results.blade.php ENDPATH**/ ?>