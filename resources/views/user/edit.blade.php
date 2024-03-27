@extends('layouts.master')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit Users
                        <a href="{{ url('/user') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('user/'.$edit->id.'/edit') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Username: </label>
                            <input type="text" id="Username"  name="Username" placeholder="Username" value="{{ $edit->Username }}"/>
                            @error('Username') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Password: </label>
                            <input type="text" id="Password" name="Password" placeholder="Password" value="{{ $edit->Password }}"/>
                            @error('Password') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Name: </label>
                            <input type="text" id="Name" Name="Name" placeholder="Name" value="{{ $edit->Name }}"/>
                            @error('Name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                            <div class="mb-3">
                            <button type="Submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
