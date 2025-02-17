<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'home'])->name('home');
Route::get('/about', [StaticPageController::class, 'about'])->name('about');
Route::get('/dashboard', [StaticPageController::class, 'dashboard'])->name('dashboard');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/slug/{slug}', [BlogController::class, 'slug'])->name('blogs.slug');
Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('blogs/{blog}', [BlogController::class, 'delete'])->name('blogs.delete');

Route::get('/faq', [faqController::class, 'index'])->name('faq.index');
Route::get('faq/create', [faqController::class, 'create'])->name('faq.create');
Route::post('faq', [faqController::class, 'store'])->name('faq.store');
Route::get('faq/{faq}/edit', [FAQController::class, 'edit'])->name('faq.edit');
Route::put('faq/{faq}', [FAQController::class, 'update'])->name('faq.update');
Route::delete('faq/{faq}', [FAQController::class, 'delete'])->name('faq.delete');
