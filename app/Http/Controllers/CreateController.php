<?php

namespace App\Http\Controllers;

use App\Models\Sidi;
use App\Models\Lahir;
use App\Models\Nikah;
use App\Models\Sakit;
use App\Models\Baptis;
use App\Models\Pindah;
use App\Models\Meninggal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kontak;

class CreateController extends Controller
{
    
    public function index()
    {
        return view('layanan');
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function createbaptis()
    {
        return view('form.newbaptis');
    }
    public function createlahir()
    {
        return view('form.newlahir');
    }
    public function createsidi()
    {
        return view('form.newsidi');
    }
    public function createsakit()
    {
        return view('form.newsakit');
    }
    public function createnikah()
    {
        return view('form.newnikah');
    }
    public function createpindah()
    {
        return view('form.newpindah');
    }
    public function createmeninggal()
    {
        return view('form.newmeninggal');
    }
    public function createkontak()
    {
        return view('form.newkontak');
    }

    public function storelahir(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'lahir' => 'required',
            'jeniskelamin' => 'required',
            'rs' => 'required',
        ]);
        
        Lahir::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'lahir' => $request->lahir,
            'jeniskelamin' => $request->jeniskelamin,
            'rs' => $request->rs,
           
        ]);

        // Session::flash('message', 'Data berhasil disimpan!');
        return redirect()->route('hurias.index')
            ->with('message', 'Pendataan Jemaat Lahir Berhasil Terkirim');
    }
    public function storebaptis(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'keterangan' => 'required',
        ]);
        
        Baptis::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'keterangan' => $request->keterangan,
        ]);


        return redirect()->route('hurias.index')
            ->with('message', 'Pendataan Jemaat Baptis Berhasil Terkirim');
    }
    public function storesidi(Request $request)
    {
        $request->validate([
            'wali' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'keterangan' => 'required',
            'fileakte' => 'required|mimes:pdf|max:15728640',
            'filebaptis' => 'required|mimes:pdf|max:15728640'
        ]);

        $file1 = $request->file('fileakte');
        $fileName1 = time() . '_akte_' . $file1->getClientOriginalName();
        $filePath1 = $file1->storeAs('filesidi', $fileName1, 'public');

        $file2 = $request->file('filebaptis');
        $fileName2 = time() . '_baptis_' . $file2->getClientOriginalName();
        $filePath2 = $file2->storeAs('filesidi', $fileName2, 'public');
        
        Sidi::create([
            'wali' => $request->wali,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'keterangan' => $request->keterangan,
            'fileakte' => $filePath1,
            'filebaptis' => $filePath2,
        ]);
        // dd('berhasil');
        return redirect()->route('hurias.index')
            ->with('message', 'Pendataan Jemaat Sidi Berhasil Terkirim');
    }
    public function storenikah(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'keterangan' => 'required',
        ]);
        
        Nikah::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'keterangan' => $request->keterangan,

           
        ]);


        return redirect()->route('hurias.index')
            ->with('message', 'Pendataan Jemaat Nikah Berhasil Terkirim');
    }
    public function storesakit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'keterangan' => 'required',
        ]);
        
        Sakit::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'keterangan' => $request->keterangan,
           
        ]);


        return redirect()->route('hurias.index')
        ->with('message', 'Pendataan Jemaat Sakit Berhasil Terkirim');
    }
    public function storepindah(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'tujuan' => 'required',
           
        ]);
        
        Pindah::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tujuan' => $request->tujuan,
           
        ]);


        return redirect()->route('hurias.index')
        ->with('message', 'Pendataan Jemaat Pindah Berhasil Terkirim');
    }
    public function storemeninggal(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'keterangan' => 'required',
        ]);
        
        Meninggal::create([
           'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'keterangan' => $request->keterangan,
           
        ]);


        return redirect()->route('hurias.index')
        ->with('message', 'Pendataan Jemaat Meninggal Berhasil Terkirim');
    }
    public function storekontak(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'notelp' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
        ]);
        
        Kontak::create([
           'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'perihal' => $request->perihal,
            'keterangan' => $request->keterangan,
        ]);


        return redirect()->route('tentang.tentang')
        ->with('message', 'Layanan Kontak Berhasil Terkirim');
    }

}
