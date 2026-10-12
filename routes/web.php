<?php
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route Halaman Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::resource('/guru',GuruController::class);
Route::resource('/kelas',KelasController::class);
Route::resource('/mapel',MapelController::class);
Route::resource('/nilai',NilaiController::class);
Route::resource('/siswa',SiswaController::class);
auth::routes();
// TODO: Buatlah Route Resource untuk Master Data Siswa


// TODO: Buatlah Route Resource untuk Master Data Guru


// TODO: Buatlah Route Resource untuk Master Data Mata Pelajaran (Mapel)


// TODO: Buatlah Route Resource untuk Data Nilai Akademik



