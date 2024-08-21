<!-- resources/views/admin/officers/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Officer Details</h1>
        <p><strong>Name:</strong> {{ $officer->name }}</p>
        <p><strong>Designation:</strong> {{ $officer->designation }}</p>
        <p><strong>Image:</strong></p>
        <img src="{{ asset('storage/' . $officer->image_path) }}" width="200" alt="{{ $officer->name }}">
        <p><strong>Active:</strong> {{ $officer->is_active ? 'Yes' : 'No' }}</p>
        <a href="{{ route('officers.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
