<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'] );
Route::get('/laravel', function () {
    return view('welcome');
});

Route::post('/aut', [HomeController::class, 'aut']);
 
Route::get('/coffe', [HomeController::class, 'coffe']);
Route::get('/feed', [HomeController::class, 'feed']);
Route::get('/order', [HomeController::class, 'order']);
Route::get('/team', [HomeController::class, 'team']);
Route::post('/order', [HomeController::class, 'getorder']);