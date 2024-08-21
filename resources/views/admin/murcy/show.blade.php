@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Notification</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('murcy.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $murcynotification->description }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Is Active:</strong>
                    {{ $murcynotification->is_active ? 'Yes' : 'No' }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Created At:</strong>
                    {{ $murcynotification->created_at }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Updated At:</strong>
                    {{ $murcynotification->updated_at }}
                </div>
            </div>
        </div>
    </div>
@endsection
