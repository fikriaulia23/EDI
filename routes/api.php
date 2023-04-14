<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/greeting', [ApiController::class, 'greeting']);
Route::get('/users', [ApiController::class, 'allUser']);
Route::get('/user', [ApiController::class, 'detailuser']);
Route::get('/lamaran/detail', [App\Http\Controllers\ApiController::class, 'detailLamaran'])->name('detail-data-diri');
Route::delete('/lamaran/delete', [App\Http\Controllers\ApiController::class, 'deleteBiodata'])->name('delete-data-diri');
Route::post('/biodata/create', [App\Http\Controllers\ApiController::class, 'createBiodata'])->name('create-data-diri');
Route::put('/lamaran/put', [App\Http\Controllers\ApiController::class, 'updateBiodata'])->name('update-data-diri');
