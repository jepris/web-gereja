<?php

use App\Models\Warta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\HuriaController;
use App\Http\Controllers\Admin\LahirController;
use App\Http\Controllers\Admin\WartaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\JemaatController;
use App\Http\Controllers\Admin\KeuanganController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Models\Huria;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/layanan', function () {
//     return view('layanan');
// });
//user
Route::get('/', [DashboardController::class, 'index']);
Route::get('/beranda', [DashboardController::class, 'index'])->name('beranda');
Route::get('/warta-jemaat', [DashboardController::class, 'wartajemaat']);
Route::get('/download-warta/{filename}', [DashboardController::class, 'downloadWarta'])->name('downloadWarta');
Route::get('/image', [DashboardController::class, 'image']);
Route::get('/tentang', [DashboardController::class, 'tentang']);
Route::get('/hurias', [DashboardController::class, 'layanan']);
Route::get('/hurias/newjemaat', [HuriaController::class, 'create'])->name('hurias.create');
Route::post('/hurias', [HuriaController::class, 'store'])->name('hurias.store');
// Route::get('/hurias', [HuriaController::class, 'createbaby'])->name('hurias.createbaby');
Route::post('/hurias', [LahirController::class, 'storebaby'])->name('baby.storebaby');
// Route::resource('hurias', HuriaController::class);


// Route::get('wartas/{warta}/download', [DashboardController::class, 'download'])->name('wartas.download');

//Admin
Route::get('/jemaat', [JemaatController::class, 'index'])->name('jemaat');
Route::resource('schedule', ScheduleController::class);
Route::resource('news', NewsController::class);
Route::resource('wartas', WartaController::class);
Route::resource('images', GaleriController::class);
Route::get('/dashboard',[JemaatController::class, 'dashboard'])->name('dashboard');
Route::resource('jemaat',JemaatController::class);
Route::resource('keuangan',KeuanganController::class);
Route::get('/birthday',[JemaatController::class, 'birthday'])->name('birthday');



