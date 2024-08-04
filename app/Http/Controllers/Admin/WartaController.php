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
            'nama_minggu' => 'required',
            'tanggal_warta' => 'required|date ',
            'file' => 'required|mimes:pdf|max:15728640'
        ]);

        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = 'files/' . $fileName;
        $file->move(public_path('warta'), $fileName);

        Warta::create([
            'nama_minggu' => $request->nama_minggu,
            'tanggal_warta' => $request->tanggal_warta,
            'file' => $filePath
        ]);

        return redirect()->route('wartas.index');

    }

    public function update(Request $request, Warta $warta){
        $request->validate([
            'nama_minggu' => 'required',
            'tanggal_warta' => 'required|date ',
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

    // public function index()
    // {
    //     $wartas = Warta::all();
    //     return view('admin.wartas.index', compact('wartas'));
    // }
    // public function create()
    // {
    //     return view('wartas.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama_minggu'=> 'required',
    //         'tanggal_warta' => 'required|date',
    //         'file' => 'required|mimes:pdf|max:2048',
    //     ]);
    //     $file = $request->file('file');
    //     $fileName = time().'_'.$file->getClientOriginalName();
    //     $filePath = 'files/' . $fileName;
    //     $file->move(public_path('files'), $fileName);
    //     // $filePath = $request->file('file')->store('wartas');
    //     $file = $request->file('file');
    //     $pdfName = time() . '-' . $file->getClientOriginalName();
    //     $filePath = $file->storeAs('public/uploads', $pdfName);
    //     Warta::create([
    //         'tanggal' => $request->tanggal,
    //         'keterangan' => $request->keterangan,
    //         'file' => $filePath
    //     ]);
    //     // Warta::create([
    //     //     'nama_minggu'=> $request->nama_minggu,
    //     //     'tanggal_warta' => $request->tanggal_warta,
    //     //     'file_path' => $filePath,
    //     // ]);
    //     // $pdfModel = new Warta();
    //     // $pdfModel->nama_minggu = $request->nama_minggu;
    //     // $pdfModel->tanggal_warta = $request->tanggal_warta;
    //     // $pdfModel->file_path = $filePath;
    //     // $pdfModel->save();

    //     return redirect()->route('wartas.index')->with('success', 'Warta created successfully.');
    // }

    // public function edit(Warta $warta)
    // {
    //     return view('wartas.edit', compact('warta'));
    // }

    // public function update(Request $request, Warta $warta)
    // {
    //     $request->validate([
    //         'nama_minggu'=> 'required',
    //         'tanggal_warta' => 'required|date',
    //         'file' => 'sometimes|mimes:pdf|max:2048',
    //     ]);

    //     if ($request->hasFile('file')) {
    //         Storage::delete($warta->file_path);
    //         $filePath = $request->file('file')->store('wartas');
    //         $warta->file_path = $filePath;
    //     }
    //     $warta->nama_minggu = $request->nama_minggu;
    //     $warta->tanggal_warta = $request->tanggal_warta;
    //     $warta->save();

    //     return redirect()->route('wartas.index')->with('success', 'Warta updated successfully.');
    // }

    // public function destroy(Warta $warta)
    // {
    //     Storage::delete($warta->file_path);
    //     $warta->delete();
    //     return redirect()->route('wartas.index')->with('success', 'Warta deleted successfully.');
    // }

    // public function download(Warta $warta)
    // {
    //     return Storage::download($warta->file_path);
    // }
}
