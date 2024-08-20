<?php

namespace App\Http\Controllers\Admin;

// use App\Models\News;
use App\Models\Warta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class WartaController extends Controller
{
    //
    public function index(){
        $wartas = Warta::orderBy('created_at', 'desc')->get();
        return view('admin.wartas.index', compact('wartas'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'date' => 'required|date ',
            'file' => 'required|mimes:pdf|max:15728640'
        ]);

        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = 'files/' . $fileName;
        $file->move(public_path('warta'), $fileName);

        Warta::create([
            'title' => $request->title,
            'date' => $request->date,
            'file' => $filePath
        ]);

        return redirect()->route('wartas.index');

    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'date' => 'required|date ',
            'file' => 'required|mimes:pdf|max:15728640'
        ]);
        $warta = Warta::findOrFail($id);

        $data = $request->only('title','date');
        if($request->hasFile('file')){
            if ($warta->file && file_exists(public_path($warta->file))) {
                unlink(public_path($warta->file));
            }
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = 'files/' . $fileName;
            $file->move(public_path('warta'), $fileName);
        
        $data['file'] = $filePath;
        }
        $warta->update($data);

        return redirect()->route('wartas.index');
    }

    public function destroy($id){
        $warta = Warta::findOrFail($id);
    if ($warta->file && file_exists(public_path($warta->file))) {
        unlink(public_path($warta->file));
    }

    $warta->delete();

    return redirect()->route('wartas.index')
        ->with('success', 'Warta deleted successfully.');
        
    }

    public function show($id)
    {
        $file = Warta::findOrFail($id);
        $filePath = public_path("warta/{$file->file}");

        if (!file_exists($filePath)) {
            return abort(404, 'File not found.');
        }

        if (request()->has('download')) {
            return response()->download($filePath);
        }

        return response()->file($filePath);
    }

}
