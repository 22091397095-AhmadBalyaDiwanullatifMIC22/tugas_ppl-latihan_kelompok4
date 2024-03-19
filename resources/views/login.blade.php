@extends('master')

@section('title', 'Login')

@section('content')
    <h2>User Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" class="btn">Login</button>
    </form>
@endsection
