@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Add City Information</h1>

        <form action="{{ route('cityinformation.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="area">Area</label>
                        <input type="text" name="area" id="area" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="population">Population</label>
                        <input type="number" name="population" id="population" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="male">Male</label>
                        <input type="number" name="male" id="male" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="female">Female</label>
                        <input type="number" name="female" id="female" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" name="language" id="language" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="villages">Villages</label>
                        <input type="text" name="villages" id="villages" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
