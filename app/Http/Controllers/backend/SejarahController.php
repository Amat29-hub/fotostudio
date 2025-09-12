<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('page.backend.sejarah.index', compact('sejarah'));
    }

    public function create()
    {
        return view('page.backend.sejarah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('sejarah', 'public');
        }

        $data['is_active'] = true;

        Sejarah::create($data);

        return redirect()->route('sejarah.index')->with('success', 'Data Sejarah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('page.backend.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, $id)
    {
        $sejarah = Sejarah::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description');

        if ($request->hasFile('photo')) {
            if ($sejarah->photo && Storage::disk('public')->exists($sejarah->photo)) {
                Storage::disk('public')->delete($sejarah->photo);
            }
            $data['photo'] = $request->file('photo')->store('sejarah', 'public');
        }

        $sejarah->update($data);

        return redirect()->route('sejarah.index')->with('success', 'Data Sejarah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $sejarah = Sejarah::findOrFail($id);

        if ($sejarah->photo && Storage::disk('public')->exists($sejarah->photo)) {
            Storage::disk('public')->delete($sejarah->photo);
        }

        $sejarah->delete();

        return redirect()->route('sejarah.index')->with('success', 'Data Sejarah berhasil dihapus!');
    }

    public function toggleStatus($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        $sejarah->is_active = !$sejarah->is_active;
        $sejarah->save();

        return response()->json([
            'success' => true,
            'status'  => $sejarah->is_active
        ]);
    }
}
