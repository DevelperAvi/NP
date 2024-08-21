<!-- resources/views/rtimannuals/view.blade.php -->

@extends('layouts.app')

@section('content')
 <div class="container panel panel-success p-2">
    <h3 class="text-dark">RTI Mannuals</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Title</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $serialNumber = 1; @endphp
                @foreach($rtimannuals as $item)
                    <tr>
                        <td>{{ $serialNumber }}</td>
                        <td class="text-dark">{{ $item->title }}</td>
                         <td><a class="btn btn-dark" href="{{ $item->file_path }}">View</a></td>
                    </tr>
                    @php $serialNumber++; @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
