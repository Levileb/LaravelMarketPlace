<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceController;

Route::get('/', [MarketplaceController::class, 'index'])->name('marketplace');
Route::post('/cart/add/{id}', [MarketplaceController::class, 'addToCart'])->name('cart.add');
