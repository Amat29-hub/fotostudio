<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\TenagaKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenagaKerjaController extends Controller
{
    public function index()
    {
        $tenagakerja = TenagaKerja::all();
        return view('page.backend.tenagakerja.index', compact('tenagakerja'));
    }

    public function create()
    {
        return view('page.backend.tenagakerja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'position'    => 'nullable|string|max:255',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'description', 'position');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('tenagakerja', 'public');
        }

        $data['is_active'] = true;

        TenagaKerja::create($data);

        return redirect()->route('tenagakerja.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $tenagakerja = TenagaKerja::findOrFail($id);
        return view('page.backend.tenagakerja.edit', compact('tenagakerja'));
    }


    public function update(Request $request, $id)
    {
        $tenaga = TenagaKerja::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'position'    => 'nullable|string|max:255',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'description', 'position');

        if ($request->hasFile('photo')) {
            if ($tenaga->photo && Storage::disk('public')->exists($tenaga->photo)) {
                Storage::disk('public')->delete($tenaga->photo);
            }
            $data['photo'] = $request->file('photo')->store('tenagakerja', 'public');
        }

        $tenaga->update($data);

        return redirect()->route('tenagakerja.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $tenaga = TenagaKerja::findOrFail($id);

        if ($tenaga->photo && Storage::disk('public')->exists($tenaga->photo)) {
            Storage::disk('public')->delete($tenaga->photo);
        }

        $tenaga->delete();

        return redirect()->route('tenagakerja.index')->with('success', 'Data berhasil dihapus!');
    }

    public function toggleStatus(Request $request, $id)
    {
        $tenaga = TenagaKerja::findOrFail($id);

        $tenaga->is_active = $request->is_active ? 1 : 0;
        $tenaga->save();

        return response()->json([
            'success' => true,
            'status' => $tenaga->is_active
        ]);
    }
}
