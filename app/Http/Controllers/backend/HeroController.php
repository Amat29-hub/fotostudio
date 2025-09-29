<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();
        return view('page.backend.hero.index', compact('heroes'));
    }

    public function create()
    {
        return view('page.backend.hero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('hero', 'public');
        }

        Hero::create($data);

        return redirect()->route('hero.index')->with('success', 'Hero created successfully!');
    }

    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('page.backend.hero.edit', compact('hero'));
    }

    public function update(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('hero', 'public');
        }

        $hero->update($data);

        return redirect()->route('hero.index')->with('success', 'Hero updated successfully!');
    }

    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();
        return redirect()->route('hero.index')->with('success', 'Hero deleted successfully!');
    }


    public function toggleStatus($id)
    {
        $hero = Hero::findOrFail($id);
    
        if (!$hero->is_active) {
            // Aktifkan hero, matikan hero lain
            Hero::where('is_active', 1)->update(['is_active' => 0]);
            $hero->is_active = 1;
            $hero->save();
    
            return response()->json([
                'success' => true,
                'status' => true
            ]);
        } else {
            // Cek jumlah hero aktif lain
            $activeCount = Hero::where('is_active', 1)->count();
    
            if ($activeCount <= 1) {
                // minimal 1 harus aktif
                return response()->json([
                    'success' => true,
                    'status' => false,
                    'message' => 'Minimal harus ada 1 hero yang aktif!'
                ]);
            }
    
            // Nonaktifkan hero
            $hero->is_active = 0;
            $hero->save();
    
            return response()->json([
                'success' => true,
                'status' => false
            ]);
        }
    }

}
