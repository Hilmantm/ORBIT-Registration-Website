<?php $__env->startSection('content'); ?>

  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Table With Full Features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="overflow-x: scroll;">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>No HP Siswa</th>
                <th>No HP Ortu</th>
                <th>Sosmed</th>
                <th>Gender</th>
                <th>Data Lain</th>
                <th>Prestasi</th>
                <th>Divisi</th>
              </tr>
              </thead>
              <tbody>
              
              <?php $i = 1; ?>
              <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?php echo e($siswa->Nama); ?></td>
                  <td><?php echo e($siswa->Kelas); ?></td>
                  <td><?php echo e($siswa->NIS); ?></td>
                  <td><?php echo e($siswa->TTL); ?></td>
                  <td><?php echo e($siswa->Alamat); ?></td>
                  <td><?php echo e($siswa->Agama); ?></td>
                  <td><?php echo e($siswa->NoHPSiswa); ?></td>
                  <td><?php echo e($siswa->NoHPOrtu); ?></td>
                  <td><?php echo e($siswa->Sosmed); ?></td>
                  <td><?php echo e($siswa->Gender); ?></td>
                  <td><?php echo e($siswa->DataLain); ?></td>
                  <td><?php echo e($siswa->Prestasi); ?></td>
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
                <th>NIS</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>No HP Siswa</th>
                <th>No HP Ortu</th>
                <th>Sosmed</th>
                <th>Gender</th>
                <th>Data Lain</th>
                <th>Prestasi</th>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>