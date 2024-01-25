<?php

use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\RemoteSensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('remote-sensors.store', [RemoteSensorController::class, 'store']);
Route::get('remote-sensors.index', [RemoteSensorController::class, 'index']);
Route::get('remote-sensors.show/{remoteSensor}', [RemoteSensorController::class, 'show']);

Route::apiResource('qr-codes', QrCodeController::class);

