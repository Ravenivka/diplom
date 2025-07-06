<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BookingController;
//use App\http\Controllers\FeedbackController;


Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', function(){return redirect('/home');} );
Route::get('/home', [HomeController::class, 'index'] );
Route::get('/coffe', [HomeController::class, 'coffe']);
Route::get('/order', [HomeController::class, 'order']);
Route::get('/team', [HomeController::class, 'team']);
Route::post('/record', [HomeController::class, 'record']);
Route::get('/reg/{parent}', [HomeController::class, 'reg']);
Route::get('/aut/{parent}', [HomeController::class, 'aut']);
Route::get('/exit/{parent}', [HomeController::class, 'exit'] );
Route::get('/info/{edit}', [HomeController::class, 'profile']);
Route::post('/getImg/{edit}', [HomeController::class, 'getImg']);
Route::post('/profile/{edit}', [HomeController::class, 'getInfo']);

Route::post('/order', [OrderController::class, 'order']);
Route::post('/decrease/{id}',[OrderController::class, 'decrease']);
Route::post('/increase/{id}',[OrderController::class, 'increase']);
Route::get('/form', [OrderController::class, 'form'] );

 
Route::post('/create', [BookingController::class, 'create']);
Route::get('/myorder', [BookingController::class, 'order']);
Route::get('/posts', [BookingController::class, 'posts']);


Route::get('/feed', [HomeController::class, 'index2']);
Route::post('/feed', [HomeController::class, 'feed']);
Route::get('/panel', [HomeController::class, 'panel'] );

Route::post('/admin_user', [HomeController::class, 'admin_user']);
Route::post('/admin_book', [HomeController::class, 'admin_book']);
Route::post('/admin_feed', [HomeController::class, 'admin_feed']);