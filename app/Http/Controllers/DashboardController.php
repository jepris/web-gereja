<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Warta;
use App\Models\Galeri;
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
    public function wartajemaat()
    {
        $news = News::all();
        $wartajemaat= Warta::all();
        return view('warta', compact('news','wartajemaat'));
    }
    public function downloadWarta($filename)
    {
        $filePath = public_path("warta/{$filename}");

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }
    public function galeri()
    {
        $galeri = Galeri::all();
        return view('galeri', compact('galeri'));
    }

    
}
