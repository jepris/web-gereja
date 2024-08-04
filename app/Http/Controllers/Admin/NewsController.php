<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('file')->store('images', 'public');

        news::create([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $imagePath,
        ]);

        return redirect()->route('news.index')
            ->with('success', 'Galeri created successfully.');
    }

    public function show(News $newss)
    {
        return view('news.show', compact('newss'));
    }

    public function edit(News $newss)
    {
        return view('news.edit', compact('newss'));
    }

    public function update(Request $request, News $newss)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('file')) {
            Storage::delete('public/' . $newss->file);
            $imagePath = $request->file('file')->store('images', 'public');
        } else {
            $imagePath = $newss->file;
        }

        $newss->update([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $imagePath,
        ]);

        return redirect()->route('news.index')
            ->with('success', 'Galeri updated successfully.');
    }

    public function destroy(News $newss)
    {
        Storage::delete('public/' . $newss->file);
        $newss->delete();

        return redirect()->route('news.index')
            ->with('success', 'Galeri deleted successfully.');
    }




























    // public function index()
    // {
    //     $news = News::all();
    //     return view('admin.news.index', compact('news'));
    // }

    // public function create()
    // {
    //     return view('news.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title'=> 'required', 
    //         'description'=> 'required', 
    //         'img'=> 'required',
    //     ]);

    //     News::create($request->all());
    //     return redirect()->route('news.index')->with('success', 'Berita ibadah berhasil ditambahkan.');
    // }

    // public function edit(News $newss)
    // {
    //     // return view('news.edit', compact('jadwalIbadah'));
    //     return view('news.edit');
    // }

    // public function update(Request $request, News $newss)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'img' => 'required',
    //     ]);

    //     $newss->update($request->all());
    //     return redirect()->route('news.index')->with('success', 'Berita ibadah berhasil diperbarui.');
    // }

    // public function destroy(News $newss)
    // {
    //     $newss->delete();
    //     return redirect()->route('news.index')->with('success', 'Berita ibadah berhasil dihapus.');
    // }
}
