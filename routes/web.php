<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceController;

Route::get('/', [MarketplaceController::class, 'index'])->name('marketplace');
Route::post('/cart/add/{id}', [MarketplaceController::class, 'addToCart'])->name('cart.add');
Route::get('/product/{id}', [MarketplaceController::class, 'show'])->name('marketplace.show');
Route::get('/cart', [MarketplaceController::class, 'viewCart'])->name('cart.view');


