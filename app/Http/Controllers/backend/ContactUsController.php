<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::all();
        return view('page.backend.contactus.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = ContactUs::findOrFail($id);

        // Update status jadi sudah dilihat kalau masih 0
        if ($contact->is_active == 0) {
            $contact->is_active = 1;
            $contact->save();
        }

        return view('page.backend.contactus.show', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();

        return redirect()->route('contactus.index')
                         ->with('success', 'Data contact berhasil dihapus');
    }
}
