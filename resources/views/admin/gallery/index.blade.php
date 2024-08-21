<!-- resources/views/admin/gallery/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gallery</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <hr>

    <h2>Uploaded Images</h2>
    @foreach ($images as $image)
        <div>
            <img src="{{ asset('storage/' . $image->imagepath) }}" alt="Image" style="width: 150px;">
            <p>{{ $image->description }}</p>
        </div>
    @endforeach
</div>
@endsection
