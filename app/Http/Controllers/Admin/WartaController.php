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
        $wartas = Warta::all();
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

    public function update(Request $request, Warta $warta){
        $request->validate([
            'title' => 'required',
            'date' => 'required|date ',
            'file' => 'required|mimes:pdf|max:15728640'
        ]);

        $data = $request->only('nama_minggu','tanggal');
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

    public function destroy(Warta $warta){
        $warta->delete();
        return redirect()->route('warta.index');
        
    }

    public function show($filename)
    {
        $filePath = public_path("warta/{$filename}");

        if (!file_exists($filePath)) {
            return abort(404, 'File not found.');
        }

        return response()->file($filePath);
    }

    // Untuk mendownload PDF
    public function download($filename)
    {
        $filePath = public_path("warta/{$filename}");

        if (!file_exists($filePath)) {
            return abort(404, 'File not found.');
        }

        return response()->download($filePath);
    }

}
