<?php $__env->startSection('content'); ?>
<div class="container"  id="logincont">
    <div class="row justify-content-center" id="rowlog">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <div class="row">
                        
                        <div id="logfm" class="col-md-6 col-sm-12" style="border-right:1px solid #ddd">
                            <div class="social-box" id="social-box" style="max-width:100%">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?php echo e(route('social-auth', 'facebook')); ?>" style="background-color:white !important; border-color:#ccc;color:#333; " title="Facebook" class="btn btn-block btn-social btn-lg btn-facebook">
                                            <img style="margin: 5px;padding: 3px;width: 30px;" src="/public/star/facebook.png"> Sign up with Facebook
                                        </a>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;margin-bottom: 20px">
                                    <div class="col-md-12">
                                        <a href="<?php echo e(route('social-auth', 'google')); ?>" style="background-color:white !important;color:#333; border-color:#ccc" title="Google" class="btn btn-block btn-social btn-lg btn-google-plus">
                                            <img style="margin: 5px;padding: 3px;width: 30px;" src="/public/star/google.png"> Sign up with Google
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?php echo e(route('social-auth', 'linkedin')); ?>" style="background-color:white !important; border-color:#ccc;color:#333; " title="Windows Live Hotmail" class="btn btn-block btn-social btn-lg btn-linkedin">
                                            <img style="margin: 5px;padding: 3px;width: 30px;" src="/public/star/linkedin.png"> Sign up with LinkedIn
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-12">
                            <form method="POST" action="<?php echo e(route('register')); ?>">
                                <?php echo csrf_field(); ?>
        
                                <div class="form-group row">
                                    <div class="col-md-12 col-lg-12">
                                        <input id="name" placeholder="Enter fullname" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
        
                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12 col-lg-12">
                                        <input id="email" placeholder="Enter email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
        
                                        <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12 col-lg-12">
                                        <input id="password" placeholder="Enter password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
        
                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12 col-lg-12">
                                        <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Register')); ?>

                                        </button>
        
                                        <hr>
                                         <?php echo _("Already have an account?"); ?> 
                                         <a href='<?php echo e(route('login')); ?>' class="text-primary"><?php echo e(__('Login')); ?></a>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/trustjetreviews/public_html/resources/views/auth/register.blade.php ENDPATH**/ ?>