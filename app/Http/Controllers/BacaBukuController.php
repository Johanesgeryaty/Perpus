<?php

namespace App\Http\Controllers;

use App\Models\BukuOnline;
use Illuminate\Http\Request;

class BacaBukuController extends Controller
{
    public function index($id)
 {
        $bukuonline = BukuOnline::find($id);
        return view('user.bukuonline.bacaonline', ['title' => 'bukuonline'],compact('bukuonline'));
    }
}
