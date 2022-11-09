<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return view('user.bukuonline',['title' => 'bukuonline', 'active' => 'title']);
    }

    public function bukuoffline()
    {
        return view('user.bukuoffline',['title' => 'bukuoffline', 'active' => 'title']);
    }

    public function historypinjam()
    {
        return view('user.historypinjam',['title' => 'historypinjam', 'active' => 'title']);
    }
    public function saran()
    {
        return view('user.saran',['title' => 'saran', 'active' => 'title']);
    }
    public function whislist()
    {
        return view('user.whislist',['title' => 'whislist', 'active' => 'title']);
    }


}
