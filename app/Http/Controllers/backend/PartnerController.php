<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        return view('page.backend.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.backend.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('partners', 'public');
        }

        Partner::create([
            'name'        => $request->name,
            'description' => $request->description,
            'photo'       => $photoPath,
            'is_active'   => true,
        ]);

        return redirect()->route('partners.index')->with('success', 'Partner berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('page.backend.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $photoPath = $partner->photo;
        if ($request->hasFile('photo')) {
            if ($photoPath && Storage::disk('public')->exists($photoPath)) {
                Storage::disk('public')->delete($photoPath);
            }
            $photoPath = $request->file('photo')->store('partners', 'public');
        }

        $partner->update([
            'name'        => $request->name,
            'description' => $request->description,
            'photo'       => $photoPath,
        ]);

        return redirect()->route('partners.index')->with('success', 'Partner berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        if ($partner->photo && Storage::disk('public')->exists($partner->photo)) {
            Storage::disk('public')->delete($partner->photo);
        }

        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Partner berhasil dihapus.');
    }

    /**
     * Toggle status aktif / non-aktif.
     */
public function toggleStatus(Request $request, $id)
{
    $partner = Partner::findOrFail($id);
    $partner->is_active = $request->is_active; // ambil langsung dari AJAX
    $partner->save();

    return response()->json([
        'success' => true,
        'status' => $partner->is_active ? 'Aktif' : 'Nonaktif',
    ]);
}

}
