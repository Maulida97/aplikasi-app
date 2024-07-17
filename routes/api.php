<?php

use Illuminate\Http\Request;
use App\Services\SensorService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

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

Route::get('/simpan/{nilaiBerat}/{nilaiTetesan}/{waktujam}/{waktumenit}', [SensorController::class, 'simpan']);
Route::get('/simpan2/{nilaiBerat2}/{nilaiTetesan2}/{waktujam2}/{waktumenit2}', [SensorController::class, 'simpan2']);
Route::get('/simpan3/{nilaiBerat3}/{nilaiTetesan3}/{waktujam3}/{waktumenit3}', [SensorController::class, 'simpan3']);
