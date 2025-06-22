<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'] );
Route::get('/laravel', function () {
    return view('welcome');
});
Route::post('/aut', [HomeController::class, 'aut']);
Route::get('/order', [HomeController::class, 'order']);
