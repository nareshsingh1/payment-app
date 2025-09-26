<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', [PaymentController::class, 'index'])->name('payment.form');
Route::post('/pay', [PaymentController::class, 'pay'])->name('payment.pay');

// Route::get('/', function () {
//     return view('welcome');
// });
