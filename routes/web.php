<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [FrontendController::class, 'inComing'])->name('in-coming');

Route::get('/unknown-site', [FrontendController::class, 'getHomepage'])->name('homepage');

Route::get('/about', [FrontendController::class, 'getAbout'])->name('about');

Route::get('/projects', [FrontendController::class, 'getProjects'])->name('projects');

Route::get('/projects/geres-house', [FrontendController::class, 'getProjectGeres'])->name('geres');

Route::get('/projects/guimaraes-heritage-residence', [FrontendController::class, 'getProjectGuimaraes'])->name('guimaraes-heritage-residence');

Route::get('/projects/office-project', [FrontendController::class, 'getProjectEscritorios'])->name('office-project');

Route::get('/projects/santa-fe-luxury-villa', [FrontendController::class, 'getProjectSantaFe'])->name('santa-fe-luxury-villa');

Route::get('/projects/timeless-temporao-house', [FrontendController::class, 'getProjectCasaTemporao'])->name('timeless-temporao-house');

Route::get('/projects/espinho-seaside-retreat', [FrontendController::class, 'getProjectEspinhoSeasideRetreat'])->name('espinho-seaside-retreat');

Route::get('/projects/modern-living', [FrontendController::class, 'getProjectModernLiving'])->name('modern-living');

Route::get('/360', [FrontendController::class, 'get360'])->name('360');

Route::get('/360/braganca', [FrontendController::class, 'get360Braganca'])->name('360.braganca');

Route::get('/360/campo-pequeno', [FrontendController::class, 'get360CampoPequeno'])->name('360.campo-pequeno');

Route::get('/360/holiday', [FrontendController::class, 'get360Holiday'])->name('360.holiday');

Route::get('/360/parque-das-nacoes', [FrontendController::class, 'get360ParqueDasNacoes'])->name('360.parque-das-nacoes');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
