<?php $__env->startSection('judul'); ?>
  <?php echo e($routeLocation); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
        <div class="inner">
          <h3><?php echo e($siswa->count()); ?></h3>

          <p>Data Pendaftar</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="<?php echo e(route('Data Pendaftar')); ?>" class="small-box-footer">
          More info <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>