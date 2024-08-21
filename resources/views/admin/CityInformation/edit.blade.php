@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Add City Information</h1>
        
        <form action="{{ route('cityinformation.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="area">Area</label>
                <input type="text" name="area" class="form-control" value="{{ old('area') }}" required>
            </div>
            <div class="form-group">
                <label for="population">Population</label>
                <input type="number" name="population" class="form-control" value="{{ old('population') }}" required>
            </div>
            <div class="form-group">
                <label for="male">Male</label>
                <input type="number" name="male" class="form-control" value="{{ old('male') }}" required>
            </div>
            <div class="form-group">
                <label for="female">Female</label>
                <input type="number" name="female" class="form-control" value="{{ old('female') }}" required>
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" name="language" class="form-control" value="{{ old('language') }}" required>
            </div>
            <div class="form-group">
                <label for="villages">Villages</label>
                <input type="text" name="villages" class="form-control" value="{{ old('villages') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
