<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryController;






Route::get('/', [NewsController::class,'index']);
Route::get('/contact', [ContactUsController::class,'index']);


Route::get('/detail', function () {
   return view('layouts.detail');
});
