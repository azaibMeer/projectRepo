<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.welcome');
// });
Route::get('/', [WebsiteController::class,'index']);
Route::get('/contactUs', [ContactUsController::class,'index']);
/*Route::get('/', [CategoryController::class,'index']);*/

 Route::get('/detail', function () {
     return view('layouts.detail');
 });