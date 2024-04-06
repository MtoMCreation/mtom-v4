<?php

use App\Livewire\Pages\Accueil;
use App\Livewire\Pages\Articles;
use App\Livewire\Pages\ArticleShow;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Projets;
use App\Livewire\Pages\Services;
use Illuminate\Support\Facades\Route;

// Routes for all pages
Route::get('/', Accueil::class)->name('accueil');
Route::get('/services', Services::class)->name('services');
Route::get('/articles', Articles::class)->name('articles');
Route::get('/articles/{article}', ArticleShow::class)->name('article-show');
Route::get('/projets', Projets::class)->name('projets');
Route::get('/contact', Contact::class)->name('contact');
