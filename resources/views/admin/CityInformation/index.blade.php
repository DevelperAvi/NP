@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">City Information</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Area</th>
                        <th>Population</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Language</th>
                        <th>Villages</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cityInformation as $info)
                        <tr>
                            <td>{{ $info->area }}</td>
                            <td>{{ $info->population }}</td>
                            <td>{{ $info->male }}</td>
                            <td>{{ $info->female }}</td>
                            <td>{{ $info->language }}</td>
                            <td>{{ $info->villages }}</td>
                            <td>
                                 <a href="{{ route('cityinformation.edit', $info->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
