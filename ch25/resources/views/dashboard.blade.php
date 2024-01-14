@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <p>Welcome to the dashboard, {{ Auth::user()->name }}!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection