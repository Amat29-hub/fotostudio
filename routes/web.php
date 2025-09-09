<?php

use Illuminate\Support\Facades\Route;

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
