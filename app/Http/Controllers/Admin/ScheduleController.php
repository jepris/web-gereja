<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('admin.schedule.index', compact('schedules'));
        // return view('admin.schedule');
    }

    public function create()
    {
        return view('schedule.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ibadah'=> 'required', 
            'hari'=> 'required', 
            'keterangan'=> 'required',
        ]);

        Schedule::create($request->all());
        return redirect()->route('schedule.index')->with('success', 'Jadwal ibadah berhasil ditambahkan.');
    }

    public function edit(Schedule $schedule)
    {
        return view('schedule.edit', compact('jadwalIbadah'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'nama_ibadah' => 'required',
            'hari' => 'required',
            'waktu' => 'required',
        ]);

        $schedule->update($request->all());
        return redirect()->route('schedule.index')->with('success', 'Jadwal ibadah berhasil diperbarui.');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedule.index')->with('success', 'Jadwal ibadah berhasil dihapus.');
    }
}
