@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Notifications</h2>
                <p>
                    <a href="{{ route('MurqeeNotification.create') }}" class="btn btn-primary">Create New Notification</a>
                </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Description</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($MurqeeNotifications as $MurqeeNotifications)
                            <tr>
                                <td>{{ $MurqeeNotifications->id }}</td>
                                <td>{{ $MurqeeNotifications->description }}</td>
                                <td>{{ $MurqeeNotifications->isactive ? 'Yes' : 'No' }}</td>
                                <td>{{ $MurqeeNotifications->created_at }}</td>
                                <td>{{ $MurqeeNotifications->updated_at }}</td>
                                <td>
                                    <a href="{{ route('MurqeeNotification.edit', $MurqeeNotifications->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('MurqeeNotification.destroy', $MurqeeNotifications->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this notification?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
