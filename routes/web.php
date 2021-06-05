<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dokter_0092', 'App\Http\Controllers\DokterController@index');
// Route::resource('/dokter_0092', [DokterController::class]);

Route::resource('dokter',DokterController::class);
Route::resource('/dokter_0092', 'App\Http\Controllers\DokterController');