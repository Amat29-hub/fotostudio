<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MediaSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaSocialController extends Controller
{
    public function index()
    {
        $mediasocial = MediaSocial::all();
        return view('page.backend.mediasocial.index', compact('mediasocial'));
    }

    public function create()
    {
        return view('page.backend.mediasocial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link'            => 'required|url',
            'nameaccount'     => 'required|string|max:255',
            'namemediasocial' => 'required|string|max:255',
        ]);

        $data = $request->only('nameaccount', 'namemediasocial', 'link');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('mediasocial', 'public');
        }

        $data['is_active'] = true;

        MediaSocial::create($data);

        return redirect()->route('mediasocial.index')->with('success', 'Data Media Social berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mediasocial = MediaSocial::findOrFail($id);
        return view('page.backend.mediasocial.edit', compact('mediasocial'));
    }

    public function update(Request $request, $id)
    {
        $mediasocial = MediaSocial::findOrFail($id);

        $request->validate([
            'nameaccount'     => 'required|string|max:255',
            'namemediasocial' => 'required|string|max:255',
            'link'            => 'required|url',
            'photo'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('nameaccount', 'namemediasocial', 'link');

        if ($request->hasFile('photo')) {
            if ($mediasocial->photo && Storage::disk('public')->exists($mediasocial->photo)) {
                Storage::disk('public')->delete($mediasocial->photo);
            }
            $data['photo'] = $request->file('photo')->store('mediasocial', 'public');
        }

        $mediasocial->update($data);

        return redirect()->route('mediasocial.index')->with('success', 'Data Media Social berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mediasocial = MediaSocial::findOrFail($id);

        if ($mediasocial->photo && Storage::disk('public')->exists($mediasocial->photo)) {
            Storage::disk('public')->delete($mediasocial->photo);
        }

        $mediasocial->delete();

        return redirect()->route('mediasocial.index')->with('success', 'Data Media Social berhasil dihapus!');
    }

    public function toggleStatus($id)
    {
        $mediasocial = MediaSocial::findOrFail($id);
        $mediasocial->is_active = !$mediasocial->is_active;
        $mediasocial->save();

        return response()->json([
            'success' => true,
            'status'  => $mediasocial->is_active
        ]);
    }
}
