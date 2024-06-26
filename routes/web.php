<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaDPRDController;
use App\Http\Controllers\AbsensiRapurController;
use App\Http\Controllers\ReportDataAbsensiController;
use App\Http\Controllers\MateriRapatParipurnaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/absensi-rapur', function () {
    return view('absensi-rapur');
})->name('absensi-rapur');

Route::get('/anggota-dprd', function () {
    return view('anggota-dprd');
})->name('anggota-dprd');

Route::get('/report-absensi', function () {
    return view('report-absensi');
})->name('report-absensi');

Route::resource('anggota-dprd', AnggotaDPRDController::class);
Route::resource('absensi-rapur', AbsensiRapurController::class);
Route::resource('report-absensi', ReportDataAbsensiController::class);
Route::resource('materi-rapat-paripurna', MateriRapatParipurnaController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
