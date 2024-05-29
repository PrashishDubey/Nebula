<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/',[FrontendController::class,'index']);
Route::get('/home',[FrontendController::class,'index']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::get('/shop',[FrontendController::class,'shop'])->name('shop');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/purchase',[FrontendController::class,'purchase'])->name('purchase');
