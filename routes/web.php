<?php

use App\Http\Controllers\BencanaController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\LogistikController;
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
})->name('home');

Route::get('/lihatbencana', function () {
    return "lihat bencana";
});

Route::get('/donasi', function () {
    return "donasi";
});

Route::get('/catatpengungsi', [LogistikController::class, 'create'])->name('logistik-create');
Route::post('/catatpengungsi', [LogistikController::class, 'store'])->name('logistik-store');

Route::get('/rencanadonasi', [DonasiController::class, 'create'])->name('donasi-create');
Route::post('rencanadonasi', [DonasiController::class, 'store'])->name('donasi-store');

Route::get('/tambahkejadianbencana', [BencanaController::class, 'create'])->name('bencana-create');
Route::post('/tambahkejadianbencana', [BencanaController::class, 'store'])->name('bencana-store');
