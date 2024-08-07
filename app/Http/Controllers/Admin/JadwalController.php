<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = Jadwal::paginate(10);
        return view('admin.jadwal.index', compact('jadwals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'hari' => 'required|date',
            'keterangan' => 'nullable|date_format:H:i'
        ]);

        Jadwal::create([
            'name' => $request->input('name'),
            'hari' => $request->input('hari'),
            'keterangan' => $request->input('keterangan'),
        ]);
        return redirect()->route('jadwal.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'hari' => 'required|date',
            'keterangan' => 'nullable|date_format:H:i'
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('jadwal.index');
    }

}
