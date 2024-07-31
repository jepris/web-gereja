<?php

use App\Models\Warta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WartaController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/form-kontak', function () {
    return view('form.form-kontak');
});

// butuh buat referensi
Route::get('/form-baptis', function () {
    return view('form.form-baptis');
});
Route::get('/form-jemaat-lahir', function () {
    return view('form.form-jemaat-lahir');
});
Route::get('/form-jemaat-meninggal', function () {
    return view('form.form-jemaat-meninggal');
});
Route::get('/form-jemaat-sakit', function () {
    return view('form.form-jemaat-sakit');
});
Route::get('/form-pendaftaran-jemaat', function () {
    return view('form.form-pendaftaran-jemaat');
});
Route::get('/form-pendaftaran-nikah', function () {
    return view('form.form-pendaftaran-nikah');
});
Route::get('/form-pendaftaran-sidi', function () {
    return view('form.form-pendaftaran-sidi');
});
Route::get('/form-pindah-jemaat', function () {
    return view('form.form-pindah-jemaat');
});

// dashboard admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/jemaat', function () {
    return view('admin.data-jemaat.jemaat');
});




Route::get('/tentang', function () {
    return view('tentang');

});

Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/', [DashboardController::class, 'index']);
Route::get('/beranda', [DashboardController::class, 'index'])->name('beranda');
Route::get('/warta', [WartaController::class, 'index'])->name('beranda');


// Route::get('admin/jemaat', [JemaatController::class, 'index'])->name('jemaat');


