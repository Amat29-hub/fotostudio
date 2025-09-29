<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs; // tambahkan model ini

class FrontendContactController extends Controller
{
    public function index(){
        return view('page.frontend.contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'  => 'required|string|max:100',
            'last_name'   => 'required|string|max:100',
            'subject'     => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        ContactUs::create([
            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'subject'     => $request->subject,
            'description' => $request->description,
            'is_active'   => 0,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
