<!-- resources/views/admin/orders/show.blade.php -->

@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
    <div class="container">
        <h1>Order #{{ $order->id }}</h1>
        <p><strong>Active:</strong> {{ $order->is_active ? 'Yes' : 'No' }}</p>
        <p><strong>Description:</strong> {{ $order->description }}</p>
        <p><strong>PDF:</strong> <a href="{{ asset($order->pdf_path) }}" target="_blank">View PDF</a></p>
        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
