<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('test');
// });
Route::get('/',[HomeController::class, 'index'])->name('show');

Route::get('/check', [BookingController::class, 'index'])->name('check');

// Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::post('/login',[LoginController::class, 'store'])->name('login');
Route::get('/logout',[LogoutController::class, 'destroy'])->name('logout');

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin',[AdminController::class, 'storeImage'])->name('admin');
// Route::get('/show', [AdminController::class, 'show']);

