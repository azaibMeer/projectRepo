<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryController;






Route::get('/', [NewsController::class,'index']);
Route::get('/contactUs', [ContactUsController::class,'index']);


 

