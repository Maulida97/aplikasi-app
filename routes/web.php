<?php

use App\Events\SensorEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\BangsalController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\JamdinasController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\DashboardController;


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

    // SensorEvent::dispatch();
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('layouts.app');
// });


Route::get('/register', [RegisController::class, 'index'])->name('register');
Route::post('/register', [RegisController::class, 'store'])->name('register.create');;



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');





Route::get('/dashboard', [SensorController::class, 'list'])->name('dashboard')->middleware('auth');


Route::get('/perawat', [PerawatController::class, 'list'])->name('perawat')->middleware('auth');
Route::post('/perawat/save', [PerawatController::class, 'store'])->name('perawat.save')->middleware('auth');
Route::get('/perawat/delete/{id}', [PerawatController::class, 'delete'])->name('perawat.delete')->middleware('auth');



Route::get('/admin', [AdminController::class, 'list'])->name('admin')->middleware('auth');
Route::post('/admin/save', [AdminController::class, 'store'])->name('admin.save')->middleware('auth');
Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete')->middleware('auth');

Route::get('/pasien', [PasienController::class, 'list'])->name('pasien')->middleware('auth');
Route::get('/dashboard', [PasienController::class, 'index1'])->name('pasien')->middleware('auth');

Route::post('/pasien/save', [PasienController::class, 'store'])->name('pasien.save')->middleware('auth');
Route::get('/pasien/delete/{id}', [PasienController::class, 'delete'])->name('pasien.delete')->middleware('auth');


// Route::get('/bangsal', [BangsalController::class, 'list'])->name('bangsal')->middleware('auth');
// Route::post('/bangsal/save', [BangsalController::class, 'store'])->name('bangsal.save')->middleware('auth');
// Route::get('/bangsal/hapus/{id}', [BangsalController::class, 'delete'])->name('bangsal.hapus')->middleware('auth');







// Route::get('/jamDinas', [JamdinasController::class, 'list'])->name('jamDinas')->middleware('auth');
// Route::post('/jamDinas/save', [JamdinasController::class, 'store'])->name('jamDinas.save')->middleware('auth');
// Route::get('/jamDinas/delete/{id}', [JamdinasController::class, 'delete'])->name('jamDinas.delete')->middleware('auth');

Route::get('/kamar', [KamarController::class, 'list'])->name('kamar')->middleware('auth');
Route::post('/kamar/save', [KamarController::class, 'store'])->name('kamar.save')->middleware('auth');
Route::get('/kamar/delete/{id}', [KamarController::class, 'delete'])->name('kamar.delete')->middleware('auth');


Route::get('/sensor', [SensorController::class, 'listsensor'])->name('sensor')->middleware('auth');
Route::post('/sensor/save', [SensorController::class, 'store'])->name('sensor.save')->middleware('auth');
Route::get('/sensor/delete/{id}', [SensorController::class, 'delete'])->name('sensor.delete')->middleware('auth');
// Route::get('/alat', [AlatController::class, 'list'])->name('alat')->middleware('auth');
// Route::post('/alat/save', [AlatController::class, 'store'])->name('alat.save')->middleware('auth');
// Route::get('/alat/delete/{id}', [AlatController::class, 'delete'])->name('alat.delete')->middleware('auth');


//Route di node MCU
Route::get('/simpan/{nilaiBerat}/{nilaiTetesan}', [SensorController::class, 'simpan']);
Route::get('/simpan2/{nilaiBerat2}/{nilaiTetesan2}', [SensorController::class, 'simpan2']);
Route::get('/simpan3/{nilaiBerat3}/{nilaiTetesan3}', [SensorController::class, 'simpan3']);


// Route::get('/simpan/{deviceID}/{nilaiBerat}/{nilaiTetesan}', [SensorController::class, 'simpan']);


// //ajax realtime
Route::get('/bacavolume', [SensorController::class, 'bacavolume']);
Route::get('/bacainfus', [SensorController::class, 'bacainfus']);
Route::get('/bacavolume2', [SensorController::class, 'bacavolume2']);
Route::get('/bacainfus2', [SensorController::class, 'bacainfus2']);
Route::get('/bacavolume3', [SensorController::class, 'bacavolume3']);
Route::get('/bacainfus3', [SensorController::class, 'bacainfus3']);




// Route::get('/simpan/{nilaivolume}/{nilaitetesan}', [SensorController::class, 'simpan']);







