<?php $__env->startSection('judul'); ?>
  <?php echo e($routeLocation); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu-open', 'menu-open'); ?>

<?php $__env->startSection('menu-active', 'active'); ?>

<?php $__env->startSection('routeNavigation'); ?>
  <li class="breadcrumb-item active"><?php echo e($routeLocation); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Instagram</th>
                <th>Line</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Divisi</th>
              </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>
              <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><a href="<?php echo e($routeLocation . "/" . $siswa->IdAnggota); ?>"><?php echo e($siswa->Nama); ?></a></td>
                  <td><?php echo e($siswa->Kelas); ?></td>
                  <td><?php echo e($siswa->Instagram); ?></td>
                  <td><?php echo e($siswa->Line); ?></td>
                  <td><?php echo e($siswa->Email); ?></td>
                  <td><?php echo e($siswa->Gender); ?></td>
                  <td><?php echo e($siswa->Divisi); ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Instagram</th>
                <th>Line</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Divisi</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>


  <div class="col-lg-4 col-8">
    <div class="container alert alert-info alert-dismissible">
      <h5>
        <i class="icon fa fa-info"></i>
         Download
      </h5>
      Anda dapat mendownload data siswa ORBIT dengan klik tombol dibawah ini
      <form action="" method="post" enctype="multipart/form-data">
        <a href="<?php echo e(route('Export Data Pendaftar')); ?>" class="btn btn-block btn-primary btn-lg" name="exportData" style="margin-top: 10px; text-decoration: none;">Download</a>
      </form>
    </div>
  </div>
  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>