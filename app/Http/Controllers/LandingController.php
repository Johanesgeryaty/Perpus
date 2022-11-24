<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TataTertib;
use App\Models\BukuOnline;

class LandingController extends Controller
{
    public function index() {
        $tatatertib = TataTertib::all();
        $bukuonline = BukuOnline::orderBy('buku_count', 'desc')->get();
        return view('index', compact('tatatertib', 'bukuonline'));
    }
}
