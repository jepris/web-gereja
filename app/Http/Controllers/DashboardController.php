<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Warta;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        return view('beranda', compact('schedules', 'news'));
    }
    public function warta()
    {
        $news = News::all();
        $wartas= Warta::all();
        return view('warta', compact('news','wartas'));
    }
    public function download(Warta $warta)
    {
        return Storage::download($warta->file_path);
    }

    
}
