<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('page.backend.services.index', compact('services'));
    }

    public function create()
    {
        return view('page.backend.services.create');
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
            $data['photo'] = $request->file('photo')->store('services', 'public');
        }

        Services::create($data);

        return redirect()->route('services.index')->with('success', 'Service created successfully!');
    }

    public function edit($id)
    {
        $service = Services::findOrFail($id);
        return view('page.backend.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Services::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }

    public function toggleStatus($id)
    {
        $service = Services::findOrFail($id);
        $service->is_active = !$service->is_active; // toggle nilai 0/1
        $service->save();

        return response()->json([
            'success' => true,
            'status'  => $service->is_active
        ]);
    }
}
