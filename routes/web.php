<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\TryCatch;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $deviceId = 1400;
    return view('welcome', compact('deviceId'));
});
Route::get('/{deviceId}', function ($deviceId) {
    return view('welcome', compact('deviceId'));
});
