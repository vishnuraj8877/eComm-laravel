<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});
// Route::resource('/',UserController::class);
Route::view('/login','login');
Route::post('/login',[UserController::class,'login']);
Route::middleware(['auth'])->group(function () {
    Route::get('/',[ProductController::class,'index']);
});
