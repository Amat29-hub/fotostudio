<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel sejarah
        $sejarah = Sejarah::all();

        // Kirim ke view
        return view('page.backend.sejarah.index', compact('sejarah'));
    }

    public function create()
    {
        return view('page.backend.sejarah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $path = $request->file('photo')->store('sejarah', 'public');

        Sejarah::create([
            'photo' => $path,
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->is_active ?? 0,
        ]);

        return redirect()->route('sejarah.index')->with('success', 'Data sejarah berhasil ditambahkan!');
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
        ]);
    
        // Update foto jika ada
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('sejarah', 'public');
            $sejarah->photo = $path;
        }
    
        $sejarah->title = $request->title;
        $sejarah->description = $request->description;
    
        // Hanya update is_active jika field is_active dikirimkan di form
        if ($request->has('is_active')) {
            // Jika user menonaktifkan, pastikan minimal 1 item aktif
            if (!$request->is_active && $sejarah->is_active) {
                $activeCount = Sejarah::where('is_active', 1)->count();
                if ($activeCount <= 1) {
                    return redirect()->back()->with('error', 'Minimal harus ada 1 item aktif!');
                }
            }
    
            $sejarah->is_active = $request->is_active;
        }
    
        $sejarah->save();
    
        return redirect()->route('sejarah.index')->with('success', 'Data sejarah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        $sejarah->delete();

        return redirect()->route('sejarah.index')->with('success', 'Data sejarah berhasil dihapus!');
    }

public function toggleStatus($id)
{
    $sejarah = Sejarah::findOrFail($id);

    if ($sejarah->is_active) {
        // Mau dinonaktifkan
        $activeCount = Sejarah::where('is_active', 1)->count();

        if ($activeCount <= 1) {
            return response()->json([
                'success' => false,
                'message' => 'Minimal harus ada 1 item aktif!'
            ], 400);
        }

        $sejarah->is_active = 0;
        $sejarah->save();

        return response()->json([
            'success' => true,
            'status' => false
        ]);
    } else {
        // Mau diaktifkan
        Sejarah::where('id', '!=', $sejarah->id)->update(['is_active' => 0]);
        $sejarah->is_active = 1;
        $sejarah->save();

        return response()->json([
            'success' => true,
            'status' => true
        ]);
    }
}

}
