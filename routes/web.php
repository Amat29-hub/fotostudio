<?php

use Illuminate\Support\Facades\Route;

//Route User
Route::get('/', function () {
    return view('page.frontend.home.index');
});
