<?php

use App\Http\Controllers\PakaianController;
use App\Http\Controllers\PembelianController;

Route::resource('pakaian', PakaianController::class);
Route::get('pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
