<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // Halaman daftar Contact Us
    public function index()
    {
        $contacts = ContactUs::all();
        return view('page.backend.contactus.index', compact('contacts'));
    }

    // Halaman detail Contact Us
    public function show($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('page.backend.contactus.show', compact('contact'));
    }

    // Toggle status aktif/nonaktif via AJAX
    public function toggleStatus($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->is_active = !$contact->is_active;
        $contact->save();

        return response()->json([
            'success' => true,
            'status'  => $contact->is_active
        ]);
    }
}
