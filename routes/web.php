<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LoginPizzaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestorantController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [RestorantController::class, 'index'])->name('home');
Route::get('/menu', [RestorantController::class, 'menu'])->name('menu');
Route::get('/panier', [RestorantController::class, 'panier'])->name('panier')->middleware('auth');
Route::get('/menu/{id}', [RestorantController::class, 'menuView'])->name('menuView');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route::get('/loginPizza', [RestorantController::class, "login"])->name('loginPizza');
// Route::post('/loginPizza', [RestorantController::class, "loginPost"])->name('loginPost');
// Route::get('/registerPizza', [RestorantController::class, "register"])->name('registerPizza');

Route::get('/loginPizza', [LoginPizzaController::class, "login"])->name('loginPizza');
Route::post('/loginPizza', [LoginPizzaController::class, "loginPost"])->name('loginPost');
Route::get('/registerPizza', [LoginPizzaController::class, "register"])->name('registerPizza');
route::post('/registerPizza', [LoginPizzaController::class, "registerPost"])->name('registerPost');


Route::get('/Compte', [RestorantController::class, "compte"])->name('compte');
Route::get('/commandes', [RestorantController::class, "commandes"])->name('commandes');


Route::get('/dashboard', [RestorantController::class, "dashboard"])->name('dashboard');
Route::get('/admin', [RestorantController::class, "admin"])->name('admin');
Route::get('/create', [RestorantController::class, "create"])->name('create');
require __DIR__ . '/auth.php';
