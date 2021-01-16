<?php

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
});

Route::get('/lihatbencana', function () {
    return "yee";
});

Route::get('/catatpengungsi', [LogistikController::class, 'create'])->name('logistik-create');
Route::post('/catatpengungsi', [LogistikController::class, 'store'])->name('logistik-store');
