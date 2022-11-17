<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('name', 'nisn', 'email', 'kelas', 'jurusan', 'no_hp', 'alamat', 'tanggal_lahir')->get();
    }

    public function headings(): array
    {
        return["NAME", "NISN", "EMAIL", "KELAS", "JURUASAN", "NO_HP", "ALAMAT", "TANGGAL_LAHIR",];
    }
}
