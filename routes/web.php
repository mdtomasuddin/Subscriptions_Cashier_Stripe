<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Controllers\Web\ChechoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pricing', function () {
    return view('pricing');
})->middleware(['auth', 'verified'])->name('pricing');


Route::get('/success', function () {
    return view('success');
})->middleware(['auth', 'verified'])->name('success');

Route::get('/tomas', function () {
    return 'Hello Tomas!';
});


//-----------------

Route::get('/checkout/{plan?}', ChechoutController::class)->middleware(['auth', 'verified'])->name('checkout');
//-------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook'])->name('cashier.webhook');
