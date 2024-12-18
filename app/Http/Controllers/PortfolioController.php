<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function dashboard(){
        return Inertia::render('Dashboard');
    }
    public function resume(){
        return Inertia::render('Resume');
        
    }
}
