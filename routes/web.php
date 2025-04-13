<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::middleware(SetLocale::class)->prefix('{locale}')->group( function () {
    
    Route::get('/about', [HomeController::class,'about'])->name('about');
    Route::get('/contact', [HomeController::class,'contact'])->name('contact');

    
});







