@extends('master')

@section('title', 'Welcome')

@section('content')
    <h1>Welcome to My Application</h1>
    <p>This is a simple application for managing users, contacts, and addresses.</p>
    <a href="{{ route('register') }}">Register</a>
    <a href="{{ route('login') }}">Login</a>
@endsection
