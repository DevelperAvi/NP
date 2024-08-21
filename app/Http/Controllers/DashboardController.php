<?php

namespace App\Http\Controllers;

use App\Models\CityInformation;
use App\Models\Murcynotification;
use App\Models\Officer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch data counts from various tables
        $cityInformationCount = CityInformation::count();
        $murcynotificationsCount = Murcynotification::count();
        $officersCount = Officer::count();
        
        return view('dashboard', compact('cityInformationCount', 'murcynotificationsCount', 'officersCount'));
    }
}
