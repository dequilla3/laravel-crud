<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// PRODUCT
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/saveUpdate', [ProductController::class, 'saveUpdate'])->name('product.saveUpdate');
Route::get('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
