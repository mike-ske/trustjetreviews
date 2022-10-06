<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="<?php echo e(route('home')); ?>">

    <?php if($logo = Options::get_option( 'site.logo' )): ?> 
      <img src="/public/<?php echo e($logo); ?>" height="30" alt="site logo"/> 
    <?php else: ?> 
      <i class="far fa-star"></i>
    <?php endif; ?> 

  <?php if( Options::get_option( 'enableSiteTitle', 'Yes') == 'Yes'  ): ?>
    <?php echo e(Options::get_option( 'site_title', 'PHP Trusted Reviews' )); ?>

  <?php endif; ?>

</a>

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
<ul class="navbar-nav">
  <li class="nav-item <?php if(isset($activeNav) && ($activeNav == 'home')): ?> active <?php endif; ?>">
    <a class="nav-link" href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a>
  </li>
  <li class="nav-item <?php if(isset($activeNav) && ($activeNav == 'categories')): ?> active <?php endif; ?>">
    <a class="nav-link" href="<?php echo e(route('browse-category', ['slug' => 'top-companies'])); ?>"><?php echo e(__('Browse Companies')); ?></a>
  </li>
  <li class="nav-item <?php if(isset($activeNav) && ($activeNav == 'submit')): ?> active <?php endif; ?>">
    <a class="nav-link" href="<?php echo e(route('addCompany')); ?>"><?php echo e(__('Add Company')); ?></a>
  </li>
  <?php if( auth()->guest() ): ?>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Signup')); ?></a>
  </li>
  <?php else: ?>
  <li class="nav-item">
    <a class="nav-link <?php if(isset($activeNav) && ($activeNav == 'account')): ?> active <?php endif; ?>" href="<?php echo e(route('myaccount')); ?>"><?php echo e(__('My Account')); ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
  </li>
  <?php endif; ?>
</ul>
</div>
</nav>

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo csrf_field(); ?></form><?php /**PATH /home2/trustjetreviews/public_html/resources/views/partials/navi.blade.php ENDPATH**/ ?>