<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranController extends Controller
{

    public function index() {
        return view('user.saran', [
            'title' => 'kotak-saran',
        ]);
    }
}
