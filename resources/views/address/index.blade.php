@extends('layouts.master')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Contact
                        <a href="{{ url('/address/create') }}" class="btn btn-primary float-end">Add Address</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Country</th>
                                <th>Postal_code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collect as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->street}}</td>
                                    <td>{{ $item->city}}</td>
                                    <td>{{ $item->province}}</td>
                                    <td>{{ $item->country}}</td>
                                    <td>{{ $item->postal_code}}</td>
                                    <td>
                                        <a href="{{ url('address/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                        <a href="{{ url('address/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
