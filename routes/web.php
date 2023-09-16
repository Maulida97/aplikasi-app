<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\PasienController;
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





Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::get('/perawat', [PerawatController::class, 'list'])->name('perawat')->middleware('auth');
Route::post('/perawat/save', [PerawatController::class, 'store'])->name('perawat.save')->middleware('auth');
Route::get('/perawat/delete/{id}', [PerawatController::class, 'delete'])->name('perawat.delete')->middleware('auth');



Route::get('/admin', [AdminController::class, 'list'])->name('admin')->middleware('auth');
Route::post('/admin/save', [AdminController::class, 'store'])->name('admin.save')->middleware('auth');
Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete')->middleware('auth');

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien')->middleware('auth');
Route::post('/pasien/save', [PasienController::class, 'store'])->name('pasien.save')->middleware('auth');
Route::get('/pasien/delete/{id}', [PasienController::class, 'delete'])->name('pasien.delete')->middleware('auth');


Route::get('/bangsal', [BangsalController::class, 'list'])->name('bangsal')->middleware('auth');
Route::post('/bangsal/save', [BangsalController::class, 'store'])->name('bangsal.save')->middleware('auth');
Route::get('/bangsal/hapus/{id}', [BangsalController::class, 'delete'])->name('bangsal.hapus')->middleware('auth');




Route::get('/penyakit', [PenyakitController::class, 'list'])->name('penyakit')->middleware('auth');
Route::post('/penyakit/save', [PenyakitController::class, 'store'])->name('penyakit.save')->middleware('auth');
Route::get('/penyakit/delete/{id}', [PenyakitController::class, 'delete'])->name('penyakit.delete')->middleware('auth');


Route::get('/jamDinas', [JamdinasController::class, 'list'])->name('jamDinas')->middleware('auth');
Route::post('/jamDinas/save', [JamdinasController::class, 'store'])->name('jamDinas.save')->middleware('auth');
Route::get('/jamDinas/delete/{id}', [JamdinasController::class, 'delete'])->name('jamDinas.delete')->middleware('auth');

Route::get('/kamar', [PenyakitController::class, 'list'])->name('penyakit')->middleware('auth');



// Route::get('admin/subjects', [SubjectController::class, 'list'])->name('subjects');
// Route::post('/save', [SubjectController::class, 'store'])->name('subject.save');
// Route::get('/delete/{id}', [SubjectController::class, 'delete'])->name('subject.delete');







