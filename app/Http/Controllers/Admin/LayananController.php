<?php

namespace App\Http\Controllers\Admin;
use Carbon\Carbon;
use App\Models\Sidi;
use App\Models\User;
use App\Models\Lahir;
use App\Models\Nikah;
use App\Models\Sakit;
use App\Models\Baptis;
use App\Models\Kontak;
use App\Models\Pindah;
use App\Models\Meninggal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LayananController extends Controller
{


    // crud function for data jemaat
    public function indexlahir(){
            $lahirs = Lahir::all();
            return view('admin.layanan.newlahir', compact('lahirs'));
    }

    public function updatelahir(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'email' => 'required',
            'lahir' => 'required',
            'jeniskelamin' => 'required',
            'rs' => 'required',
        ]);
        $lahir = Lahir::findOrFail($id);
        $lahir->update($request->all());
        return redirect()->route('lahirs.indexlahir')->with('message', 'Data berhasil Diganti');
    }

    public function destroylahir($id){
        $lahir = Lahir::findOrFail($id);
        $lahir->delete();
        return redirect()->route('lahirs.indexlahir');
    }

    // Controller pindah
    public function indexpindah(){
        $pindahs = Pindah::all();
        return view('admin.layanan.newpindah', compact('pindahs'));
    }

    public function updatepindah(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'tujuan' => 'required',
        ]);
        $pindah = Pindah::findOrFail($id);
        $pindah->update($request->all());
        return redirect()->route('pindahs.indexpindah')->with('message', 'Data berhasil Diganti');
    }

    public function destroypindah($id){
        $pindah = Pindah::findOrFail($id);
        $pindah->delete();
        return redirect()->route('pindahs.indexpindah');
    }

    // Controller baptis
    public function indexbaptis(){
        $baptiss = Baptis::all();
        return view('admin.layanan.newbaptis', compact('baptiss'));
    }

    public function updatebaptis(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'keterangan' => 'required',
        ]);
        $baptis = Baptis::findOrFail($id);
        $baptis->update($request->all());
        return redirect()->route('baptis.indexbaptis')->with('message', 'Data berhasil Diganti');
    }

    public function destroybaptis( $id){
        $baptis = Baptis::findOrFail($id);
        $baptis->delete();
        return redirect()->route('baptis.indexbaptis');
    }
    // Controller sidi
    public function indexsidi(){
        $sidis = Sidi::all();
        return view('admin.layanan.newsidi', compact('sidis'));
    }

    public function updatesidi(Request $request,$id){
        $request->validate([
            'wali' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'keterangan' => 'required',
            'fileakte' => 'nullable|mimes:pdf|max:15728640', // nullable untuk mengizinkan tidak ada perubahan file
            'filebaptis' => 'nullable|mimes:pdf|max:15728640',
        ]);
    
        $sidi = Sidi::findOrFail($id);  // Temukan data berdasarkan ID
        $data = $request->only('tanggal','wijk','notelp','alamat','email', 'keterangan',);

        if ($request->hasFile('fileakte')) {
            if ($sidi->fileakte && Storage::disk('public')->exists($sidi->fileakte)) {
                Storage::disk('public')->delete($sidi->fileakte); 
            }
            $file1 = $request->file('file');
            $fileName1 = time() . '_akte_' . $file1->getClientOriginalName();
            $filePath1 = $file1->storeAs('filessidi', $fileName1, 'public');  
            $data['fileakte'] = $filePath1;
        }
        if ($request->hasFile('filebaptis')) {
            if ($sidi->fileakte && Storage::disk('public')->exists($sidi->fileakte)) {
                Storage::disk('public')->delete($sidi->fileakte); 
            }
            $file2 = $request->file('file');
            $fileName2 = time() . '_baptis_' . $file2->getClientOriginalName();
            $filePath2 = $file2->storeAs('filessidi', $fileName2, 'public');  
            $data['filebaptis'] = $filePath2;
        }

        $sidi->update($data);
        return redirect()->route('sidis.indexsidi')->with('message', 'Data berhasil Diganti');
    }

    public function destroysidi($id){
        $sidi = Sidi::findOrFail($id);
        $sidi->delete();
        return redirect()->route('sidis.indexsidi');
    }
    
    // Controller Nikah
    public function indexnikah(){
        $nikahs = Nikah::all();
        return view('admin.layanan.newnikah', compact('nikahs'));
    }

    public function updatenikah(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);
        $nikah = Nikah::findOrFail($id);
        $nikah->update($request->all());
        return redirect()->route('nikahs.indexnikah')->with('message', 'Data berhasil Diganti');
    }

    public function destroynikah($id){
        $nikah = Baptis::findOrFail($id);
        $nikah->delete();
        return redirect()->route('nikahs.indexnikah');
    }

    // Controller Sakit
    public function indexsakit(){
        $sakits = Sakit::all();
        return view('admin.layanan.newsakit', compact('sakits'));
    }

    public function updatesakit(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);
        $sakit = Sakit::findOrFail($id);
        $sakit->update($request->all());
        return redirect()->route('sakits.indexsakit')->with('message', 'Data berhasil Diganti');
    }

    public function destroysakit($id){
        $sakit = Sakit::findOrFail($id);
        $sakit->delete();
        return redirect()->route('sakits.indexsakit');
    }

    // Controller meninggal
    public function indexmeninggal(){
        $meninggals = Meninggal::all();
        return view('admin.layanan.newmeninggal', compact('meninggals'));
    }

    public function updatemeninggal(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);
        $meninggal = Meninggal::findOrFail($id);
        $meninggal->update($request->all());
        return redirect()->route('meninggals.indexmeninggal')->with('message', 'Data berhasil Diganti');
    }

    public function destroymeninggal($id){
        $meninggal = Meninggal::findOrFail($id);
        $meninggal->delete();
        return redirect()->route('meninggals.indexmeninggal');
    }

    //kontak
    public function indexkontak(){
        $kontaks = Kontak::all();
        return view('admin.layanan.kontak', compact('kontaks'));
    }

    public function updatekontak(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
        ]);
        $kontak = Kontak::findOrFail($id);
        $kontak->update($request->all());
        return redirect()->route('kontaks.indexkontak')->with('message', 'Data berhasil Diganti');
    }

    public function destroykontak($id){
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        return redirect()->route('kontaks.indexkontak');
    }


    // data interntal layanan
    public function wartasakit()
    {
    // Mendapatkan awal minggu dan akhir minggu
    $startOfWeek = Carbon::now()->startOfWeek();
    $endOfWeek = Carbon::now()->endOfWeek();

    // Mengambil data jemaat sakit yang dibuat dalam rentang waktu minggu ini
    $wartasakit = Sakit::whereBetween('created_at', [$startOfWeek, $endOfWeek])->get();

    return view('admin.internal.wartasakit', compact('wartasakit'));
    }

    public function wartameninggal()
    {
    // Mendapatkan awal minggu dan akhir minggu
    $startOfWeek = Carbon::now()->startOfWeek();
    $endOfWeek = Carbon::now()->endOfWeek();

    // Mengambil data jemaat sakit yang dibuat dalam rentang waktu minggu ini
    $wartameninggal = Meninggal::whereBetween('created_at', [$startOfWeek, $endOfWeek])->get();

    return view('admin.internal.wartameninggal', compact('wartameninggal'));
    }

    public function wartanikah()
    {
    // Mendapatkan awal minggu dan akhir minggu
    $startOfWeek = Carbon::now()->startOfWeek();
    $endOfWeek = Carbon::now()->endOfWeek();

    // Mengambil data jemaat sakit yang dibuat dalam rentang waktu minggu ini
    $wartanikah = Nikah::whereBetween('created_at', [$startOfWeek, $endOfWeek])->get();

    return view('admin.internal.wartanikah', compact('wartanikah'));
    }

    public function indexnewjemaat(){
        $users = User::orderBy('name', 'asc')->get();
        return view('admin.layanan.newjemaat', compact('users'));
    }
}
