<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GantiPasswordController extends Controller
{
    public function gantipassword() {
        return view('ganti_password',[
            'title' => 'gantipassword',
        ]);
    }    

    public function updatepassword(Request $request)
{
        //validasi password
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        //cek password yang lama
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Password lama yang anda masukkan salah");
        }


        //update password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return view('user.dashboard', ['title' => 'gantipassword'])->with('status', 'password anda berhasil diganti');
}
}
