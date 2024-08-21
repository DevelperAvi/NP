<?php

// app/Http/Controllers/Admin/OrderController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function view()
    {
        $orders = Order::orderBy('create_date', 'desc')->get();
        return view('orders.view', compact('orders'));
    }
    
    
    public function index()
    {
        $orders = Order::orderBy('create_date', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'orderpdfpath' => 'nullable|mimes:pdf|max:2048',
        ]);

        $order = new Order();
        $order->description = $request->input('description');
        $order->create_user = Auth::user()->name;

        if ($request->hasFile('orderpdfpath')) {
            $pdfPath = $request->file('orderpdfpath')->store('orders/pdf', 'public');
            $order->orderpdfpath = $pdfPath;
        }

        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order created successfully');
    }

    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'orderpdfpath' => 'nullable|mimes:pdf|max:2048',
        ]);

        $order->description = $request->input('description');
        $order->update_date = now();
        $order->create_user = Auth::user()->name;

        if ($request->hasFile('orderpdfpath')) {
            // Delete old pdf if exists
            if ($order->orderpdfpath) {
                Storage::disk('public')->delete($order->orderpdfpath);
            }

            $pdfPath = $request->file('orderpdfpath')->store('orders/pdf', 'public');
            $order->orderpdfpath = $pdfPath;
        }

        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }

    public function destroy(Order $order)
    {
        // Delete pdf file if exists
        if ($order->orderpdfpath) {
            Storage::disk('public')->delete($order->orderpdfpath);
        }

        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
    }
}

