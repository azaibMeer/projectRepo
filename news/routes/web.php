<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryDetailController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryController;






Route::get('/', [NewsController::class,'index']);
Route::get('/contact', [ContactUsController::class,'index']);
Route::get('/detail/{id}', [DetailController::class,'index']);
Route::get('category/{id}', [CategoryController::class,'index']);
Route::get('category/detail/{id}', [CategoryDetailController::class,'index']);


