<?php

use Illuminate\Support\Facades\Route;

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
    return view('LandingBerita.landingberita');
});

//Routing Berita

Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.list');
Route::get('berita/create', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.create');
Route::post('berita/store', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.store');
Route::get('berita/{id_berita}/edit', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.edit');
Route::put('berita/{id_berita}/update', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.update');
Route::get('berita/{id_berita}/destroy', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.destroy');

//

