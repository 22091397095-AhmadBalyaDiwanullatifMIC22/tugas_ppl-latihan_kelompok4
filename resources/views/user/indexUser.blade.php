@extends('layouts.master')
@section('container')
    <h1>User List</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} - {{ $user->username }} <form action="{{ route('user.delete', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form></li>
        @endforeach
    </ul>
@endsection
