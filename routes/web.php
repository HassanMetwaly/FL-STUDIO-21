<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [CategoryController::class , 'index']);

Route::get('/products', [ProductController::class , 'show']);
Route::get('/products/{slug}', [ProductController::class , 'show_product']);

Route::post('/creat-data', [OrderController::class , 'store']);