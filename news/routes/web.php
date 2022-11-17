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
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\CityDetailController;
use App\Http\Controllers\VerseController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ReporterController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ProgramController;



Route::get('/logout', function(Request $request){
	
	Auth::logout();
		$request->session()->invalidate();
    	$request->session()->regenerateToken();
        return redirect('/login');
});



Route::get('/', [NewsController::class,'index']);
Route::get('/detail/{slug}', [DetailController::class,'index']);
Route::get('/topics/{slug}', [CategoryController::class,'index']);
Route::get('/city/{slug}', [CityController::class,'index']);
/*Route::get('category/detail/{id}', [CategoryDetailController::class,'index']);*/

Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/dashboard', [AuthController::class,'login']);
Route::get('user/contact', [ContactUsController::class,'index']);

Route::group(['middleware'=> 'admin'],function(){



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



/*Route::get('city/detail/{id}', [CityDetailController::class,'index']);*/


// News routes // 
Route::get('/news/create', [NewsController::class,'create']);
Route::post('/news/store', [NewsController::class,'store']);
Route::get('/news/list', [NewsController::class,'show']);
Route::get('/news/edit/{id}', [NewsController::class,'edit']);
Route::post('/news/update/{id}', [NewsController::class,'update']);
Route::get('/news/delete/{id}', [NewsController::class,'destroy']);


Route::post('/contact/store', [ContactUsController::class,'store']);
Route::get('/contact/list', [ContactUsController::class,'show']);
Route::get('/db/record', [ContactUsController::class,'duplicateRecord']);


Route::post('/subscribe/store', [SubscribeController::class,'store']);
		


Route::get('/verses/edit/', [VerseController::class,'index']);
Route::post('/verses/update/', [VerseController::class,'update']);

Route::get('/setting/edit/', [SettingController::class,'index']);
Route::post('/setting/update/', [SettingController::class,'update']);

// reporter //

Route::get('/reporter/create', [ReporterController::class,'create']);
Route::post('/reporter/store', [ReporterController::class,'store']);
Route::get('/reporter/list', [ReporterController::class,'show']);
Route::get('/reporter/edit/{id}', [ReporterController::class,'edit']);
Route::post('/reporter/update/{id}', [ReporterController::class,'update']);
Route::get('/reporter/delete/{id}', [ReporterController::class,'destroy']);
Route::get('/reporter/{id}', [ReporterController::class,'reporters']);


Route::get('/ads/create', [AdsController::class,'create']);
Route::post('/ads/store', [AdsController::class,'store']);
Route::get('/ads/list', [AdsController::class,'show']);
Route::get('/ads/edit/{id}', [AdsController::class,'edit']);
Route::post('/ads/update/{id}', [AdsController::class,'update']);
Route::get('/ads/delete/{id}', [AdsController::class,'destroy']);

// programs //

Route::get('/program/create', [ProgramController::class,'create']);
Route::post('/program/store', [ProgramController::class,'store']);
Route::get('/program/list', [ProgramController::class,'show']);
Route::get('/program/edit/{id}', [ProgramController::class,'edit']);
Route::post('/program/update/{id}', [ProgramController::class,'update']);
Route::get('/program/delete/{id}', [ProgramController::class,'destroy']);


});

