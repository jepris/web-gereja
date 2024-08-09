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
use App\Http\Controllers\CreateController;
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

// Bagian User route
Route::get('/', [DashboardController::class, 'index']);
Route::get('/beranda', [DashboardController::class, 'index'])->name('beranda');
Route::get('/warta-jemaat', [DashboardController::class, 'wartajemaat']);
Route::get('/download-warta/{filename}', [DashboardController::class, 'downloadWarta'])->name('downloadWarta');
Route::get('/image', [DashboardController::class, 'image']);
Route::get('/tentang', [DashboardController::class, 'tentang']);
Route::get('/layanan', [DashboardController::class, 'layanan']);
Route::get('/hurias/newkontak', [CreateController::class, 'createkontak'])->name('createkontak');
Route::get('/hurias/newbaby', [CreateController::class, 'createbaby'])->name('createbaby');
Route::get('/hurias/newsidi', [CreateController::class, 'createsidi'])->name('createsidi');
Route::get('/hurias/newnikah', [CreateController::class, 'createnikah'])->name('createnikah');
Route::get('/hurias/newsakit', [CreateController::class, 'createsakit'])->name('createsakit');
Route::get('/hurias/newgereja', [CreateController::class, 'creategereja'])->name('creategereja');
Route::get('/hurias/newmeninggal', [CreateController::class, 'createmeninggal'])->name('createmeninggal');

Route::post('/hurias', [CreateController::class, 'store'])->name('hurias.store');
Route::post('/hurias', [CreateController::class, 'store'])->name('hurias.store');
Route::post('/hurias', [CreateController::class, 'store'])->name('hurias.store');
// Bagian Admin route
Route::get('/jemaat', [JemaatController::class, 'index'])->name('jemaat');
Route::resource('schedule', ScheduleController::class);
Route::resource('news', NewsController::class);
Route::resource('wartas', WartaController::class);
Route::resource('images', GaleriController::class);
Route::get('/dashboard',[JemaatController::class, 'dashboard'])->name('dashboard');
Route::resource('jemaat',JemaatController::class);
Route::resource('keuangan',KeuanganController::class);
Route::get('/birthday',[JemaatController::class, 'birthday'])->name('birthday');



