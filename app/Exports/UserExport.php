<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function View(): View
    {
            return view('admin.crud.anggota.export', ['users' => User::all()]);
        
    }
}
