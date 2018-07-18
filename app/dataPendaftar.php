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
    'NoHPSiswa', 'NoHPOrtu', 'Instagram', 'Line', 'Email', 'AsalSMP', 'Gender', 'Divisi', 'Motivasi'];

    // blacklist
    protected $guarded = ['IdAnggota', 'created_at', 'updated_at'];

}
