<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UserImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows )
    {
        foreach($rows as $row){
            User::create([
                'name' => $row[0],
                'nisn' => $row[1],
                'email' => $row[2],
                'kelas' => $row[3],
                'jurusan' => $row[4],
                'tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject ($row[5]),
                'password' => bcrypt($row[6]),
                'no_hp' => $row[7],
                'alamat' => $row[8],

            ]);
        }
    }
}
