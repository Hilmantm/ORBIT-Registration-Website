<?php $__env->startSection('routeNavigation'); ?>
  <li class="breadcrumb-item active"><?php echo e($routeLocation); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>