<?php

namespace App\Http\Controllers;

use id;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\BukuOnline;
use App\Models\KotakSaran;
use App\Models\BukuOffline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $transaksis = Transaksi::all();
            return view('admin.crud.transaksi.index',['title' => 'transaksi', 'active' => 'title'],compact('transaksis'));

        }



        public function prosesTransaksi(Request $request)
        {
            if(!Auth::check()) {
                return back();
            }

            function manipulasiTanggal($tgl,$jumlah=1,$format='days'){
                $currentDate = $tgl;
                return date('Y-m-d', strtotime($jumlah.' '.$format, strtotime($currentDate)));
            }

            $tgl_pinjam = $request->tanggal_pinjam;
            $tgl_kembali = manipulasiTanggal($tgl_pinjam, '7');
            Transaksi::create([
                'buku_id' => $request->buku_id,
                'user_id' => Auth::user()->id,
                'tgl_pinjam' => $tgl_pinjam,
                'tgl_kembali' => $tgl_kembali
            ]);

            return back();
        }

        public function konfirmasiTransaksi($id)
        {
            $transaksi = Transaksi::find($id);
            $buku = BukuOffline::find($transaksi->buku->id);
            $buku->stok_buku -= 1;
            $transaksi->status = '1';
            $buku->update();
            $transaksi->update();

            return back();
        }

        public function tolakTransaksi($id)
        {
            $transaksi = Transaksi::find($id);
            $transaksi->status = '2';
            $transaksi->update();

            return back();
        }

        public function kembalikanBuku($id)
        {
            $transaksi = Transaksi::find($id);
            $buku = BukuOffline::find($transaksi->buku->id);
            $buku->stok_buku += 1;
            $transaksi->status = '3';
            $buku->update();
            $transaksi->update();

            return back();
        }

}
