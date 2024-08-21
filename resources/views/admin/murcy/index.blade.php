@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Murcy Notifications</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('murcy.create') }}"> Create New Notification</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Description</th>
                <th>Is Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($murcynotification as $murcynotification)
               @php $serialNumber = 1; @endphp
                 
                    <tr>
                     <td>{{ $serialNumber }}</td>
                    <td>{{ $murcynotification->description }}</td>
                    <td>{{ $murcynotification->is_active ? 'Yes' : 'No' }}</td>
                    <td>{{ $murcynotification->created_at }}</td>
                    <td>{{ $murcynotification->updated_at }}</td>
                    <td>
                        <form action="{{ route('murcy.destroy', $murcynotification->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('murcy.show', $murcynotification->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('murcy.edit', $murcynotification->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                 </tr>
                    @php $serialNumber++; @endphp
            @endforeach
            
        </table>
    </div>
@endsection
