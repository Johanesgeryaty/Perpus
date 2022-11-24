<?php

namespace App\Http\Controllers;

use App\Models\BukuOnline;
use App\Models\BukuPopuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BukuOnlineUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukuonline = BukuOnline::all();
        if ($bukuonline->isEmpty()) {
            return view('user.bukukosong',['title' => 'bukuonline', 'active' => 'title']);
        } else{
            return view('user.bukuonline.bukuonline',['title' => 'bukuonline', 'active' => 'title'], compact('bukuonline'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if(!Auth::check()) {
            return back();
        }
        
        $bukuonline=BukuOnline::Find($id);
        return view('user.bukuonline.show',['title'=>'bukuonline'],compact('bukuonline'));
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

    public function rating($id)
    {
        if(!Auth::check()) {
            return redirect(route('login.index'));
            die;
        }

        $check = BukuPopuler::where(['buku_online_id' => $id, 'user_id' => Auth::user()->id])->first();
        $bukuOnline = BukuOnline::where('id', $id)->first();
        if(!$check) {

            BukuPopuler::create([
                'buku_online_id' => $id,
                'user_id' => Auth::user()->id
            ]);

            $bukuOnline->buku_count += 1;
            $bukuOnline->update();
            return back();
        } else {

            $check->delete();
            $bukuOnline->buku_count -= 1;
            $bukuOnline->update();
            return back();

        }

        return back();
    }
}
