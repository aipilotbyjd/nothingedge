<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\ContactUsPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProjectsPageController;
use App\Http\Controllers\ServicesPageController;
use App\Http\Controllers\TeamPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/contact-us', [ContactUsPageController::class, 'index'])->name('contact-us');
Route::post('/contact-us-form', [ContactUsPageController::class, 'ContactUsForm'])->name('contactUs.form');
Route::get('/about-us', [AboutUsPageController::class, 'index'])->name('about-us');
Route::get('/services', [ServicesPageController::class, 'index'])->name('services');
Route::get('/web-development-services-detail', [ServicesPageController::class, 'WebDevelopmentServicesDetails'])->name('web-development-services-detail');
Route::get('/app-development-services-detail', [ServicesPageController::class, 'AppDevelopmentServicesDetails'])->name('app-development-services-detail');
Route::get('/ui-ux-development-services-detail', [ServicesPageController::class, 'UiUxDevelopmentServicesDetails'])->name('ui-ux-development-services-detail');
Route::get('/team', [TeamPageController::class, 'index'])->name('team');
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogPageController::class, 'index'])->name('blog');
    // Route::get('details', [BlogPageController::class, 'BlogDetails'])->name('blog-details');
});
Route::get('blog-details', [BlogPageController::class, 'BlogDetails'])->name('blog-details');
Route::get('what-are-design-patterns', [BlogPageController::class, 'WhatAreDesignPatterns'])->name('what-are-design-patterns');
Route::get('/projects', [ProjectsPageController::class, 'index'])->name('projects');
