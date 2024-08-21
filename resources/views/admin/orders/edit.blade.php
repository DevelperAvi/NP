<!-- resources/views/admin/orders/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Order</h1>

        <form action="{{ route('orders.update', $order->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" value="{{ old('description', $order->description) }}" required>
            </div>

            <div class="form-group">
                <label for="orderpdfpath">PDF</label>
                <input type="file" name="orderpdfpath" class="form-control-file">
                @if($order->orderpdfpath)
                    <a href="{{ Storage::url($order->orderpdfpath) }}" target="_blank">Current PDF</a>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Order</button>
        </form>
    </div>
@endsection
