<?php

use App\Models\Warta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\WartaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\JemaatController;
use App\Http\Controllers\Admin\KeuanganController;
use App\Http\Controllers\Admin\LayananController;
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
// get function 
Route::get('/', [DashboardController::class, 'index']);
Route::get('/beranda', [DashboardController::class, 'index'])->name('beranda');
Route::get('/warta-jemaat', [DashboardController::class, 'wartajemaat']);
Route::get('/download-warta/{filename}', [DashboardController::class, 'downloadWarta'])->name('downloadWarta');
Route::get('/image', [DashboardController::class, 'image']);
Route::get('/tentang', [DashboardController::class, 'tentang']);
Route::get('/layanan', [DashboardController::class, 'layanan']);
Route::get('/hurias', [CreateController::class, 'index'])->name('hurias.index');
Route::get('/tentang', [CreateController::class, 'tentang'])->name('tentang.tentang');
Route::get('/hurias/newkontak', [CreateController::class, 'createkontak'])->name('createkontak');
Route::get('/hurias/newbaptis', [CreateController::class, 'createbaptis'])->name('createbaptis');
Route::get('/hurias/newlahir', [CreateController::class, 'createlahir'])->name('createlahir');
Route::get('/hurias/newsidi', [CreateController::class, 'createsidi'])->name('createsidi');
Route::get('/hurias/newnikah', [CreateController::class, 'createnikah'])->name('createnikah');
Route::get('/hurias/newsakit', [CreateController::class, 'createsakit'])->name('createsakit');
Route::get('/hurias/newpindah', [CreateController::class, 'createpindah'])->name('createpindah');
Route::get('/hurias/newmeninggal', [CreateController::class, 'createmeninggal'])->name('createmeninggal');
// post function
Route::post('/hurias/newlahir', [CreateController::class, 'storelahir'])->name('hurias.storelahir');
Route::post('/hurias/newbaptis', [CreateController::class, 'storebaptis'])->name('hurias.storebaptis');
Route::post('/hurias/newsidi', [CreateController::class, 'storesidi'])->name('hurias.storesidi');
Route::post('/hurias/newnikah', [CreateController::class, 'storenikah'])->name('hurias.storenikah');
Route::post('/hurias/newsakit', [CreateController::class, 'storesakit'])->name('hurias.storesakit');
Route::post('/hurias/newpindah', [CreateController::class, 'storepindah'])->name('hurias.storepindah');
Route::post('/hurias/newmeninggal', [CreateController::class, 'storemeninggal'])->name('hurias.storemeninggal');
Route::post('/hurias/newkontak', [CreateController::class, 'storekontak'])->name('hurias.storekontak');


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

// Route::get('/birthday',[JemaatController::class, 'birthday'])->name('birthday');

Route::get('/lahirs',[LayananController::class, 'indexlahir'])->name('lahirs.indexlahir');
Route::get('/pindahs',[LayananController::class, 'indexpindah'])->name('lahirs.indexpindah');
Route::get('/baptis',[LayananController::class, 'indexbaptis'])->name('baptis.indexbaptis');
Route::get('/sidis',[LayananController::class, 'indexsidi'])->name('sidis.indexsidi');
Route::get('/nikahs',[LayananController::class, 'indexnikah'])->name('nikahs.indexnikah');
Route::get('/sakits',[LayananController::class, 'indexsakit'])->name('sakits.indexsakit');
Route::get('/meninggals',[LayananController::class, 'indexmeninggal'])->name('meninggals.indexmeninggal');
Route::get('/wartasakit',[LayananController::class, 'wartasakit'])->name('wartasakit');
Route::get('/wartameninggal',[LayananController::class, 'wartameninggal'])->name('wartameninggal');
Route::get('/wartanikah',[LayananController::class, 'wartanikah'])->name('wartanikah');

Route::delete('/lahirs/{id}', [LayananController::class, 'destroylahir'])->name('lahirs.destroylahir');
Route::delete('/pindahs/{id}', [LayananController::class, 'destroypindah'])->name('pindahs.destroypindah');
Route::delete('/baptis/{id}', [LayananController::class, 'destroybaptis'])->name('baptis.destroybaptis');
Route::delete('/sidis/{id}', [LayananController::class, 'destroysidi'])->name('sidis.destroysidi');
Route::delete('/nikahs/{id}', [LayananController::class, 'destroynikah'])->name('nikahs.destroynikah');
Route::delete('/sakits/{id}', [LayananController::class, 'destroysakit'])->name('sakits.destroysakit');
Route::delete('/meninggals/{id}', [LayananController::class, 'destroymeninggal'])->name('meninggals.destroymeninggal');

Route::put('/lahirs/{id}', [LayananController::class, 'updatelahir'])->name('lahirs.updatelahir');
Route::put('/pindah/{id}', [LayananController::class, 'updatepindah'])->name('pindahs.updatepindah');
Route::put('/baptis/{id}', [LayananController::class, 'updatebaptis'])->name('baptis.updatebaptis');
Route::put('/sidis/{id}', [LayananController::class, 'updatesidi'])->name('sidis.updatesidi');
Route::put('/nikahs/{id}', [LayananController::class, 'updatenikah'])->name('nikahs.updatenikah');
Route::put('/sakits/{id}', [LayananController::class, 'updatesakit'])->name('sakits.updatesakit');
Route::put('/meninggals/{id}', [LayananController::class, 'updatemeninggal'])->name('meninggals.updatemeninggal');




route::get('/login', function(){
    return view('auth.login');
});
route::get('/regis', function(){
    return view('auth.regis');
});
route::get('/berita', function(){
    return view('berita');
});