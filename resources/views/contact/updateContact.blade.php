@extends('layouts.master')
@section('container')
    <h1>Update Contact</h1>
    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" value="{{ $contact->first_name }}"><br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" value="{{ $contact->last_name }}"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $contact->email }}"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="{{ $contact->phone }}"><br><br>
        <button type="submit">Update</button>
    </form>
@endsection
