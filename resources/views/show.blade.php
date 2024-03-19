@extends('master')

@section('title', 'User Profile')

@section('content')
    <h2>User Profile</h2>
    <p><strong>Username:</strong> {{ Auth::user()->username }}</p>
    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
    <a href="{{ route('update') }}" class="btn">Edit Profile</a>
    <a href="{{ route('logout') }}" class="btn">Logout</a>
@endsection
