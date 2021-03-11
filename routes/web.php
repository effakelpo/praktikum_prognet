<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

// Route Login
Route::get('/login', [AuthController::class, 'login'])->name('login');;
Route::get('/register', [AuthController::class, 'register']);
Route::post('/postlogin',[AuthController::class, 'postlogin']);
Route::get('/logout',[AuthController::class, 'logout']);

// Route Customer
Route::group(['middleware' => ['auth','CekLevel:user']], function(){
Route::get('/home', [UserController::class, 'index']);
Route::get('/shop', [UserController::class, 'shop']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/cart', [UserController::class, 'cart']);
Route::get('/checkout', [UserController::class, 'checkout']);
});

// Route Admin
Route::group(['middleware' => ['auth','CekLevel:admin']], function(){
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/courier', [CourierController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/discount', [DiscountController::class, 'index']);
Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/reports', [ReportsController::class, 'index']);
});