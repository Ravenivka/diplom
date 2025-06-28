<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/laravel', function () {
    return view('welcome');
});



Route::get('/', function(){return redirect('/home');} );
Route::get('/home', [HomeController::class, 'index'] );




Route::get('/aut/{parent}', [HomeController::class, 'aut']);
Route::get('/reg/{parent}', [HomeController::class, 'reg']);
 
Route::get('/coffe', [HomeController::class, 'coffe']);
Route::get('/feed', [HomeController::class, 'feed']);
Route::get('/order', [HomeController::class, 'order']);
Route::get('/team', [HomeController::class, 'team']);
Route::post('/order/{data}', [HomeController::class, 'getorder']);
Route::post('/record', [HomeController::class, 'record']);