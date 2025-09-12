<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $abouts = Aboutus::all();
        return view('page.backend.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('page.backend.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('description');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('aboutus', 'public');
        }

        Aboutus::create($data);

        return redirect()->route('about.index')->with('success', 'About Us created successfully!');
    }

    public function edit($id)
    {
        $about = Aboutus::findOrFail($id);
        return view('page.backend.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = Aboutus::findOrFail($id);

        $request->validate([
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('description');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('aboutus', 'public');
        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'About Us updated successfully!');
    }

    public function destroy($id)
    {
        $about = Aboutus::findOrFail($id);
        $about->delete();

        return redirect()->route('about.index')->with('success', 'About Us deleted successfully!');
    }

    public function toggleStatus($id)
    {
        $about = Aboutus::findOrFail($id);
        $about->is_active = !$about->is_active; // toggle nilai 0/1
        $about->save();

        return response()->json([
            'success' => true,
            'status' => $about->is_active
        ]);
    }
}
