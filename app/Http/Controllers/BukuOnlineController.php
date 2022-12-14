<?php

namespace App\Http\Controllers;

use App\Models\BukuOnline;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $genre=Genre::all();
        return view('admin.crud.buku.create', [
        'title' => 'bukuonline'
        ],compact('genre'));
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
            'genre' => 'required',
            'pengarang' => 'required|min:3',
            'penerbit' => 'required|min:3',
            'tahun_terbit' => 'required|min:4',
            'jumlah_halaman' => 'required',
            'deskripsi' => 'required',
            'cover_buku' => 'required|image|mimes:jpeg,png,jpg',
            'isi_buku' => 'required|file|mimes:doc,docx,PDF,pdf'
        ]);

        $imageName = time().'.'.$request->cover_buku->extension();
        $request->cover_buku->move(public_path('images'), $imageName);
        $filename = $request->isi_buku->getClientOriginalname();
        $request->isi_buku->move(public_path('file_uploads'), $filename);
        $bukuonline = new BukuOnline;
        $bukuonline->judul_buku = $request->judul_buku;
        $bukuonline->genre_id= $request->genre;
        $bukuonline->pengarang = $request->pengarang;
        $bukuonline->penerbit = $request->penerbit;
        $bukuonline->tahun_terbit = $request->tahun_terbit;
        $bukuonline->jumlah_halaman = $request->jumlah_halaman;
        $bukuonline->deskripsi = $request->deskripsi;
        $bukuonline->cover_buku = $imageName;
        $bukuonline->isi_buku = $filename;
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
        $bukuonline= BukuOnline::find($id);
        return view('admin.crud.buku.show',['title'=>'bukuonline'],compact('bukuonline'));
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
        $genres = Genre::all();
        return view('admin.crud.buku.edit',compact('buku_online', 'genres'),['title' => 'bukuonline']);
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
        $bukuonline = BukuOnline::findOrFail($id);
        
        $request->validate([
            'judul_buku' => 'required',
            'genre' => 'required',
            'pengarang' => 'required|min:3',
            'penerbit' => 'required|min:3',
            'tahun_terbit' => 'required|min:4',
            'jumlah_halaman' => 'required',
            'deskripsi' => 'required',
            

        ]);

        if($request->hasFile('cover_buku')) {
            // untuk menghapus gambar lama
                if($request->oldImage) {
                    File::delete(public_path("images/".$bukuonline->cover_buku));
                }
            // end

            $request->validate([
                'cover_buku' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $imageName = time().'.'.$request->cover_buku->extension();
            $request->cover_buku->move(public_path('images'), $imageName);
            $bukuonline->cover_buku = $imageName;
        }

        $bukuonline->judul_buku = $request->judul_buku;
        $bukuonline->genre_id = $request->genre;
        $bukuonline->pengarang = $request->pengarang;
        $bukuonline->penerbit = $request->penerbit;
        $bukuonline->tahun_terbit = $request->tahun_terbit;
        $bukuonline->jumlah_halaman = $request->jumlah_halaman;
        $bukuonline->deskripsi = $request->deskripsi;
    
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
        unlink("images/".$bukuonline->cover_buku);
        unlink("file_uploads/".$bukuonline->isi_buku);
        $bukuonline->delete();

        return redirect(route('admin.bukuonline.index'))->with('success', 'Data Berhasil Dihapus.');
    }
}
