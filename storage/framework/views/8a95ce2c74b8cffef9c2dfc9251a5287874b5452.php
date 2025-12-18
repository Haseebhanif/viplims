<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php echo $__env->make('frontend.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('frontend.partials.footer_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /home/saasthemes/public_html/domains/viplims.com/resources/views/layouts/auth.blade.php ENDPATH**/ ?>