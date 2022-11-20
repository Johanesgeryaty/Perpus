<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\BukuOnline;
use App\Models\KotakSaran;
use App\Models\BukuOffline;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function index()
        {
            $user = User::where('role','user')->get();
            $bukuOffline = BukuOffline::count();
            $bukuOnline = BukuOnline::count();
            return view('admin.dashboardadmin',['title' => 'dashboard', 'active' => 'title'], compact('user','bukuOffline', 'bukuOnline'));
        }

        // public function daftaranggota()
        // {
        //     return view('admin.daftar-anggota',['title' => 'daftar-anggota', 'active' => 'title']);
        // }

        // public function databukuoffline()
        // {
        //     return view('admin.crud.bukuoffline.index',['title' => 'data-buku-offline', 'active' => 'title']);
        // }

        public function kotaksaran()
        {


            $kotak_saran= KotakSaran::all();
            return view('admin.kotak-saran',['title' => 'kotak-saran', 'active' => 'title'],compact('kotak_saran'));
        }

        public function transaksi()
        {
            $users = User::where('role','user')->get();
            return view('admin.crud.transaksi.index',['title' => 'transaksi', 'active' => 'title'],compact('users'));

        }



}
