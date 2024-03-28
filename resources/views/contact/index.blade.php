@extends('layouts.master')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Contact
                        <a href="{{ url('/contact/create') }}" class="btn btn-primary float-end">Add Contact</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First_name</th>
                                <th>Last_name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collect as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->first_name}}</td>
                                    <td>{{ $item->last_name}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>{{ $item->phone}}</td>
                                    <td>
                                        <a href="{{ url('contact/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                        <a href="{{ url('contact/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
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
