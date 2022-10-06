<?php $__env->startSection( 'content' ); ?>

<div class="container" id="logincont">
<div class="row" id="rowlog">
<div class="col-10 mx-auto">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route( 'myaccount' )); ?>"><?php echo e(__('My Reviews')); ?></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link active" href="<?php echo e(route( 'myprofile' )); ?>"><?php echo e(__('My Profile')); ?></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route( 'mycompany' )); ?>"><?php echo e(__('My Company')); ?></a>
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
<h2><?php echo e(__('My Profile')); ?></h2>
<hr>

<?php if(isset(auth()->user()->avatar)): ?>
  <div style="width:auto;height:auto;margin:10px auto;display:flex;align-items:center;justify-content:center">
    <span clas="rounded w-100 h-100" style="width:100px;height:100px;border-radius:50%;background-position:center;overflow:hidden">
      <img src="<?php echo e((auth()->user()->avatar) ? auth()->user()->avatar : './public/storage/'.auth()->user()->profilePic); ?>" style="width:100%;height:100%">
    </span>
  </div>
<?php else: ?>
   <div style="width:auto;height:auto;margin:10px auto;display:flex;align-items:center;justify-content:center">
    <span clas="rounded w-100 h-100" style="width:100px;height:100px;border-radius:50%;background-position:center;overflow:hidden">
      <img src="<?php echo e($r->user->profileThumb ?? (new App\User)->getProfileThumbAttribute()); ?>" style="width:100%;height:100%">
    </span>
  </div>
<?php endif; ?>

<form method="POST" action="<?php echo e(route('updateprofile')); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="name"><?php echo e(__('Name')); ?></label>
    <input type="text" name="name" value="<?php echo e(auth()->user()->name); ?>" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="email"><?php echo e(__('Email')); ?></label>
    <input type="email" name="email" value="<?php echo e(auth()->user()->email); ?>" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="file"><?php echo e(__('Profile Pic')); ?></label>
    <input type="file" name="profilePic" class="form-control" accept="image/*">
  </div>
  <div class="form-group">
    <label for="password"><?php echo __('Password <small>(leave empty to keep current)</small>'); ?></label>
    <input type="password" name="password" value="" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fa fa-btn fa-sign-in"></i><?php echo e(__('Update My Profile')); ?>

  </button>
</form>

</div><!-- /.card -->
</div><!-- /.col-10 -->


</div><!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'base' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/account/my-profile.blade.php ENDPATH**/ ?>