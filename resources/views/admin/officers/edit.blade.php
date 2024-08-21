<!-- resources/views/admin/officers/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Officer</h1>
        <form action="{{ route('officers.update', $officer) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $officer->name }}" required>
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" name="designation" id="designation" class="form-control" value="{{ $officer->designation }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <img src="{{ asset('storage/' . $officer->image_path) }}" width="100" alt="{{ $officer->name }}">
            </div>
            <div class="form-group">
                <label for="is_active">Is Active</label>
                <select name="is_active" id="is_active" class="form-control" required>
                    <option value="1" {{ $officer->is_active ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$officer->is_active ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Officer</button>
        </form>
    </div>
@endsection
