<?php

namespace App\Http\Controllers;

use App\Models\KotakSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\bukuoffline;
use App\Models\BukuOnline;


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
        return view('user.transaksi.historypinjam',['title' => 'historypinjam', 'active' => 'title']);
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
