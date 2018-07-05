<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dataPendaftar;
use App\User;
use Illuminate\Support\Facades\Route;
use Excel;
use App\Exports\InvoicesExport;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function dashboard()
    {
      // $routeLocation = Route::currentRouteName();
      $siswa = dataPendaftar::all();
      $routeLocation = Route::currentRouteName();
      return view('subFolder.dashboard', ['routeLocation' => $routeLocation, 'siswa' => $siswa]);
    }

    public function dataPendaftar()
    {
      $siswa = dataPendaftar::all();
      $routeLocation = Route::currentRouteName();
      return view('subFolder.dataPendaftar', ['siswa' => $siswa, 'routeLocation' => $routeLocation]);
    }

    public function adminPanel()
    {
      $adminData = User::all();
      $routeLocation = Route::currentRouteName();
      return view('subFolder.adminPanel', ['adminData' => $adminData, 'routeLocation' => $routeLocation]);
    }

    public function exportDataPendaftar()
    {
      return Excel::download(new InvoicesExport, 'siswa.xlsx');
    }

    public function dataPendaftarSingle($id)
    {
      $siswa = dataPendaftar::where('IdAnggota', $id)->get();
      $routeLocation = Route::currentRouteName();
      return view('subFolder.dataPendaftarSingle', ['siswa' => $siswa, 'routeLocation'=> $routeLocation]);
    }

}
