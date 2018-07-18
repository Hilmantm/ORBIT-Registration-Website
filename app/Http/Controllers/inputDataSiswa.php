<?php

namespace App\Http\Controllers;

use App\dataPendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Jenssegers\Agent\Agent;

class inputDataSiswa extends Controller
{

  public function create()
  {

    $agent = new Agent;

    if( $agent->isPhone() || $agent->isTablet() ) {
      return view('index_m');
    }else {
      return view('index_d');
    }

  }

  public function store(Request $request)
  {
    dataPendaftar::create([
      'Nama' => $request->Nama,
      'Kelas' => $request->jurusan . " " . $request->rombel,
      'NIS' => $request->NIS,
      'TTL' => $request->TglLahir,
      'Alamat' => $request->Alamat,
      'Agama' => $request->Agama,
      'NoHPSiswa' => $request->NoHPSiswa,
      'NoHPOrtu' => $request->NoHPOrtu,
      'Instagram' => $request->Instagram,
      'Line' => $request->Line,
      'Email' => $request->Email,
      'Gender' => $request->Gender,
      'AsalSMP' => $request->Asal,
      'Divisi' => $request->Divisi,
      'Motivasi' => $request->Motivasi
    ]);

    return redirect('/');
  }

}
