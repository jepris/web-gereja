<?php

namespace App\Http\Controllers\Admin;

use App\Models\Baby;
use App\Models\Huria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LahirController extends Controller
{
    public function createbaby()
    {
        return view('layanan');
    }

    public function storebaby(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            // 'email' => 'required|email|unique:hurias',
            'email' => 'required|email',
            'gereja_asal' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
            'keluarga'=>'required'
        ]);

        $file = $request->file('file');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = 'files/' . $fileName;
        $file->move(public_path('huria'), $fileName);

        Baby::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'gereja_asal' => $request->gereja_asal,
            'file' => $filePath,
            'keluarga'=> $request->keluarga
        ]);

        return redirect()->route('hurias.index')->with('success', 'Selamat menjadi jemaat baru');
    }

    public function showbaby(Baby $baby)
    {
        //
        return view('hurias.show', compact('huria'));
    }

    public function editbaby(Baby $baby)
    {
        //
        return view('hurias.edit', compact('huria'));
    }

    public function updatebaby(Request $request, Baby $baby)
    {
        //
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:jemaat,email,' . $baby->id,
            'gereja_asal' => 'required',
            'file' => 'nullable|mimes:pdf|max:2048',
            'keluarga'=> 'required'
        ]);
        $data = $request->only('nama','no_hp','alamat','email','gereja_asal','keluarga');
        if($request->hasFile('file')){
            if ($baby->file && file_exists(public_path($baby->file))) {
                unlink(public_path($baby->file));
            }
            $file = $request->file('file');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = 'files/' . $fileName;
            $file->move(public_path('huria'), $fileName);
        
        $data['file'] = $filePath;
    }
    $baby->update($data);
    return redirect()->route('hurias.index')->with('success', 'Jemaat updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroybaby(Baby $baby)
    {
        $baby->delete();
        return redirect()->route('hurias.index')->with('success', 'Jemaat deleted successfully.');
    }

}