<?php

namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;

use App\Models\Jemaat;
use Carbon\Carbon;
use Illuminate\Http\Request;


class JemaatController extends Controller
{
    // crud function for data jemaat
    public function index(){
            $jemaats = Jemaat::paginate(10);
            return view('admin.data_jemaat.index', compact('jemaats'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'alamat' => 'required',
            'wijk' => 'required',
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
            'wijk' => 'required',
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

    // menarik data jemaat ke dashboard
    public function dashboard(){
        $jemaats = Jemaat::all();
        return view('admin.dashboard', compact('jemaats'));
    }

    // menarik data jemaat dan diurutkan berdasarkan tanggal lahir
    public function birthday()
{
    $today = Carbon::today();
    $startOfWeek = $today->startOfWeek()->format('m-d');
    $endOfWeek = $today->endOfWeek()->format('m-d');

    $jemaats = Jemaat::where(function ($query) use ($startOfWeek, $endOfWeek) {
        $query->whereRaw("DATE_FORMAT(birth_date, '%m-%d') >= ?", [$startOfWeek])
              ->whereRaw("DATE_FORMAT(birth_date, '%m-%d') <= ?", [$endOfWeek]);
    })
    ->orderByRaw("DATE_FORMAT(birth_date, '%m-%d') ASC")
    ->get();

    return view('admin.birthday', compact('jemaats'));
}


}
