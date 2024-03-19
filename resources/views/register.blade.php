@extends('master')

@section('title', 'Register')

@section('content')
    <h2>User Registration</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <button type="submit" class="btn">Register</button>
    </form>
@endsection
