@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit RTI Mannual</h1>
        <form action="{{ route('rtimannuals.update', $rtimannual->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $rtimannual->title }}" required>
            </div>
            <div class="form-group">
                <label for="file">File</label>
                <input type="file" name="file" class="form-control">
                <small>Leave blank to keep the current file.</small>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
