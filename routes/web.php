<?php

use App\Http\Controllers\ProfileController;
use App\Models\Project;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Halaman Beranda Utama (Menampilkan daftar proyek)
Route::get('/', function () {
    return Inertia::render('Welcome', [
        // Mengambil semua data proyek dari database untuk dikirim ke React
        'projects' => Project::latest()->get(), 
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

// Route untuk CRUD Proyek (Hanya bisa diakses jika sudah login)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('projects', ProfileController::class);
});

// Route bawaan Breeze untuk Profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
