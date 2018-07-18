@extends('../layouts/dashboard')

@section('judul')
  {{ $routeLocation }}
@endsection

@section('menu-open', 'menu-open')

@section('menu-active', 'active')

@section('routeNavigation')
  <li class="breadcrumb-item active">{{ $routeLocation }}</li>
@endsection

@section('content')

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
              @foreach ($siswa as $siswa)
                <tr>
                  <td><?= $i ?></td>
                  <td><a href="{{ $routeLocation . "/" . $siswa->IdAnggota }}">{{ $siswa->Nama }}</a></td>
                  <td>{{ $siswa->Kelas }}</td>
                  <td>{{ $siswa->Instagram }}</td>
                  <td>{{ $siswa->Line }}</td>
                  <td>{{ $siswa->Email }}</td>
                  <td>{{ $siswa->Gender }}</td>
                  <td>{{ $siswa->Divisi }}</td>
                </tr>
                <?php $i++; ?>
              @endforeach
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
        <a href="{{ route('Export Data Pendaftar') }}" class="btn btn-block btn-primary btn-lg" name="exportData" style="margin-top: 10px; text-decoration: none;">Download</a>
      </form>
    </div>
  </div>
  {{--  --}}

@endsection
