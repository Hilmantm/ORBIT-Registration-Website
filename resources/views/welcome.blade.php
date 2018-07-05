<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}
        <form action="{{ route('Daftar Siswa store') }}" method="post">
          @csrf
          <input type="text" name="Nama" placeholder="Nama"><br>
          <input type="text" name="Kelas" placeholder="Kelas"><br>
          <input type="number" name="NIS"  placeholder="NIS"><br>
          <input type="date" name="TTL"  placeholder="TTL"><br>
          <input type="text" name="Alamat" placeholder="Alamat"><br>
          <select name="Agama" placeholder="Agama">
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Hindu</option>
            <option value="4">Buddha</option>
            <option value="5">Konghucu</option>
          </select><br>
          <input type="text" name="NoHPSiswa" placeholder="Nohpsiswa"><br>
          <input type="text" name="NoHPOrtu" placeholder="Nohportu"><br>
          <input type="text" name="Sosmed" placeholder="Sosmed"><br>
          <select name="Gender" placeholder="gender">
            <option value="1">Laki-laki</option>
            <option value="2">Perempuan</option>
            <option value="3">Lainnya</option>
          </select><br>
          <input type="text" name="DataLain" value="" placeholder="DataLain"><br>
          <input type="text" name="Prestasi" value="" placeholder="Prestasi"><br>
          <input type="text" name="Divisi" value="" placeholder="Divis"><br>
          <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>
