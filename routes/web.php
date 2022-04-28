<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrouselController;
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

//Gestion des carrousel
Route::get('/carrousel/create',  [CarrouselController::class, 'create'])->name('carrousel.create');
Route::post('/carrousel/save',  [CarrouselController::class, 'save'])->name('carrousel.save');
Route::get('/carrousel/index',  [CarrouselController::class, 'index'])->name('carrousel.index');
Route::get('/carrousel/show/{id}',  [CarrouselController::class, 'show'])->name('carrousel.show');
Route::post('/carrousel/update',  [CarrouselController::class, 'update'])->name('carrousel.update');
Route::get('/carrousel/delete/{id}',  [CarrouselController::class, 'delete'])->name('carrousel.delete');
