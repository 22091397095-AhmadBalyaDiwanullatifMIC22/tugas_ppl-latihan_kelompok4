@extends('master')

@section('title', 'Update User')

@section('content')
    <h2>Update User</h2>
    <form action="{{ route('update') }}" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"><br><br>
        <button type="submit" class="btn">Update</button>
    </form>
@endsection
