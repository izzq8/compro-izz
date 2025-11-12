<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

// Login
Route::get('/', [\App\Http\Controllers\LoginController::class,'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class,'index'])->name('index');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('sign-out', [\App\Http\Controllers\LoginController::class, 'logout'])->name('sign-out');

//prefix admin
Route::prefix('admin')->group(function(){
    Route::resource('dashboard', \App\Http\Controllers\ADMIN\DashboardController::class);
});



// route get : melihat. membaca 

Route::get('Belajar', [\App\Http\Controllers\BelajarController::class, 'index']);

Route::get('aritmatika', [\App\Http\Controllers\BelajarController::class, 'create']);
Route::get('aritmatika/tambah', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('aritmatika.tambah');
Route::get('aritmatika/kurang', [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('aritmatika.kurang');
Route::get('aritmatika/bagi', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('aritmatika.bagi');
Route::get('aritmatika/kali', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('aritmatika.kali');

Route::post('tambah-action', [\App\Http\Controllers\BelajarController::class, 'tambahAction'])->name('tambah-action');
Route::post('kurang-action', [\App\Http\Controllers\BelajarController::class, 'kurangAction'])->name('kurang-action');
Route::post('bagi-action', [\App\Http\Controllers\BelajarController::class, 'bagiAction'])->name('bagi-action');
Route::post('kali-action', [\App\Http\Controllers\BelajarController::class, 'kaliAction'])->name('kali-action');
