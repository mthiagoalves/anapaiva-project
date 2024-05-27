<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function getHomepage()
    {
        return Inertia::render('Homepage');
    }

    public function getAbout()
    {
        return Inertia::render('About');
    }

    public function getProjects()
    {
        return Inertia::render('Projects');
    }

    public function getProjectGeres()
    {
        return Inertia::render('Projects/Geres');
    }

    public function getProjectGuimaraes()
    {
        return Inertia::render('Projects/Guimaraes');
    }

    public function getProjectEscritorios()
    {
        return Inertia::render('Projects/Escritorios');
    }

    public function getProjectSantaFe()
    {
        return Inertia::render('Projects/SantaFe');
    }

    public function getProjectCasaTemporao()
    {
        return Inertia::render('Projects/CasaTemporao');
    }

    public function getProjectEspinhoSeasideRetreat()
    {
        return Inertia::render('Projects/EspinhoSeasideRetreat');
    }

    public function getProjectModernLiving()
    {
        return Inertia::render('Projects/ModernLiving');
    }

    public function get360()
    {
        return Inertia::render('360');
    }

    public function get360Braganca()
    {
        return Inertia::render('360/Braganca');
    }

    public function get360CampoPequeno()
    {
        return Inertia::render('360/CampoPequeno');
    }

    public function get360Holiday()
    {
        return Inertia::render('360/Holiday');
    }

    public function get360ParqueDasNacoes()
    {
        return Inertia::render('360/ParqueDasNacoes');
    }
}
