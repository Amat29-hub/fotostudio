<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendTestimonialController extends Controller
{
    public function index(){
        return view('page.frontend.testimonial.index');
    }
}
