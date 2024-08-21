<!-- resources/views/admin/orders/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Create New Order</h1>

        <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" value="{{ old('description') }}" required>
            </div>

            <div class="form-group">
                <label for="orderpdfpath">PDF</label>
                <input type="file" name="orderpdfpath" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Create Order</button>
        </form>
    </div>
@endsection
