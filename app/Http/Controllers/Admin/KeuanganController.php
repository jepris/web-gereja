<?php


// namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\Controller;
// use App\Http\Controllers\Controller;

// use App\Models\Keuangan;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

// class KeuanganController extends Controller
// {
//     public function index(){
//         $keuangans = Keuangan::all();
//         return view('admin.warta_keuangan.index', compact('keuangans'));
//     }

//     public function store(Request $request){
//         $request->validate([
//             'tanggal' => 'required|date ',
//             'keterangan' => 'required',
//             'file' => 'required|mimes:pdf|max:15728640'
//         ]);

//         $file = $request->file('file');
//         $fileName = time().'_'.$file->getClientOriginalName();
//         $filePath = 'files/' . $fileName;
//         $file->move(public_path('files'), $fileName);

//         Keuangan::create([
//             'tanggal' => $request->tanggal,
//             'keterangan' => $request->keterangan,
//             'file' => $filePath
//         ]);

//         return redirect()->route('keuangan.index');

//     }

//     public function update(Request $request, $id){
//         $request->validate([
//             'tanggal' => 'required|date',
//             'birth_date' => 'required',
//             'file' => 'sometimes|mimes:pdf|max:15728640'
//         ]);
//         $keuangan = Keuangan::findOrFail($id);
//         $data = $request->only('tanggal', 'keterangan');
//         if($request->hasFile('file')){
//             if ($keuangan->file && file_exists(public_path($keuangan->file))) {
//                 unlink(public_path($keuangan->file));
//             }
//             $file = $request->file('file');
//             $fileName = time().'_'.$file->getClientOriginalName();
//             $filePath = 'files/' . $fileName;
//             $file->move(public_path('files'), $fileName);
        
//         $data['file'] = $filePath;
//         }
//         $keuangan->update($data);

//         return redirect()->route('keuangan.index');
//     }

//     public function destroy(Keuangan $keuangan){
//         $keuangan->delete();
//         return redirect()->route('keuangan.index');
//     }


// }


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeuanganController extends Controller
{
    public function index()
    {
        $keuangans = Keuangan::all();
        return view('admin.warta_keuangan.index', compact('keuangans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'file' => 'required|mimes:pdf|max:15728640',
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('files', $fileName, 'public');  // Simpan file ke storage/app/public/files

        Keuangan::create([
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'file' => $filePath,
        ]);

        return redirect()->route('keuangan.index')->with('success', 'Data keuangan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'file' => 'sometimes|mimes:pdf|max:15728640',
        ]);

        $keuangan = Keuangan::findOrFail($id);
        $data = $request->only('tanggal', 'keterangan');

        if ($request->hasFile('file')) {
            if ($keuangan->file && Storage::disk('public')->exists($keuangan->file)) {
                Storage::disk('public')->delete($keuangan->file); // Hapus file lama dari storage
            }
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('files', $fileName, 'public');  // Simpan file baru ke storage
            $data['file'] = $filePath;
        }

        $keuangan->update($data);

        return redirect()->route('keuangan.index')->with('success', 'Data keuangan berhasil diperbarui.');
    }

    public function destroy(Keuangan $keuangan)
    {
        if ($keuangan->file && Storage::disk('public')->exists($keuangan->file)) {
            Storage::disk('public')->delete($keuangan->file); // Hapus file dari storage
        }

        $keuangan->delete();

        return redirect()->route('keuangan.index')->with('success', 'Data keuangan berhasil dihapus.');
    }
}
