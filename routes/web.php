<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;


Route::resource('laptops', LaptopController::class);
Route::resource('products', ProductController::class);


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/test-email', [App\Http\Controllers\TestEmailController::class, 'sendTestEmail']);

// Order routes
Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    Route::post('orders/store', [OrderController::class, 'store'])->name('orders.store');
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});

// Authentication routes
Auth::routes();

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin routes
// Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
//     Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
//     // Add more admin routes here as needed
// });

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/product/create', [AdminDashboardController::class, 'showProductForm'])->name('admin.product.create');
    Route::post('/product', [AdminDashboardController::class, 'storeProduct'])->name('admin.product.store');
    Route::get('/product-form', [AdminDashboardController::class, 'showProductForm'])->name('admin.product-form');
    Route::get('/product/{id}/edit', [AdminDashboardController::class, 'editProduct'])->name('admin.product.edit');
    Route::patch('/product/{id}', [AdminDashboardController::class, 'updateProduct'])->name('admin.product.update');
    Route::delete('/product/{id}', [AdminDashboardController::class, 'destroyProduct'])->name('admin.product.destroy');
    Route::get('/order/{id}', [AdminDashboardController::class, 'showOrder'])->name('admin.order.show');
    Route::patch('/order/{id}', [AdminDashboardController::class, 'updateOrderStatus'])->name('admin.order.update');
});