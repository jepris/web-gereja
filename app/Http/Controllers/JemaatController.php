<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    public function index(){
            $jemaats = Jemaat::all();
            return view('admin.data-jemaat.jemaat', compact('jemaats'));
    }
}
