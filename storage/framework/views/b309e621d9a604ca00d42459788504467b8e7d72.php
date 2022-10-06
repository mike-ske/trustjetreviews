<?php if( Options::get_option( 'homepage_header_image' ) ): ?>
<style>
.homepage-header {
    margin-top: -10px;
    background: rgb(15,15,16);
    max-height: 100%;
    /*background-image: url('/public/<?php echo e(Options::get_option( 'homepage_header_image' )); ?>');*/
}
</style>
<?php endif; ?>

<div class="homepage-header">
<div class="container">
  <div class="homepage-header-container">
  <h1 class="display-5 text-center">
    <span style="color: rgb(255,255,255); border-radius: 6px; padding: 4px;">
      <?php echo e(Options::get_option( 'site_description', '#1 Community Trusted Reviews' )); ?>

    </span><!-- /.label label-primary -->
  </h1>
  <h3 class="text-center">
    <span class="badge " style="color: rgb(255,255,255);"><?php echo e(Options::get_option( 'site_belowdescription', 'From People Like You' )); ?></span>
  </h3>
  <div class="searchProcessing"></div><!-- /.searchProcessing -->
  <form method="GET" action="<?php echo e(route('search')); ?>" id="searchUser">
  <div class="row">
    <div class="col-md-3 col-1">&nbsp;</div><!-- /.col-md-1 -->
    <div class="col-md-6 col-8 no-padding">
        <input type="text" name="searchQuery" class="form-control search-padding" placeholder="<?php echo e(__('Search for a company')); ?>" required>
    </div><!-- /.col-7 -->
      <div class="col-md-1 col-2 no-padding">
          <input type="submit" name="searchAction" style="background:rgb(13,183,123) !important;" class="btn btn-block search-btn-padding" value="<?php echo e(__('Go')); ?>">
      </div><!-- /.col-md-1 no-padding -->
    </div><!-- /.row -->
  </form>
  </div><!-- /.homepage-header-container -->
</div>
</div><!-- ./jumbotron--><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/app.local/resources/views/partials/home-header.blade.php ENDPATH**/ ?>