<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;






Route::get('/', [NewsController::class,'index']);
Route::get('/contact', [ContactUsController::class,'index']);
Route::get('/detail/{id}', [DetailController::class,'index']);


