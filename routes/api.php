<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function (){
    Route::post('login','login');
    Route::post('register','register');
});
    Route::get('me',[AuthController::class,'me'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::apiResource('products',ProductController::class);
    Route::apiResource('catalogs', CatalogController::class);
    Route::apiResource('brands', BrandController::class);
    Route::apiResource('reviews', ReviewController::class);

});

