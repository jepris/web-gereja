<?php

namespace App\Http\Controllers;

use App\Models\Baby;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index()
    {
        return view('create');
    }
    public function createbaby()
    {
        return view('newbaby');
    }

    public function storebaby(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        Baby::create([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $imagePath,
        ]);

        return redirect()->route('images.index')
            ->with('success', 'Galeri created successfully.');
    }
}
