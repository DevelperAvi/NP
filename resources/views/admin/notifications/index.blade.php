@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Notifications</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('notifications.create') }}" class="btn btn-primary">Create Notification</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Description</th>
                <th>Link</th>
                <th>PDF</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notifications as $notification)
                <tr>
                    <td>{{ $notification->notification_description }}</td>
                    <td><a href="{{ $notification->notification_link }}" target="_blank">{{ $notification->notification_link }}</a></td>
                    <td>
                        @if ($notification->notifications_pdf_path)
                            <a href="{{ Storage::url($notification->notifications_pdf_path) }}" target="_blank">View PDF</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('notifications.edit', $notification->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $notifications->links() }}
</div>
@endsection
