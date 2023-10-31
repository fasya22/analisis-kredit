<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CetakController;

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

Route::get('/', function () {
    return view('front.pages.home.home');
});
Route::get('cetakaplikasi', [CetakController::class, 'cetakaplikasi'])->name('cetakaplikasi');
Route::get('cetaklpdu1', [CetakController::class, 'cetaklpdu1'])->name('cetaklpdu1');
Route::get('cetaklpdu2', [CetakController::class, 'cetaklpdu2'])->name('cetaklpdu2');
Route::get('cetaklpduum', [CetakController::class, 'cetaklpduum'])->name('cetaklpduum');
Route::get('cetaklpjkios', [CetakController::class, 'cetaklpjkios'])->name('cetaklpjkios');
Route::get('cetaklpjtanahkosong', [CetakController::class, 'cetaklpjtanahkosong'])->name('cetaklpjtanahkosong');
Route::get('cetaklpjtanahbangunan', [CetakController::class, 'cetaklpjtanahbangunan'])->name('cetaklpjtanahbangunan');
Route::get('cetaklpjdeposito', [CetakController::class, 'cetaklpjdeposito'])->name('cetaklpjdeposito');
Route::get('cetaklpjkendaraan', [CetakController::class, 'cetaklpjkendaraan'])->name('cetaklpjkendaraan');