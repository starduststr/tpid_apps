<?php

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
    return view('home_page/index');
});


Route::get('/', [App\Http\Controllers\Home::class, 'index'])->name('home');
Route::get('/download', [App\Http\Controllers\Home::class, 'download'])->name('download');

//user
Route::get('user/dashboard', [\App\Http\Controllers\User::class, 'dashboard'])->name('dashboard');
Route::get('/user/produk', [App\Http\Controllers\Produk::class, 'produk'])->name('produk');

//API
Route::get('/api/produk', [App\Http\Controllers\Api::class, 'produk'])->name('api_produk');
Route::get('/api/transaksi', [App\Http\Controllers\Api::class, 'traksaksi'])->name('api_transaksi');