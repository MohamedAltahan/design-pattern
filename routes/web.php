<?php

use App\Http\Controllers\Observer\OnlineMarketplaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/marketplace', [OnlineMarketplaceController::class, 'index'])->name('marketplace.index');
