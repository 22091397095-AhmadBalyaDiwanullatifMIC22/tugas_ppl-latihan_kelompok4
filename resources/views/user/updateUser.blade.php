@extends('layouts.master')
@section('container')
    <h1>Update User</h1>
        <form action="{{ route('user.update') }}" method="POST">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ $user->name }}"><br><br>
            <button type="submit">Update</button>
        </form>
@endsection
