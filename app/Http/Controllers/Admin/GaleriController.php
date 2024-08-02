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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');

        Galeri::create([
            'title' => $request->title,
            'date' => $request->date,
            'path' => $path,
        ]);

        return redirect()->route('images.index')->with('success', 'Image uploaded successfully.');
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
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Hapus gambar lama
            if ($image->path) {
                Storage::disk('public')->delete($image->path);
            }

            $path = $request->file('image')->store('images', 'public');
            $image->path = $path;
        }

        $image->title = $request->title;
        $image->date = $request->date;
        $image->save();

        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }

    public function destroy(Galeri $image)
    {
        if ($image->path) {
            Storage::disk('public')->delete($image->path);
        }
        $image->delete();
        return redirect()->route('images.index')->with('success', 'Image deleted successfully.');
    }
}
