@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Discussions') }}</div>

                    <div class="card-body">
                        @if ($discussions->count() > 0)
                            <ul>
                                @foreach ($discussions as $discussion)
                                    <li>
                                        <h3>{{ $discussion->title }}</h3>
                                        <p>{{ $discussion->description }}</p>
                                        <p>Created by: {{ $discussion->user->name }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No discussions found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection