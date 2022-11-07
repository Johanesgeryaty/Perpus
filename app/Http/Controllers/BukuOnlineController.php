<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuOnline;

class BukuOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.crud.buku.index', [
            'buku_online' =>  BukuOnline::all(),
            'title' => 'bukuonline'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.buku.create', [
        'title' => 'bukuonline'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|min:3 ',
            'genre' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'penerbit' => 'required|min:3',
            'tahun_terbit' => 'required|min:4',
            'jumlah_halaman' => 'required',
            

        ]);



        $bukuonline = new BukuOnline;
        $bukuonline->judul_buku = $request->judul_buku;
        $bukuonline->genre = $request->genre;
        $bukuonline->pengarang = $request->pengarang;
        $bukuonline->penerbit = $request->penerbit;
        $bukuonline->tahun_terbit = $request->tahun_terbit;
        $bukuonline->jumlah_halaman = $request->jumlah_halaman;
        $bukuonline->save();

        return redirect(route('admin.bukuonline.index'))->with('success', 'Data Berhasil Ditambah.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku_online = BukuOnline::findOrFail($id);
        return view('admin.crud.buku.edit',
        compact('buku_online'),['title' => 'bukuonline']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_buku' => 'required|min:3 ',
            'genre' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'penerbit' => 'required|min:3',
            'tahun_terbit' => 'required|min:4',
            'jumlah_halaman' => 'required',
            

        ]);

        $bukuonline = BukuOnline::findOrFail($id);
        $bukuonline->judul_buku = $request->judul_buku;
        $bukuonline->genre = $request->genre;
        $bukuonline->pengarang = $request->pengarang;
        $bukuonline->penerbit = $request->penerbit;
        $bukuonline->tahun_terbit = $request->tahun_terbit;
        $bukuonline->jumlah_halaman = $request->jumlah_halaman;
    
        $bukuonline->save();

        return redirect(route('admin.bukuonline.index'))->with('success', 'Data Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukuonline = BukuOnline::findOrFail($id);
        $bukuonline->delete();

        return redirect(route('admin.bukuonline.index'))->with('success', 'Data Berhasil Dihapus.');
    }
}
