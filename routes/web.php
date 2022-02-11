<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoryController;
// use Illuminate\Support\Facades\Auth;
// use Auth;

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

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('pesan/{id}', [PesananController::class, 'index'])->name('pesan');
Route::post('pesan/{id}', [PesananController::class, 'pesan'])->name('pesan');
Route::get('checkout', [PesananController::class, 'checkout'])->name('checkout');
Route::delete('checkout/{id}', [PesananController::class, 'delete'])->name('checkout-delete');
Route::get('checkout/confirm', [PesananController::class, 'confirm'])->name('checkout-confirm');

Route::get('profile', [UserController::class, 'index'])->name('profile');
Route::post('profile', [UserController::class, 'update'])->name('profile');

Route::get('history', [HistoryController::class, 'index'])->name('history');
Route::get('history/{id}', [HistoryController::class, 'detail'])->name('history-detail');