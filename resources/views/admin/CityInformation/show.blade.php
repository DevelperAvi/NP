@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">City Information Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>Area</th>
                <td>{{ $cityInformation->area }}</td>
            </tr>
            <tr>
                <th>Population</th>
                <td>{{ $cityInformation->population }}</td>
            </tr>
            <tr>
                <th>Male</th>
                <td>{{ $cityInformation->male }}</td>
            </tr>
            <tr>
                <th>Female</th>
                <td>{{ $cityInformation->female }}</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>{{ $cityInformation->language }}</td>
            </tr>
            <tr>
                <th>Villages</th>
                <td>{{ $cityInformation->villages }}</td>
            </tr>
        </table>
        <a href="{{ route('cityinformation.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
