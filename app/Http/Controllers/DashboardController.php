<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        return view('beranda', compact('schedules', 'news'));
    }
    
}
