<?php

use App\Http\Controllers\alumniController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/')->group(function(){
    Route::get('/',[mainController::class,'index'])->name('index');
    Route::get('/jurusan',[mainController::class,'jurusan'])->name('jurusan');
    Route::get('/tentang-kami',[mainController::class,'tentang_kami'])->name('tentang-kami');
    Route::get('/contact',[mainController::class,'contact'])->name('contact');
});

Route::prefix('/dashboard')->group(function(){
    Route::get('/',[alumniController::class,'index'])->name('alumni');
    Route::post('/tambah',[alumniController::class,'tambah'])->name('alumni.tambah');
    Route::delete('/hapus{id}',[alumniController::class,'hapus'])->name('alumni.hapus');
    
    Route::get('/contact',[contactController::class,'index'])->name('contact');
    Route::post('/contact/tambah',[contactController::class,'tambah'])->name('contact.tambah');
    Route::delete('contact/hapus{id}',[contactController::class,'hapus'])->name('contact.hapus');
});