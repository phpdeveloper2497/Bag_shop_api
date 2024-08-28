<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\UserController;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});
Route::get('me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::post('products/{product}/storages', [StorageController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
//    Route::apiResource('products', ProductController::class);
//    Route::apiResource('catalogs', CatalogController::class);
//    Route::apiResource('brands', BrandController::class);
//    Route::apiResource('reviews', ReviewController::class);
//    Route::apiResource('storages', StorageController::class);

});

Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('/', 'index');
    Route::post('/create', 'store');
    Route::get('/{users}', 'show');
    Route::put('/update/{users}', 'update');
    Route::get('/{users}/delete', 'destroy');
});

Route::controller(ProductController::class)->prefix('products')->group(function () {
    Route::get('/', 'index');
    Route::post('/create', 'store');
    Route::get('/{product}', 'show');
    Route::put('/update/{product}', 'update');
    Route::get('/{product}/delete', 'destroy');
});

Route::controller(CategoryController::class)->prefix('categories')->group(function () {
    Route::get('/', 'index');
    Route::post('/create', 'store');
    Route::get('/{category}', 'show');
    Route::put('/update/{category}', 'update');
    Route::get('/{category}/delete', 'destroy');
});

Route::controller(CatalogController::class)->prefix('catalogs')->group(function () {
    Route::get('/', 'index');
    Route::post('/create', 'store');
    Route::get('/{catalog}', 'show');
    Route::put('/update/{catalog}', 'update');
    Route::get('/{catalog}/delete', 'destroy');
});

Route::controller(BrandController::class)->prefix('brands')->group(function () {
    Route::get('/', 'index');
    Route::post('/create', 'store');
    Route::get('/{brand}', 'show');
    Route::put('/update/{brand}', 'update');
    Route::get('/{brand}/delete', 'destroy');
});

Route::controller(ReviewController::class)->prefix('reviews')->group(function () {
    Route::get('/', 'index');
    Route::post('/create', 'store');
    Route::get('/{review}', 'show');
    Route::put('/update/{review}', 'update');
    Route::get('/{review}/delete', 'destroy');
});

Route::controller(StorageController::class)->prefix('storages')->group(function () {
    Route::get('/', 'index');
    Route::post('/create', 'store');
    Route::get('/{storage}', 'show');
    Route::put('/update/{storage}', 'update');
    Route::get('/{storage}/delete', 'destroy');
});
