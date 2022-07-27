<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PengunjungController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::controller(PetugasController::class)->group(function(){
    Route::get('/petugas', 'show')->name('Petugas');
    Route::get('/add-petugas', 'create');
    Route::post('/insert-petugas', 'store');
    Route::get('/edit-petugas/{id}', 'edit');
    Route::post('/update-petugas/{id}', 'update');
    Route::get('/delete-petugas/{id}', 'destroy');
});

Route::controller(PengunjungController::class)->group(function() {
    Route::get('/pengunjung', 'show')->name('Pengunjung');
    Route::get('/add-pengunjung', 'create');
    Route::post('/insert-pengunjung', 'store');
    Route::get('/edit-pengunjung/{id}', 'edit');
    Route::post('/update-pengunjung/{id}', 'update');
    Route::get('/delete-pengunjung/{id}', 'destroy'); 
});

Route::controller(BukuController::class)->group(function() {
    Route::get('/buku', 'show')->name('Buku');
    Route::get('/add-buku', 'create');
    Route::post('/insert-buku', 'store');
    Route::get('/edit-buku/{id}', 'edit');
    Route::post('/update-buku/{id}', 'update');
    Route::get('/delete-buku/{id}', 'destroy'); 
});

Route::controller(PeminjamController::class)->group(function() {
    Route::get('/peminjam', 'show')->name('Peminjam');
    Route::get('/add-peminjam', 'create');
    Route::post('/insert-peminjam', 'store');
    Route::get('/edit-peminjam/{id}', 'edit');
    Route::post('/update-peminjam/{id}', 'update');
    Route::get('/delete-peminjam/{id}', 'destroy'); 
});


