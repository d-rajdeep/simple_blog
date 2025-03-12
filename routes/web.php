<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index'])->name('products.index');
Route::get('products/create',[ProductController::class,'create'])->name('products.create');


Route::post('products/store',[ProductController::class,'store'])->name('products.store');

Route::get('products/{id}/edit',[ProductController::class, 'edit']);

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

// Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.destroy');
Route::get('/products/{id}/delete', [ProductController::class, 'destroy']);

Route::get('/products/{id}/show', [ProductController::class, 'show']);
