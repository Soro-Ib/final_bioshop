<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommandeController;


Route::get('/',  [HomeController::class, 'home'])->name('home');
Route::get('/contactez-nous',  [ContactController::class, 'index'])->name('contact.index');
Route::get('/commander',  [CommandeController::class, 'index'])->name('commande.index');

Route::get('/apropos-de-nous',  [HomeController::class, 'apropos'])->name('apropos');



Route::get('/bioshop/admin',  [AdminController::class, 'index'])->name('admin');