<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\KotakSaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KotakSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'isi_saran' => 'required'
        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'isi_saran' => $request->isi_saran,
            'gambar' => $request->gambar_buku
        ];

        KotakSaran::create($data);

        return back()->with(['pesan' => 'Saran Berhasil Ditambahkan']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kotak_saran = KotakSaran::find($id);
        $kotak_saran->delete($id);

        return redirect(route('admin.kotak-saran'));
    }
}
