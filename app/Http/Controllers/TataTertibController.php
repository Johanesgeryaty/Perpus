<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tatatertib;

class TataTertibController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tatatertib = Tatatertib::all();
        return view('admin.crud.tatatertib.index',['title'=>'tata-tertib'],compact('tatatertib'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.tatatertib.create',['title'=>'tata-tertib']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tatatertib::create([
            'isi'=> $request->isi
        ]);
        return redirect(route('admin.tatatertib.index'));
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
        $tatatertib = Tatatertib::find($id);
        // dd($tatatertib);
        return view('admin.crud.tatatertib.edit',['title'=>'tatatertib'],compact('tatatertib'));
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
        $tatatertib = Tatatertib::find($id);
        $tatatertib->isi = ($request->isi);
        $tatatertib->save();

        return redirect(route('admin.tatatertib.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tatatertib = TataTertib::find($id);
        $tatatertib->delete();

        return back();
    }
}
