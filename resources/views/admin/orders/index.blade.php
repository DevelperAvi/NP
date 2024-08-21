<!-- resources/views/admin/orders/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Orders</h1>
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Add New</a>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>PDF</th>
                        <th>Is Active</th>
                        <th>Create Date</th>
                        <th>Update Date</th>
                        <th>Create User</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->description }}</td>
                            <td>
                                @if($order->orderpdfpath)
                                    <a href="{{ Storage::url($order->orderpdfpath) }}" target="_blank">View PDF</a>
                                @else
                                    No PDF
                                @endif
                            </td>
                            <td>{{ $order->is_active ? 'Yes' : 'No' }}</td>
                            <td>{{ $order->create_date }}</td>
                            <td>{{ $order->update_date }}</td>
                            <td>{{ $order->create_user }}</td>
                            <td>
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
