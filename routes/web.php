<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrouselController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;


Route::get('/',  [HomeController::class, 'home'])->name('home');

Route::get('/apropos-de-nous',  [HomeController::class, 'apropos'])->name('apropos');

Route::get('/bioshop-admin',  [AdminController::class, 'index'])->name('admin')->middleware('auth');

//Gestion des produits
Route::get('/admin/produit/index', [ProductController::class, 'index'])->name('produit.index')->middleware('auth');
Route::get('/admin/produit/add', [ProductController::class, 'create'])->name('produit.create')->middleware('auth');
Route::post('/admin/produit/save', [ProductController::class, 'save'])->name('produit.save')->middleware('auth');

Route::get('/admin/produit/show/{id}', [ProductController::class, 'show'])->name('produit.show')->middleware('auth');
Route::post('/admin/produit/update', [ProductController::class, 'update'])->name('produit.update')->middleware('auth');
Route::get('/admin/produit/delete/{id}', [ProductController::class, 'delete'])->name('produit.delete')->middleware('auth');
Route::get('/admin/produit/activer/{id}', [ProductController::class, 'activer'])->name('produit.activer')->middleware('auth');
Route::get('/admin/produit/desactiver/{id}', [ProductController::class, 'desactiver'])->name('produit.desactiver')->middleware('auth');

// Gestion des commandes
Route::get('/commander',  [CommandeController::class, 'create'])->name('commande.create');
Route::post('/admin/commander/save',  [CommandeController::class, 'save'])->name('commande.save');
Route::get('/admin/commandes',  [CommandeController::class, 'index'])->name('commande.index')->middleware('auth');
Route::get('/admin/commandes/valider/{id}',  [CommandeController::class, 'valider'])->name('commande.valider')->middleware('auth');
Route::get('/admin/commandes/annuler/{id}',  [CommandeController::class, 'annuler'])->name('commande.annuler')->middleware('auth');
Route::get('/admin/clients',  [CommandeController::class, 'client'])->name('commande.client')->middleware('auth');

//Gestion des contacts
Route::get('/contactez-nous',  [ContactController::class, 'create'])->name('contact.create');
Route::post('/contactez-nous/save',  [ContactController::class, 'save'])->name('contact.save');
Route::get('/admin/contacts',  [ContactController::class, 'index'])->name('contact.index')->middleware('auth');

//Gestion des carrousel
Route::get('/admin/carrousel/create',  [CarrouselController::class, 'create'])->name('carrousel.create')->middleware('auth');
Route::post('/admin/carrousel/save',  [CarrouselController::class, 'save'])->name('carrousel.save');
Route::get('/admin/carrousel/index',  [CarrouselController::class, 'index'])->name('carrousel.index')->middleware('auth');
Route::get('/admin/carrousel/show/{id}',  [CarrouselController::class, 'show'])->name('carrousel.show')->middleware('auth');
Route::post('/admin/carrousel/update',  [CarrouselController::class, 'update'])->name('carrousel.update');
Route::get('/admin/carrousel/delete/{id}',  [CarrouselController::class, 'delete'])->name('carrousel.delete')->middleware('auth');

//Gestion des mewsletters
Route::post('/admin/email/save',  [NewsletterController::class, 'save'])->name('email.save');
Route::get('/admin/email/index',  [NewsletterController::class, 'index'])->name('email.index')->middleware('auth');;