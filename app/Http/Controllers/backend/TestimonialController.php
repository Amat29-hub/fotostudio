<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('page.backend.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('page.backend.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'rating'        => 'required|integer|min:0|max:100',
            'photo_profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'description', 'rating');

        if ($request->hasFile('photo_profile')) {
            $data['photo_profile'] = $request->file('photo_profile')->store('testimonials', 'public');
        }

        $data['is_active'] = true;

        Testimonial::create($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully!');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('page.backend.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'required|string',
            'rating'        => 'required|integer|min:0|max:100',
            'photo_profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('name', 'description', 'rating');

        if ($request->hasFile('photo_profile')) {
            if ($testimonial->photo_profile && Storage::disk('public')->exists($testimonial->photo_profile)) {
                Storage::disk('public')->delete($testimonial->photo_profile);
            }
            $data['photo_profile'] = $request->file('photo_profile')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        if ($testimonial->photo_profile && Storage::disk('public')->exists($testimonial->photo_profile)) {
            Storage::disk('public')->delete($testimonial->photo_profile);
        }

        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }

    public function toggleStatus(Request $request, $id)
{
    $testimonial = Testimonial::findOrFail($id);

    $testimonial->is_active = $request->input('is_active', 0);
    $testimonial->save();

    return response()->json([
        'success' => true,
        'status' => $testimonial->is_active
    ]);
}

}
