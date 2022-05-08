<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\NotificationsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::get('/customers', [CustomersController::class, 'index']);
});

Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::get('/bills', [BillsController::class, 'index']);
});

Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::get('/notifications', [NotificationsController::class, 'index']);
});
