<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'inputDataSiswa@create');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('Dashboard');
// Route data pendaftaran siswa
Route::get('/dashboard/Data Pendaftar', 'HomeController@dataPendaftar')->name('Data Pendaftar');
// Route data Siswa
Route::get('/dashboard/Data Pendaftar/{id}', 'HomeController@dataPendaftarSingle')->name('Data Siswa');
// Route Download data Siswa
Route::get('/export', 'HomeController@exportDataPendaftar')->name('Export Data Pendaftar');
// Route admin
Route::get('dashboard/Admin', 'HomeController@adminPanel')->name('Admin Panel');
// Route admin edit
Route::get('dashboard/Admin/{name}');
// daftar Siswa
Route::post('/daftar', 'inputDataSiswa@store')->name('Daftar Siswa store');
