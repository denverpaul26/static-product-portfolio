<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

// Default Laravel route

Route::get('/', function () {

    return view('welcome');

});

// Portfolio routes

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');

Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');

Route::get('/projects', [PortfolioController::class, 'feedback'])->name('portfolio.feedback');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
Route::post('/contact', [PortfolioController::class, 'submitContact'])->name('portfolio.contact.submit');
