<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestorantController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [RestorantController::class, 'index'])->name('home');
Route::get('/menu', [RestorantController::class, 'menu'])->name('menu');
Route::get('/menu/{id}', [RestorantController::class, 'menuView'])->name('menuView');

Route::get('/loginPizza', [RestorantController::class, "login"])->name('loginPizza');
Route::get('/registerPizza', [RestorantController::class, "register"])->name('registerPizza');
Route::get('/Compte', [RestorantController::class, "compte"])->name('compte');
Route::get('/commandes', [RestorantController::class, "commandes"])->name('commandes');


Route::get('/dashboard', [RestorantController::class, "dashboard"])->name('dashboard');
require __DIR__.'/auth.php';
