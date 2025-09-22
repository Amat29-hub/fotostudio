<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\AboutusController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\SejarahController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\MediaSocialController;
use App\Http\Controllers\Backend\TenagaKerjaController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\frontend\FrontendAboutController;
use App\Http\Controllers\frontend\FrontendContactController;
use App\Http\Controllers\frontend\FrontendServiceController;
use App\Http\Controllers\frontend\FrontendTestimonialController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontendHomeController::class, 'index'])->name('home');
Route::get('/about', [FrontendAboutController::class, 'index'])->name('about');
Route::get('/service', [FrontendServiceController::class, 'index'])->name('service');
Route::get('/testimonial', [FrontendTestimonialController::class, 'index'])->name('testimonial');
// Contact Us (Frontend)
Route::get('/contact', [FrontendContactController::class, 'index'])->name('contact');
Route::post('/contact/store', [FrontendContactController::class, 'store'])->name('contact.store');



/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
// Login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

// Logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes (hanya untuk user login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('adminpanel')->group(function () {
    // Hero
    Route::resource('hero', HeroController::class);
    Route::patch('hero/{id}/toggle-status', [HeroController::class, 'toggleStatus'])->name('hero.toggleStatus');

    // About Us
    Route::resource('about', AboutusController::class);
    Route::patch('about/{id}/toggle-status', [AboutusController::class, 'toggleStatus'])->name('about.toggleStatus');

    // Services
    Route::resource('services', ServicesController::class);
    Route::patch('services/{id}/toggle-status', [ServicesController::class, 'toggleStatus'])->name('services.toggleStatus');

    // Gallery
    Route::resource('gallery', GalleryController::class);
    Route::patch('gallery/{id}/toggle-status', [GalleryController::class, 'toggleStatus'])->name('gallery.toggleStatus');

    // Testimonials
    Route::resource('testimonials', TestimonialController::class);
    Route::patch('testimonials/{id}/toggle-status', [TestimonialController::class, 'toggleStatus'])->name('testimonials.toggleStatus');

    // Sejarah
    Route::resource('sejarah', SejarahController::class);
    Route::patch('sejarah/{id}/toggle-status', [SejarahController::class, 'toggleStatus'])->name('sejarah.toggleStatus');

    // Tenaga Kerja
    Route::resource('tenagakerja', TenagaKerjaController::class);
    Route::patch('tenagakerja/{id}/toggle-status', [TenagaKerjaController::class, 'toggleStatus'])->name('tenagakerja.toggleStatus');

    // Partners
    Route::resource('partners', PartnerController::class);
    Route::patch('partners/{id}/toggle-status', [PartnerController::class, 'toggleStatus'])->name('partners.toggleStatus');

    // Contact Us
    Route::resource('contactus', ContactUsController::class);
    Route::patch('contactus/{id}/toggle-status', [ContactUsController::class, 'toggleStatus'])->name('contactus.toggleStatus');

    // Media Social
    Route::resource('mediasocial', MediaSocialController::class);
    Route::patch('mediasocial/{id}/toggle-status', [MediaSocialController::class, 'toggleStatus'])->name('mediasocial.toggleStatus');
});
