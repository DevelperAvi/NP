<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfficerController extends Controller
{
    public function index()
    {
        $officers = Officer::all();
        return view('admin.officers.index', compact('officers'));
    }

    public function create()
    {
        return view('admin.officers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $imagePath = $request->file('image')->store('officers', 'public');

        Officer::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image_path' => $imagePath,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('officers.index')->with('success', 'Officer added successfully.');
    }

    public function show(Officer $officer)
    {
        return view('admin.officers.show', compact('officer'));
    }

    public function edit(Officer $officer)
    {
        return view('admin.officers.edit', compact('officer'));
    }

    public function update(Request $request, Officer $officer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($officer->image_path);
            $imagePath = $request->file('image')->store('officers', 'public');
        } else {
            $imagePath = $officer->image_path;
        }

        $officer->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'image_path' => $imagePath,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('officers.index')->with('success', 'Officer updated successfully.');
    }

    public function destroy(Officer $officer)
    {
        Storage::disk('public')->delete($officer->image_path);
        $officer->delete();

        return redirect()->route('officers.index')->with('success', 'Officer deleted successfully.');
    }
    
   
}
