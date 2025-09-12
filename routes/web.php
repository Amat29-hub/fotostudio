<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HeroController;
use App\Http\Controllers\backend\MemberController;
use App\Http\Controllers\backend\AboutusController;
use App\Http\Controllers\backend\PartnerController;
use App\Http\Controllers\backend\SejarahController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\TenagaKerjaController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\Backend\DashboardBackendController;

//Route User
Route::get('/', function () {
    return view('page.frontend.home.index');
});

Route::get('/about', function () {
    return view('page.frontend.about.index');
});

Route::get('/testimonial', function () {
    return view('page.frontend.testimonial.index');
});

Route::get('/service', function () {
    return view('page.frontend.service.index');
});

Route::get('/contact', function () {
    return view('page.frontend.contact.index');
});




// Route Admin
Route::get('/adminpanel/dashboard', [DashboardBackendController::class, 'index']);

// Members CRUD
Route::resource('members', MemberController::class);

// Hero CRUD
Route::prefix('adminpanel')->group(function () {Route::resource('hero', HeroController::class);});
Route::patch('/adminpanel/hero/{id}/toggle-status', [HeroController::class, 'toggleStatus'])->name('hero.toggleStatus');


// About Us CRUD
Route::prefix('adminpanel')->group(function () {Route::resource('about', AboutusController::class);});
Route::patch('/adminpanel/about/{id}/toggle-status', [AboutusController::class, 'toggleStatus'])->name('about.toggleStatus');


// Services CRUD
Route::prefix('adminpanel')->group(function () {Route::resource('services', ServicesController::class);});
Route::patch('/adminpanel/services/{id}/toggle-status', [ServicesController::class, 'toggleStatus'])->name('services.toggleStatus');

// Gallery CRUD
Route::prefix('adminpanel')->group(function () {Route::resource('gallery', \App\Http\Controllers\backend\GalleryController::class);});
Route::patch('/adminpanel/gallery/{id}/toggle-status', [\App\Http\Controllers\backend\GalleryController::class, 'toggleStatus'])->name('gallery.toggleStatus');

// Testimonial CRUD
Route::prefix('adminpanel')->group(function () {Route::resource('testimonials', TestimonialController::class);
Route::patch('testimonials/{id}/toggle-status', [TestimonialController::class, 'toggleStatus'])->name('testimonials.toggleStatus');});

// Sejarah CRUD
Route::prefix('adminpanel')->group(function () {Route::resource('sejarah', SejarahController::class);
Route::patch('/sejarah/{id}/toggle-status', [SejarahController::class, 'toggleStatus'])->name('sejarah.toggleStatus');});

// Tenaga Kerja CRUD
Route::prefix('adminpanel')->group(function () {Route::resource('tenagakerja', TenagaKerjaController::class);
Route::patch('tenagakerja/{id}/toggle-status', [TenagaKerjaController::class, 'toggleStatus'])->name('tenagakerja.toggleStatus');});

// Partners CRUD
Route::prefix('adminpanel')->group(function () {Route::resource('partners', PartnerController::class);
Route::patch('partners/{id}/toggle-status', [PartnerController::class, 'toggleStatus'])->name('partners.toggleStatus');});
