<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[CategoryController::class,'index'])->name('index');
Route::get('/mens/{id}',[ProductController::class,'men'])->name('men');
Route::get('/womens/{id}',[ProductController::class,'women'])->name('women');
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::post('/wstore', [ProductController::class, 'wstore'])->name('wstore');
Route::get('/product', [ProductController::class,'productList'])->name('product');