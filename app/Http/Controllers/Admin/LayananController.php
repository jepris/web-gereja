<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Baptis;
use App\Models\Lahir;
use App\Models\Meninggal;
use App\Models\Nikah;
use App\Models\Pindah;
use App\Models\Sakit;
use Carbon\Carbon;
use Illuminate\Http\Request;


class LayananController extends Controller
{
    // crud function for data jemaat
    public function indexlahir(){
            $lahirs = Lahir::all();
            return view('admin.layanan.newlahir', compact('lahirs'));
    }

    public function updatelahir(Request $request, Lahir $lahir){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        $lahir->update($request->all());
        return redirect()->route('lahirs.indexlahir');
    }

    public function destroylahir(Lahir $lahir){
        $lahir->delete();
        return redirect()->route('lahirs.indexlahir');
    }

    // Controller pindah
    public function indexpindah(){
        $pindahs = Pindah::all();
        return view('admin.layanan.newpindah', compact('pindahs'));
    }

    public function updatepindah(Request $request, Lahir $pindah){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        $pindah->update($request->all());
        return redirect()->route('pindahs.indexpindah');
    }

    public function destroypindah(Lahir $pindah){
        $pindah->delete();
        return redirect()->route('pindahs.indexpindah');
    }

    // Controller baptis
    public function indexbaptis(){
        $baptiss = Baptis::all();
        return view('admin.layanan.newbaptis', compact('baptiss'));
    }

    public function updatebaptis(Request $request, Lahir $baptis){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        $baptis->update($request->all());
        return redirect()->route('baptis.indexbaptis');
    }

    public function destroybaptis(Lahir $baptis){
        $baptis->delete();
        return redirect()->route('baptis.indexbaptis');
    }
    // Controller sidi
    public function indexsidi(){
        $sidis = Baptis::all();
        return view('admin.layanan.newsidi', compact('sidis'));
    }

    public function updatesidi(Request $request, Lahir $sidi){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        $sidi->update($request->all());
        return redirect()->route('sidis.indexsidi');
    }

    public function destroysidi(Lahir $sidi){
        $sidi->delete();
        return redirect()->route('sidis.indexsidi');
    }
    
    // Controller Nikah
    public function indexnikah(){
        $nikahs = Nikah::all();
        return view('admin.layanan.newnikah', compact('nikahs'));
    }

    public function updatenikah(Request $request, Nikah $nikah){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        $nikah->update($request->all());
        return redirect()->route('nikahs.indexnikah');
    }

    public function destroynikah(Lahir $nikah){
        $nikah->delete();
        return redirect()->route('nikahs.indexnikah');
    }

    // Controller Sakit
    public function indexsakit(){
        $sakits = Sakit::all();
        return view('admin.layanan.newsakit', compact('sakits'));
    }

    public function updatesakit(Request $request, Sakit $sakit){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        $sakit->update($request->all());
        return redirect()->route('sakits.indexsakit');
    }

    public function destroysakit(Sakit $sakit){
        $sakit->delete();
        return redirect()->route('sakits.indexsakit');
    }

    // Controller meninggal
    public function indexmeninggal(){
        $meninggals = Meninggal::all();
        return view('admin.layanan.newmeninggal', compact('meninggals'));
    }

    public function updatemeninggal(Request $request, Meninggal $meninggal){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        $meninggal->update($request->all());
        return redirect()->route('meninggals.indexmeninggal');
    }

    public function destroymeninggal(Sakit $meninggal){
        $meninggal->delete();
        return redirect()->route('meninggals.indexmeninggal');
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
}
