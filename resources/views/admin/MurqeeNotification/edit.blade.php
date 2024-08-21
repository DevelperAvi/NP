@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Edit Notification</h2>
            <form action="{{ route('admin.MurqeeNotification.update', $notification->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $notification->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="isactive">Active</label>
                    <select class="form-control" id="isactive" name="isactive">
                        <option value="0" {{ $notification->isactive == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ $notification->isactive == 1 ? 'selected' : '' }}>Yes</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
