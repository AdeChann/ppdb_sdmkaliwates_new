<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\people;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        // Pemisahan dashboard berdasarkan peran pengguna
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    })->name('dashboard');

    Route::middleware(['auth', 'verified','admin.role'])->group(function () {
        Route::get('/admin/dashboard', [people::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/dashboard/export/excel', [people::class, 'export_excel']);
    });
    Route::middleware(['user.role'])->group(function () {
        Route::get('/home', [PendaftaranController::class, 'home'])->name('user.dashboard');
    });
});


Route::get('/daftar', function () {
    return view('pendaftaran.pendaftaran');
})->middleware(['auth', 'verified', 'user.role']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'admin.role'])->group(function () {
    Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('user.create');
    // Route::get('/admin', [PendaftaranController::class, 'index']);
    Route::get('/user/{id}/edit', [PendaftaranController::class, 'edit'])->name('edit');
    Route::put('/user/{id}', [PendaftaranController::class, 'update'])->name('update');
    Route::delete('/user/{id}', [PendaftaranController::class, 'destroy'])->name('destroy');
});
Route::middleware(['auth', 'verified', 'user.role'])->group(function () {
    Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('user.create');
Route::post('/store', [PendaftaranController::class, 'store'])->name('user.store');
});

require __DIR__.'/auth.php';
