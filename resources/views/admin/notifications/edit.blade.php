@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Notification</h1>
    <form action="{{ route('notifications.edit', $notification->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="notification_description">Description</label>
            <input type="text" name="notification_description" class="form-control" value="{{ old('notification_description', $notification->notification_description) }}" required>
        </div>
        <div class="form-group">
            <label for="notification_link">Link</label>
            <input type="url" name="notification_link" class="form-control" value="{{ old('notification_link', $notification->notification_link) }}">
        </div>
        <div class="form-group">
            <label for="notifications_pdf">PDF</label>
            <input type="file" name="notifications_pdf" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
