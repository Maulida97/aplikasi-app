<?php

use Illuminate\Http\Request;
use App\Services\SensorService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SensorController;

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



Route::get('/sensorlist', [SensorService::class, 'add']);
Route::get('/simpan3/{nilaiBerat3}/{nilaiTetesan3}', [SensorController::class, 'simpan3']);
