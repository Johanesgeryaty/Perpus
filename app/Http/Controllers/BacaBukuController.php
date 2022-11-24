<?php

namespace App\Http\Controllers;

use App\Models\BukuOnline;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class BacaBukuController extends Controller
{
    public function index($id)
    {
        if(!Auth::check()) {
            return back();
        }
        $bukuonline = BukuOnline::find($id);
        return view('user.bukuonline.bacaonline', ['title' => 'bukuonline'],compact('bukuonline'));
    }
}
