<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'home'])->name('home');
Route::get('/about', [StaticPageController::class, 'about'])->name('about');
Route::get('/dashboard', [StaticPageController::class, 'dashboard'])->name('dashboard');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/faq', [faqController::class, 'index'])->name('faq.index');
Route::get('faq/create', [faqController::class, 'create'])->name('faq.create');
Route::post('faq', [faqController::class, 'store'])->name('faq.store');
Route::get('faq/{faq}/edit', [FAQController::class, 'edit'])->name('faq.edit');
Route::put('faq/{faq}', [FAQController::class, 'update'])->name('faq.update');
Route::delete('faq/{faq}', [FAQController::class, 'delete'])->name('faq.delete');
