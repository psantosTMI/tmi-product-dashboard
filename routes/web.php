<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/category', [CategoriesController::class, 'view'])->name('category');
Route::get('/category-products', [CategoriesController::class, 'products'])->name('categoryProducts');

Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/makes', [CarController::class, 'makes'])->name('makes');
Route::get('/models', [CarController::class, 'models'])->name('makes');

Route::get('/error', function () {
    abort(500);
});

require __DIR__.'/auth.php';
