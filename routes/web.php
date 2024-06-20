<?php

use App\Http\Controllers\KopiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[LandingController::class, 'index']);

route::get('/sesi',[LoginController::class,'index']);
route::post('/sesi/login',[LoginController::class,'login']);
route::get('/sesi/logout',[LoginController::class,'logout']);
route::get('/sesi/register',[LoginController::class,'register']);
route::post('/sesi/create',[LoginController::class,'create']);

route::resource('/kopi', KopiController::class);
