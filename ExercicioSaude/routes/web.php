<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerHome;
use App\Http\Controllers\controllerIMC;
use App\Http\Controllers\controllerSleep;
use App\Http\Controllers\controllerTravel;
use App\Http\Controllers\controllerResult;


Route::resource('/', controllerHome::class);
Route::resource('/IMC', controllerIMC::class);
Route::resource('/sleep', controllerSleep::class);
Route::resource('/travel', controllerTravel::class);

route::get('/resultIMC', [controllerResult::class, 'resultIMC']);
route::get('/resultSleep', [controllerResult::class, 'resultSleep']);
route::get('/resultTravel', [controllerResult::class, 'resultTravel']);