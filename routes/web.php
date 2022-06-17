<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductsController::class, 'index']) -> name('products.index');


Route::get('/products/create', [ProductsController::class, 'create']) -> name('products.create');

Route::post('/products/create', [ProductsController::class, 'store']) -> name('products.store');

Route::get('/products/{id}/destroy', [ProductsController::class, 'destroy']) -> name('products.destroy');

Route::get('/products/{id}/edit', [ProductsController::class, 'edit']) -> name('products.edit');