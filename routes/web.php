<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::controller(AuthenticateController::class)->group(function(){
    Route::get('/login','renderLoginView')->middleware('guest')->name('login');
    Route::get('/register','renderRegisterView')->middleware('guest')->name('register');
    Route::get('/forgot-password','renderForgotPasswordView')->middleware('guest')->name('forgotPassword');
    Route::post('/authenticate','authenticate')->middleware('guest')->name('authenticate');
    Route::get('/logout','logout')->middleware('auth')->name('logout');
});
Route::controller(AsetController::class)->middleware(['auth','role:tata usaha'])->group(function(){
    Route::get('/manajemen-aset/index','index')->name('manajemenAset.index');
});
