<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditProfilController extends Controller
{
    public function editprofil($id)
    {
        $user= User::find($id);
        return view('user.dashboard.editprofil', ['title' => 'Edit Profil'], compact('user'));
    }

    public function updateprofil(Request $request , $id)
    {
        $user= User::find($id);
        $request->validate([
            'email'=>'required',
            'no_hp'=>'required',
            'alamat'=>'required',
            'tanggal_lahir'=>'required',
        ]);

        $user->email=$request->email;
        $user->no_hp=$request->no_hp;
        $user->alamat=$request->alamat;
        $user->tanggal_lahir=$request->tanggal_lahir;



        $user->update();
        return redirect(route('user.dashboard'));
    }
}
