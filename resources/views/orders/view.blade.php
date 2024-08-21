<!-- resources/views/public/orders/order.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout setup -->

@section('content')
<div class="panel panel-success">
    
    <div class="row">
        <div class="col-md-12">
            <h1>All Orders</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            @if ($orders->count() > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Active</th>
                            <th>Description</th>
                            <th>PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->is_active ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $order->description }}</td>
                                <td><a href="{{ asset($order->pdf_path) }}" target="_blank">View PDF</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No orders found.</p>
            @endif
        </div>
    </div>
</div>
@endsection
