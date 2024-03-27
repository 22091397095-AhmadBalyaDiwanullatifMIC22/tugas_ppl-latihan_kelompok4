@extends('layouts.master')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Users
                        <a href="{{ url('/user/create') }}" class="btn btn-primary float-end">Add Users</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collect as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->username}}</td>
                                    <td>{{ $item->password}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>
                                        <a href="{{ url('user/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                        <a href="{{ url('user/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('confirm delete this data ?')">Delete</a>
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
