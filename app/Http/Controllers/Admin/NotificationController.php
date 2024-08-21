<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Storage; // Add this line

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->paginate(10);
        return view('admin.notifications.index', compact('notifications'));
    }

    public function create()
    {
        return view('admin.notifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'notification_description' => 'required|string',
            'notification_link' => 'nullable|url',
            'notifications_pdf' => 'nullable|mimes:pdf|max:2048', // Adjust max file size as needed
        ]);

        $notification = new Notification();
        $notification->notification_description = $request->input('notification_description');
        $notification->notification_link = $request->input('notification_link');

        if ($request->hasFile('notifications_pdf')) {
            $pdfPath = $request->file('notifications_pdf')->store('notifications/pdf', 'public');
            $notification->notifications_pdf_path = $pdfPath;
        }

        $notification->save();

        return redirect()->route('notifications.index')
                         ->with('success', 'Notification created successfully');
    }

    public function edit(Notification $notification)
    {
        return view('admin.notifications.edit', compact('notification'));
    }

    public function update(Request $request, Notification $notification)
    {
        $request->validate([
            'notification_description' => 'required|string',
            'notification_link' => 'nullable|url',
            'notifications_pdf' => 'nullable|mimes:pdf|max:2048', // Adjust max file size as needed
        ]);

        $notification->notification_description = $request->input('notification_description');
        $notification->notification_link = $request->input('notification_link');

        if ($request->hasFile('notifications_pdf')) {
            // Delete old pdf if exists
            if ($notification->notifications_pdf_path) {
                Storage::disk('public')->delete($notification->notifications_pdf_path);
            }

            $pdfPath = $request->file('notifications_pdf')->store('notifications/pdf', 'public');
            $notification->notifications_pdf_path = $pdfPath;
        }

        $notification->save();

        return redirect()->route('notifications.index')
                         ->with('success', 'Notification updated successfully');
    }

    public function destroy(Notification $notification)
    {
        // Delete pdf file if exists
        if ($notification->notifications_pdf_path) {
            Storage::disk('public')->delete($notification->notifications_pdf_path);
        }

        $notification->delete();

        return redirect()->route('notifications.index')
                         ->with('success', 'Notification deleted successfully');
    }
}
