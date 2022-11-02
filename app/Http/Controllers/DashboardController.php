<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
        public function index()
        {
            return view('admin.dashboardadmin',['title' => 'dashboard', 'active' => 'title']);
        }

        // public function daftaranggota()
        // {
        //     return view('admin.daftar-anggota',['title' => 'daftar-anggota', 'active' => 'title']);
        // }

        public function databukuoffline()
        {
            return view('admin.data-buku-offline',['title' => 'data-buku-offline', 'active' => 'title']);
        }

        // public function databukuonline()
        // {
        //     return view('admin.crud.bukuonline.index',['title' => 'data-buku-online', 'active' => 'title']);
        // }


}
