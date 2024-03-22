<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [FrontendController::class, 'getHomepage'])->name('homepage');

Route::get('/about', [FrontendController::class, 'getAbout'])->name('about');

Route::get('/projects', [FrontendController::class, 'getProjects'])->name('projects');

Route::get('/projects/braganca', [FrontendController::class, 'getProjectBraganca'])->name('braganca');

Route::get('/projects/campo-pequeno', [FrontendController::class, 'getProjectCampoPequeno'])->name('campo-pequeno');

Route::get('/projects/holiday', [FrontendController::class, 'getProjectHoliday'])->name('holiday');

Route::get('/projects/parque-das-nacoes', [FrontendController::class, 'getProjectParqueDasNacoes'])->name('parque-das-nacoes');

Route::get('/360', [FrontendController::class, 'get360'])->name('360');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
