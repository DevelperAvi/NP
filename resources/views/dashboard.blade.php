@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Dashboard</h1>

        <div class="row">
            <!-- City Information Count -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">City Information</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total number of city information records:</p>
                        <h3>{{ $cityInformationCount }}</h3>
                    </div>
                </div>
            </div>

            <!-- Murcynotifications Count -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Murcynotifications</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total number of murcynotifications:</p>
                        <h3>{{ $murcynotificationsCount }}</h3>
                    </div>
                </div>
            </div>

            <!-- Officers Count -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Officers</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Total number of active officers:</p>
                        <h3>{{ $officersCount }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
