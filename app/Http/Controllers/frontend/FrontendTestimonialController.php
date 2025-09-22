<?php

namespace App\Http\Controllers\frontend;

use App\Models\Hero;
use App\Models\Aboutus;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Sejarah;
use App\Models\Services;
use App\Models\MediaSocial;
use App\Models\TenagaKerja;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;

class FrontendTestimonialController extends Controller
{
    public function index()
    {
        $heroes        = Hero::where('is_active', 1)->get();
        $about         = Aboutus::where('is_active', 1)->first();
        $sejarah       = Sejarah::where('is_active', 1)->first();
        $services      = Services::where('is_active', 1)->get();
        $galleries     = Gallery::where('is_active', 1)->get();
        $testimonials  = Testimonial::where('is_active', 1)->get();
        $tenagakerjas  = TenagaKerja::where('is_active', 1)->get();
        $partners      = Partner::where('is_active', 1)->get();
        $mediasocials  = MediaSocial::where('is_active', 1)->get();

        return view('page.frontend.testimonial.index', compact(
            'heroes',
            'about',
            'sejarah',
            'services',
            'galleries',
            'testimonials',
            'tenagakerjas',
            'partners',
            'mediasocials'
        ));
    }
}
