@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to My Blog APP</h1>
        <p>This is the laravel application lesson</p>
        @if (!Auth::guest())
        <p>
            <a href="/dashboard" class="btn btn-primary btn-lg" role="button">Dashboard</a>
        </p>
        @else
        <p>
            <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
            <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>            
        </p>
        @endif
    </div>
@endsection