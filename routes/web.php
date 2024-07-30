<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('beranda');
// });
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
Route::get('/warta', [DashboardController::class, 'warta'])->name('beranda');


