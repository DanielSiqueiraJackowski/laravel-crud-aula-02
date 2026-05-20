<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/curso', CursoController::class);














// Route::get('/curso/teste', [CursoController::class, 'index']);


// Route::resource('/curso', CursoController::class);


