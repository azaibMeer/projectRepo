<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryDetailController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;



Route::get('/logout', function(Request $request){
	
	Auth::logout();
		$request->session()->invalidate();
    	$request->session()->regenerateToken();
        return redirect('/login');
});



Route::get('/', [NewsController::class,'index']);
Route::get('/contact', [ContactUsController::class,'index']);
Route::get('/detail/{id}', [DetailController::class,'index']);
Route::get('category/{id}', [CategoryController::class,'index']);
Route::get('category/detail/{id}', [CategoryDetailController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/dashboard', [AuthController::class,'login']);
Route::get('/create', [CategoryController::class,'create']);
Route::post('/store', [CategoryController::class,'store']);
Route::get('/list', [CategoryController::class,'show']);


		




