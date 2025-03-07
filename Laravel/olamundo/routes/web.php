<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

Route::resource('/contato', ContatoController::class);