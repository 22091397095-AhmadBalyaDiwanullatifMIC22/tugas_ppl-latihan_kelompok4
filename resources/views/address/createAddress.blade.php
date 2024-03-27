@extends('layouts.master')
@section('container')
    <h1>Create Address</h1>
        <form action="{{ route('address.store') }}" method="POST">
            @csrf
            <label for="street">Street:</label><br>
            <input type="text" id="street" name="street"><br>
            <label for="city">City:</label><br>
            <input type="text" id="city" name="city"><br>
            <label for="province">Province:</label><br>
            <input type="text" id="province" name="province"><br>
            <label for="country">Country:</label><br>
            <input type="text" id="country" name="country"><br>
            <label for="postal_code">Postal Code:</label><br>
            <input type="text" id="postal_code" name="postal_code"><br><br>
            <button type="submit">Submit</button>
        </form>
@endsection
