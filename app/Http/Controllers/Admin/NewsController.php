<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

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
            'title'=> 'required', 
            'description'=> 'required', 
            'img'=> 'required',
        ]);

        News::create($request->all());
        return redirect()->route('news.index')->with('success', 'Berita ibadah berhasil ditambahkan.');
    }

    public function edit(News $newss)
    {
        // return view('news.edit', compact('jadwalIbadah'));
        return view('news.edit');
    }

    public function update(Request $request, News $newss)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'required',
        ]);

        $newss->update($request->all());
        return redirect()->route('news.index')->with('success', 'Berita ibadah berhasil diperbarui.');
    }

    public function destroy(News $newss)
    {
        $newss->delete();
        return redirect()->route('news.index')->with('success', 'Berita ibadah berhasil dihapus.');
    }
}
