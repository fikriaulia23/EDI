<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth', 'role:user'])->group(function () {
    //semua route dalam grup ini hanya bisa diakses oleh user

    Route::get('/riwayat-pekerjaan', [App\Http\Controllers\ViewController::class, 'pekerjaan'])->name('form-pekerjaan');
    Route::get('/user', [UserController::class, 'index'])->name('dashboard-user');
});

// Route::middleware(['auth'])->group(function () {
//     //semua route dalam grup ini hanya bisa diakses oleh admin

//     Route::get('/user', [UserController::class, 'index'])->name('dashboard-user');
//     Route::get('/admin', [AdminController::class, 'index'])->name('dashboard-admin');
// });



Auth::routes();
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/home', [App\Http\Controllers\ViewController::class, 'index'])->name('dashboard');

Route::post('/create-data-diri', [App\Http\Controllers\UserController::class, 'create'])->name('create-data-diri');
Route::get('/home/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteLamaran'])->name('delete-data-diri');
Route::get('/home/detail/{id}', [App\Http\Controllers\UserController::class, 'detailLamaran'])->name('detail-data-diri');

Route::get('/data-diri', [App\Http\Controllers\ViewController::class, 'dataDiri'])->name('form-data-diri');
Route::get('/pendidikan-terakhir', [App\Http\Controllers\ViewController::class, 'pendidikanTerakhir'])->name('form-pendidikan');
Route::get('/riwayat-pelatihan', [App\Http\Controllers\ViewController::class, 'pelatihan'])->name('form-pelatihan');
Route::get('/riwayat-pekerjaan', [App\Http\Controllers\ViewController::class, 'pekerjaan'])->name('form-pekerjaan');
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin');

Route::get('/list-pelamar', [App\Http\Controllers\ViewController::class, 'listPelamar'])->name('list-pelamar');
