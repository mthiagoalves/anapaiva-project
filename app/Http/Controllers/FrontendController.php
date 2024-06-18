<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function inComing()
    {
        return view('welcome');
    }

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

    public function getPress()
    {
        return Inertia::render('Press');
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

    public function get360Geres()
    {
        return Inertia::render('360/Geres');
    }

    public function get360Guimaraes()
    {
        return Inertia::render('360/Guimaraes');
    }

    public function get36OfficeProject()
    {
        return Inertia::render('360/Escritorios');
    }

    public function get360SantaFe()
    {
        return Inertia::render('360/SantaFe');
    }

    public function get360CasaTemporao()
    {
        return Inertia::render('360/CasaTemporao');
    }

    public function get360EspinhoSeasideRetreat()
    {
        return Inertia::render('360/EspinhoSeasideRetreat');
    }

    public function get360ModernLiving()
    {
        return Inertia::render('360/ModernLiving');
    }
}
