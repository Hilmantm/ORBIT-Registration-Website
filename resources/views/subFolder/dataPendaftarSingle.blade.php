@extends('../layouts/dashboard')

@section('menu-open', 'menu-open')

@section('menu-active', 'active')

@section('judul', 'Detail Siswa')

@section('routeNavigation')
    @foreach ($siswa as $key)
      <li class="breadcrumb-item active"> <a href="{{ route('Data Pendaftar') }}">{{ $routeLocation }}</a></li>
      <li class="breadcrumb-item active">{{ $key->Nama }}</li>
    @endforeach
@endsection

@section('content')

  {{-- start --}}
  <div class="container-fluid">
    <div class="row">
      {{-- Detail Siswa --}}
      <div class="col-md-6 col-12">
        <div class="card card-primary">
          <div class="card-header">
            @foreach ($siswa as $key)
              <h3 class="card-title">About {{ $key->Nama }}</h3>
            @endforeach
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            @foreach ($siswa as $key)
              <strong><i class="fa fa-user"></i> Nama</strong>
              <p class="text-muted about-siswa">{{ $key->Nama }}</p>
              <hr>
              <strong><i class="fa fa-users"></i> Kelas</strong>
              <p class="text-muted about-siswa">{{ $key->Kelas }}</p>
              <hr>
              <strong><i class="fa fa-list-ol"></i> Nomor Induk Siswa</strong>
              <p class="text-muted about-siswa">{{ $key->NIS }}</p>
              <hr>
              <strong><i class="fas fa-birthday-cake"></i> Tanggal Lahir</strong>
              <p class="text-muted about-siswa">{{ $key->TTL }}</p>
              <hr>
              <strong><i class="fas fa-map-marker-alt"></i> Alamat</strong>
              <p class="text-muted about-siswa">{{ $key->Alamat }}</p>
              <hr>
              <strong><i class="fas fa-asterisk"></i> Agama</strong>
              <p class="text-muted about-siswa">{{ $key->Agama }}</p>
              <hr>
              <strong><i class="fas fa-phone"></i> No Handphone Siswa</strong>
              <p class="text-muted about-siswa">{{ $key->NoHPSiswa }}</p>
              <hr>
              <strong><i class="fab fa-line"></i> Sosmed</strong>
              <p class="text-muted about-siswa">
                Instagram : {{ $key->Instagram }}</i><br>
                Line : {{ $key->Line }}</i><br>
                Email : {{ $key->Email }}</i>
              </p>
              <hr>
              <strong><i class="fas fa-transgender"></i> Gender</strong>
              <p class="text-muted about-siswa">{{ $key->Gender }}</p>
              <hr>
              <strong><i class="fas fa-university"></i> Asal SMP</strong>
              <p class="text-muted about-siswa">{{ $key->AsalSMP }}</p>
              <hr>
              <strong><i class="far fa-hand-rock"></i> Motivasi</strong>
              <p class="text-muted about-siswa">{{ $key->Motivasi }}</p>
              <hr>
              <strong><i class="fas fa-graduation-cap"></i> Divisi</strong>
              <p class="text-muted about-siswa">{{ $key->Divisi }}</p>
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
      {{-- Update data siswa --}}
      <div class="col-md-6 col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" value="{{ $key->Nama }}" class="form-control update-event" disabled
                 name="NamaUpdate" placeholder="Nama" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Kelas</label>
                <input type="text" value="{{ $key->Kelas }}" class="form-control update-event" disabled
                name="KelasUpdate" placeholder="Kelas" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">NIS</label>
                <input type="number" value="{{ $key->NIS }}" class="form-control update-event" disabled
                name="NISUpdate" placeholder="NIS" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="ttl">Tanggal Lahir</label>
                <div class="row container-fluid">
                  <input type="date" value="{{ $key->TTL }}" class="form-control update-event" disabled
                  name="TanggalLahirUpdate">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <textarea class="form-control update-event" disabled rows="4" placeholder="Alamat"
                name="AlamatUpdate">{{ $key->Alamat }}</textarea>
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
                <input type="number" value="{{ $key->NoHPSiswa }}" class="form-control update-event" disabled
                name="NoHPSiswaUpdate" placeholder="No Handphone Siswa" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">No Handphone Orang Tua</label>
                <input type="number" value="{{ $key->NoHPOrtu }}" class="form-control update-event" disabled
                name="NoHPOrtuUpdate" placeholder="No Handphone Orang Tua">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Sosmed</label>
                <div class="container-fluid row">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" value="{{ $key->Instagram }}" class="form-control update-event" disabled
                    name="InstagramUpdate" placeholder="Instagram">
                  </div>
                </div>
                <div class="container-fluid row">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Line</label>
                    <input type="text" value="{{ $key->Line }}" class="form-control update-event" disabled
                    name="LineUpdate" placeholder="Line">
                  </div>
                </div>
                <div class="container-fluid row">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" value="{{ $key->Email }}" class="form-control update-event" disabled
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
                <input type="text" value="{{ $key->AsalSMP }}" class="form-control update-event" disabled
                name="AsalUpdate" placeholder="Asal SMP" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Motivasi</label>
                <input type="text" value="{{ $key->Motivasi }}" class="form-control update-event" disabled
                name="MotivasiUpdate" placeholder="Motivasi" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Divisi</label>
                {{-- <input type="text" value="{{ $key->Divisi }}" class="form-control update-event" disabled
                name="Divisi" placeholder="Divisi" autocomplete="off"> --}}
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
        Hapus Data {{ $key->Nama }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="" method="post">
          <button type="submit" onsubmit="return submitValidation()" class="btn btn-block btn-danger from-control"
          id="hapus-data"
          name="_method" value="DELETE">Hapus</button>
          @csrf
          <input type="hidden" name="_method" value="DELETE">
        </form>
      </div>
    </div>
  </div>
</div>

  <script src="{{ asset('dist/js/tambahan.js') }}"></script>

  @endforeach
@endsection
