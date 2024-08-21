<!-- resources/views/gallery.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Image Gallery</h1>

       

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
