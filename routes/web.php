<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GerejaController;

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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda',[GerejaController::class, 'beranda'])->name('beranda');
Route::get('/tentang',[GerejaController::class, 'tentang'])->name('tentang');
Route::get('/warta',[GerejaController::class, 'warta'])->name('warta');
Route::get('/galeri',[GerejaController::class, 'galeri'])->name('galeri');
Route::get('/layanan',[GerejaController::class, 'layanan'])->name('layanan');
