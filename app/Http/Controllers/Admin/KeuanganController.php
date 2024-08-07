<?php


namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;

use App\Models\Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeuanganController extends Controller
{
    public function index(){
        $keuangans = Keuangan::all();
        return view('admin.warta_keuangan.index', compact('keuangans'));
    }

    public function store(Request $request){
        $request->validate([
            'tanggal' => 'required|date ',
            'keterangan' => 'required',
            'file' => 'required|mimes:pdf|max:15728640'
        ]);

        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = 'files/' . $fileName;
        $file->move(public_path('files'), $fileName);

        Keuangan::create([
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'file' => $filePath
        ]);

        return redirect()->route('keuangan.index');

    }

    public function update(Request $request, Keuangan $keuangan){
        $request->validate([
            'tanggal' => 'required|date',
            'birth_date' => 'required',
            'file' => 'sometimes|mimes:pdf|max:15728640'
        ]);

        $data = $request->only('tanggal', 'keterangan');
        if($request->hasFile('file')){
            if ($keuangan->file && file_exists(public_path($keuangan->file))) {
                unlink(public_path($keuangan->file));
            }
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = 'files/' . $fileName;
            $file->move(public_path('files'), $fileName);
        
        $data['file'] = $filePath;
        }
        $keuangan->update($data);

        return redirect()->route('keuangan.index');
    }

    public function destroy(Keuangan $keuangan){
        $keuangan->delete();
        return redirect()->route('keuangan.index');
    }


}
