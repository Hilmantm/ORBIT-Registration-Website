<?php

namespace App\Http\Controllers;

use App\dataPendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class inputDataSiswa extends Controller
{

  public function create()
  {
      return view('welcome');
  }

  public function store(Request $request)
  {
    dataPendaftar::create([
      'Nama' => $request->Nama,
      'Kelas' => $request->Kelas,
      'NIS' => $request->NIS,
      'TTL' => $request->TTL,
      'Alamat' => $request->Alamat,
      'Agama' => 1,
      'NoHPSiswa' => $request->NoHPSiswa,
      'NoHPOrtu' => $request->NoHPOrtu,
      'Sosmed' => $request->Sosmed,
      'Gender' => 1,
      'DataLain' => $request->DataLain,
      'Prestasi' => $request->Prestasi,
      'Divisi' => $request->Divisi
    ]);

    return redirect('/');
  }

}
