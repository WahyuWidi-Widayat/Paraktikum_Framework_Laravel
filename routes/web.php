<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Halaman utama yang menampilkan tabel
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Route untuk memicu ekspor
Route::get('/products/export/excel', [ProductController::class, 'exportExcel'])->name('products.export.excel');
Route::get('/products/export/pdf', [ProductController::class, 'exportPdf'])->name('products.export.pdf');