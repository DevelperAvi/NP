@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manage RTI Mannuals</h1>
        <a href="{{ route('rtimannuals.create') }}" class="btn btn-primary">Add New Mannual</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>File Path</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rtimannuals as $rtimannual)
                    <tr>
                        <td>{{ $rtimannual->id }}</td>
                        <td>{{ $rtimannual->title }}</td>
                        <td><a href="{{ asset($rtimannual->file_path) }}" target="_blank">{{ $rtimannual->file_path }}</a></td>
                        <td>
                            <a href="{{ route('rtimannuals.edit', $rtimannual->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('rtimannuals.destroy', $rtimannual->id) }}" method="POST" style="display:inline;">
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
