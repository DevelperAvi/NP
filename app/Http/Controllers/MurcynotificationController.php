<?php

namespace App\Http\Controllers;

use App\Models\Murcynotification;
use Illuminate\Http\Request;

class MurcynotificationController extends Controller
{
    public function index()
    {
        $murcynotification = Murcynotification::all();
        return view('admin.murcy.index', compact('murcynotification'));
    }
    
  

    public function create()
    {
        return view('admin.murcy.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'is_active' => 'required|boolean',
        ]);

        Murcynotification::create($request->all());

        return redirect()->route('murcy.index')->with('success', 'Notification created successfully.');
    }

    public function show(Murcynotification $murcynotification)
    {
        return view('admin.murcy.show', compact('murcynotification'));
    }

    public function edit(Murcynotification $murcynotification)
    {
        return view('admin.murcy.edit', compact('murcynotification'));
    }

    public function update(Request $request, Murcynotification $murcynotification)
    {
        $request->validate([
            'description' => 'required',
            'is_active' => 'required|boolean',
        ]);

        $murcynotification->update($request->all());

        return redirect()->route('murcy.index')->with('success', 'Notification updated successfully.');
    }

    public function destroy(Murcynotification $murcynotification)
    {
        $murcynotification->delete();

        return redirect()->route('murcy.index')->with('success', 'Notification deleted successfully.');
    }
}
