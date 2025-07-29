<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RombonganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/rombongan', [RombonganController::class, 'index'])->name('rombongan.index');
    Route::get('/rombongan/create', [RombonganController::class, 'create'])->name('rombongan.create');
    Route::post('/rombongan', [RombonganController::class, 'store'])->name('rombongan.store');
    Route::get('/rombongan/{rombongan}/edit', [RombonganController::class, 'edit'])->name('rombongan.edit');
    Route::put('/rombongan/{rombongan}', [RombonganController::class, 'update'])->name('rombongan.update');
    Route::delete('/rombongan/{rombongan}', [RombonganController::class, 'destroy'])->name('rombongan.destroy'); // <-- TAMBAHKAN INI


});

require __DIR__.'/auth.php';
