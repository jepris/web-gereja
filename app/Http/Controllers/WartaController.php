<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WartaController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        return view('warta', compact('news'));
    }
}
