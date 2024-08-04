<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $images = Galeri::all();
        return view('admin.galeri.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('file')->store('images', 'public');

        Galeri::create([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $imagePath,
        ]);

        return redirect()->route('images.index')
            ->with('success', 'Galeri created successfully.');
    }

    public function show(Galeri $image)
    {
        return view('images.show', compact('image'));
    }

    public function edit(Galeri $image)
    {
        return view('images.edit', compact('image'));
    }

    public function update(Request $request, Galeri $image)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('file')) {
            Storage::delete('public/' . $image->file);
            $imagePath = $request->file('gambar')->store('images', 'public');
        } else {
            $imagePath = $image->file;
        }

        $image->update([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $imagePath,
        ]);

        return redirect()->route('images.index')
            ->with('success', 'Galeri updated successfully.');
    }

    public function destroy(Galeri $image)
    {
        Storage::delete('public/' . $image->file);
        $image->delete();

        return redirect()->route('images.index')
            ->with('success', 'Galeri deleted successfully.');
    }

}
