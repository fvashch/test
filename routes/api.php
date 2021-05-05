<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware(['auth_apple_server', 'validate_apple_server_receipt'])->group(function () {
  Route::post('/purchases/subscriptions/apple', \App\Http\Controllers\AppleServerSubscriptionController::class);
});
