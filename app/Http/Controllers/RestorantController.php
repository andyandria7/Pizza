<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    
    public function panier(){
        return Inertia::render('Panier');
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

    public function admin(){
        return Inertia::render('Dashboard/Admin');
    }

    public function create(){
        return Inertia::render('Dashboard/Create');
    }

}
