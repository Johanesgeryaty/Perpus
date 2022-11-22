<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\bukuoffline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BukuOfflineUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukuoffline = bukuoffline::all();
        if ($bukuoffline->isEmpty()) {
            return view('user.bukukosong',['title' => 'bukuoffline', 'active' => 'title']);
        } else{
            return view('user.bukuoffline.bukuoffline',['title' => 'bukuoffline', 'active' => 'title'], compact('bukuoffline'));
        }
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bukuoffline= BukuOffline::find($id);
        if(Auth::check()) {
            $transaksi = Transaksi::where(['buku_id' => $bukuoffline->id, 'user_id' => Auth::user()->id])->count();
        }
        return view('user.bukuoffline.show',['title' => 'bukuoffline'],compact('bukuoffline', 'transaksi'));
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
        //
    }
}
