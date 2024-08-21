<!-- resources/views/gallery.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Image Gallery</h1>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Image Upload Form -->
        <div class="mb-4">
            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Select Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>

        <!-- Display Images -->
        <div class="row">
            @foreach($images as $image)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $image->imagepath) }}" class="card-img-top" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Image {{ $loop->iteration }}</h5>
                            <p class="card-text">{{ $image->description }}</p>
                            <p class="card-text">
                                <small class="text-muted">Uploaded on {{ $image->createdate->format('d M Y') }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
