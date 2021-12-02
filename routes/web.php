<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/dashboard/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/dashboard/siswa/create', [SiswaController::class, 'create'])->name('createSiswa');
Route::post('/dashboard/siswa/create', [SiswaController::class, 'store']);
Route::get('/dashboard/siswa/{siswa}/detail', [SiswaController::class, 'show'])->name('detailSiswa');
Route::get('/dashboard/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('editSiswa');
Route::put('/dashboard/siswa/{siswa}', [SiswaController::class, 'update']);
Route::delete('/dashboard/siswa/{siswa}', [SiswaController::class, 'destroy']);

Route::get('/dashboard/petugas', [PetugasController::class, 'index'])->name('petugas');
Route::get('/dashboard/petugas/{petugas}', [PetugasController::class, 'edit'])->name('detailPetugas');