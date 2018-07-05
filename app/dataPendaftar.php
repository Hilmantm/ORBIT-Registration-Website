<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPendaftar extends Model
{
    // database table
    protected $table = "dataPendaftar";
    public $timestamps = false;

    // Whitelist
    protected $fillable = ['Nama', 'Kelas', 'NIS', 'TTL', 'Alamat', 'Agama',
    'NoHPSiswa', 'NoHPOrtu', 'Sosmed', 'Gender', 'DataLain', 'Prestasi', 'Divisi'];

    // blacklist
    protected $guarded = ['IdAnggota', 'created_at', 'updated_at'];

}
