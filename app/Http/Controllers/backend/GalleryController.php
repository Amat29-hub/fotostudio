<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('page.backend.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('page.backend.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('gallery', 'public');
        }

        Gallery::create($data);

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully!');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('page.backend.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('gallery', 'public');
        }

        $gallery->update($data);

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully!');
    }

    public function toggleStatus($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->is_active = !$gallery->is_active;
        $gallery->save();

        return response()->json([
            'success' => true,
            'status'  => $gallery->is_active
        ]);
    }
}
