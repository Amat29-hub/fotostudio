<?php

namespace App\Http\Controllers\backend;

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

    public function create()
    {
        return view('page.backend.contactus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'  => 'required|string|max:255',
            'last_name'   => 'required|string|max:255',
            'subject'     => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = $request->only('first_name', 'last_name', 'subject', 'description');
        $data['is_active'] = true;

        ContactUs::create($data);

        return redirect()->route('contactus.index')->with('success', 'Data Contact berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $contactus = ContactUs::findOrFail($id);
        return view('page.backend.contactus.edit', compact('contactus'));
    }

    public function update(Request $request, $id)
    {
        $contactus = ContactUs::findOrFail($id);

        $request->validate([
            'first_name'  => 'required|string|max:255',
            'last_name'   => 'required|string|max:255',
            'subject'     => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = $request->only('first_name', 'last_name', 'subject', 'description');
        $contactus->update($data);

        return redirect()->route('contactus.index')->with('success', 'Data Contact berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $contactus = ContactUs::findOrFail($id);
        $contactus->delete();

        return redirect()->route('contactus.index')->with('success', 'Data Contact berhasil dihapus!');
    }

    public function toggleStatus($id)
    {
        $contactus = ContactUs::findOrFail($id);
        $contactus->is_active = !$contactus->is_active;
        $contactus->save();

        return response()->json([
            'success' => true,
            'status'  => $contactus->is_active
        ]);
    }
}
