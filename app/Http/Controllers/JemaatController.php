<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    public function index(){
            $jemaats = Jemaat::all();
            return view('admin.data_jemaat.index', compact('jemaats'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        Jemaat::create($request->all());
        return redirect()->route('jemaat.index');
    }

    public function update(Request $request, Jemaat $jemaat){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'umur' => 'required',
        ]);

        $jemaat->update($request->all());
        return redirect()->route('jemaat.index');
    }

    public function destroy(Jemaat $jemaat){
        $jemaat->delete();
        return redirect()->route('jemaat.index');
    }

}
