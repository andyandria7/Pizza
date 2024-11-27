<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RestorantController extends Controller
{
    public function menuView(Request $id){
        return Inertia::render('MenuView');
    }

    public function index(){
        return Inertia::render('Home');
    }

    public function menu(){
        return Inertia::render('Menu');
    }

    public function login(){
        return Inertia::render('Inscription/Login');
    }

    public function register(){
        return Inertia::render('Inscription/Register');
    }

    public function dashboard(){
        return Inertia::render('Dashboard/Acceuil');
    }

    public function compte(){
        return Inertia::render('Compte');
    }

    public function commandes(){
        return Inertia::render('Dashboard/Commandes');
    }
}
