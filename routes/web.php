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
    return view('Berita.data_list');
});


Route::get('dashboard', [App\Http\Controllers\DinasController::class, 'index'])->name('dashboard'); 

//Routing Berita

Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.list');
Route::get('landingberita', [App\Http\Controllers\BeritaController::class, 'landing'])->name('berita.landing');
Route::get('berita/{id_berita}', [App\Http\Controllers\BeritaController::class, 'show'])->name('berita.detail');
Route::get('berita/create', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
Route::post('berita/store', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
Route::get('berita/{id_berita}/edit', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
Route::put('berita/{id_berita}/update', [App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update');
Route::get('berita/{id_berita}/destroy', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.destroy');


//Routing Dinas Dashboard

Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.list');
Route::get('landingdinas', [App\Http\Controllers\BeritaController::class, 'landing'])->name('berita.landing');
Route::get('berita/{id_berita}', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.detail');
Route::get('berita/create', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.create');
Route::post('berita/store', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.store');
Route::get('berita/{id_berita}/edit', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.edit');
Route::put('berita/{id_berita}/update', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.update');
Route::get('berita/{id_berita}/destroy', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.destroy');

