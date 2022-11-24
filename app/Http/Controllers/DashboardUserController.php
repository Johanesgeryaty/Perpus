<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\BukuOnline;
use App\Models\KotakSaran;
use App\Models\bukuoffline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardUserController extends Controller
{
    public function index() {
        return view('user.dashboard.dashboard', [
            'title' => 'dashboard',
            'active' => 'title'
        ]);
    }


    public function historypinjam()
    {
        $transaksis = Transaksi::where('user_id', Auth::user()->id)->get();
        return view('user.transaksi.historypinjam',['title' => 'historypinjam', 'active' => 'title'], compact('transaksis'));
    }
    public function saran()
    {
        return view('user.dashboard.saran',['title' => 'kotak-saran', 'active' => 'title']);
        
    }
    public function whislist()
    {
        return view('user.whislist',['title' => 'whislist']);
    }

}
