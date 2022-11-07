<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuOffline;

class BukuOfflineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.crud.bukuoffline.index',[
            'bukuoffline' => BukuOffline::all(),
            'title' => 'BukuOffline'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.crud.bukuoffline.create',[
            'title' => 'BUkuOfline'
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
            'judul_buku'=> 'required|min:3 ',
            'genre'=> 'required|min:3',
            'pengarang' => 'required|min:3',
            'penerbit' => 'required|min:3',
            'tahun_terbit'=> 'required|min:4',
            'jumlah_halaman' => 'required',
            'stok_buku' => 'required'
        ]);

        $bukuoffline = new BukuOffline ();
        $bukuoffline->judul_buku = $request->judul_buku;
        $bukuoffline->genre = $request->genre;
        $bukuoffline->pengarang = $request->pengarang;
        $bukuoffline->penerbit = $request->penerbit;
        $bukuoffline->tahun_terbit = $request->tahun_terbit;
        $bukuoffline->jumlah_halaman = $request->jumlah_halaman;
        $bukuoffline->stok_buku = $request->stok_buku;

        $bukuoffline->save();

        return redirect(route('admin.bukuoffline.index'))->with('success','data berhasil ditambah.');
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
        $bukuoffline = BukuOffline::findOrFail($id);
        return view ('admin.crud.bukuoffline.edit', 
        compact('bukuoffline'),['title' => 'bukuoffline']);
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
        $bukuoffline = BukuOffline::findOrFail($id);

        $request->validate([
            'judul_buku'=> 'required|min:3 ',
            'genre'=> 'required|min:3',
            'pengarang' => 'required|min:3',
            'penerbit' => 'required|min:3',
            'tahun_terbit'=> 'required|min:4',
            'jumlah_halaman' => 'required',
            'stok_buku' => 'required'
        ]);

        $bukuoffline->judul_buku = $request->judul_buku;
        $bukuoffline->genre = $request->genre;
        $bukuoffline->pengarang = $request->pengarang;
        $bukuoffline->penerbit = $request->penerbit;
        $bukuoffline->tahun_terbit = $request->tahun_terbit;
        $bukuoffline->jumlah_halaman = $request->jumlah_halaman; 
        $bukuoffline->stok_buku = $request->stok_buku;
        $bukuoffline->save();

        return redirect(route('admin.bukuoffline.index'))->with('success','data berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bukuoffline= BukuOffline::findOrFail($id);
        $bukuoffline->delete();

        return redirect(route('admin.bukuoffline.index'))->with('success','Data buku berhasil dihapus');
    }
}
