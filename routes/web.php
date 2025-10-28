<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',  [HomeController::class, 'index'])->name('index');
Route::get('/produk',  [HomeController::class, 'produk'])->name('produk');
Route::get('/keranjang',  [HomeController::class, 'keranjang'])->name('keranjang');