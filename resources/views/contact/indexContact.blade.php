@extends('layouts.master')
@section('container')
    <h1>Contact List</h1>
    <ul>
        @foreach($contacts as $contact)
            <li>{{ $contact->first_name }} {{ $contact->last_name }} - {{ $contact->email }} - {{ $contact->phone }}
                <form action="{{ route('contact.delete', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
