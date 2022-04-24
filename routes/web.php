<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProductController;


Route::get('/',  [HomeController::class, 'home'])->name('home');

Route::get('/apropos-de-nous',  [HomeController::class, 'apropos'])->name('apropos');

Route::get('/bioshop/admin',  [AdminController::class, 'index'])->name('admin');

//Gestion des produits
Route::get('/produit/index', [ProductController::class, 'index'])->name('produit.index');
Route::get('/produit/add', [ProductController::class, 'create'])->name('produit.create');
Route::post('/produit/save', [ProductController::class, 'save'])->name('produit.save');

// Gestion des commandes
Route::get('/commander',  [CommandeController::class, 'create'])->name('commande.create');
Route::post('/commander/save',  [CommandeController::class, 'save'])->name('commande.save');
Route::get('/admin/commandes',  [CommandeController::class, 'index'])->name('commande.index');

//Gestion des contacts
Route::get('/contactez-nous',  [ContactController::class, 'create'])->name('contact.create');
Route::post('/contactez-nous/save',  [ContactController::class, 'save'])->name('contact.save');
Route::get('/admin/contacte',  [ContactController::class, 'index'])->name('contact.index');