@extends('layouts.master')
@section('container')
    <h1>Address List</h1>
        <ul>
            @foreach($addresses as $address)
                <li>{{ $address->street }}, {{ $address->city }}, {{ $address->province }}, {{ $address->country }} - {{ $address->postal_code }}
                    <form action="{{ route('address.delete', $address->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
@endsection
