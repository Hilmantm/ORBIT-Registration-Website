@extends('../layouts/dashboard')

@section('judul')
  {{ $routeLocation }}
@endsection

@section('content')
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $siswa->count() }}</h3>

          <p>Data Pendaftar</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('Data Pendaftar') }}" class="small-box-footer">
          More info <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
  </div>
@endsection
