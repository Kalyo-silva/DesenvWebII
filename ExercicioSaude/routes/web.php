<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerHome;
use App\Http\Controllers\controllerResult;

Route::resource('/', controllerHome::class);

route::resource('/result', controllerResult::class);