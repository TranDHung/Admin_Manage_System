
<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'This is page title'); ?>
<?php $__env->startSection('content'); ?>
    content .....
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout.pages-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mini-game\resources\views/example-page.blade.php ENDPATH**/ ?>