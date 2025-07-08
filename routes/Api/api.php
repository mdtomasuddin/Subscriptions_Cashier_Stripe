<?php

use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

// This route is for getting terms and conditions and privacy policy.
Route::get('contents', [ContentController::class, 'index'])->middleware(['throttle:10,1']);
Route::post('/subscriptions/{id}/checkout', [SubscriptionController::class, 'checkout'])->middleware('auth.jwt');
Route::post('/stripe/webhook', [SubscriptionController::class, 'webhook']);