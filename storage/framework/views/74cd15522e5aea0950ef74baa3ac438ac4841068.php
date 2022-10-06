<footer class="container-fluid">
<hr>
<div class="row">
<div class="col">
  <h5><i class="far fa-star"></i> <?php echo e(Options::get_option( 'site_title', 'PHP Trusted Reviews' )); ?></h5>
</div><!-- /.pull-left -->
<div id="arclik" class="col text-right">
  <?php $__currentLoopData = App\Page::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <a style="font-size:12px" href="/p-<?php echo e($page->page_slug); ?>"><?php echo e($page->page_title); ?></a> | 
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <a style="font-size:12px" href="<?php echo e(route('contact')); ?>"><?php echo e(__('Get In Touch')); ?></a> | 
  <a style="font-size:12px" href="<?php echo e(route('sitemap')); ?>"><?php echo e(__('Sitemap')); ?></a>
</div><!-- /.pull-right -->
</div><!-- /.row -->
</footer><?php /**PATH /home2/trustjetreviews/public_html/resources/views/partials/footer.blade.php ENDPATH**/ ?>