@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col-6">
            <form method="POST" action="{{ url('login') }}">
                <h1 class='text-center my-5'>Forum</h1>
                @csrf
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="username" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" class="form-control" name="email" >
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>

@endsection