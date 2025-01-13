<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Public Routes (Guest)
Route::middleware(['guest'])->group(function () {
    // Login and Register
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
});

// Home Route (Accessible by everyone)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Auth::routes();

// Middleware for Logged-In Users
Route::middleware(['auth'])->group(function () {
    // Products
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::resource('product', ProductController::class)->except(['index', 'show']);
    Route::resource('products', ProductController::class);

    // Categories
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{id}/add', [CartController::class, 'add'])->name('cart.store');
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

    // Checkout (Order)
    Route::get('/checkout', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/checkout', [OrderController::class, 'store'])->name('orders.store');

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

// Dashboard Route (Optional, For Admin or Authenticated Users)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
