<?php

use App\Http\Controllers\BkashController;
use App\Http\Controllers\BkashRefundController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Payment Routes for bKash
Route::get('make-payment', [BkashController::class, 'index'])->name('make-payment');
Route::get('bkash/get-token', [BkashController::class, 'getToken'])->name('bkash-get-token');
Route::post('bkash/create-payment', [BkashController::class, 'createPayment'])->name('bkash-create-payment');
Route::post('bkash/execute-payment', [BkashController::class, 'executePayment'])->name('bkash-execute-payment');
Route::get('bkash/query-payment', [BkashController::class, 'queryPayment'])->name('bkash-query-payment');
Route::post('bkash/success', [BkashController::class, 'bkashSuccess'])->name('bkash-success');

// Refund Routes for bKash
Route::get('bkash/refund', [BkashRefundController::class, 'index'])->name('bkash-refund');
Route::post('bkash/refund', [BkashRefundController::class, 'refund'])->name('bkash-refund');
