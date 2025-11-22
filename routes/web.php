<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::controller(LoginController::class)->group(function(){
    Route::get('/', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/loginproses', 'loginproses')->name('loginproses');
    Route::post('/registerproses', 'registerproses')->name('registerproses');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/user/{id}/update-password', 'showUpdatePasswordForm')->name('users.showUpdatePasswordForm');
    Route::post('/user/{id}/update-password', 'updatePassword')->name('users.updatePassword');
});

Route::middleware(['auth','checkrole'])->group(function(){
    Route::get('/admin', [DashboardController::class, 'dashboard'])->name('dashboard');
});