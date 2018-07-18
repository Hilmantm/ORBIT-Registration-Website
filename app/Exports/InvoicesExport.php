<?php

namespace App\Exports;

use App\dataPendaftar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InvoicesExport implements FromCollection, WithHeadings
{

    public function headings(): array{
      return [
        'Id', 'Nama', 'Kelas', 'NIS', 'TTL', 'Alamat', 'Agama', 'No HP Siswa', 'No HP Ortu',
        'Instagram', 'Line', 'Email', 'Gender', 'Asal SMP', 'Motivasi', 'Divisi', 'created_at', 'updated_at'
      ];
    }

    public function collection()
    {
        // dd(dataPendaftar::all());
        return dataPendaftar::all();
    }
}
