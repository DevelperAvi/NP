<?php

namespace App\Http\Controllers;

use App\Models\CityInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CityInformationController extends Controller
{
    public function index()
    {
        $cityInformation = CityInformation::all();
        return view('admin.CityInformation.index', compact('cityInformation'));
    }

    public function create()
    {
        return view('admin.CityInformation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'area' => 'required|string|max:255',
            'population' => 'required|integer',
            'male' => 'required|integer',
            'female' => 'required|integer',
            'language' => 'required|string|max:255',
            'villages' => 'required|string|max:255',
        ]);

        CityInformation::create([
            'area' => $request->area,
            'population' => $request->population,
            'male' => $request->male,
            'female' => $request->female,
            'language' => $request->language,
            'villages' => $request->villages,
            'created_by' => Auth::user()->name,
        ]);

        return redirect()->route('cityinformation.index')->with('success', 'City information created successfully.');
    }

    public function show(CityInformation $cityInformation)
    {
        return view('admin.CityInformation.show', compact('cityInformation'));
    }

    public function edit(CityInformation $cityInformation)
    {
        return view('admin.CityInformation.edit', compact('cityInformation'));
    }

    public function update(Request $request, CityInformation $cityInformation)
    {
        $request->validate([
            'area' => 'required|string|max:255',
            'population' => 'required|integer',
            'male' => 'required|integer',
            'female' => 'required|integer',
            'language' => 'required|string|max:255',
            'villages' => 'required|string|max:255',
        ]);

        $cityInformation->update([
            'area' => $request->area,
            'population' => $request->population,
            'male' => $request->male,
            'female' => $request->female,
            'language' => $request->language,
            'villages' => $request->villages,
            'updated_by' => Auth::user()->name,
        ]);

        return redirect()->route('cityinformation.index')->with('success', 'City information updated successfully.');
    }

    public function destroy(CityInformation $cityInformation)
    {
        $cityInformation->delete();
        return redirect()->route('cityinformation.index')->with('success', 'City information deleted successfully.');
    }
}

