@extends('layouts.master')
@section('container')
    <h1>Create User</h1>
    <form action="{{ route('user.register') }}" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <button type="submit">Submit</button>
    </form>
@endsection
