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
use App\Http\Controllers\CityController;



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
// category routes // 
Route::get('/categories/create', [CategoryController::class,'create']);
Route::post('/categories/store', [CategoryController::class,'store']);
Route::get('/categories/list', [CategoryController::class,'show']);
Route::get('/categories/edit/{id}', [CategoryController::class,'edit']);
Route::post('/categories/update/{id}', [CategoryController::class,'update']);
Route::get('/categories/delete/{id}', [CategoryController::class,'destroy']);

// cities routes // 
Route::get('/cities/create', [CityController::class,'create']);
Route::post('/cities/store', [CityController::class,'store']);
Route::get('/cities/list', [CityController::class,'show']);
Route::get('/cities/edit/{id}', [CityController::class,'edit']);
Route::post('/cities/update/{id}', [CityController::class,'update']);
Route::get('/cities/delete/{id}', [CityController::class,'destroy']);


		




