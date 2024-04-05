<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [CategoryController::class , 'index']);

Route::get('/products', [ProductController::class , 'show']);
Route::get('/products/fawakh', [ProductController::class , 'show']);




Route::get('/login', [App\Http\Controllers\CategoryController::class, 'login']);