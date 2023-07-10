<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\HitungController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HalamanController::class, 'index']);
Route::get('/kontak', [HalamanController::class, 'kontak']);
Route::get('/tentang', [HalamanController::class, 'tentang']);  
Route::get('/service', [HalamanController::class, 'service']);
Route::resource('/admin/kriteria', KriteriaController::class);
Route::resource('/admin/produk', ProdukController::class);

Route::get('/admin/hitung', [HitungController::class, 'hitung'])->name('hitung');
