<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/sao-paulo', function () {
    return view('sao-paulo');
})->name('sao-paulo');

Route::prefix('{city:slug}')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{product:slug}', [ProductController::class, 'show'])->name('products.show');
});

Route::get('/belo-horizonte', function () {
    return 'belo-horizonte';
})->name('belo-horizonte');


