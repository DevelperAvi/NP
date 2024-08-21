<?php

// app/Http/Controllers/ImageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImagePath;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function view()
    {
        $images = ImagePath::all();
        return view('gallery.view', compact('images'));
    }

    public function index()
    {
        $images = ImagePath::all();
        return view('admin.gallery.index', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        ImagePath::create([
            'imagepath' => $imagePath,
            'description' => $request->description,
            'createdate' => now(),
            'updater' => Auth::user()->name,
            'crud_by' => Auth::user()->name,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Image uploaded successfully.');
    }
}
