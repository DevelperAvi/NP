<?php

namespace App\Http\Controllers;

use App\Models\RtiMannual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RtiMannualController extends Controller
{
    // Show public RTI Mannuals
    public function view()
    {
        $rtimannuals = RtiMannual::all();
        return view('rtimannuals.view', compact('rtimannuals'));
    }

    // Show admin RTI Mannuals
    public function index()
    {
        $rtimannuals = RtiMannual::all();
        return view('admin.rtimannuals.index', compact('rtimannuals'));
    }

    // Show form to create new RTI Mannual
    public function create()
    {
        return view('admin.rtimannuals.create');
    }

    // Store new RTI Mannual
 public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf|max:2048',
        ]);

        // Store the file in the 'public/storage/rtimannual' folder
        $storedPath = $request->file('file')->store('public/storage/rtimannual');

         

        // Save the file path in your database
        RtiMannual::create([
            'title' => $request->title,
            'file_path' => $storedPath,
        ]);

        return redirect()->route('rtimannuals.index')->with('success', 'RTI Mannual created successfully.');
    }


 

    // Show form to edit an existing RTI Mannual
    public function edit($id)
    {
        $rtimannual = RtiMannual::findOrFail($id);
        return view('admin.rtimannuals.edit', compact('rtimannual'));
    }

    // Update an existing RTI Mannual
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $rtimannual = RtiMannual::findOrFail($id);

        if ($request->hasFile('file')) {
            // Delete the old file
            if ($rtimannual->file_path) {
                Storage::disk('public')->delete($rtimannual->file_path);
            }

            // Store the new file in the rtimannual folder and get the path
            $filePath = $request->file('file')->store('rtimannual', 'public');
            
            // Log the file path to debug
            \Log::info('Updated file path: ' . $filePath);
        } else {
            $filePath = $rtimannual->file_path;
        }

        $rtimannual->update([
            'title' => $request->title,
            'file_path' => $filePath,
        ]);

        return redirect()->route('rtimannuals.index')->with('success', 'RTI Mannual updated successfully.');
    }

    // Delete an existing RTI Mannual
    public function destroy($id)
    {
        $rtimannual = RtiMannual::findOrFail($id);
        if ($rtimannual->file_path) {
            Storage::disk('public')->delete($rtimannual->file_path);
        }
        $rtimannual->delete();

        return redirect()->route('rtimannuals.index')->with('success', 'RTI Mannual deleted successfully.');
    }
}
