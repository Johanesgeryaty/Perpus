<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function proces(Request $request)
    {
        if(Auth::attempt(['nisn' => $request->nisn, 'password' => $request->password])) {
            if(Auth::user()->role == 'user') {
                return redirect(route('user.dashboard'));
                
                //apabila role nya adalah admin
            } else {
                return redirect(route('admin.dashboard'));
            }
        }

        return back();
    }
}
