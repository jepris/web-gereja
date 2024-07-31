<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JemaatController extends Controller
{
    public function index(){
        return view('admin.data-jemaat.jemaat');
    }
}
