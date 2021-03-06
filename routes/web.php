<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CouriersController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\DiscountsController;
use App\Http\Controllers\TransactionsController;
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
    return view('login.indexlogin');
})->name('homelogin');

// Route Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
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
    // Dashboard
    Route::get('/dashboard', [AdminsController::class, 'index']);

    // Product Page
    Route::get('/product', [ProductsController::class, 'index']);
    Route::get('/product-add', [ProductsController::class, 'add']);

    // Courier Page
    Route::get('/courier', [CouriersController::class, 'index']);
    Route::get('/courier-add', [CouriersController::class, 'add']);

    // Category Page
    Route::get('/category', [ProductCategoriesController::class, 'index']);
    Route::get('/category-add', [ProductCategoriesController::class, 'add']);

    // Discount Page
    Route::get('/discount', [DiscountsController::class, 'index']);
    Route::get('/discount-add', [DiscountsController::class, 'add']);

    // Transaction Page
    Route::get('/transaction', [TransactionsController::class, 'index']);
    Route::get('/transaction-add', [TransactionsController::class, 'add']);

    // Reports Page
    Route::get('/reports', [ReportsController::class, 'index']);
});