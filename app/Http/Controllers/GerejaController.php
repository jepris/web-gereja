<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerejaController extends Controller
{
    public function beranda(){
        return view('beranda');
    }
}
