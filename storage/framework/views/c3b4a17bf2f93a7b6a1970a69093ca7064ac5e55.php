<div class="container-fluid inner-search">
<div class="container">
  <div class="searchProcessing"></div><!-- /.searchProcessing -->
  <form method="GET" action="<?php echo e(route('search')); ?>" id="searchUser">
  <div class="row">
    <div class="col-md-3 col-1">&nbsp;</div>
    <div class="col-md-6 col-9 col-md-6 no-padding">
        <input type="text" name="searchQuery" class="form-control" placeholder="<?php echo e(__('Search for a company')); ?>" required>
    </div><!-- /.col-7 -->
      <div class="col-md-1 col-2 no-padding">
          <input type="submit" name="searchAction" class="btn" style="background:rgb(13,183,123) !important;"  value="<?php echo e(__('Go')); ?>">
      </div><!-- /.col-md-1 no-padding -->
    </div><!-- /.row -->
  </form>
</div>
</div><!-- /.container-fluid -->
<br/><?php /**PATH /home2/trustjetreviews/public_html/resources/views/partials/inner-header.blade.php ENDPATH**/ ?>