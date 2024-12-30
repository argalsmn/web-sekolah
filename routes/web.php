<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/')->group(function(){
    Route::get('/',[mainController::class,'index'])->name('index');
    Route::get('/contact',[mainController::class,'contact'])->name('contact');
});