<?php $__env->startSection('menu-open', 'menu-open'); ?>

<?php $__env->startSection('menu-active', 'active'); ?>

<?php $__env->startSection('judul', 'Detail Siswa'); ?>

<?php $__env->startSection('routeNavigation'); ?>
    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="breadcrumb-item active"> <a href="<?php echo e(route('Data Pendaftar')); ?>"><?php echo e($routeLocation); ?></a></li>
      <li class="breadcrumb-item active"><?php echo e($key->Nama); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-md-6 col-12">
        <div class="card card-primary">
          <div class="card-header">
            <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <h3 class="card-title">About <?php echo e($key->Nama); ?></h3>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <strong><i class="fa fa-user"></i> Nama</strong>
              <p class="text-muted about-siswa"><?php echo e($key->Nama); ?></p>
              <hr>
              <strong><i class="fa fa-users"></i> Kelas</strong>
              <p class="text-muted about-siswa"><?php echo e($key->Kelas); ?></p>
              <hr>
              <strong><i class="fa fa-list-ol"></i> Nomor Induk Siswa</strong>
              <p class="text-muted about-siswa"><?php echo e($key->NIS); ?></p>
              <hr>
              <strong><i class="fas fa-birthday-cake"></i> Tanggal Lahir</strong>
              <p class="text-muted about-siswa"><?php echo e($key->TTL); ?></p>
              <hr>
              <strong><i class="fas fa-map-marker-alt"></i> Alamat</strong>
              <p class="text-muted about-siswa"><?php echo e($key->Alamat); ?></p>
              <hr>
              <strong><i class="fas fa-asterisk"></i> Agama</strong>
              <p class="text-muted about-siswa"><?php echo e($key->Agama); ?></p>
              <hr>
              <strong><i class="fas fa-phone"></i> No Handphone Siswa</strong>
              <p class="text-muted about-siswa"><?php echo e($key->NoHPSiswa); ?></p>
              <hr>
              <strong><i class="fab fa-line"></i> Sosmed</strong>
              <p class="text-muted about-siswa">
                Instagram : <?php echo e($key->Instagram); ?></i><br>
                Line : <?php echo e($key->Line); ?></i><br>
                Email : <?php echo e($key->Email); ?></i>
              </p>
              <hr>
              <strong><i class="fas fa-transgender"></i> Gender</strong>
              <p class="text-muted about-siswa"><?php echo e($key->Gender); ?></p>
              <hr>
              <strong><i class="fas fa-university"></i> Asal SMP</strong>
              <p class="text-muted about-siswa"><?php echo e($key->AsalSMP); ?></p>
              <hr>
              <strong><i class="far fa-hand-rock"></i> Motivasi</strong>
              <p class="text-muted about-siswa"><?php echo e($key->Motivasi); ?></p>
              <hr>
              <strong><i class="fas fa-graduation-cap"></i> Divisi</strong>
              <p class="text-muted about-siswa"><?php echo e($key->Divisi); ?></p>
              <hr>
              <button class="btn btn-block btn-warning" id="ubah-data" name="UbahData">Ubah Data Siswa</button>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                Hapus Data Siswa
              </button>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      
      <div class="col-md-6 col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" value="<?php echo e($key->Nama); ?>" class="form-control update-event" disabled
                 name="NamaUpdate" placeholder="Nama" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Kelas</label>
                <input type="text" value="<?php echo e($key->Kelas); ?>" class="form-control update-event" disabled
                name="KelasUpdate" placeholder="Kelas" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">NIS</label>
                <input type="number" value="<?php echo e($key->NIS); ?>" class="form-control update-event" disabled
                name="NISUpdate" placeholder="NIS" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="ttl">Tanggal Lahir</label>
                <div class="row container-fluid">
                  <input type="date" value="<?php echo e($key->TTL); ?>" class="form-control update-event" disabled
                  name="TanggalLahirUpdate">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <textarea class="form-control update-event" disabled rows="4" placeholder="Alamat"
                name="AlamatUpdate"><?php echo e($key->Alamat); ?></textarea>
              </div>
              <div class="form-group">
                <label for="">Agama</label>
                <select class="form-control update-event" disabled name="AgamaUpdate">
                  <option value="1">Islam</option>
  								<option value="2">Kristen</option>
  								<option value="3">Protestan</option>
  								<option value="4">Konghucu</option>
  								<option value="5">Hindu</option>
  								<option value="6">Budha</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">No Handphone Siswa</label>
                <input type="number" value="<?php echo e($key->NoHPSiswa); ?>" class="form-control update-event" disabled
                name="NoHPSiswaUpdate" placeholder="No Handphone Siswa" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">No Handphone Orang Tua</label>
                <input type="number" value="<?php echo e($key->NoHPOrtu); ?>" class="form-control update-event" disabled
                name="NoHPOrtuUpdate" placeholder="No Handphone Orang Tua">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Sosmed</label>
                <div class="container-fluid row">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" value="<?php echo e($key->Instagram); ?>" class="form-control update-event" disabled
                    name="InstagramUpdate" placeholder="Instagram">
                  </div>
                </div>
                <div class="container-fluid row">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Line</label>
                    <input type="text" value="<?php echo e($key->Line); ?>" class="form-control update-event" disabled
                    name="LineUpdate" placeholder="Line">
                  </div>
                </div>
                <div class="container-fluid row">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" value="<?php echo e($key->Email); ?>" class="form-control update-event" disabled
                    name="EmailUpdate" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Gender</label>
                <select class="form-control update-event" disabled name="GenderUpdate">
                  <option value="1">Laki-laki</option>
                  <option value="2">Perempuan</option>
                  <option value="3">Lainnya</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Asal SMP</label>
                <input type="text" value="<?php echo e($key->AsalSMP); ?>" class="form-control update-event" disabled
                name="AsalUpdate" placeholder="Asal SMP" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Motivasi</label>
                <input type="text" value="<?php echo e($key->Motivasi); ?>" class="form-control update-event" disabled
                name="MotivasiUpdate" placeholder="Motivasi" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Divisi</label>
                
                <select name="DivisiUpdate" class="form-control update-event" disabled>
                  <option value="1">Web Development</option>
  								<option value="2">Desktop Programming</option>
  								<option value="3">Cinematography</option>
  								<option value="4">Sound Engineering</option>
  								<option value="5">Graphic Design</option>
  								<option value="6">IT Support & IOT</option>
                </select>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="submit" disabled id="update-btn">Submit</button>
              <button type="button" class="btn btn-danger" disabled id="cancel-btn">Cancel</button>
              <input type="hidden" name="_method" value="PUT">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Warning!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hapus Data <?php echo e($key->Nama); ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="" method="post">
          <button type="submit" onsubmit="return submitValidation()" class="btn btn-block btn-danger from-control"
          id="hapus-data"
          name="_method" value="DELETE">Hapus</button>
          <?php echo csrf_field(); ?>
          <input type="hidden" name="_method" value="DELETE">
        </form>
      </div>
    </div>
  </div>
</div>

  <script src="<?php echo e(asset('dist/js/tambahan.js')); ?>"></script>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>