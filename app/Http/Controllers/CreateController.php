<?php

namespace App\Http\Controllers;

use App\Models\lahir;
use App\Models\Baptis;
use App\Models\Meninggal;
use App\Models\Pindah;
use App\Models\Nikah;
use App\Models\Sakit;
use App\Models\Sidi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    
    public function index()
    {
        return view('layanan');
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


        return redirect()->route('hurias.index')
            ->with('success', 'Galeri created successfully.');
    }
    public function storebaptis(Request $request)
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
        
        Baptis::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'lahir' => $request->lahir,
            'jeniskelamin' => $request->jeniskelamin,
            'rs' => $request->rs,
           
        ]);


        return redirect()->route('hurias.index')
            ->with('success', 'Galeri created successfully.');
    }
    public function storesidi(Request $request)
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
        
        Sidi::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'lahir' => $request->lahir,
            'jeniskelamin' => $request->jeniskelamin,
            'rs' => $request->rs,
           
        ]);


        return redirect()->route('hurias.index')
            ->with('success', 'Galeri created successfully.');
    }
    public function storenikah(Request $request)
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
        
        Nikah::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'lahir' => $request->lahir,
            'jeniskelamin' => $request->jeniskelamin,
            'rs' => $request->rs,
           
        ]);


        return redirect()->route('hurias.index')
            ->with('success', 'Galeri created successfully.');
    }
    public function storesakit(Request $request)
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
        
        Sakit::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'lahir' => $request->lahir,
            'jeniskelamin' => $request->jeniskelamin,
            'rs' => $request->rs,
           
        ]);


        return redirect()->route('hurias.index')
            ->with('success', 'Galeri created successfully.');
    }
    public function storepindah(Request $request)
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
        
        Pindah::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'lahir' => $request->lahir,
            'jeniskelamin' => $request->jeniskelamin,
            'rs' => $request->rs,
           
        ]);


        return redirect()->route('hurias.index')
            ->with('success', 'Galeri created successfully.');
    }
    public function storemeninggal(Request $request)
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
        
        Meninggal::create([
            'name' => $request->name,
            'wijk' => $request->wijk,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'lahir' => $request->lahir,
            'jeniskelamin' => $request->jeniskelamin,
            'rs' => $request->rs,
           
        ]);


        return redirect()->route('hurias.index')
            ->with('success', 'Galeri created successfully.');
    }

}
