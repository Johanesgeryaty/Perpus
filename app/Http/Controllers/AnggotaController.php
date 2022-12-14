<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\UserExport;
use App\Imports\ImportUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\UserImport;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use id;
use Illuminate\Support\Facades\Input;


class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
                    $users  = User::where('name','LIKE','%' .$request->search.'%')->
                    orWhere('nisn','LIKE','%' .$request->search.'%')->
                    orWhere('kelas','LIKE','%' .$request->search.'%')->
                    orWhere ('jurusan','LIKE','%' .$request->search.'%')->get();
                }
                else{
                    $users = User::where('role','user')->get();
                }
        return view('admin.crud.anggota.index',['title' => 'daftar-anggota', 'active' => 'title'], compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crud.anggota.create', ['title'=>'daftar-anggota']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);
        if (User::where('nisn', $request->nisn )->exists()) {
            return back()->with(['pesan' => 'Nisn Yang anda masukkan sudah ada yang punya']);
        } else{
            $user->save();
            return redirect(route('admin.anggota.index'))->with(['pesan' => 'Data Anggota Berhasil Ditambahkan']);
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('admin.crud.anggota.show',['title' => 'daftar-anggota'], compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.crud.anggota.edit',['title' => 'daftar-anggota'], compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = ($request->name);
        $user->nisn = ($request->nisn);
        $user->email = ($request->email);
        $user->kelas = ($request->kelas);
        $user->jurusan = ($request->jurusan);
        $user->save();

        return redirect(route('admin.anggota.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

                if ($user ) {
                # code...
            }
        $user->delete($id);

        return redirect(route('admin.anggota.index'));
    }

    public function export()
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new UserImport, $request->file('file'));

        return redirect(route('admin.anggota.index'))->with('success', 'Berhasil import data user!');
    }

}
