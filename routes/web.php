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

Route::get('/360/geres-house', [FrontendController::class, 'get360Geres'])->name('360.geres');

Route::get('/360/guimaraes-heritage-residence', [FrontendController::class, 'get360Guimaraes'])->name('360.guimaraes-heritage-residence');

Route::get('/360/office-project', [FrontendController::class, 'get36OfficeProject'])->name('360.office-project');

Route::get('/360/santa-fe-luxury-villa', [FrontendController::class, 'get360SantaFe'])->name('360.santa-fe-luxury-villa');

Route::get('/360/timeless-temporao-house', [FrontendController::class, 'get360CasaTemporao'])->name('360.timeless-temporao-house');

Route::get('/360/espinho-seaside-retreat', [FrontendController::class, 'get360EspinhoSeasideRetreat'])->name('360.espinho-seaside-retreat');

Route::get('/360/modern-living', [FrontendController::class, 'get360ModernLiving'])->name('360.modern-living');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
