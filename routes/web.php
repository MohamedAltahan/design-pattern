<?php

use App\Http\Controllers\Observer\OnlineMarketplaceController;
use App\Http\Controllers\Strategy\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/marketplace', [OnlineMarketplaceController::class, 'index'])->name('marketplace.index');
Route::get('/payment', [PaymentController::class, 'index'])->name('marketplace.index');
