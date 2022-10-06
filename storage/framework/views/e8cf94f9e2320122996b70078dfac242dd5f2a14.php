<?php $__env->startComponent('mail::message'); ?>
# <?php echo e($data['intromessage']); ?>


<?php echo $data['message']; ?>


<?php $__env->startComponent('mail::button', ['url' => $data['url']]); ?>
<?php echo e($data['buttonText']); ?>

<?php echo $__env->renderComponent(); ?>


<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home2/trustjetreviews/public_html/resources/views/emails/notification.blade.php ENDPATH**/ ?>