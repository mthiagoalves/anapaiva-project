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

    public function getProjectBraganca()
    {
        return Inertia::render('Projects/Braganca');
    }

    public function getProjectCampoPequeno()
    {
        return Inertia::render('Projects/CampoPequeno');
    }

    public function getProjectHoliday()
    {
        return Inertia::render('Projects/Holiday');
    }

    public function getProjectParqueDasNacoes()
    {
        return Inertia::render('Projects/ParqueDasNacoes');
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
