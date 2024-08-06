<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Keuangan;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WartaController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        return view('warta', compact('schedules', 'news'));
    }

}
