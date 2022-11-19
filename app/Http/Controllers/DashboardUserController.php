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
        return view('user.dashboard', [
            'title' => 'dashboard',
            'active' => 'title'
        ]);
    }

    public function bukuonline()
    {
        $bukuonline = BukuOnline::all();
        return view('user.bukuonline',['title' => 'bukuonline', 'active' => 'title'], compact('bukuonline'));
    }

    public function bukuoffline()
    {
        $bukuoffline = bukuoffline::all();
        return view('user.bukuoffline',['title' => 'bukuoffline', 'active' => 'title'], compact('bukuoffline'));
    }

    public function historypinjam()
    {
        return view('user.historypinjam',['title' => 'historypinjam', 'active' => 'title']);
    }
    public function saran()
    {
        return view('user.saran',['title' => 'kotak-saran', 'active' => 'title']);
    }
    public function whislist()
    {
        return view('user.whislist',['title' => 'whislist']);
    }

}
