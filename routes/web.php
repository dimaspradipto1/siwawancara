<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PenilaianController;

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
Route::get('/debug-https', function () {
    return [
        'secure' => request()->secure(),
        'proto' => request()->header('X-Forwarded-Proto'),
        'url' => url()->current(),
        'server_port' => request()->server('SERVER_PORT'),
    ];
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/loginproses', 'loginproses')->name('loginproses');
    Route::post('/registerproses', 'registerproses')->name('registerproses');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware(['auth','checkrole'])->group(function(){
    Route::get('/admin', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::get('/user/{id}/update-password', [UserController::class, 'showUpdatePasswordForm'])->name('user.showUpdatePasswordForm');
    Route::post('/user/{id}/update-password', [UserController::class, 'updatePassword'])->name('user.updatePassword');
    Route::post('/user/import', [UserController::class, 'import'])->name('user.import');
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::post('/mahasiswa/import', [MahasiswaController::class, 'import'])->name('mahasiswa.import');
    Route::post('/mahasiswa/bulk-delete', [MahasiswaController::class, 'bulkDelete'])
            ->name('mahasiswa.bulkDelete');
    Route::post('/mahasiswa/delete-all', [MahasiswaController::class, 'deleteAll'])
            ->name('mahasiswa.deleteAll');
    Route::resource('penilaian', PenilaianController::class);
    Route::post('/penilaian/cariPendaftar', [PenilaianController::class, 'cariPendaftar'])->name('penilaian.cariPendaftar');
    Route::get('/export', [PenilaianController::class, 'export'])->name('export');
});
