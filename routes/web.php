<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\AboutusController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\SejarahController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\MediaSocialController;
use App\Http\Controllers\Backend\TenagaKerjaController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\DashboardBackendController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::view('/', 'page.frontend.home.index');
Route::view('/about', 'page.frontend.about.index');
Route::view('/testimonial', 'page.frontend.testimonial.index');
Route::view('/service', 'page.frontend.service.index');
Route::view('/contact', 'page.frontend.contact.index');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
// Login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

// Register
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');

// Forgot & Reset Password
Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

// Logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes (hanya untuk user login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('adminpanel')->group(function () {
    // Dashboard (panggil controller agar ada $members)
    Route::get('/dashboard', [DashboardBackendController::class, 'index'])->name('dashboard');

    // Members
    Route::resource('members', MemberController::class);

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
