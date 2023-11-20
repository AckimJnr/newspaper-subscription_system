<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/signin', [App\Http\Controllers\AuthController::class, 'signin'])->name('signin');
Route::get('/signup', [App\Http\Controllers\AuthController::class, 'signup'])->name('signup');

Route::middleware(['auth'])->group(function () {
    Route::get('/userprofile', [App\Http\Controllers\DashboardController::class, 'userprofile'])->name('userprofile')->middleware('role:subscriber');
    Route::get('/mysubscription', [App\Http\Controllers\DashboardController::class, 'mysubscription'])->name('mysubscription')->middleware('role:subscriber');
    Route::get('/newsfeed', [App\Http\Controllers\DashboardController::class, 'newsfeed'])->name('newsfeed')->middleware('role:subscriber');
    Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'admin'])->name('admin')->middleware('role:admin');
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});