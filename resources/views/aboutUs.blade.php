@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">{{ __('messages.about_nagar_parisad') }}</h1>

        <div class="row">
            <div class="col-md-12">
                <p class="lead text-center">
                    {{ __('messages.welcome_nagar_parisad') }}
                </p>

                <p>
                    {{ __('messages.nagar_parisad_description') }}
                </p>

                <h2 class="mt-4">{{ __('messages.our_mission') }}</h2>
                <p>
                    {{ __('messages.mission_description') }}
                </p>

                <h2 class="mt-4">{{ __('messages.key_responsibilities') }}</h2>
                <ul>
                    <li><strong>{{ __('messages.urban_planning_development') }}</strong></li>
                    <li><strong>{{ __('messages.public_health_sanitation') }}</strong></li>
                    <li><strong>{{ __('messages.education_public_welfare') }}</strong></li>
                    <li><strong>{{ __('messages.revenue_collection') }}</strong></li>
                </ul>

                <h2 class="mt-4">{{ __('messages.governing_structure') }}</h2>
                <p>
                    {{ __('messages.structure_description') }}
                </p>

                <h2 class="mt-4">{{ __('messages.our_vision') }}</h2>
                <p>
                    {{ __('messages.vision_description') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .container {
            max-width: 900px;
        }
        h1 {
            font-size: 2.5rem;
        }
        h2 {
            font-size: 2rem;
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
        }
        p {
            font-size: 1rem;
            line-height: 1.6;
        }
        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 0.75rem;
            font-size: 1rem;
        }
    </style>
@endpush
