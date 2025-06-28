dashboard<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//-- registration
Route::get('/register', [AuthController::class, 'loadRegister']);
Route::post('/register', [AuthController::class, 'userRegister'])->name('userRegister');

//-- login 
Route::get('/login', [AuthController::class, 'loadlogin'])->name('login');
Route::post('/login', [AuthController::class, 'userlogin'])->name('userLogin');

Route::group(['middleware' => ['user.Auth']], function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});

Route::group(['middleware' => ['IsAuthenticate']], function () {
    Route::get('/subscription', [SubscriptionController::class, 'loadSubscription'])->name('subscription');
});
