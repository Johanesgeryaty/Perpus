<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


class UserExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function headings():array{

    return[
        'name' => 'Name',
        'nisn' => 'Nisn',
        'email' => 'Email',
        'kelas' => 'Kelas',
        'jurusan' => 'Jurusan',
        'tanggal_lahir' => 'TanggalLahir',
        'password' => 'Password',
        'email' => 'Email',
        'role' => 'Role',
    ];

   }
   
    public function collection()
    {
        return User::all();
    }
}
