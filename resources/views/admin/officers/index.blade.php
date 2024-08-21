<!-- resources/views/admin/officers/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Officers</h1>
        <a href="{{ route('officers.create') }}" class="btn btn-primary">Add Officer</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Image</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($officers as $officer)
                    <tr>
                        <td>{{ $officer->name }}</td>
                        <td>{{ $officer->designation }}</td>
                        <td><img src="{{ asset('storage/' . $officer->image_path) }}" width="100" alt="{{ $officer->name }}"></td>
                        <td>{{ $officer->is_active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('officers.show', $officer) }}" class="btn btn-info">View</a>
                            <a href="{{ route('officers.edit', $officer) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('officers.destroy', $officer) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
