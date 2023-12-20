<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
// })->name('welcome');

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Category

    route::name('category.')->group(function () {
        // Category Controller
        Route::get('/categories', [CategoryController::class, 'index'])->name('index');
        Route::get('/category-add', [CategoryController::class, 'create'])->name('add');
        Route::post('/category-store', [CategoryController::class, 'store'])->name('store');
        Route::get('/category-edit-{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/category-update-{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/category-delete-{id}', [CategoryController::class, 'destroy'])->name('delete');
        });

    // Products
    route::name('product.')->group(function () {
        // Product Controller
        Route::get('/products', [ProductController::class, 'index'])->name('index');
        Route::get('/product-add', [ProductController::class, 'create'])->name('add');
        Route::post('/product-store', [ProductController::class, 'store'])->name('store');
        Route::get('/product-edit-{id}', [ProductController::class, 'edit'])->name('edit');
        Route::put('/product-update-{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/product-delete-{id}', [ProductController::class, 'destroy'])->name('delete');
    });

    // Orders
    route::name('order.')->group(function () {
        // Order Controller
        Route::get('/buy-now-{id}', [OrderController::class, 'buyNow'])->name('buynow');

        Route::get('/orders', [OrderController::class, 'index'])->name('index');
        Route::get('/order-add', [OrderController::class, 'create'])->name('add');
        Route::post('/order-store', [OrderController::class, 'store'])->name('store');
        Route::get('/order-edit-{id}', [OrderController::class, 'edit'])->name('edit');
        Route::put('/order-update-{id}', [OrderController::class, 'update'])->name('update');
        Route::delete('/order-delete-{id}', [OrderController::class, 'destroy'])->name('delete');
    });

});

require __DIR__.'/auth.php';
