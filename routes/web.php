<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']);
Route::get('/product/details', [HomeController::class, 'productDetails']);
Route::get('/product/view-cart', [HomeController::class, 'viewCart']);
Route::get('/product/checkout', [HomeController::class, 'productCheckout']);
Route::get('/shop-products', [HomeController::class, 'shopProduct']);
Route::get('/return-products', [HomeController::class, 'returnProduct']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
