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
    public function get360()
    {
        return Inertia::render('360');
    }
}
