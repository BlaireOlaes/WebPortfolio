<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\loginFormController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [indexController::class,'index'])->name("index");
Route::post('/', [indexController::class,'index'])->name("index");

// Route::get('/login', [loginController::class,'index']);
// Route::post('/login', [loginController::class,'create'])->name("login.create");

// Route::get('/loginForm',[loginFormController::class,'index'])->name('login');

Route::get('/login', [loginFormController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginFormController::class, 'login']);
Route::POST('/', [loginFormController::class, 'logout'])->name('logout');

