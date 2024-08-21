<?php

namespace App\Http\Controllers;

use App\Models\Murcynotification;
use Illuminate\Http\Request;
use App\Models\Officer;
use App\Models\CityInformation;
use App\Models\Notification;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve all active notifications
        $murcynotifications = Murcynotification::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
         
        // Return the view with notifications
        
        $activeOfficers = Officer::where('is_active', true)->get();
        
        $cityInformation = CityInformation::all();
        
        $topNotifications = Notification::where('is_active', true)
                                        ->latest()
                                        ->take(5)
                                        ->get();
        
        return view('home', compact('murcynotifications', 'activeOfficers','cityInformation','topNotifications'));
    }
    
    
}
